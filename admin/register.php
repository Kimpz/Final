<!DOCTYPE html>

<?php
include("connection.php");
?>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

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
<form method="post" action="register.php" class="text-center p-5 d-flex justify-content-center">

	<div class="container col-md-5">
	<p class="pt-2 h2 mb-3" align="center">REGISTER</p>
    <div class="form-row mb-4">
        <div class="col">
           <label for="username" class="col-xs-2 col-form-label">Username</label>
            <input type="text" name='username' class="form-control" placeholder="Username" required>
        </div>
        <div class="col">
            <label for="password" class="col-xs-2 col-form-label">Password</label>
            <input type="password" name='password' class="form-control" placeholder="Password" required>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <label for="fname" class="col-xs-2 col-form-label">First Name</label>
            <input type="text" name='fname' class="form-control" placeholder="First Name" required>
        </div>
        <div class="col">
            <label for="lname" class="col-xs-2 col-form-label">Last Name</label>
            <input type="text" name='lname' class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col">
            <label for="mname" class="col-xs-2 col-form-label">Middle Name</label>
            <input type="text" name='mname' class="form-control" placeholder="Middle Name" required>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col-md-4">
           <label for="bday" class="col-xs-1 col-form-label">Birthdate</label>
            <input type="date" name='bday' class="form-control" required>
        </div>
        <div class="col-md-2">
            <label for="age" class="col-xs-2 col-form-label">Age</label>
            <input type="number" name='age' class="form-control" placeholder="Age" required>
        </div>
        <div class="col">
            <label for="inputEmail3" class="col-xs-3 col-form-label">Gender</label><br>
            <select name='gender' class="form-control" required>
  			<option selected>Choose...</option>
        	<option value="Male">Male</option>
			<option value="Female">Female</option></select>
        </div>
        <div class="col">
	        <label for="inputEmail3" class="col-xs-3 col-form-label">GradeLevel</label><br>
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
	    </div>
  	</div>
		    <label for="address" class="col-xs-2 col-form-label">Address</label>
		    <input type="text" name='address' class="form-control mb-4" placeholder="Complete Address" required>
    <div class="form-row mb-4">
        <div class="col-md-8">
           <label for="guardian" class="col-xs-2 col-form-label">Guardian Name</label>
            <input type="text" name='guardian' class="form-control" placeholder="Guardian Name" required>
        </div>
        <div class="col">
            <label for="relationship" class="col-xs-2 col-form-label">Relationship</label>
            <input type="text" name='relationship' class="form-control" placeholder="Relationship" required>
        </div>
    </div>
 	<div class="form-row mb-4">
        <div class="col">
            <label for="contact" class="col-xs-2 col-form-label">Contact Number</label>
            <input type="number" name='contact' class="form-control" placeholder="Contact Number" required>
        </div>
        <div class="col">
            <label for="email" class="col-xs-2 col-form-label">Email Address</label>
            <input type="email" name='email' class="form-control" placeholder="Email Address" required>
        </div>
    </div>
    <input class="btn btn-info my-4 btn-block" name='submit' type="submit">	
    <h6 class="p-10">Already have an account? <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm" data-whatever="@getbootstrap">Log in</a></h6>

</div>
</form>
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
</body>
</html>

<?php
	
	if(isset ($_POST ['submit'])){		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname=$_POST['lname'];
		$mname=$_POST['mname'];
		$bday=$_POST['bday'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$grade=$_POST['grade'];
		$address=$_POST['address'];
		$guardian=$_POST['guardian'];
		$relationship=$_POST['relationship'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		


	$check_email ="select * From users where email='$email'";
	$run = mysqli_query($connect,$check_email);
	
	if(mysqli_num_rows($run)>0) {
		echo "<script>Swal.fire({
 			  title: 'Error!',
  			  text: 'Email is already in used. Please try another one...',
  			  type: 'error',
 			  confirmButtonText: 'Okay'
			  })</script>";
		exit();
		}
		
	$check_username="select * From users where username='$username'";
	$rn = mysqli_query($connect,$check_username);
	
	if(mysqli_num_rows($rn)>0){
		echo "<script>Swal.fire({
 			  title: 'Error!',
  			  text: 'Username already used. Please try again...',
  			  type: 'error',
 			  confirmButtonText: 'Okay'
			  })</script>";
		exit();
		}
	$check_contact="select * From users where contact='$contact'";
	$r = mysqli_query($connect,$check_contact);
	
	if(mysqli_num_rows($r)>0){
		echo "<script>Swal.fire({
 			  title: 'Error!',
  			  text: 'Contact number already used',
  			  type: 'error',
 			  confirmButtonText: 'Okay'
			  })</script>";
		exit();
		}

	$query = "INSERT INTO users (username,password,fname,lname,mname,bday,age,gender,grade,address,guardian,relationship,contact,email) VALUES ('$username','$password','$fname','$lname','$mname','$bday','$age','$gender','$grade','$address','$guardian','$relationship','$contact', '$email')";
	$result = mysqli_query($connect, $query);	
	$query = "INSERT INTO usersback (username,password,fname,lname,mname,bday,age,gender,grade,address,guardian,relationship,contact,email) VALUES ('$username','$password','$fname','$lname','$mname','$bday','$age','$gender','$grade','$address','$guardian','$relationship','$contact', '$email')";
	$result = mysqli_query($connect, $query);	

	if ($result) {
		echo "<script>Swal.fire({
 			  title: 'Success!!',
  			  text: 'Registration Complete',
  			  type: 'success',
 			  confirmButtonText: 'Okay'
			  })</script>";	
	}

	
}		
?> 