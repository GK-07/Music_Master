<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-elements-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:54:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/switchery/css/switchery.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css" />

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css"><link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<?php include_once("nav.php") ?>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include_once("sidebar.php") ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h5>Basic Form</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Form Components</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Basic Form Inputs</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Switches</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Single Switche</h4>
<input type="checkbox" class="js-single" checked />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Multiple Switches</h4>
<input type="checkbox" class="js-switch" checked />
<input type="checkbox" class="js-switch" checked />
<input type="checkbox" class="js-switch" checked />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Enable Disable Switches</h4>
 <input type="checkbox" class="js-dynamic-state" checked />
<button class="btn btn-primary js-dynamic-enable">Enable</button>
<button class="btn btn-inverse js-dynamic-disable m-t-10">Disable</button>
</div>
</div>
<div class="row">
<div class="col-sm-8">
<h4 class="sub-title">Color Switches</h4>
<input type="checkbox" class="js-default" checked />
<input type="checkbox" class="js-primary" checked />
<input type="checkbox" class="js-success" checked />
<input type="checkbox" class="js-info" checked />
<input type="checkbox" class="js-warning" checked />
<input type="checkbox" class="js-danger" checked />
<input type="checkbox" class="js-inverse" checked />
</div>
<div class="col-sm-4">
<h4 class="sub-title">Switch Sizes</h4>
<input type="checkbox" class="js-large" checked />
<input type="checkbox" class="js-medium" checked />
<input type="checkbox" class="js-small" checked />
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Radio</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
<h4 class="sub-title">Radio Fill Button</h4>
<div class="form-radio">
<form>
<div class="radio radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Radio 1
</label>
</div>
<div class="radio radio-inline">
<label>
<input type="radio" name="radio">
<i class="helper"></i>Radio 2
</label>
</div>
<div class="radio radio-inline radio-disable">
<label>
<input type="radio" disabled="" name="radio">
<i class="helper"></i>Radio Disable
</label>
</div>
</form>
</div>
</div>
<div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
<h4 class="sub-title">Radio outline Button</h4>
 <div class="form-radio">
<form>
<div class="radio radio-outline radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Radio 1
</label>
</div>
<div class="radio radio-outline radio-inline">
<label>
<input type="radio" name="radio">
<i class="helper"></i>Radio 2
</label>
</div>
<div class="radio radio-inline radio-disable">
<label>
<input type="radio" disabled="" name="radio">
<i class="helper"></i>Radio Disable
</label>
</div>
</form>
</div>
</div>
<div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
<h4 class="sub-title">Radio Button</h4>
<div class="form-radio">
<form>
<div class="radio radiofill radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Radio-fill 1
</label>
</div>
<div class="radio radiofill radio-inline">
<label>
<input type="radio" name="radio">
<i class="helper"></i>Radio-fill 2
</label>
</div>
<div class="radio radiofill radio-inline radio-disable">
<label>
<input type="radio" disabled="" name="radio">
<i class="helper"></i>Radio-fill Disable
</label>
</div>
</form>
</div>
</div>
</div>
<h4 class="sub-title">Color Radio Button</h4>
<div class="form-radio m-b-30">
<form>
<div class="radio radiofill radio-default radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Default Color
</label>
</div>
<div class="radio radiofill radio-primary radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Primary Color
</label>
 </div>
<div class="radio radiofill radio-success radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Success Color
</label>
</div>
<div class="radio radiofill radio-info radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Info Color
</label>
</div>
<div class="radio radiofill radio-warning radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Warning Color
</label>
</div>
<div class="radio radiofill radio-danger radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Danger Color
</label>
</div>
<div class="radio radiofill radio-inverse radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Inverse Color
</label>
</div>
</form>
</div>
<h4 class="sub-title">Color Radio material Button</h4>
<div class="form-radio m-b-30">
<form>
<div class="radio radio-matrial radio-default radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Default Color
</label>
</div>
<div class="radio radio-matrial radio-primary radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Primary Color
</label>
</div>
<div class="radio radio-matrial radio-success radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Success Color
</label>
</div>
<div class="radio radio-matrial radio-info radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Info Color
</label>
</div>
<div class="radio radio-matrial radio-warning radio-inline">
<label>
 <input type="radio" name="radio" checked="checked">
<i class="helper"></i>Warning Color
</label>
</div>
<div class="radio radio-matrial radio-danger radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Danger Color
</label>
</div>
<div class="radio radio-matrial radio-inverse radio-inline">
<label>
<input type="radio" name="radio" checked="checked">
<i class="helper"></i>Inverse Color
</label>
</div>
</form>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Checkbox</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-6 m-b-30">
<h4 class="sub-title">Border Checkbox</h4>
<div class="border-checkbox-section">
<div class="border-checkbox-group border-checkbox-group-default">
<input class="border-checkbox" type="checkbox" id="checkbox0">
<label class="border-checkbox-label" for="checkbox0">Do you like it?</label>
</div>
<div class="border-checkbox-group border-checkbox-group-primary">
<input class="border-checkbox" type="checkbox" id="checkbox1">
<label class="border-checkbox-label" for="checkbox1">Primary</label>
</div>
<div class="border-checkbox-group border-checkbox-group-success">
<input class="border-checkbox" type="checkbox" id="checkbox2">
<label class="border-checkbox-label" for="checkbox2">Success</label>
</div>
<div class="border-checkbox-group border-checkbox-group-info">
<input class="border-checkbox" type="checkbox" id="checkbox3">
<label class="border-checkbox-label" for="checkbox3">Info</label>
</div>
<div class="border-checkbox-group border-checkbox-group-warning">
<input class="border-checkbox" type="checkbox" id="checkbox4">
<label class="border-checkbox-label" for="checkbox4">Warning</label>
</div>
<div class="border-checkbox-group border-checkbox-group-danger">
<input class="border-checkbox" type="checkbox" id="checkbox5">
<label class="border-checkbox-label" for="checkbox5">Danger</label>
</div>
<div class="border-checkbox-group">
<input class="border-checkbox" type="checkbox" id="checkbox6" disabled>
<label class="border-checkbox-label" for="checkbox6">Disabled</label>
</div>
</div>
</div>
<div class="col-sm-12 col-xl-6 m-b-30">
<h4 class="sub-title">Fade-in Checkbox</h4>
<div class="checkbox-fade fade-in-default">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-default"></i>
</span>
<span>Default</span>
</label>
</div>
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
</span>
<span>Primary</span>
</label>
</div>
<div class="checkbox-fade fade-in-warning">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-warning"></i>
</span>
<span> Warning</span>
</label>
</div>
<div class="checkbox-fade fade-in-success">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-success"></i>
</span>
<span>Success</span>
</label>
</div>
<div class="checkbox-fade fade-in-info">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-info"></i>
</span>
<span> Info</span>
</label>
</div>
<div class="checkbox-fade fade-in-danger">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-danger"></i>
</span>
<span> Danger</span>
</label>
</div>
<div class="checkbox-fade fade-in-disable">
<label>
<input type="checkbox" value="" disabled>
<span class="cr">
<i class="cr-icon icofont icofont-ui-check text-default"></i>
</span>
<span>Disabled</span>
</label>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-6 m-b-30">
<h4 class="sub-title">Color Checkbox</h4>
<div class="checkbox-color checkbox-default">
<input id="checkbox12" type="checkbox" checked="">
<label for="checkbox12">
Default
</label>
</div>
<div class="checkbox-color checkbox-primary">
<input id="checkbox18" type="checkbox" checked="">
<label for="checkbox18">
Primary
</label>
</div>
<div class="checkbox-color checkbox-success">
<input id="checkbox13" type="checkbox" checked="">
<label for="checkbox13">
Success
</label>
</div>
<div class="checkbox-color checkbox-info">
<input id="checkbox14" type="checkbox" checked="">
<label for="checkbox14">
Info
</label>
</div>
<div class="checkbox-color checkbox-warning">
<input id="checkbox15" type="checkbox" checked="">
<label for="checkbox15">
Warning
</label>
</div>
<div class="checkbox-color checkbox-danger">
<input id="checkbox16" type="checkbox" checked="">
<label for="checkbox16">
Danger
</label>
</div>
<div class="checkbox-color checkbox-default">
<input id="checkbox17" type="checkbox" disabled="">
<label for="checkbox17">
Disabled
</label>
</div>
</div>
<div class="col-sm-12 col-xl-6 m-b-30">
<h4 class="sub-title">zoom Checkbox</h4>
<div class="checkbox-zoom zoom-default">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-default"></i>
</span>
 <span>Default</span>
</label>
</div>
<div class="checkbox-zoom zoom-primary">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
</span>
<span>Primary</span>
</label>
</div>
<div class="checkbox-zoom zoom-warning">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-warning"></i>
</span>
<span> Warning</span>
</label>
</div>
<div class="checkbox-zoom zoom-success">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-success"></i>
</span>
<span>Success</span>
</label>
</div>
<div class="checkbox-zoom zoom-info">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-info"></i>
</span>
<span> Info</span>
</label>
</div>
<div class="checkbox-zoom zoom-danger">
<label>
<input type="checkbox" value="">
<span class="cr">
<i class="cr-icon icofont icofont-ui-check txt-danger"></i>
</span>
<span> Danger</span>
</label>
</div>
<div class="checkbox-zoom zoom-disable">
<label>
<input type="checkbox" value="" disabled>
<span class="cr">
<i class="cr-icon icofont icofont-ui-check text-default"></i>
</span>
<span>Disabled</span>
</label>
</div>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Tags Input</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Markup</h4>
<p>Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</p>
<div class="tags_add">
<input type="text" class="form-control" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
</div>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Colors</h4>
<p>You can set a fixed css class for your tags, or determine dynamically by providing a custom function.</p>
<div class="color-tags">
<input class="" type="text" />
</div>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Max-Tags</h4>
<p>Just add <code>"tags_max"</code> to your input field to automatically change it to a tags input field.</p>
<div class="tags_max">
<input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Max-Characters</h4>
<p>Just add <code>"tags_max_char"</code> to your input field to automatically change it to a tags input field.</p>
<div class="tags_max_char">
<input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
</div>
</div>
<div class="col-sm-12 col-xl-4">
<h4 class="sub-title">Multiple</h4>
<p>Just add <code>"tags_add_multiple"</code> to your input field to automatically change it to a tags input field.</p>
<div class="tags_add_multiple">
<input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Max Length</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Default</h4>
<p>The badge will show up by default when the remaining chars are <code>10</code> or <code>less</code>:</p>
<input type="text" class="form-control" placeholder="Type your keywords..." maxlength="10">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Threshold</h4>
<p>Do you want the badge to show up when there are <code>20 chars</code> or less? Use the <code>threshold</code> option:</p>
<input type="text" class="form-control thresold-i" placeholder="Type your keywords..." maxlength="20">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Color-lables</h4>
<p>Just add <code>color-class</code>with <code>input</code></p>
<input type="text" class="form-control color-class" placeholder="Type your keywords..." maxlength="25">
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Play With Positions</h4>
<p>All you need to do is specify the <code>placement option</code>, with one of those strings. If none is specified, the positioning will be defauted to <code>'top-left'</code>.
</p>
<input type="text" class="form-control position-class" placeholder="Type your keywords..." maxlength="25">
</div>
<div class="col-sm-12 col-xl-8">
<h4 class="sub-title">Also Working With Textarea</h4>
<p>Bootstrap maxlength supports textarea as well as inputs. Even on old IE.</p>
<textarea class="form-control max-textarea" maxlength="255" rows="4"></textarea>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../files/bower_components/switchery/js/switchery.min.js"></script>

<script type="text/javascript" src="../files/bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>

<script type="text/javascript" src="../files/bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>

<script type="text/javascript" src="../files/assets/pages/advance-elements/swithces.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-elements-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:54:57 GMT -->
</html>
