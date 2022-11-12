<?php
  $title = "The Keys";
  $desc = "Key of 7 Angels X 7 Devils collection. This is key for get WL to 7 Angels X 7 Devils. Every ranks haven't same WL. 609 collectible keys. THEKEYS collection = this collection is rare = rare Normal = 1 WL 7Angelsx7Devils collection Rare = 2 WL 7Angelsx7Devils collection Super Rare = 2WL WL 7Angelsx7Devils collection but you can choose 1Angel and 1Devil Ultimate Rare = 2WL WL 7Angelsx7Devils collection but you can choose 1Angel and 1Devil + 1WL The land collection";
  $img = "https://qx.app/_next/image?url=https%3A%2F%2Ffanbase-1.s3.amazonaws.com%2Fquixotic-collection-profile%2Fmissapp_gold_key_god_and_devil_concept_art_gold_and_red_color_t_72e967ca-7d11-49ff-a3fa-bec094b0eb5d_EKWjrMv.png&w=3840&q=75";
  $qx = "https://qx.app/collection/thekeys";
  $etherscan = "https://optimistic.etherscan.io/address/0x3Dc05C15b100cc3562916c68F9BD8De922db69D1";
?>
<!doctype html>
<html lang="en">
  <?php include("../tmpl/head.php"); ?>
  <body class="<?=$body_cls?>">
    <?php include("../tmpl/body.php"); ?>
    <script>

      let addr = '0x3Dc05C15b100cc3562916c68F9BD8De922db69D1';
      let mint_qty = 1;
      $('#btn-mint').click(_ => mint(addr, mint_qty));

    </script>
  </body>
</html>
