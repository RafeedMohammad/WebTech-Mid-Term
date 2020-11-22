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
		
		<h1 align="center">Product Info</h1>

		<b><a href="addProduct.php">Add Product</a></b>
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
						<td><b>Product ID</b></td>
						<td><b>Product Name</b></td>
						<td><b>Product Category</b></td>
						<td><b>Product Quantity</b></td>
						<td><b>Unit Price</b></td>
						<td><b>Adding Date</b></td>
						<td><b>Updating Date</b></td>
						<td><b>Edit</b></td>
						<td><b>Delete</b></td>
					</tr>
					
					<tr>
						<td>01</td>
						<td>Onion</td>
						<td>Vegetable</td>
						<td>50 Kg</td>
						<td>100 Tk/kg</td>
						<td>01/01/2020</td>
						<td>01/01/2020</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>02</td>
						<td>Potato</td>
						<td>Vegetable</td>
						<td>100 Kg</td>
						<td>30 Tk/kg</td>
						<td>01/01/2020</td>
						<td>01/01/2020</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>03</td>
						<td>Rom</td>
						<td>Accessories</td>
						<td>1TB 50 pc</td>
						<td>3500 Tk/pc</td>
						<td>01/01/2020</td>
						<td>01/01/2020</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>
					<tr>
						<td>04</td>
						<td>Ram</td>
						<td>Accessories</td>
						<td>8GB 50 pc</td>
						<td>2500 Tk/pc</td>
						<td>01/01/2020</td>
						<td>01/01/2020</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>

					<tr>
						<td>05</td>
						<td>Mouse</td>
						<td>Accessories</td>
						<td>50 pc</td>
						<td>350 Tk/pc</td>
						<td>01/01/2020</td>
						<td>01/01/2020</td>
						<td><a href="edit.php">Edit</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>
					
				</table>
			
	</body>
	
</html>