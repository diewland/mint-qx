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
  // get address
  try { ethers.utils.getAddress(addr) } catch(e) { alert(e); return; }
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

// prepare screen
function prepare_screen() {
  lock();
  load_abi(unlock);
}

// mint
function mint(addr, qty) {
  lock();
  load_contract(addr, _ => {
    contract.functions.mintToken(qty)
      .then(result => {
        console.log('>>>', result);
        alert('Minted!');
      })
      .catch(err => {
        console.log('>>>', err);
        alert(err.data.message)
      })
      .finally(_ => {
        unlock();
      });
  });
}
