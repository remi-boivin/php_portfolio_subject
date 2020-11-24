<?php if (!@include_once('../vendor/autoload.php')) echo "You must install package to start app."; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
  <title>Reflux HTML CSS Template</title>

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css" />
<link rel="stylesheet" href="assets/css/templatemo-style.css" />
<link rel="stylesheet" href="assets/css/owl.css" />
<link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
  <div id="page-wraper">
    <!-- Sidebar Menu -->
    <?php include('../src/functions.php');?>

    <?php include('../src/navbar.php');?>

    <?php include('../src/about.php')?>

    <?php include('../src/good.php');?>

    <?php include('../src/work.php'); ?>

    <?php include('../src/contact.php'); ?>
  </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/filter.js"></script>
</body>
</html>
