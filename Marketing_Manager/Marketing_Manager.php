<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>


<html>
<head>

	<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  width: 25%;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  width: 25%;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  width: 25%;

  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

}
</style>

	<title>Marketing Manager</title>
</head>
<body>
	<h1 align="left">Marketing Manager</h1>

	<a href="Employee_info.php"><button class="button button1">Employee Info</button></a><br><br>
	<a href="product_info.php"><button class="button button2">Product Info</button></a><br><br>
	<a href="blog.php"><button class="button button3">Blog</button></a><br>

</body>
</html>