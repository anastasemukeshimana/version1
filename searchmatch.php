<?php
include 'home.php'; 	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	/*.footer{
			margin-top: 300px;
			height: 200px;
			background-color: #123;
            color: #fff;
            text-align: center;
		} */
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
			margin-top: 200px;
		}
		h2{
			margin-left: 45%;
			text-decoration: underline;
			color: steelblue;
			text-transform: capitalize;


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
			margin-bottom: 20px;
		}
		#table{
			margin-left: 30%;
			width: 40%;
		}
		th{
			text-transform: capitalize;
			color: lavenderblush;
			font-size: 20px;
		}
		td{
			text-transform: capitalize;
			font-size: 20px;
			color: darkblue;
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
	$sel=$conn->query("SELECT * FROM matches WHERE Mt_id='$id'");
	 	?>
	 	<h2>VIEW  MATCHE DETAILS TO UPDATE/DELETE.</h2>
	 	<table border="1" id="table">
	 		<tr>
	 		<th>MATCH ID</th>
	 		<th>DATE</th>
	 		<th>GROUND</th>
	 		<th>REFEREE ID</th>
	 		<th>ADVERSARY ID</th>
	 		<th>USER ID</th>
	 		<th colspan="2">Manage</th>
	 	</tr>
	 	<?php
	 	if ($fetch=mysqli_fetch_array($sel)) {
	 	 	?>
	 	 	<tr>
	 	 		<td><?php echo $fetch['Mt_id']; ?></td>
	 	 		<td><?php echo $fetch['Date']; ?></td>
	 	 		<td><?php echo $fetch['Play_Ground']; ?></td>
	 	 		<td><?php echo $fetch['Ref_id']; ?></td>
	 	 		<td><?php echo $fetch['Ad_id']; ?></td>
	 	 		<td><?php echo $fetch['user_id']; ?></td>
	 	 		<td><a href="updatematches.php?mid=<?php echo $fetch['Mt_id']; ?>">Update</a></td>
	 	 		<td><a href="deletematches.php?mid=<?php echo $fetch['Mt_id']; ?>">Delete</a></td>
	 	 		<?php 
	 	 	}}
	 	 		 ?>
	 	 	</tr>
	 	 
	 	</table>
	
	
</body>
</html>