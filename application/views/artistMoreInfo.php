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
                            <img src="<?=base_url("resources/image/$artist->photo")?>" alt="" class="img-fluid">
                        </div>
                        <div class="album_single_text">
                            <h2><?=$artist->name ?></h2>
                            <p class="singer_name"><?=$artist->description ?></p>
                            <div class="album_feature">
                                <a href="#" class="album_date"><?=count($songs) ?> song/s </a>
                            </div>
                           
                        </div>
                        <div class="album_more_optn ms_more_icon">
                            <span><img src="images/svg/more.svg" alt=""></span>
                        </div>
                      
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
                                <li class="text-center">More info</li>
                            </ul>
                          <?php
                          $cnt=1;
                            foreach ($songs as $s ) {
                          ?>
                            <ul>
                                <li><a href="#"><span class="play_no"><?=$cnt ?></span><span class="play_hover"></span></a></li>
                                <li><a href="#"><?=$s->title ?></a></li>
                                <li><a href="#"><?php 
                                    $f=1;
                                    foreach ($s->artists as $a ) {
                                        echo $a->name." ";
                                       if($f<count($s->artists))
                                      {
                                            echo " , ";
                                            $f++;
                                       }

                                    }
                                ?></a></li>
                                <li class="text-center"><a href="#"><?=$s->duration?></a></li>
                                <li class="text-center">
                                <?php
                                 if($this->session->uid)
                                {
                                    if($s->likest)
                                    { 
                                ?>
                                    <a href="<?=site_url("AlbumC/UnlikeSong/".$s->songid)?>">
                                        <span  style="color:red" class="fa fa-heart " ></span>
                                    </a>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                    <a href="<?=site_url("AlbumC/LikeSong/$s->songid/")?>">
                                        <span  class="fa fa-heart " ></span>
                                    </a>
                                <?php
                                    }
                                }
                                else
                                {
                                ?>
                                     <a onclick="alert('please login to manage fav list')">
                                        <span title="Please login to manage fav list"  style="color:grey" class="fa fa-heart " ></span>
                                    </a>
                                <?php
                                }
                                ?>
                                </li>
                                <li class="text-center">
                                    <a href="<?=site_url("AlbumC/songsMoreInfo/$s->songid")?>">
                                     Listen now
                                    </a>
                                </li>
                            </ul>
                           <?php
                           $cnt++;
                            }
                           ?>
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

