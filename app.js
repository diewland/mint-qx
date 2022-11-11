// screen var
let abi = null;
let contract = null;

// load abi
function load_abi(callback) {
  fetch("../qx-abi.json")
    .then(response => response.json())
    .then(json => {
      abi = json;
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
