<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<?php include_once "php_validation/addEmployee_validation.php" ;?>

<html>
	<head>
		<style>
table, td {
  padding: 10px;
  background: #F2F2F2;
  width: 25%;

}


</style>
		<title>Add Employee Info</title>
	</head>
	<body>
		
		<h1 align="left">Add Employee Info</h1>
		<form action="" method="post">
			
				<table>

				<tr>
					<td align="left"><b>Employee ID</b></td>
					<td><input type="text" value="<?php echo $eid ?>" name="eid"><span><?php echo $err_eid; ?></span></td>
				</tr>
				<tr>
					<td align="left"><b>Employee Name*</b></td>
					<td><input type="text" value="<?php echo $ename ?>" name="ename"><span><?php echo $err_ename; ?></span></td>
				</tr>
				<tr>
					<td align="left"><b>Email*</b></td>
					<td><input type="text" value="<?php echo $email; ?>" name="email" ><span><?php echo $err_email; ?></span></td>
				</tr>
				
				<tr>
						<td align="left"><b>Gender*</b></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr

				<tr>
						<td align="left"><b>Birth Date*</b></td>
						<td>
							<select name="day" >
								<?php
									
									for ($i = 0; $i <= 31; $i++) {
										if($i == 0)
										{

											echo "<option value='' disabled selected>Day</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select>
							<select name="month" >
								<?php
									$months = array("Month","jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
									for ($i = 0; $i <= 12; $i++) {
										if($i == 0)
										{

											echo "<option value='$months[$i]' disabled selected>$months[$i]</option>";
										}
										else
										{
											echo "<option value='$months[$i]'>$months[$i]</option>";
										}
									}
								?>						
							</select>
							<select name="year" >
								<?php
									
									for ($i = 2020; $i >= 1950; $i--) {
										if($i == 1996)
										{

											echo "<option value='$i' disabled selected>Year</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select><?php echo $err_birth_date; ?>
						</td>
					</tr>
				<tr>
					<td align="left"><b>Phone*</b></td>
					<td><input type="text" value="<?php echo $phone ?>" name="phone"><span><?php echo $err_phone; ?></span></td>
				</tr>
				
				<tr>
					<td align="left"><b>Salary</b></td>
					<td><input type="text" value="<?php echo $salary ?>" name="salary"><span><?php echo $err_salary; ?></span></td>
				</tr>

				<tr>
						<td align="left"><b>Address*</b></td>
						<td>
							<input type="text"  value="<?php echo $address; ?>" name="street" ><span><?php echo $err_address; ?></span>
						</td>
				</tr>
				<tr>
						<td align="left"><b>Joining Date*</b></td>
						<td>
							<select name="day" >
								<?php
									
									for ($i = 0; $i <= 31; $i++) {
										if($i == 0)
										{

											echo "<option value='' disabled selected>Day</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select>
							<select name="month" >
								<?php
									$months = array("Month","jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
									for ($i = 0; $i <= 12; $i++) {
										if($i == 0)
										{

											echo "<option value='$months[$i]' disabled selected>$months[$i]</option>";
										}
										else
										{
											echo "<option value='$months[$i]'>$months[$i]</option>";
										}
									}
								?>						
							</select>
							<select name="year" >
								<?php
									
									for ($i = 2020; $i >= 1950; $i--) {
										if($i == 1996)
										{

											echo "<option value='$i' disabled selected>Year</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select><?php echo $err_join_date; ?>
						</td>
					</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			
		</form>
	</body>
	
</html>