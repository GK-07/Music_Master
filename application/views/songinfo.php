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
    <?php include_once("sidebar.php") ?>
        <!---Main Content Start--->
            <!---Header--->
            <?php include_once("header.php") ?>
            <!-- content yaha daalo -->
                 <div class="ms_album_single_wrapper">
                    <div class="album_single_data">
                        <div class="album_single_img">
                            <img src="<?=base_url("resources/image/$songInfo->image")?>" alt="" class="img-fluid">
                        </div>
                        <div class="album_single_text">
                            <h2>Song | <?=$songInfo->title ?>
                                
                                 <?php
                                 if($this->session->uid)
                                {
                                    if($songInfo->likest)
                                    { 
                                ?>
                                    <a href="<?=site_url("AlbumC/UnlikeSong/".$songInfo->songid)?>">
                                        <span title="Remove from Favourites"  style="color:red" class="fa fa-heart " ></span>
                                    </a>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                    <a href="<?=site_url("AlbumC/LikeSong/$songInfo->songid")?>">
                                        <span title="Add to Favourites"  class="fa fa-heart " ></span>
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
                            </h2>
                            <p class="singer_name"><?=$songInfo->description?></p>
                            <div class="album_feature">
                                <a href="#" class="album_date">Album | <?= $songInfo->name?> </a>
                                <a href="#" class="album_date">Mood | <?=$songInfo->categoryname ?> </a>
                                <a href="#" class="album_date">Released on <?=$songInfo->releasedt ?>  </a>
                                <a href="#" class="album_date">
                                
                                </a>
                            </div>
                           
                        </div>

                        <div class="album_single_text">
                           <audio controls style="width: 120%">
                              <source src="<?=base_url("resources/songs/$songInfo->url") ?>" type="audio/mpeg">
                            </audio>
                        </div>

                        <div class="album_more_optn ms_more_icon">
                            <span><img src="images/svg/more.svg" alt=""></span>
                        </div>
                   
                    </div>
                    <!----Song List---->
                    <div class="album_inner_list">
                        <div class="album_list_wrapper">
                            <ul class="album_list_name">
                                <li>Artists Assosicated </li>
                            </ul>
                          <?php
                            foreach ($songInfo->artists as $a ) {
                          ?>
                            <ul style="margin: 1em">
                                <li class="text-center">
                                    <img style="height: 50px;border-radius:100%"  src="<?=base_url("resources/image/$a->photo")?>">
                                </li>
                                <li>
                                    <a href="#"><?=$a->name ?></a>
                                </li>
                            </ul>
                           <?php
                            }
                           ?>
                        </div>
                    </div>
                <?php
                    if($this->session->uid)
                    {
                ?>
                <div class="row" style="margin: 2em">
                    <div class="col-md-10">
                        <form method="post" action="<?= site_url("AlbumC/AddCommnet/$songInfo->songid")?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="txtCom" placeholder="Post Comment">
                                </div>
                                <div class="col-md-4 ms_input">
                                    <input type="submit" style="width: 100%" value="Add Comment" class="ms_btn ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                }
                else
                {
                ?>
                <div class="row" style="margin: 2em">
                    <div class="col-md-10">
                        Login to Add Comment
                    </div>
                </div>
                <?php
                }
                ?>
                <?php
                    foreach ($comments as $c) {
                ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    
                    <div class="col-md-10">
                        <div class="album_inner_list">
                            <div class="ms_test_box">
                                <div class="ms_test_top">
                                    <div class="ms_test_img">
                                        <img src="<?=base_url("resources/image/$c->profilepic")?>" alt="" style="max-height: 3em">
                                    </div>
                                    <div class="ms_test_name">
                                        <h3><?=$c->username ?></h3>
                                        <span class="cmnt_time"><?=$c->createddt ?></span>
                                    </div>
                                </div>
                                <div class="ms_test_para">
                                    <p><?=$c->comments ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
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

