<?php
require "connection.php";
include "functions.php";

if (isset($_POST['submit'])) {
	global $connect;
	$username = $_POST['username'];
	$password = $_POST['password'];
  $grade = $_POST['grade'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
	$id = $_POST['id'];
	$query = "UPDATE users SET username = '$username', password = '$password', contact='$contact', grade='$grade', email='$email' WHERE id = $id";
	$result = mysqli_query($connect, $query);
	if (!$result){
		print_r(mysql_error());
		die('Mysql Error...!');
	}
}
if (isset($_POST['submit'])) {
  global $connect;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $grade = $_POST['grade'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $id = $_POST['id'];
  $query = "UPDATE usersback SET username = '$username', password = '$password', contact='$contact', grade='$grade', email='$email' WHERE id = $id";
  $result = mysqli_query($connect, $query);
  if (!$result){
    print_r(mysql_error());
    die('Mysql Error...!');
  }
}
?>


<!DOCTYPE html>
<html>
<head>
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
  <meta charset="utf-8">
  <title>Edit Account</title>
  <link rel="stylesheet" href="lightboxgallery-min.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

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
        <a class="nav-link"href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

	<br>
	<div class="container mx-auto border border-success 
	rounded-lg col-md-5">
	<h1>UPDATE</h1>

		<div class="col-xs-5">
		<form method='post' action=edit.php>
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" required="">
			</div>
      <select name='grade' class="form-control" required>
          <option selected>Choose...</option>
      <option value="Grade1">Grade 1</option>
      <option value="Grade2">Grade 2</option>
      <option value="Grade3">Grade 3</option>
      <option value="Grade4">Grade 4</option>
      <option value="Grade5">Grade 5</option>
      <option value="Grade6">Grade 6</option>
      <option value="Grade7">Grade 7</option>
      <option value="Grade8">Grade 8</option>
      <option value="Grade9">Grade 9</option>
      <option value="Grade10">Grade 10</option>
      <option value="Grade11">Grade 11</option>
      <option value="Grade12">Grade 12</option></select>
         <div class="form-group">
        <label>Contact Number</label>
        <input type="number" name="contact" class="form-control" required="">
      </div>
         <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required="">
      </div>
			<select name="id" id="">
				<?php
					showData();
				?>
			</select>
			<input type="submit" name="submit" value="UPDATE" class="btn btn-primary">

		</form>

		</div>

	</div>


</body>
</html>