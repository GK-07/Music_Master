<?php
	$title="Add Song";
	$desc="";
?>
<!DOCTYPE html>
<html lang="en">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- top_script -->
		<?php include_once("topscript.php") ?>
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>

		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
			<!-- nav_bar -->
			<?php include_once("nav.php") ?>

		<div class="pcoded-main-container">
			<div class="pcoded-wrapper">
			<!-- side_bar -->
			<?php include_once("sidebar.php") ?>
				<div class="pcoded-content">
				<div class="page-header card">
					<div class="row align-items-end">
						<div class="col-lg-8">
						<div class="page-header-title">
							<i class="feather icon-home bg-c-blue"></i>
							<div class="d-inline">
								<h5><?php echo $title ?></h5>
								<span><?php echo $desc?></span>
							</div>
						</div>
						</div>

				<div class="col-lg-4">
				<div class="page-header-breadcrumb">
					<ul class=" breadcrumb breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="index.html">
						<i class="feather icon-home"></i>
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#!"><?php echo $title?></a> 
					</li>
					</ul>
				</div>
				</div>
			</div>
		</div>

		<div class="pcoded-inner-content">
			<!-- pcoded_content starts -->
			<center>
				<div class="card col-md-12">
				<div class="card-block">
				<h5 class="sub-title">Add Song</h5>
				<form method="post" enctype="multipart/form-data" action="<?= site_url("Musicadmin_c/Displaysong_c/addsong");?>">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Select AlbumId:</label>
						<select name="selalbumid" class="col-sm-10">
							<option value="-1">Select Album</option>
							<?php
								foreach($al as $key)
								{
							?>	
								<option value="<?= $key->albumid ?>"><?=$key->name?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Select CategoryId:</label>
						<select name="selcatid" class="col-sm-10">
							<option value="-1">Select Category</option>
							<?php
								foreach($cat as $key)
								{
							?>
							<option value="<?= $key->categoryid ?>"><?=$key->categoryname?></option>
						<?php }?>
						</select><br>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Artist Name</label>
						<div class="col-sm-10">
							<div class="row">
							<?php foreach($ar as $key) { ?>
								<div class="col-sm-4">
									<input type="checkbox" name="aa[]" value="<?= $key->artistid ?>"><?= $key->name ?>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Song Name</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="txttitle" placeholder="">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Song </label>
					<div class="col-sm-10">
					<input type="file" class="form-control" name="songFile" placeholder="">
					</div>
				</div>


				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Duration</label>
					<div class="col-sm-10">
 					<input type="text" class="form-control" name="txtduration" placeholder="Name input">	
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-10">
 					<input type="text" class="form-control" name="txtstatus" placeholder="Name input">	
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
 					<input type="text" class="form-control" name="txtdescription" placeholder="Name input">	
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Picture</label>
					<div class="col-sm-10">
 					<input type="file" class="form-control" name="txtphoto">	
					</div>
				</div>

				<div class="form-group row">
				<div class="col-sm-2"></div>
					<input type="submit" class="btn btn-primary col-md-7">
				</div>
				</form>
				</div>
				</div>
			</center>

			<!-- pcoded_content ends -->
		</div>
			</div>
			</div>
		</div>
			</div>
			</div>
		<!-- bottom_scipt -->
		<?php include_once("bottom.php") ?>
	</body>
</html>
<!-- Content to be written here-- pcoded_content -->
<!-- Sidebar included here-- side_bar -->
<!-- navbar included here-- nav_bar -->
<!-- Topscript included here-- top_script -->
<!-- BottomScript included here-- bottom_script -->