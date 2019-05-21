<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bulletin</title>
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
<section>
  <h1>BULLETIN</h1>
    <div id="showcase">
      <div class="cards">
        <div class="card-img">
          <img src="images/b1.jpg">
        </div>
        
        <div class="card-title">
          <h2>Brigada Eskwela '19</h2>

        </div>
        <div class="card-desc">
          <h6>May 20-25, 2019</h6>
        </div>
      </div>
  
      <div class="cards">
        <div class="card-img">
          <img src="images/b2.jpg">
        </div>
        
        <div class="card-title">
          <h2>Orientation</h2>

        </div>
        <div class="card-desc">
           <h6>June 4, 2019 (Tuesday) Preschool-Grade 10</h6>
        </div>
      </div>
      <div class="cards">
        <div class="card-img">
          <img src="images/b3.gif">
        </div>
        
        <div class="card-title">
          <h2>ESC Orientation</h2>

        </div>
        <div class="card-desc">
           <h6>June 7, 2019 (Friday) Grade 7 to Grade 12</h6>
        </div>
 
      </div>
      <div class="cards">
        <div class="card-img">
          <img src="images/b4.jpg">
        </div>
        
        <div class="card-title">
          <h2>Enroll Now!!</h2>

        </div>
        <div class="card-desc">
           <h6>Enrollment still on going...</h6>
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>