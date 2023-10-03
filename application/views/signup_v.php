<html>
<html>
<head>
	 <title>Miraculous - Online Music Store</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
   <?php include_once("topscript.php") ?>
	
</head>
<body>
<!----Loader Start---->
	<div class="ms_loader">
		<div class="wrap">
		  <img src="images/loader.gif" alt="">
		</div>
	</div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
          <?php include_once("sidebar.php") ?>
        <!---Main Content Start--->
        <div class="ms_content_wrapper padder_top80">
            <!---Header--->
            <?php include_once("header.php") ?>
 
<form method="post" action="<?php echo site_url('signup_c/adduser/') ?>">
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