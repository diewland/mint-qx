<?php
  $title = "Just Meaw - Public Free Mint Never Die";
  $desc = "I know we love public free mint. But it is currently unavailable. So Go to website link and fill in the item 6.0 mint token per banner suggest. Mint Token = 0 NumberOfToken(s) = 1 Write New Public Free mint NFT Never die. Enjoy!!!";
?>
<!doctype html>
<html lang="en">
  <?php include("../tmpl/head.php"); ?>
  <?php include("../tmpl/body.php"); ?>
    <script>

      let addr = '0x0C65eE287e90Dc65C51eEaB3c885a8ce452C6A4C';
      let mint_qty = 1;

      prepare_screen();
      $('#btn-mint').click(_ => mint(addr, mint_qty));

    </script>
  </body>
</html>
