<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
<form method="post" action="<?php echo site_url('Musicadmin_c/Displayuser_c/adduser') ?>">
	<center>
		
	Username : <input type="text" name="txtuname">
		<br>
	Password : <input type="Password" name="txtpwd">
		<br>
		E-mail : <input type="text" name="txtemail">
		<br>
		Profile picture : <input type="text" name="txtpropic">
		<br>
		Contact Number : <input type="text" name="txtcontact">
		<br>
	Registration:<input type="text" name="txtregdate">
		<br>
		Date of birth: <input type="text" name="txtdob">
		<br>
	Gender: <input type="text" name="txtgender">
		<br>
		Status: <input type="text" name="txtstatus">
		<br>
		<input type="submit" name="btnsubmit" value="Add User">
		</center>
		</form>
</body>
</html>