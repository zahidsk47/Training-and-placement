<?php
session_start();

	$f_name = "";
	$per_add= "";
	$id="";

	

$db = mysqli_connect("localhost","root","","fresherhub");

if(isset($_POST['update'])){
	$name = mysqli_real_escape_string($_POST['name']);
	$address = mysqli_real_escape_string($_POST['address']);
	$id = mysqli_real_escape_string($_POST['id']);

	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['msg']="Address Udated Successfully";
	header('location: create.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['msg']="Delete Successfully";
	header('location: create.php');
}



$results = mysqli_query($db, "SELECT * FROM resume");


?>