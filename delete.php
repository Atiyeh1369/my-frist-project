<?php
require('connect.php');
$id = $_REQUEST['id'];
$sql = "DELETE FROM Employees WHERE id=$id"; 
$result = mysqli_query($conn, $sql) or die ( mysqli_error());
header("Location: view.php"); 
?>

