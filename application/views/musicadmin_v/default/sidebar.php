<nav class="pcoded-navbar">
	<div class="nav-list">
		<div class="pcoded-inner-navbar main-menu">
			<div class="pcoded-navigation-label"></div>
			<ul class="pcoded-item pcoded-left-item">
				<li class="pcoded-hasmenu active pcoded-trigger">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="icon-home"></i></span>
						<span class="pcoded-mtext">Dashboard</span>
					</a>
					<ul class="pcoded-submenu">
						<?php
							if ($this->session->atype==1) 
								{
						?>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Admin</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayadm_c/loadaddadmin")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add</span>
			 						</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayadm_c/displayad")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Admins</span>
									</a>
								</li>
							</ul>
						</li>
						<?php
							}
						?>
						
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Admins</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayadm_c/displayad")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Admins</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Song</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaysong_c/loadaddsong")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add Song</span>
									</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaysong_c/displaysong")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Songs</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Album</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayalbum_c/loadaddalbum")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add Album</span>
									</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayalbum_c/displayalbum")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Album</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Genre</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaycat_c/loadaddcat")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add Genre</span>
									</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaycat_c/displaycat")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Genres</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Moods</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaymood_c/loadaddmood")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add Mood</span>
									</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displaymood_c/displaymood")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Moods</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="pcoded-hasmenu">
							<a href="javascript:void(0)" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Artist</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayartist_c/loadaddartist")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">Add Artist</span>
									</a>
								</li>
								<li class="">
									<a href="<?= site_url("Musicadmin_c/Displayartist_c/displayartist")?>" class="waves-effect waves-dark">
										<span class="pcoded-mtext">View Artist</span>
									</a>
								</li>
							</ul>
					<!-- 
					<ul class="pcoded-submenu">
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displayadm_c/displayad")?>">
								<span class="pcoded-mtext">Admins</span>
							</a>
						</li>
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displayuser_c/displayuser")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Users</span>
							</a>
						</li>
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displayalbum_c/displayalbum")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Album</span>
							</a>
						</li>
						<li>
							<a href="<?= site_url("Musicadmin_c/Displaysong_c/displaysong/")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Songs</span>
							</a>
						</li>
						<li>
							<a href="<?= site_url("Musicadmin_c/Displaysong_c/loadaddsong/")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Add Songs</span>
							</a>
						</li>
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displayartist_c/displayartist")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Artist</span>
							</a>
						</li>
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displaymood_c/displaymood")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Mood</span>
							</a>
						</li>
						<li class="">
							<a href="<?= site_url("Musicadmin_c/Displaycat_c/displaycat")?>" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Category</span>
							</a>
						</li>
					</ul> -->
				</li>
			</ul>
		</div>
	</div>
</nav>