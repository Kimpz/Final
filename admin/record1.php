
<?php
require('connection.php');
// include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
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


</head>
<h2>View Records</h2>
<div class="table-responsive">


<table width="100%" border="3" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No.</strong></th>
<th><strong>ID</strong></th>
<th><strong>Username</strong></th>
<th><strong>Password</strong></th>
<th><strong>FirstName</strong></th>
<th><strong>LastName</strong></th>
<th><strong>MiddleName</strong></th>
<th><strong>Birthdate</strong></th>
<th><strong>Age</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Grade</strong></th>
<th><strong>Address</strong></th>
<th><strong>Guardian</strong></th>
<th><strong>Relationship</strong></th>
<th><strong>Contact No.</strong></th>
<th><strong>EmailAddres</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>

<tbody>
	
<?php
$count=1;
$query="SELECT * FROM users ORDER BY id desc;";
$result = mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["id"]; ?></td>
	<td align="center"><?php echo $row["username"]; ?></td>
	<td align="center"><?php echo $row["password"]; ?></td>
	<td align="center"><?php echo $row["fname"]; ?></td>
	<td align="center"><?php echo $row["lname"]; ?></td>
	<td align="center"><?php echo $row["mname"]; ?></td>
	<td align="center"><?php echo $row["bday"]; ?></td>
	<td align="center"><?php echo $row["age"]; ?></td>
	<td align="center"><?php echo $row["gender"]; ?></td>
	<td align="center"><?php echo $row["grade"]; ?></td>
	<td align="center"><?php echo $row["address"]; ?></td>
	<td align="center"><?php echo $row["guardian"]; ?></td>
	<td align="center"><?php echo $row["relationship"]; ?></td>
	<td align="center"><?php echo $row["contact"]; ?></td>
	<td align="center"><?php echo $row["email"]; ?></td>
	<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>

</tbody>
</table>

</div>
</body>
</html>
