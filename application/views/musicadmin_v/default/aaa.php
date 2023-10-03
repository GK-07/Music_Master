<?php
	$title="Title";
	$desc="This is the description of page";
	$link="<a href='".site_url('controllerName/FunctionName')."'>$title</a>";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<?php include_once('topscript.php'); ?>
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<?php include_once('nav.php');?>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<?php include_once('sidebar.php') ?>
						<div class="pcoded-content">

							<div class="page-header card">
								<div class="row align-items-end">
									<div class="col-lg-8">
										<div class="page-header-title">
											<i class="feather icon-home bg-c-blue"></i>
											<div class="d-inline">
											<h5><?= $title?></h5>
											<span><?= $desc ?></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="page-header-breadcrumb">
											<ul class=" breadcrumb breadcrumb-title">
												<li class="breadcrumb-item">
												<a href="index.html"><i class="feather icon-home"></i></a>
												</li>
												<li class="breadcrumb-item"><?= $link ?> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						
							<!-- CB starts -->
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="card">
												<div class="card-header">
													<h5>Product Details</h5>
												</div>
												<div class="card-block">
													<div class="row">
														<img src="<?= site_url("resources/image/$bdata->Productpic") ?>" height="250px" class="col-md-3">
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-12">
																	<h5 class="col-md-6">Product Name:- <?= $bdata->Productname?></h5>
																</div>
																<div class="col-md-12">
																	<h5 class="col-md-6">Product Company:-<?= $bdata->Company?></h5>
																</div>
																<div class="col-md-12">
																	<h5 class="col-md-6">Product Description:-<?= $bdata->Description?></h5>
																</div>
																<div class="col-md-12">
																	<h5 class="col-md-6">Product Price:-<?= $bdata->Price?></h5>
																</div>
																<div class="col-md-12">
																	<h5 class="col-md-6">Product Created Date:-<?= $bdata->Createddate?></h5>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- CB Ends -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('Bottom.php') ?>
	</body>
</html>
