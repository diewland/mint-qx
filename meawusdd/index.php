<?php $t = time(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Just Meaw - Public Free Mint Never Die</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../app.css?t=<?=$t?>" rel="stylesheet">
  </head>
  <body class="bg-dark">

    <div class='row'>
      <div class='col-md-4'></div>

      <div class='col'>
        <div class="card">
          <img src="https://qx.app/_next/image?url=https%3A%2F%2Ffanbase-1.s3.amazonaws.com%2Fquixotic-collection-profile%2Fimageedit_4_5517035030.png&w=3840&q=75" class="card-img-top">
          <div class="card-body">
            <a href="#/" id="btn-mint" class="btn btn-lg btn-dark w-100 mb-3">Mint</a>
            <h5 class="card-title">Just Meaw - Public Free Mint Never Die</h5>
            <p class="card-text">I know we love public free mint. But it is currently unavailable. So Go to website link and fill in the item 6.0 mint token per banner suggest. Mint Token = 0 NumberOfToken(s) = 1 Write New Public Free mint NFT Never die. Enjoy!!!</p>
          </div>
        </div>
      </div>

      <div class='col-md-4'></div>
    </div>

    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../app.js?t=<?=$t?>"></script>
    <script>

      let addr = '0x0C65eE287e90Dc65C51eEaB3c885a8ce452C6A4C';
      let mint_num = 1;

      let lock = _ => $('#btn-mint').addClass('disabled');
      let unlock = _ => $('#btn-mint').removeClass('disabled');

      $('#btn-mint').click(_ => {
        lock();
        load_abi(_ => {
          load_contract(addr, _ => {
            contract.functions.mintToken(mint_num)
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
        });
      });

    </script>
  </body>
</html>
