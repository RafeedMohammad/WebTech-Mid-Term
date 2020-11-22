<?php 
	$uname="";
	if(!isset($_COOKIE["username"])){
		header("Location: loginMM.php");
	}
?>

<?php include_once "php_validation/addProduct_validation.php" ;?>

<html>
	<head>
		<style>
table, td {
  padding: 10px;
  background: #F2F2F2;
  width: 25%;

}


</style>
		<title>Add Product</title>
	</head>
	<body>
		
		<h1>Add Product</h1>
		<form action="" method="post">
			
				<table>

				<tr>
					<td align="right"><b>Product ID</b></td>
					<td><input type="text" value="<?php echo $pid ?>" name="pid"><span><?php echo $err_pid; ?></span></td>
				</tr>	
				<tr>
					<td align="right"><b>Product Name*</b></td>
					<td><input type="text" value="<?php echo $pid ?>" name="pname">
						<span><?php echo $err_pname; ?></span>
					</td>
				</tr>

				<tr>
					<td align="right"><b>Product Category*</b></td>
					<td><input type="text" value="<?php echo $pc ?>" name="pc"><span><?php echo $err_pc; ?></span></td>
				</tr>
				
				<tr>
					<td align="right"><b>Unit Price*</b></td>
					<td><input type="text" value="<?php echo $price ?>" name="price"><span><?php echo $err_price; ?></span></td>
				</tr>
				
				<tr>
					<td align="right"><b>Adding date*</b></td>
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
							</select><?php echo $err_padd_date; ?>
						</td>
					</tr>
				<tr>
					<td align="right"><b>Updating date*</b></td>
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
							</select><?php echo $err_pupdate_date; ?>
						</td>
					</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			
		</form>
	</body>
	
</html>