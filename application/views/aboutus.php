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
                <!---Side Menu Start--->
          <?php include_once("sidebar.php") ?>
        <!---Main Content Start--->
        <div class="ms_content_wrapper">
            <!---Header--->
            <?php include_once("header.php")?>
            <h1>About us</h1>
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

