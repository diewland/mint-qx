<?php
  $title = "It is a good question.";
  $desc = "";
  $img = "https://qx.app/_next/image?url=https%3A%2F%2Ffanbase-1.s3.amazonaws.com%2Fquixotic-user-profile%2Flaunchpad_logo0.png&w=3840&q=75";
  $qx = "https://qx.app/collection/good-question";
  $etherscan = "https://optimistic.etherscan.io/address/0xd2A35f01b04e389393776a0B05cF3e5bd8552D9e";
  $supply = 108;
  $price = "Free";
?>
<!doctype html>
<html lang="en">
  <?php include("../tmpl/head.php"); ?>
  <body class="<?=$body_cls?>">
    <?php include("../tmpl/body.php"); ?>
    <script>

      let addr = '0xd2A35f01b04e389393776a0B05cF3e5bd8552D9e';
      let mint_qty = 1;
      //
      update_config(addr, mint_qty);

    </script>
  </body>
</html>
