<!DOCTYPE html>
<html lang="en">
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
   <style type="text/css">
       input.ms_btn
       {
            background-color: transparent;
            height: 40px;
            border: 1px solid #fff;
            margin-left: 0px;
            padding: 0px 31px;
            line-height: 40px;
            width: auto;
            margin-top: 10px;
        }
   </style>
</head>

<body>
	<!----Loader Start---->
	<div class="ms_loader">
		<div class="wrap">
		  <img src="<?= base_url("resources/user/")?>images/loader.gif" alt="">
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
            <!---Banner--->
            <!---Start Most Liked--->
            <div class="ms_weekly_wrapper">
                <div class="ms_weekly_inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms_heading">
                                <h1><?=$moodinfo->title ?></h1>
                            </div>
                            <div>
                                <?=$moodinfo->description ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 padding_right40">
                            <?php
                           /* echo "<pre>";
                            print_r($songs);
                            echo "</pre>";*/
                                foreach($songs as $key) 
                                {
                            ?>
                            <a href="<?=site_url('AlbumC/songsMoreInfo/'.$key->songid) ?>">
                            <div class="ms_weekly_box">
                                <div class="weekly_left">
                                    <span class="w_top_no">
									</span>
                                    <div class="w_top_song">
                                        <div class="w_tp_song_img">
                                            <img src="<?= base_url('resources/image/'.$key->image)?>" alt="" class="img-fluid">
                                            <div class="ms_song_overlay">
                                            </div>
                                            <div class="ms_play_icon">
                                                <img src="<?= base_url("resources/user/")?>images/svg/play.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="w_tp_song_name">
                                            <h3><a href="#"><?= $key->title?></a></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weekly_right">
                                    <span class="w_song_time"><?= $key->duration?></span>
                                    <span class="ms_more_icon" data-other="1">
										<img src="<?= base_url("resources/user/")?>images/svg/more.svg" alt="">									
									</span>
                                </div>
                                
                            </div>
                            <div class="ms_divider"></div>
                            </a>
                            <?php
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!---End Most Liked--->
           
        </div>
        <!----Footer Start---->
        <?php include_once("footer.php") ?>
        <!----Audio Player Section---->
        <!-- <div class="ms_player_wrapper">
			<div class="ms_player_close">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</div>
            <div class="player_mid">
                <div class="audio-player">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="player_left">
                            <div class="ms_play_song">
                                <div class="play_song_name">
                                    <a href="javascript:void(0);" id="playlist-text">
                                        <div class="jp-now-playing flex-item">
                                            <div class="jp-track-name"></div>
                                            <div class="jp-artist-name"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="play_song_options">
                                <ul>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>download now</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a></li>
                                </ul>
                            </div>
                            <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </div> -->
                        <!----Right Queue---->
                        <!-- <div class="jp_queue_wrapper">
                            <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> queue</span>
                            <div id="playlist-wrap" class="jp-playlist">
								<div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                                <h2>queue</h2>
								<div class="jp_queue_list_inner">
									<ul>
										<li>&nbsp;</li>
									</ul>
								</div>
                                <div class="jp_queue_btn">
                                    <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">clear</a>
                                    <a href="clear_modal.html" class="ms_save" data-toggle="modal" data-target="#save_modal">save</a>
                                </div>
                            </div>
                        </div>
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface flex-wrap">
                                <div class="jp-controls flex-item">
                                    <button class="jp-previous" tabindex="0">
					<i class="ms_play_control"></i>
				</button>
                                    <button class="jp-play" tabindex="0">
					<i class="ms_play_control"></i>
				</button>
                                    <button class="jp-next" tabindex="0">
					<i class="ms_play_control"></i>
				</button>
                                </div>
                                <div class="jp-progress-container flex-item">
                                    <div class="jp-time-holder">
                                        <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                        <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                    </div>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar">
                                                <div class="bullet">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-volume-controls flex-item">
                                    <div class="widget knob-container">
                                        <div class="knob-wrapper-outer">
                                            <div class="knob-wrapper">
                                                <div class="knob-mask">
                                                    <div class="knob d3"><span></span></div>
                                                    <div class="handle"></div>
                                                    <div class="round">
                                                        <img src="<?= base_url("resources/user/")?>images/svg/volume.svg" alt="">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <input></input> -->
                                        <!-- </div>
                                    </div>
                                </div>
                                <div class="jp-toggles flex-item">
                                    <button class="jp-shuffle" tabindex="0" title="Shuffle">
									<i class="ms_play_control"></i></button>
									<button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>
                                </div>
                                <div class="jp_quality_optn custom_select">
                                    <select>
						<option>quality</option>
						<option value="1">HD</option>
						<option value="2">High</option>
						<option value="3">medium</option>
						<option value="4">low</option>
					</select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--main div-->
        <!-- </div> -->
    </div>
    <!----Register Modal Start---->
    <!-- Modal -->
    <div class="ms_register_popup">
        <div id="myModal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog register_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="<?= base_url("resources/user/")?>images/register_img.png" alt="" class="img-fluid" />
                        </div>
                        <form method="post" name="fm2" action="<?= site_url("signup_c/adduser")?>">
                        <div class="ms_register_form">
                            <h2>Register / Sign Up</h2>
                            <div class="form-group">
                                <input type="text" name="txtuname" placeholder="Enter Username" class="form-control">
                                <span class="form_icon">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="Password" name="txtpwd" class="form-control" placeholder="Enter Password">
                                <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control">
                                <span class="form_icon">
                                <i class=" fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtemail" class="form-control" placeholder="Enter Email">
                                <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="file" name="txtpropic" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtcontact" class="form-control" placeholder="Enter Contact Number">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtdob" class="form-control" placeholder="Date Of  Birth">        
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtgender" class="form-control" placeholder="Enter Gender">
                            </div>
                            <input type="submit" name="btnsubmit" class="ms_btn" value="register now">
                            <p>Already Have An Account? <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">login here</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!----Login Popup Start---->
        <div id="myModal1" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog login_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="<?= base_url("resources/user/")?>images/register_img.png" alt="" class="img-fluid" />
                        </div>
                        <form method="post" name="fm1" action="<?= site_url("signup_c/dologin")?>">
                        <div class="ms_register_form">
                            <h2>login / Sign in</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Username" class="form-control" name="username">
                                <span class="form_icon">
                            <i class="fa_icon form-user" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control" name="password">
                                <span class="form_icon">
                        <i class="fa_icon form-lock" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div class="remember_checkbox">
                                <label>Keep me signed in
                            <input type="checkbox" name="chkb">
                            <span class="checkmark"></span>
                        </label>
                            </div>
                            <input type="submit" name="btnsbt" class="ms_btn" value="Login Now">
                            <div class="popup_forgot">
                                <a href="#">Forgot Password ?</a>
                            </div>
                            <p>Don't Have An Account? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">register here</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Language Selection Modal---->
    <div class="ms_lang_popup">
        <div id="lang_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>language selection</h1>
                        <p>Please select the language(s) of the music you listen to.</p>
                        <ul class="lang_list">
                            <li>
                                <label class="lang_check_label">
                            English 
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            hindi
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            punjabi
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            French
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                             German 
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            Spanish
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            Chinese
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            Japanese 
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                            Arabic
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                             Italian
                            <input type="checkbox" name="check"> 
                            <span class="label-text"></span>
                            </label>
                            </li>
                        </ul>
                        <div class="ms_lang_btn">
                            <a href="#" class="ms_btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main js file Style-->
   <?php include_once("bottomscript.php") ?>
</body>
</html>