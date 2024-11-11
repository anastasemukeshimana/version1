<?php
include 'home.php'; 	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		a{
			font-size: 30px;
			text-transform: capitalize;
			text-decoration: none;
			color: ivory;
			margin-top: 4px;
			padding: 25px;
		}
		
		body{
			background-color: #bbb;
		}
		h2{
			margin-left: 40%;
			text-decoration: underline;
			color: steelblue;
		}
		#table{
			margin-left: 30%;
			width: 40%;
		}
		h4{
			font-style: italic;
		}
		body{
			background-color: #bbb;
		}
		form{
			width: 40%;
			height: auto;
			background-color: #fff;
			margin-left: 30%;			
			border-radius: 10px;
			margin-top: 280px;
			border-collapse: collapse;
		}
		h2{
			margin-left: 40%;
			text-decoration: underline;
			color: steelblue;
		}
		input{
			display: block;
			width: 80%;
			padding: 10px;
			margin-left: 5%;
			border-collapse: collapse;
			border-radius: 7px;
		}
		label{
			margin-left: 5%;
			font-style: italic;
			font-size: 26px;
			margin-top: 10px;
			text-transform: capitalize;

		}
		button{
			border-collapse: collapse;
			border: none;
			width: 60%;
			height: 40px;
			border-radius: 7px;
			background-color: lightskyblue;
			color: #fff;
			font-size: 25px;
			margin-left: 20%;
			margin-top: 10px;
		}
		
	</style>

</head>
<body>
	<form method="post">
		<label>get match id:</label>
		<input type="number" name="mid">
		<button type="submit" name="search">Search</button>
	</form>
	<?php include 'conn.php';
	if (isset($_POST['search'])) {
		$id=$_POST['mid'];
	$sel=$conn->query("SELECT * FROM Referees WHERE Ref_id='$id'");
	 	?>
	 	<h2>VIEW  MATCHE DETAILS TO UPDATE/DELETE.</h2>
	 	<table border="1" id="table">
	 		<tr>
	 		<th>REFEREE ID</th>
	 		<th>FIRST NAME</th>
	 		<th>LAST NAME</th>
	 		<th>AGE</th>
	 		<th>SEX</th>
	 		<th>TELEPHONE</th>
	 		<th colspan="2">Manage</th>
	 	</tr>
	 	<?php
	 	if ($fetch=mysqli_fetch_array($sel)) {
	 	 	?>
	 	 	<tr>
	 	 		<td><?php echo $fetch['Ref_id']; ?></td>
	 	 		<td><?php echo $fetch['F_Name']; ?></td>
	 	 		<td><?php echo $fetch['L_Name']; ?></td>
	 	 		<td><?php echo $fetch['Age']; ?></td>
	 	 		<td><?php echo $fetch['Sex']; ?></td>
	 	 		<td><?php echo $fetch['Telephone']; ?></td>
	 	 		<td><a href="updateref.php?mid=<?php echo $fetch['Ref_id']; ?>">Update</a></td>
	 	 		<td><a href="deleteref.php?mid=<?php echo $fetch['Ref_id']; ?>">Delete</a></td>
	 	 		<?php 
	 	 	}}
	 	 		 ?>
	 	 	</tr>
	 	 
	 	</table>
	
	
</body>
</html>