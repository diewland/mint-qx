<div class='container'>
  <div class='row'>
    <div class='col-md-4'></div>
    <div class='col-md-4'>
      <div class="card">
        <img src="<?=$img?>" class="card-img-top">
        <div class="card-body">
          <button id="btn-mint" class="btn btn-lg btn-dark w-100 mb-3" type="button">Mint</button>
          <h5 class="card-title mb-0"><?=$title?></h5>
          <div class="mb-2">
            Price: <b><?=$price?></b> Supply: <b><?=$supply?></b>
            <a data-toggle="tooltip" title="Quix" href="<?=$qx?>" target="_blank"><img class="ico-h" src="https://qx.app/opt_favicon.png"></a>
            <a data-toggle="tooltip" title="Etherscan" href="<?=$etherscan?>" target="_blank"><img class="ico-h" src="https://qx.app/_next/image?url=%2Fetherscan.svg&w=3840&q=75"></a>
          </div>
          <p class="card-text"><?=$desc?></p>
        </div>
      </div>
    </div>
    <div class='col-md-4'></div>
  </div>
</div>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../app.js?t=<?=$t?>"></script>
