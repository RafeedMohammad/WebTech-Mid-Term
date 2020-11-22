<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<html>
	<head>

		<style>
table, td {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

		<title>Employee Info</title>
	</head>
	<body>
		
		<h1 align="center">Employee Info</h1>
		
		<b><a href="addEmployee.php">Add New Employee</a></b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


		<b><input type="text" align="right" name="search" placeholder="Search Here">
		<a href="search.php"><button>Search</button></a></b>	

			<br>
		<br>

				<table border="1" align="center">
					
					<tr>
						<td><b>Employee ID</b></td>
						<td><b>Employee Name</b></td>
						<td><b>Employee Position</b></td>
						<td><b>Email</b></td>
						<td><b>Phone</b></td>
						<td><b>Salary</b></td>
						<td><b>Edit</b></td>
						<td><b>Delete</b></td>
					</tr>
					
					<tr>
						<td>01</td>
						<td>Ram</td>
						<td>Employee</td>
						<td>ram@gmail.com</td>
						<td>017777000</td>
						<td>15500</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>02</td>
						<td>Sham</td>
						<td>Sr. Employee</td>
						<td>sham@gmail.com</td>
						<td>019977000</td>
						<td>20500</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>03</td>
						<td>Jodu</td>
						<td>Sr. Employee</td>
						<td>jodu@gmail.com</td>
						<td>019977000</td>
						<td>25500</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>04</td>
						<td>Modhu</td>
						<td>Jr. Employee</td>
						<td>modhu@gmail.com</td>
						<td>01871246000</td>
						<td>12500</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>05</td>
						<td>Kodu</td>
						<td>Intern</td>
						<td>kodu@gmail.com</td>
						<td>01396785324</td>
						<td>10500</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>
					
				</table>
			
	</body>
	
</html>