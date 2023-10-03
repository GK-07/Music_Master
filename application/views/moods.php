<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miraculous - Online Music Store</title>
   
    <!--Start Style -->
   <?php include_once("topscript.php") ?>
</head>

<body>
	<!----Loader---->
	<?php include_once("loader.php");?>
    <!----Main Wrapper Start---->
     <div class="ms_main_wrapper">
        <!---Side Menu Start--->
                <!---Side Menu Start--->
          <?php include_once("sidebar.php") ?>
        <!---Main Content Start--->
        <div class="ms_content_wrapper">
            <!---Header--->
            <?php include_once("header.php")?>
            <!----Top Genres Section Start---->
            <div class="ms_genres_wrapper ms_genres_single padder_top90">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ms_heading">
                            <h1>Moods</h1>
                            
                        </div>
                    </div>
                    
                   <div class="row">
                    <?php 
                        foreach($moods as $m)
                        {
                    ?>
                    <div class="col-md-6">
                       <div class="ms_genres_box">
                            <img src="<?=base_url("resources/image/$m->image") ?>" alt="" class="img-fluid" />
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="<?=base_url("resources/user/") ?>images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="<?=site_url('AlbumC/moods_more_info/'.$m->moodid) ?>"><?=$m->title?></a></span>
                                    <span class="ovrly_text2"><a href="<?=site_url('AlbumC/moods_more_info/'.$m->moodid) ?>">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="<?=site_url('AlbumC/moods_more_info/'.$m->moodid) ?>"><?=$m->title?></a></span>
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php
                        }
                      ?>
                   </div>
                </div>
            </div>
            <!----Live Radio Section Start---->
            
            <!----Main div close---->
        </div>
        <!----Footer Start---->
        <?php include_once("footer.php");?>
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
        .padder{
            margin: 0.0 em;
        }
    </style>
</body>


</html>

