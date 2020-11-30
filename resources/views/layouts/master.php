<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php startblock('meta_tags') ?><?php endblock() ?>

  <title><?php startblock('title') ?><?php endblock() ?> || <?php echo title(); ?></title>

  <!-- Favicon-->
  <?php echo icon('img/favicon.png'); ?>
  
  <!-- Font Awesome CSS -->
  <?php echo style('plugins/fontawesome/css/all.min.css'); ?>

  <!-- Bootstrap core CSS -->
  <?php echo style('plugins/bootstrap/css/bootstrap.min.css'); ?>

  <!-- Custom styles for this template -->  
  <?php echo style('css/style.css'); ?>

  <!-- Extra CSS -->
  <?php startblock('extra-css') ?><?php endblock() ?>

</head>

<body>

  <div class="container my-3">
    <div class="row">
      <div class="col-sm-4">
        <a href="<?php echo APP_URL; ?>" style="text-decoration: none">
          <h1 class="font-weight-bold text-success">
            <?php echo APP_NAME; ?>
          </h1>
        </a>
      </div>
      <div class="col-sm-8 text-right">
      	test
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <?php append('layouts.partials.nav'); ?>

  <!-- Page Content -->
  <?php startblock('content') ?><?php endblock() ?>

  <!-- Scroll To Top -->
  <div id="scrollToTopButton">
    <button><i class="fas fa-angle-up my-3 mx-3"></i></button>
  </div>

  <!-- Footer -->
  <?php append('layouts.partials.footer'); ?>
  
  <!-- Jquery -->
  <?php echo script('plugins/jquery/jquery.min.js'); ?>
    
    <!-- Bootstrap JavaScript -->
  <?php echo script('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>

  <!-- Extra Scripts-->
  <?php startblock('extra-script') ?>
  <?php endblock() ?>

  <!-- Custom Scripts-->
  <?php echo script('js/script.js'); ?>

  <?php startblock('custom-script') ?><?php endblock() ?>

</body>

</html>
