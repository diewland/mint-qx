<?php
  $title = "Just Meaw - Public Free Mint Never Die";
  $desc = 'We love public mint. But it is unavailable in Quix. But we will not give up or surrender. Today, 11th Novermber 2022, We shall celebrate our "Public Mint day" Public mint NFT Never dies. https://mint.diew.app/meawusdd/ or in website link';
  $img = "https://qx.app/_next/image?url=https%3A%2F%2Ffanbase-1.s3.amazonaws.com%2Fquixotic-collection-profile%2Fimageedit_4_5517035030.png&w=3840&q=75";
  $qx = "https://qx.app/collection/meawusdd";
  $etherscan = "https://optimistic.etherscan.io/address/0x0C65eE287e90Dc65C51eEaB3c885a8ce452C6A4C";
  $supply = 10000;
  $price = "Free";
?>
<!doctype html>
<html lang="en">
  <?php include("../tmpl/head.php"); ?>
  <body class="<?=$body_cls?>">
    <?php include("../tmpl/body.php"); ?>
    <script>

      let addr = '0x0C65eE287e90Dc65C51eEaB3c885a8ce452C6A4C';
      let mint_qty = 1;
      //
      update_config(addr, mint_qty);

    </script>
  </body>
</html>
