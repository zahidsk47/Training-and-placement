<?php include('server2.php'); 
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM resume WHERE f_name=$f_name and per_add=$per_add");
	$record = mysqli_fetch_array($rec);
	$f_name=$record['f_name'];
	$per_add = $record['per_add'];
	
}





?>
<html>
<head>
	<title>Create Update delete</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		?>
		
		<?php endif ?>
	 </div>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
					
				<th colspan="2">Action</th>
			</tr>
		</thead>
			<tbody>
			<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['f_name']; ?></td>
				<td><?php echo $row['per_add']; ?></td>
				<td>
					<a class="edit_btn" href="resume.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="server2.php?del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		
		</table>
	</body>
	</html>