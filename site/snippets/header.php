<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css(array(
    'assets/css/foundation.min.css',
    'assets/css/normalize.css',
    'assets/css/app.css',
    'assets/css/animate.css',
  )) ?>

</head>
<body>

  <header class="header cf" role="banner">

        <?php /* snippet('menu') */ ?></div>
  </header>
