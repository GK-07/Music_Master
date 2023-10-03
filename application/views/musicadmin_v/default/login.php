<?php
	$title="Title";
	$desc="This is the description of page";
	$link="<a href='".site_url('Musicadmin_c/Admin')."'>$title</a>";
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
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<div class="pcoded-content">						
						
							<!-- CB starts -->
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											
											<div class="row" style="margin-top: 10%">
												<div class="col-md-8">
													<div class="card">
														<h5 class="card-header">Login</h5>
														<div class="card-block">
															<form method="post" action="<?= site_url("Musicadmin_c/Login/doLogin")?>">
																<div class="form-group row">
																	<label class="col-sm-2 col-form-label">User Name</label>
																	<div class="col-sm-10">
																		<input type="text" class="form-control" name="txtuname">
																		</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-2 col-form-label">Password</label>
																	<div class="col-sm-10">
																		<input type="Password" class="form-control" name="txtpwd">
																		</div>
																</div>
																
																<div class="form-group row">
																	<div class="col-sm-1"></div>
																</div>
																
																<div class="col-sm-10">
																		<input type="submit" class="btn btn-warning" name="submit">
																		</div>
																</div>
																<?php
																if (isset($errormsg))
																{
																	?>
																	<div class="form-group row">
																		<label class="col-sm-2 col-form-label"><?= $errormsg?></label>
																	</div>
																	<?php 
																}
																?>
															</form>
															
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
