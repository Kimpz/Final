
<?php


require('connection.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error());
header("Location: record1.php"); 
?>