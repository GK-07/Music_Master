<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miraculous</title>
   
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
            <div class="ms_content_wrapper padder_top80">
                <!-- yaha div start hua -->
            <div class="ms_fea_album_slider padder_top10 ">
                <div class="ms_heading">
                    <h1>Featured Artists</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="row">
                    <?php 
                    foreach($artists as $a)
                    {
                    ?>
                    <div class="col-md-2 pad">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img ">
                                <img style="max-height:15em" src="<?=base_url("resources/image/$a->photo") ?>"" alt="">
                            </div>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <a href="<?=site_url("AlbumC/artist_more_info/$a->artistid")?>">
                                    <img src="<?=base_url("resources/user/")?>images/svg/play.svg" alt="">
                                    </a>
                                </div>
                            </div>
                             <div class="ms_rcnt_box_text">
                                    <h3><?=$a->name?></h3>
                                </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
            </div>
                <!-- yaha div khatam hua -->
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
    <style type="text/css">
        .pad{
            margin-bottom: 0.5em;
            margin-top: 0.5em;

        }
    </style>
</body>


</html>

