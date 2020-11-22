<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError)
		{
				
			$xml=simplexml_load_file("mmdata.xml");
			$users = $xml->user;
			$flag=false;
				foreach($users as $user)
				{
					if($user->username == $uname && $user->password== $pass)
					{
						$flag = true;
						
						setcookie("username",$uname,time() + 120);
					}
				}
				if($flag)
				{
					header("Location: Marketing_Manager.php");
				}
				else
				{
					echo "Invalid Username or Password";
				}
		}
		else
		{
			echo "Invalid Username or Password";
		}

	}
		
?>