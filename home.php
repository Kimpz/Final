<?php
session_start();
?>
<?php
include("connection.php")
?>
<!DOCTYPE html>
<html>
<head>

  	<title>HOME</title>

     <!-- local CSS -->	
    <link rel="stylesheet" type="text/css" href="style3.css">

	  <meta charset="utf-8" />
  	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  	
  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CDN Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
    <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
    <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/scss/_dropdown.scss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

     <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      /*position: relative;*/
      /*top: 3px;*/
      text-align: center;
      width: 21px;
      }
      </style>


</head>

<!-- Background Image -->
<body style="background-image: url('images/MainBGedited03.png'); ">	                      
                      
<!-- NAV BAR -->			        
<div class="w3-container ">
    <div class="w3-container d-flex justify-content-end">
        <div id="nav02" class="w3-container nav nav-tabs d-flex flex-column">
            <a href="home.php">                  
                <div class="dropdown">                      
                    <li id="button01" class="btn btn-info btn-lg" href="home.php" >            
                        <font size="4.5"><b>HOME</b></font>                      
                    </li>                                                    
                </div>
            </a>                     

            <a class="w3-container" data-toggle="modal" data-target="#modalLoginForm" aria-haspopup="true" aria-expanded="false">                  
               <div class="dropdown">                      
                    <li id="button01" class="btn btn-info btn-lg" href="" >
                        <font size="4.5"><b>LOG-IN</b></font>                      
                    </li>                                                    
               </div>
            </a>                     

            <a href="register.php">                  
               <div class="dropdown">                      
                    <li id="button01" class="btn btn-info btn-lg" href="register.php" >                     
                        <font size="4.5"><b>REGISTER NOW</b></font>                      
                    </li>                                                    
               </div>
            </a>           
        </div>      
    </div>            
</div>             
                
         
                      <!-- MODAL LOG-IN FORM -->
<form class="LogMod" method="post" action="home.php">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog text-dark rounded" role="document">
          <div class="modal-content">
              <div class="modal-header text-dark text-center">
                <h1 clas="modal-title w-80 font-weight-bold">Log in</h1>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-2">
                <div class="md-form mb-5">
                  <i class="fas fa-user"></i>
                  <input type="text" name="username" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="defaultForm-username">Your username</label>
                </div>
                <div class="md-form mb-2">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input type="password" name="password" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <input type="submit" name="login" value="Log in" class="btn">
              </div>
          </div>
        </div>
    </div>
</form>


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


<!-- LOG-IN VERIFICATION -->

<?php

if (isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

  $result = mysqli_query($connect,$query) or die (mysql_error());
  $num_row = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  if($num_row > 0){
    $_SESSION['id']=$row['id'];
    echo "<script>window.open('bulletin.php','_self')</script>";

  }
  else{
    echo "<script>Swal.fire({
        title: 'Error!',
          text: 'Username or Password is incorrect!',
          type: 'error',
        confirmButtonText: 'Okay'
        })</script>";
    }
  }

?>