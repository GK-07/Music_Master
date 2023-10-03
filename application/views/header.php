<div class="ms_header">
                
                <div class="ms_top_right">
                    <!-- <div class="ms_top_lang">
                        <span data-toggle="modal" data-target="#lang_modal">languages <img src="<?= base_url("resources/user/")?>images/svg/lang.svg" alt=""></span>
                    </div> -->
                    <div class="ms_top_btn">
                        <?php if(isset($_SESSION['uid'])) { ?>
                        <a href="<?= site_url("signup_c/logout")?>" class="ms_btn"><span>Logout</span></a>
                        <?php 
                            }
                            else
                            {
                        ?>
                        <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>register</span></a>
                        <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>login</span></a>
                        <?php }?>
                    </div>
                </div>
            </div>
            