<?php
	
	
	$pid="";
	$err_pid="";
	$pname="";
	$err_pname="";
	$pc="";
	$err_pc="";
	$price="";
	$err_price="";
	$padd_day ="";
	$padd_month ="";
	$padd_year ="";
	$err_padd_date ="";
	$pupdate_day ="";
	$pupdate_month ="";
	$pupdate_year ="";
	$err_pupdate_date ="";
	
	$has_error = false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["pid"])){
			$err_pid=" *Product ID Required";
			$has_error = true;
		}
		else{
			$pid=htmlspecialchars($_POST["pid"]);
		}

		if(empty($_POST["pname"])){
			$err_pname=" *Product name required";
			$hasError = true;
		}
		else{
			$ename=htmlspecialchars($_POST["pname"]);
		}


		if(empty($_POST["pc"])){
			$err_pc=" *Category required";
			$hasError = true;
		}
		else{
			$pc=htmlspecialchars($_POST["pc"]);
		}

		if(empty($_POST["price"])){
			$err_price=" *Price required";
			$hasError = true;
		}
		else{
			$price=htmlspecialchars($_POST["price"]);
		}
		
		if(isset($_POST["day"]))
		{
			$padd_day = $_POST["day"];
		}
		else{$err_padd_date = "*Day, Month, Year required";}
		
		if(isset($_POST["month"]))
		{
			$padd_month = $_POST["month"];
		}
		else{$err_padd_date = "*Day, Month, Year required";}
		
		if(isset($_POST["year"]))
		{
			$padd_year = $_POST["year"];
		}
		else{$err_padd_date = "*Day, Month, Year required";}

		if(isset($_POST["day"]))
		{
			$pupdate_day = $_POST["day"];
		}
		else{$err_pupdate_date = "*Day, Month, Year required";}
		
		if(isset($_POST["month"]))
		{
			$pupdate_month = $_POST["month"];
		}
		else{$err_pupdate_date = "*Day, Month, Year required";}
		
		if(isset($_POST["year"]))
		{
			$pupdate_year = $_POST["year"];
		}
		else{$err_pupdate_date = "*Day, Month, Year required";}

	

		

		if(empty($_POST["address"])){
			$err_address=" *Address required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}

		if(isset($_POST["day"]))
		{
			$join_day = $_POST["day"];
		}
		else{$err_join_date = "*Day, Month, Year required";}
		
		if(isset($_POST["month"]))
		{
			$join_month = $_POST["month"];
		}
		else{$err_join_date = "*Day, Month, Year required";}
		
		if(isset($_POST["year"]))
		{
			$join_year = $_POST["year"];
		}
		else{$err_join_date = "*Day, Month, Year required";}
		
		if(!$has_error){
			
			header("Location: product_info.php");
		}
	}
	
?>