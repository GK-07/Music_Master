<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miraculous - Online Music Store Html Template</title>
   
    <!--Start Style -->
   <?php include_once("topscript.php") ?>
</head>

<body>
    <!----Loader---->
    <?php include_once("loader.php");?>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
    <?php include_once("sidebar.php") ?>
        <!---Main Content Start--->
            <!---Header--->
            <?php include_once("header.php") ?>
            <!-- content yaha daalo -->
                 <div class="ms_album_single_wrapper">
                    <div class="album_single_data">
                        <div class="album_single_img">
                            <img src="<?=base_url("resources/image/cover.jpg")?>" alt="" class="img-fluid">
                        </div>
                        <div class="album_single_text">
                            <h2>Dream Your Moments</h2>
                            <p class="singer_name">By - Ava Cornish, Brian Hill</p>
                            <div class="album_feature">
                                <a href="#" class="album_date">5 song | 25:10</a>
                                <a href="#" class="album_date">Released March 23, 2018  | Abc Music Company</a>
                            </div>
                            <div class="album_btn">
                                <a href="#" class="ms_btn play_btn"><span class="play_all"><img src="images/svg/play_all.svg" alt="">Play All</span><span class="pause_all"><img src="images/svg/pause_all.svg" alt="">Pause</span></a>
                                <a href="#" class="ms_btn"><span class="play_all"><img src="images/svg/add_q.svg" alt="">Add To Queue</span></a>
                            </div>
                        </div>
                        <div class="album_more_optn ms_more_icon">
                            <span><img src="images/svg/more.svg" alt=""></span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                        </ul>
                    </div>
                    <!----Song List---->
                    <div class="album_inner_list">
                        <div class="album_list_wrapper">
                            <ul class="album_list_name">
                                <li>#</li>
                                <li>Song Title</li>
                                <li>Artist</li>
                                <li class="text-center">Duration</li>
                                <li class="text-center">Add To Favourites</li>
                                <li class="text-center">More</li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="play_no">01</span><span class="play_hover"></span></a></li>
                                <li><a href="#">Bloodlust</a></li>
                                <li><a href="#">Ava Cornish & Brian Hill</a></li>
                                <li class="text-center"><a href="#">5:26</a></li>
                                <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="play_no">02</span><span class="play_hover"></span></a></li>
                                <li><a href="#">Desired Games</a></li>
                                <li><a href="#">Ava Cornish & Brian Hill</a></li>
                                <li class="text-center"><a href="#">5:26</a></li>
                                <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="play_no">03</span><span class="play_hover"></span></a></li>
                                <li><a href="#">Until I Met You</a></li>
                                <li><a href="#">Ava Cornish & Brian Hill</a></li>
                                <li class="text-center"><a href="#">5:26</a></li>
                                <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="play_active_song">
                                <li><a href="#"><span class="play_no">04</span><span class="play_hover"></span></a></li>
                                <li><a href="#">Dark Alley Acoustic</a></li>
                                <li><a href="#">Ava Cornish & Brian Hill</a></li>
                                <li class="text-center"><a href="#">5:26</a></li>
                                <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="#"><span class="play_no">05</span><span class="play_hover"></span></a></li>
                                <li><a href="#">Cloud nine</a></li>
                                <li><a href="#">Ava Cornish & Brian Hill</a></li>
                                <li class="text-center"><a href="#">5:26</a></li>
                                <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                                <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
              
        <?php include_once("footer.php") ?>
        <!----Audio Player Section---->
        
    </div>
    <!----Register Modal Start---->
    <!-- Modal -->
   <?php include_once("reg.php");?>
    <!----Language Selection Modal---->
    <?php include_once("lagn.php")?>
    <!----Queue Clear Model ---->
    <?php include_once("clearQueuedialog.php") ?>
    <!----Queue Save Modal---->
    <?php include_once("queue.php")?>
    <!--Main js file Style-->
    <?php include_once("bottomscript.php") ?>
</body>


</html>

