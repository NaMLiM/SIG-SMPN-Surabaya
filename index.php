<?php
if (!$_GET["page"]) {
     header("location:index.php?page=home");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>Sistem Informasi Geografis</title>
     <!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/leaflet.css">
     <link rel="stylesheet" href="css/qgis2web.css">
     <link rel="stylesheet" href="css/fontawesome-all.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>

<body>
     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
          <div class="container">
               <a class="navbar-brand" href="index.php">
                    <img src="images/logo1.png" alt="" width="60">
                    Data SMP Negeri Surabaya
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                              <a href="login.php" class="nav-link contact">Login</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>

     <?php
     if ($_GET['page'] == 'home') {
          include_once('home.php');
     } elseif ($_GET['page'] == 'map') {
          include_once('map.php');
     }
     ?>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>