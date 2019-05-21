<!DOCTYPE html>
<?php
session_start();
?>
<?php
include("connection.php")
?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />    

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <title>Location</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


<div class="header"></div>


<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="bulletin.php">UECS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="gallery.php">School Gallery</a>
          <a class="dropdown-item" href="index.php">History</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="map.php">Location</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>

  
                      
        

<div class="map">
  <h1>School Location</h1>
  <h5 style="color:black;">Tel no.: 02 951 4567</h5>
  <h5 style="color:black;">Email: info@uecsqc.com</h5>
  <h5 style="color:black;">Address: #5 A Talisay St. Feria Road, Old Balara, Diliman, Quezon City</h5>

  <div style="align:center;" id="googleMap" style="width:100%;height:500px;"></div>

  <script>
      function myMap() {
      var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
     };
     var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
  </script>

     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15438.948438605055!2d121.079688!3d14.670855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58d092d6b4a6f67c!2sUniversal+Evangelical+Christian+School!5e0!3m2!1sen!2sph!4v1558334432601!5m2!1sen!2sph" width="100%" height="450" frameborder="0"  style="border:0" allowfullscreen></iframe>">
</div>



    <!--   Core JS Files   -->
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script>


</body>
</html>
