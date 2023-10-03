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
													<h5>About the artist</h5>
												</div>
												<div class="card-block">
													
														
													
													<table class="table table-border table-striped">
														<thead>
															<th>Image</th>
															<th>Name</th>
															<th>description</th>	
														</thead>
														<tbody>
															<?php
																foreach ($bdata as $key) 
																{
														?>
																<td><img src="<?= base_url("resources/image/$key->photo") ?>" height="55px" width="50px"> </td>
																<td><?= $key->name?></td>
																<td><?= $key->ades?></td>


														<?php	
															break;
																}
														?>	
														</tbody>
													</table>
													<br>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													Songs of this artist
												</div>
												<div class="card-block">
													<table class="table table-striped table-border">
														<thead>
															<th>Image</th>
															<th>songname</th>
															<th>relation</th>
															<th>duration</th>
															<th>Status</th>	
															<th>Description</th>
														</thead>
														<tbody>
															<?php
																foreach ($bdata as $key) 
																{
														?>
															<tr>
																<td><img src="resources/image/<?= $key->image ?>"></td>
																<td><?= $key->title ?></td>
																<td><?= $key->relation?></td>
																<td><?= $key->duration?></td>
																<td><?= $key->status ?></td>	
																<td><?= $key->sdes ?></td>
															</tr>
														<?php	
																}
														?>	
														</tbody>
													</table>
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
