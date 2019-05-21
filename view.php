<?php 
  
  require('connection.php');
  // header("location: index.php"); 
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Information</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="https://fonts.googleapis.com/css?family=Arvo|Fjalla+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>

<div class="header"></div>

<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm" data-whatever="@getbootstrap">Log in</a>
  <a href="register.php">Register</a>
  <a href="logout.php">Log out</a>

</div>


<form class="LogMod" method="post" action="index.php">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" >
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


  <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              
              <table class="table table-hover ">
                <h2>Your Profile</h2>
                
                <?php                  
                  $query="SELECT * FROM users  ORDER BY id desc;";
                  $result = mysqli_query($connect,$query);
                  $row=mysqli_fetch_assoc($result) ?>
         
                <tbody>
                  <tr>                    
                    <th scope="col"><strong>Username</strong></th>
                    <td><?php echo $row["username"]; ?></td>
                  </tr>
                  <tr class="table-active">
                    <th><strong>FirstName</strong></th>                    
                    <td><?php echo $row["fname"]; ?></td>                    
                  </tr>
                  <tr>
                    <th scope="row"><strong>LastName</strong></th>                    
                    <td><?php echo $row["lname"]; ?></td>                    
                  </tr>
                  <tr class="table-primary">                    
                    <th scope="row"><strong>MiddleName</strong></th>
                    <td><?php echo $row["mname"]; ?></td>                    
                  </tr>
                  <tr class="table-secondary">                    
                    <th scope="row"><strong>Birthdate</strong></th>
                    <td><?php echo $row["bday"]; ?></td>                    
                  </tr>
                  <tr class="table-success">                    
                    <th scope="row"><strong>Age</strong></th>
                    <td><?php echo $row["age"]; ?></td>                    
                  </tr>
                  <tr class="table-danger">                    
                    <th scope="row"><strong>Gender</strong></th>
                    <td><?php echo $row["gender"]; ?></td>
                  </tr>
                  <tr class="table-warning">                    
                    <th scope="row"><strong>Grade</strong></th>
                    <td><?php echo $row["grade"]; ?></td>
                  </tr>
                  <tr class="table-info">                    
                    <th scope="row"><strong>Address</strong></th>
                    <td><?php echo $row["address"]; ?></td>
                  </tr>
                  <tr class="table-light">                    
                    <th scope="row"><strong>Guardian</strong></th>
                    <td><?php echo $row["guardian"]; ?></td>
                  </tr>
                  <tr class="table-dark">                    
                    <th scope="row"><strong>Relationship</strong></th>
                    <td><?php echo $row["relationship"]; ?></td>
                  </tr>
                  <tr class="table-active">
                    <th scope="col"><strong>Contact No.</strong></th>
                    <td><?php echo $row["contact"]; ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><strong>EmailAddress</strong></th>                    
                    <td><?php echo $row["email"]; ?></td>                    
                  </tr>
                </tbody>
              </table>             
          </div>
        </div>
      </div>
  </div>    

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
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

<?php 

if (isset($_POST['logout'])){    
  session_destroy();   
  header("location:index.php");
  echo "<script>window.open('index.php','_self')</script>";
}  


?>