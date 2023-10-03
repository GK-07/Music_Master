<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-picker.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:54:59 GMT -->
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

<link rel="stylesheet" type="text/css" href="../files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" />

<link rel="stylesheet" type="text/css" href="../files/bower_components/datedropper/css/datedropper.min.css" />

<link rel="stylesheet" type="text/css" href="../files/bower_components/spectrum/css/spectrum.css" />

<link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-minicolors/css/jquery.minicolors.css" />

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
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
<i class="feather icon-edit-1 bg-c-blue"></i>
<div class="d-inline">
<h5>Form Picker</h5>
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
<li class="breadcrumb-item">
<a href="#!">Form Picker</a>
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
<h5>Default Date-Picker</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Date</h4>
<p>Add type<code>&lt;input type="date"&gt;</code></p>
<input class="form-control" type="date" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Month</h4>
<p>Add type<code>&lt;input type="month"&gt;</code></p>
<input class="form-control" type="month" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Week</h4>
<p>Add type<code>&lt;input type="week"&gt;</code></p>
<input class="form-control" type="week" />
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Date-time-local</h4>
<p>Add type<code>&lt;input type="datetime-local"&gt;</code></p>
<input class="form-control" type="datetime-local" />
</div>
<div class="col-sm-12 col-xl-4">
<h4 class="sub-title">Time</h4>
<p>Add type<code>&lt;input type="time"&gt;</code></p>
<input class="form-control" type="time" />
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Date-Dropper</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Default</h4>
<p>Add <code>id="#dropper-default"</code></p>
<input id="dropper-default" class="form-control" type="text" placeholder="Select your date" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">With Animation</h4>
<p>Add <code>id="#dropper-animation"</code></p>
<input id="dropper-animation" class="form-control" type="text" placeholder="Select your animation" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Date format</h4>
<p>Add <code>id="#dropper-format"</code></p>
<input id="dropper-format" class="form-control" type="text" placeholder="Select your format" />
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Language Support</h4>
<p>Add <code>id="#dropper-lang"</code></p>
<input id="dropper-lang" class="form-control" type="text" placeholder="Language Support" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Lock Support</h4>
<p>Add <code>id="#dropper-lock"</code></p>
<input id="dropper-lock" class="form-control" type="text" placeholder="Select your date" />
</div>
 <div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Max Year</h4>
<p>Add <code>id="#dropper-max-year"</code></p>
<input id="dropper-max-year" class="form-control" type="text" placeholder="Max Year 2020" />
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Min Year</h4>
<p>Add <code>id="#dropper-min-year"</code></p>
<input id="dropper-min-year" class="form-control" type="text" placeholder="Min Year 1990" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Year-range</h4>
<p>Add <code>id="#year-range"</code></p>
<input id="year-range" class="form-control" type="text" placeholder="Select your date" />
</div>
<div class="col-sm-12 col-xl-4">
<h4 class="sub-title">Custom Width</h4>
<p>Add <code>id="#dropper-width"</code></p>
<input id="dropper-width" class="form-control" type="text" placeholder="Select your date" />
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Color &amp; Style Dropper</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Primary Color</h4>
<p>Add <code>id="#dropper-dangercolor"</code></p>
<input id="dropper-dangercolor" class="form-control" type="text" placeholder="Select your time" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Background Color</h4>
<p>Add <code>id="#dropper-backcolor"</code></p>
<input id="dropper-backcolor" class="form-control" type="text" placeholder="Select your time" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Text Color</h4>
<p>Add <code>id="#dropper-txtcolor"</code></p>
<input id="dropper-txtcolor" class="form-control" type="text" placeholder="Select your time" />
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Border-radius</h4>
<p>Add <code>id="#dropper-radius"</code></p>
<input id="dropper-radius" class="form-control" type="text" placeholder="Select your time" />
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Border Style</h4>
<p>Add <code>id="#dropper-border"</code></p>
<input id="dropper-border" class="form-control" type="text" placeholder="Select your time" />
</div>
<div class="col-sm-12 col-xl-4">
<h4 class="sub-title">Shadow Color</h4>
<p>Add <code>id="#dropper-shadow"</code></p>
<input id="dropper-shadow" class="form-control" type="text" placeholder="Select your time" />
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Color Picker</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-4">
<h4 class="sub-title">Flat Mode</h4>
<div class="form-group">
<input type="text" id="flat" />
</div>
</div>
<div class="col-sm-4">
<h4 class="sub-title">Flat Mode With Clear</h4>
<div class="form-group">
<input type='text' id="flatClearable" />
</div>
</div>
<div class="col-sm-4">
<h4 class="sub-title"> No Icon (Input Field Only)</h4>
<div class="form-group">
<input type='color' name='color' />
<input type='color' name='color2' value='#3355cc' />
<hr />
<input type="color" />
</div>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Mini Color</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<h4 class="sub-title">Control-Types</h4>
<div class="card-block inner-card-block">
<div class="row">
<div class="col-sm-3">
<h4 class="sub-title">Hue (default)</h4>
<input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
</div>
<div class="col-sm-3">
<h4 class="sub-title">Saturation</h4>
<input type="text" id="saturation-demo" class="form-control demo" data-control="saturation" value="#0088cc">
</div>
<div class="col-sm-3">
<h4 class="sub-title">Brightness</h4>
<input type="text" id="brightness-demo" class="form-control demo" data-control="brightness" value="#00ffff">
</div>
<div class="col-sm-3">
<h4 class="sub-title">Wheel</h4>
<input type="text" id="wheel-demo" class="form-control demo" data-control="wheel" value="#ff99ee">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<h4 class="sub-title">Input Modes</h4>
<div class="card-block inner-card-block">
<div class="row">
<div class="col-sm-6">
<div class="row">
<div class="col-sm-12 m-b-30">
<h4 class="sub-title">Text field </h4>
<input type="text" id="text-field" class="form-control demo" value="#70c24a">
</div>
<div class="col-sm-12">
<h4 class="sub-title">Hidden Input</h4>
<input type="hidden" id="hidden-input" class="demo" value="#db913d">
</div>
</div>
</div>
<div class="col-sm-6">
<h4 class="sub-title">Brightness</h4>
<input type="text" id="inline" class="form-control demo" data-inline="true" value="#4fc8db">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<h4 class="sub-title">Positions</h4>
<div class="card-block inner-card-block">
<div class="row">
<div class="col-sm-3">
<h4 class="sub-title">bottom left (default)</h4>
<input type="text" id="position-bottom-left" class="form-control demo" data-position="bottom left" value="#0088cc">
</div>
<div class="col-sm-3">
<h4 class="sub-title">top left</h4>
<input type="text" id="position-top-left" class="form-control demo" data-position="top left" value="#0088cc">
</div>
 <div class="col-sm-3">
<h4 class="sub-title">bottom right</h4>
<input type="text" id="position-bottom-right" class="form-control demo" data-position="bottom right" value="#0088cc">
</div>
<div class="col-sm-3">
<h4 class="sub-title">top right</h4>
<input type="text" id="position-top-right" class="form-control demo" data-position="top right" value="#0088cc">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<h4 class="sub-title">RGB(A)</h4>
<div class="card-block inner-card-block">
<div class="row">
<div class="col-sm-6">
<h4 class="sub-title">RGB</h4>
<input type="text" id="rgb" class="form-control demo" data-format="rgb" value="rgb(33, 147, 58)">
</div>
<div class="col-sm-6">
<h4 class="sub-title">RGBA</h4>
<input type="text" id="rgba" class="form-control demo" data-format="rgb" data-opacity=".5" value="rgba(52, 64, 158, 0.5)">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<h4 class="sub-title">More</h4>
<div class="card-block inner-card-block">
<div class="row m-b-30">
<div class="col-sm-6">
<h4 class="sub-title">Opacity</h4>
<input type="text" id="opacity" class="form-control demo" data-opacity=".5" value="#766fa8">
</div>
<div class="col-sm-6">
<h4 class="sub-title">Keywords</h4>
<input type="text" id="keywords" class="form-control demo" data-keywords="transparent, initial, inherit" value="transparent">
</div>
</div>
<div class="row m-b-30">
<div class="col-sm-6">
<h4 class="sub-title">Default Value</h4>
<input type="text" id="default-value" class="form-control demo" data-defaultValue="#ff6600">
</div>
<div class="col-sm-6">
<h4 class="sub-title">Letter Case</h4>
<input type="text" id="letter-case" class="form-control demo" data-letterCase="uppercase" value="#abcdef">
</div>
</div>
<div class="row m-b-30">
<div class="col-sm-6">
<h4 class="sub-title">Swatches</h4>
<input type="text" id="swatches" class="form-control demo" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff" value="#abcdef">
</div>
<div class="col-sm-6">
<h4 class="sub-title">Swatches and opacity</h4>
<input type="text" id="swatches-2" class="form-control demo" data-format="rgb" data-opacity="1" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" value="rgba(14, 206, 235, .5)">
</div>
</div>
</div>
</div>
</div>
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

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../files/assets/pages/advance-elements/moment-with-locales.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="../files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>

<script type="text/javascript" src="../files/bower_components/datedropper/js/datedropper.min.js"></script>

<script type="text/javascript" src="../files/bower_components/spectrum/js/spectrum.js"></script>
<script type="text/javascript" src="../files/bower_components/jscolor/js/jscolor.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-minicolors/js/jquery.minicolors.min.js"></script>

<script type="text/javascript" src="../files/assets/pages/advance-elements/custom-picker.js"></script>
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

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-picker.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:04 GMT -->
</html>
