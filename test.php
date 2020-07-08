<?php
$con = mysqli_connect('localhost','root','');
if (!$con) {
  echo "Not Connected To server";
}
if (!mysqli_select_db($con,'crud')) {
  echo "database not selected";
}
$Name=$_POST['name'];
$Address=$_POST['address'];

$sql ="INSERT INTO info (name,address) VALUES ('$Name','$Address')";
if (!mysqli_query($con,$sql)) {
  
  echo "Not Inserted";
}else{
  echo "Inserted";
}
header("refresh:2;url=test.php");
?>




<html>
<head>
  <title>Create Update delete</title>

</head>
<body>
<form method="post" action="test.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
      

      <button type="submit" name="save" class="btn">Save  </button>
      
      
    </div>

  </form>

</body>
</html>