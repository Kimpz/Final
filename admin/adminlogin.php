<!DOCTYPE html>
<?php
include("connection.php")
?>
<?php
session_start();  

?>



<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
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



<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="adminlogin.php">UECS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="Register.php">Register Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="record1.php">View Records</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="gallery.php">School Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="admin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>



<div class="para">
  <div class="caption">
  <span class="border">YOUR BRIGHT FUTURE IS OUR MISSION</span>
</div>
</div>



<div class="about">
<h2> ABOUT THE SCHOOL</h2>
<h6>History</h6>
<p>UECS is an educational institution founded in 1996 by Rev. Eduardo M. Robes became the President and Director of the School with the board members ; Olivia Bulan, Alona Japsay, Celene Buga and Ptr. Mariano Noblejas. They shared same vision of initially putting a school that would provide a sound basic education in the kindergarten level. The school was a member of ASCER, association of Christian educations of the Philippines, Inc., under supervision of Hon. Ricardo T.Gloria, DECS Secretary.</p>
<p>The school started with kinder one with 10 pioneer students and one teacher, with the tuition fee of Php 50.00 per month, after one succeed year, the school offered kinder two and tuition fee increased to Php 75.00 per month. Every year the school offered another grade level.</p>
<p>In the year of 2010, the school board togother with the teachers to change the name of the school, from Diliman Evangelical Christian School to Universal Evangelical Christian School.</p>
<p>It was in school year 2010-2011 when the school occupied building for Grade IV to Grade VI were moved to No.5 Talisay Feria Road, Old Balara, Diliman, Quezon City, but it was separated to Kinder one to Grade III and stayed to its original location. In school year 2013-2014, the school started to offer Grade VII and every year they added another grade level in secondary</p>
<p>In 2016, the Department of Education released the recognition of the school from Nursery/Kindergarten Course, Complete Elementary and Complete Secondary Course served as inspiration to the management, faculty and staff to continuously strive for excellence in all programs and services</p>
<p>At present, the school was preparing for applying to scholarship program to Department of Education for Grade 7 to avail financial assistance and to operate Grade 11 and 12 to help community</p>
<p>The Universal Evangelical Christian School has 10 class rooms, 1 computer room, 1 library, 1 faculty room, 2 labaratory rooms, 1 TLE room, 1 industrial room and 1 canteen that caters 417 students and 25 employees (Faculty and Staff) thru supervision of principal Mrs. Menchie Alano.</p>
</div>



<div class="carousel js-flickity">
  <div class="carousel-cell">
    <img src="images/e01.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e2.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e3.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e4.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e5.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e6.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e7.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e8.jpg" alt="" />
  </div>
  <div class="carousel-cell">
    <img src="images/e9.jpg" alt="" />
  </div>
</div><br><br>

<div class="para2">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color:white;">MISSION & VISION</span>
  </div>
</div>


<div class="goals">
 <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">MISSION</h2>
        <p class="card-text">Universal Evangelical Christian School’s staff, parents, and community are dedicated to the intellectual, personal, social, and physical growth of students. Our highly qualified staff recognizes the value of professional development in order to rigorously challenge students. Our teaching practices are both reflective and responsive to the needs of our students. </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">VISION</h2>
        <p class="card-text">The vision at Universal Evangelical Christian School is to prepare and motivate our students for a rapidly changing world by instilling in them critical thinking skills, a global perspective, and a respect for core values of honesty, loyalty, perseverance, and compassion. Students will have success for today and be prepared for tomorrow.</p>
      </div>
    </div>
  </div>
</div>
</div>

<footer>
  <h1>This is footer</h1>
</footer>



</body>
</html>

<?php

if (isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

  $result = mysqli_query($connect,$query) or die (mysql_error());
  $num_row = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  if($num_row > 0){
    $_SESSION['id']=$row['id'];
    echo "<script>window.open('admin.php','_self')</script>";

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
