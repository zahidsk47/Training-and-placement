<?php
$con = mysqli_connect('localhost','root','');
if (!$con) {
	echo "Not Connected To server";
}
if (!mysqli_select_db($con,'fresherHub')) {
	echo "database not selected";
}
$Name = $_POST['name'];
$Email =$_POST['email'];
$Mobile =$_POST['mobile'];

$sql ="INSERT INTO resume (Name,Email,Mobile) VALUES ('$Name','$Email','$Mobile')";
if (!mysqli_query($con,$sql)) {
	echo "Not Inserted";
}else{
	echo "Inserted";
}
header("refresh:2;url=re.php";)



?>