<?php
	$title="Olx demo page";
	$desc="This is a demo description";
?>
<!DOCTYPE html>
<html lang="en">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>OLX | <?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- top_script -->
		<?php include_once("topScript.php")?>
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>

		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
			<!-- nav_bar -->
			<?php include_once("nav.php")?>

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
												<a href="index.html"><i class="feather icon-home"></i></a>
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
							<!-- pcoded_content ends -->
						</div>
					</div>



					</div>
				</div>
			</div>
		</div>
			<!-- bottom_scipt -->
			<?php include_once("bottomScript.php") ?>
	</body>

</html>
<!-- Content to be written here-- pcoded_content -->
<!-- Sidebar included here-- side_bar -->
<!-- navbar included here-- nav_bar -->
<!-- Topscript included here-- top_script -->
<!-- BottomScript included here-- bottom_script -->