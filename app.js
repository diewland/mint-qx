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
  // check OP network
  if (!check_op_chain()) return;
  // craft command
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

// contract methods
let mint = (addr, qty) => cmd(addr, _ => contract.functions.mintToken(qty), 'Minted ✨');
let flip_pb = (addr) => cmd(addr, _ => contract.functions.flipSaleState(), 'Public Sale Flipped');

// network
let check_chain = (chain_name, chain_id) => {
  if (window.ethereum.networkVersion == chain_id) return true;
  Swal.fire('Invalid Network', `Please switch to ${chain_name}`, 'warning');
  return false;
}
let check_op_chain = _ => check_chain("Optimism", "10");

// bin screen from config
function update_config(addr, mint_qty) {
  // press mint button to mint
  $('#btn-mint').click(_ => {
    mint(addr, mint_qty);
  });
  // [owner] click img 20 times to flip public sale
  let cnt_secret = 0;
  $('.card-img-top').click(_ => {
    cnt_secret += 1;
    if (cnt_secret == 20) flip_pb(addr);
  });
}

// prepare screen
$(_ => {
  // 1) get abi
  lock();
  load_abi(unlock);
  // 2) prepare tooltip
  $('[data-toggle="tooltip"]').tooltip();
})
