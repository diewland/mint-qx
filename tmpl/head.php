<?php
  $t = time();
  $body_cls = "bg-dark";
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?=htmlentities($title, ENT_QUOTES)?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?=$url?>" />
  <meta property="og:image" content="<?=$img?>" />
  <meta property="og:description" content="<?=htmlentities($desc, ENT_QUOTES)?>" />
  <meta name="theme-color" content="#FFFFFF">
  <meta name="twitter:card" content="<?=$img?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@diewland_nft">
  <meta name="twitter:title" content="<?=htmlentities($title, ENT_QUOTES)?>" />
  <meta name="twitter:description" content="<?=htmlentities($desc, ENT_QUOTES)?>" />
  <meta name="twitter:creator" content="@diewland_nft">
  <meta name="twitter:image:src" content="<?=$img?>" />
  <meta name="twitter:domain" content="diew.app">
  <title><?=$title?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link href="../app.css?t=<?=$t?>" rel="stylesheet">
</head>
