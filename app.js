// screen var
let abi = null;
let contract = null;

// load qx abi
function load_abi(callback) {
  fetch("../qx-abi.json")
    .then(response => response.json())
    .then(json => {
      abi = json;
      console.log('[abi]', abi);
      callback();
    });
}

// load contract
async function load_contract(addr, callback) {
  // connect to metamask + set contract to console
  const provider = new ethers.providers.Web3Provider(window.ethereum)
  await provider.send("eth_requestAccounts", []);
  const signer = provider.getSigner()
  contract = new ethers.Contract(addr, abi, signer);
  // show sample command
  console.log('[contract]', contract);
  callback();
}

// lock animation
let lock = _ => {
  $('#btn-mint').addClass('disabled')
  $('#btn-mint').html(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>`);
};
let unlock = _ => {
  $('#btn-mint').removeClass('disabled')
  $('#btn-mint').html("Mint");
};

// command
function cmd(addr, cb, ok_title, ok_msg='') {
  lock();
  load_contract(addr, _ => {
    cb.call()
      .then(result => {
        console.log('>>>', result);
        Swal.fire(ok_title, ok_msg, 'success');
      })
      .catch(err => {
        console.log('>>>', err);
        let title = 'Oops!';
        let msg = '';
        try {
          // get message
          if (err.data)
            msg = err.data.message;
          else
            msg = err.message;
          // <format1> "execution reverted: Exceeded max token purchase"
          let mm = msg.split(": ");
          if (mm.length == 2) {
            title = mm[0];
            msg = mm[1];
          }
        } catch(err) {}
        Swal.fire(title, msg, 'error');
      })
      .finally(_ => {
        unlock();
      });
  }).catch(e => {
    console.log('>>>', e);
    Swal.fire('MetaMask not found', e.toString(), 'error');
    unlock();
  });
}

// mint
let mint = (addr, qty) => cmd(addr, _ => contract.functions.mintToken(qty), 'Minted ✨');
let flip_pb = (addr) => cmd(addr, _ => contract.functions.flipSaleState(), 'Public Sale Flipped');

// prepare screen
$(_ => {
  // 1) get abi
  lock();
  load_abi(unlock);
  // 2) prepare tooltip
  $('[data-toggle="tooltip"]').tooltip();
})
