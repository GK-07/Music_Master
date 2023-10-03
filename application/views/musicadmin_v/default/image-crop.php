<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/image-crop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:56:39 GMT -->
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

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/cropper/css/cropper.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link href="../files/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

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
<i class="feather icon-scissors bg-c-blue"></i>
<div class="d-inline">
<h5>Image Cropper</h5>
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
<a href="#!">Image Cropper</a>
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
<h5>Image Cropper Plugin</h5>
</div>
 <div class="card-block">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="img-container">
<img id="image" src="../files/assets/images/modal/overflow.jpg" alt="Crop Picture">
</div>
</div>
<div class="col-md-3">
<div class="docs-preview clearfix">
<div class="img-preview preview-lg"></div>
<div class="img-preview preview-md"></div>
<div class="img-preview preview-sm"></div>
<div class="img-preview preview-xs"></div>
</div>
<div class="docs-data">
<div class="input-group">
<label class="input-group-addon" for="dataX">X</label>
<input type="text" class="form-control" id="dataX" placeholder="x">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataY">Y</label>
<input type="text" class="form-control" id="dataY" placeholder="y">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataWidth">Width</label>
<input type="text" class="form-control" id="dataWidth" placeholder="width">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataHeight">Height</label>
<input type="text" class="form-control" id="dataHeight" placeholder="height">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataRotate">Rotate</label>
<input type="text" class="form-control" id="dataRotate" placeholder="rotate">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataScaleX">ScaleX</label>
 <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
</div>
<div class="input-group">
<label class="input-group-addon" for="dataScaleY">ScaleY</label>
<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9 docs-buttons button-page">

<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
<span class="fa fa-arrows"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
<span class="fa fa-crop"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
<span class="fa fa-search-plus"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
<span class="fa fa-search-minus"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
<span class="fa fa-arrow-left"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
<span class="fa fa-arrow-right"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
<span class="fa fa-arrow-up"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
<span class="fa fa-arrow-down"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
<span class="fa fa-rotate-left"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
<span class="fa fa-rotate-right"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
<span class="fa fa-arrows-h"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;-1)">
<span class="fa fa-arrows-v"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="crop" title="Crop">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
<span class="fa fa-check"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="clear" title="Clear">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
<span class="fa fa-remove"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="disable" title="Disable">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
<span class="fa fa-lock"></span>
</span>
</button>
<button type="button" class="btn btn-primary" data-method="enable" title="Enable">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
<span class="fa fa-unlock"></span>
</span>
</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-primary" data-method="reset" title="Reset">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
<span class="fa fa-refresh"></span>
</span>
</button>
<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
<span class="fa fa-upload"></span>
</span>
</label>
<button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
<span class="fa fa-power-off"></span>
</span>
</button>
</div>
<div class="btn-group btn-group-crop">
 <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
Get Cropped Canvas
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
160&times;90
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
320&times;180
</span>
</button>
</div>

<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
</div>
<div class="modal-body"></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
</div>
</div>
</div>
</div>

<button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
Get Data
</span>
</button>
 <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
Set Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getContainerData" data-option data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
Get Container Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getImageData" data-option data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
Get Image Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getCanvasData" data-option data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
Get Canvas Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
Set Canvas Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
Get Crop Box Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
Set Crop Box Data
</span>
</button>
<button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
<span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
0,0
</span>
</button>
<button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
100%
</span>
 </button>
<button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
180°
</span>
</button>
<div>
<input type="text" class="form-control m-b-10" id="putData" placeholder="Get data to here or set data with this value">
</div>
</div>

<div class="col-md-3 docs-toggles">
<div class="dropdown dropup docs-options">
<button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
Toggle Options
</button>
<ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="responsive" checked> responsive
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="restore" checked> restore
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="checkCrossOrigin" checked> checkCrossOrigin
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="checkOrientation" checked> checkOrientation
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="modal" checked> modal
</label>
</li>
<li role="presentation">
 <label class="checkbox-inline">
<input type="checkbox" name="guides" checked> guides
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="center" checked> center
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="highlight" checked> highlight
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="background" checked> background
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="autoCrop" checked> autoCrop
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="movable" checked> movable
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="rotatable" checked> rotatable
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="scalable" checked> scalable
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="zoomable" checked> zoomable
</label>
</li>
<li role="presentation">
 <label class="checkbox-inline">
<input type="checkbox" name="zoomOnTouch" checked> zoomOnTouch
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="zoomOnWheel" checked> zoomOnWheel
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="cropBoxMovable" checked> cropBoxMovable
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="cropBoxResizable" checked> cropBoxResizable
</label>
</li>
<li role="presentation">
<label class="checkbox-inline">
<input type="checkbox" name="toggleDragModeOnDblclick" checked> toggleDragModeOnDblclick
</label>
</li>
</ul>
</div>

</div>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Basic Usage</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This is the most basic example of <code>cropper</code> implementation. By default cropping area is centered and takes 80% of image space. The image is resizable, but should be wrapped in
 block element with fixed height.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-basic img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Hidden Overlay</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This example demonstrates default options, but with hidden black modal layer above the cropper. To hide the modal set <code>modal</code> option to <code>false</code>. If visible, modal color
can be easily changed in css.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-modal img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Fixed Position</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This example demonstrates cropped area that has <code>fixed position</code> and can't be moved. Although it isn't movable, other options remain available: resize, dragging, callbacks, aspect
ratios, modal etc.</p>
<div class="image-cropper-container">
<img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-not-movable img-fluid">
</div>
</div>
</div>
</div>
</div>
 
</div>
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Fixed Size</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This example demonstrates cropped area that has <code>fixed size</code> and can't be resized. Although it isn't resizable, other options remain available: moving, dragging, callbacks, aspect
ratios, modal etc.</p>
<div class="image-cropper-container">
<img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-not-resizable img-fluid">
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Disabled Autocrop</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">In this example cropping zone is not rendered automatically when initialize and available only on a new drag. By default, cropping zone is always <code>visible</code> and can be hidden by
setting <code>autoCrop</code> option to <code>false</code>.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-auto img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Disabled Image Drag</h5>
 </div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">In this example the user can't drag the image within container, but can drag cropping area.. By default, this feature is disabled and can be enabled by setting <code>movable</code> option
to <code>false</code>.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-drag img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Fixed 16:9 Ratio</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">Thix example demonstrates fixed <code>16:9</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified
using <code>aspectRatio</code> option.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-16-9 img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Fixed 4:3 Ratio</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">Thix example demonstrates fixed <code>4:3</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified
using <code>aspectRatio</code> option.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-4-3 img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Minimum Zone Size</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This example demonstrates the <code>minimum</code> width and height (px of original image) of the cropping zone. Better use this option only when you are sure that the image has this <code>minimum</code> width and height. By default, both values aren't specified.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-min img-fluid"></div>
</div>
</div>
</div>
</div>

</div>
<div class="col-sm-6">

<div class="card">
<div class="card-header">
<h5>Disabled Zoom</h5>
</div>
<div class="card-block">
<div class="panel panel-flat">
<div class="panel-body">
<p class="content-group">This example demonstrates the ability to disable <code>zoom</code> feature, it works in both options: disables zoom on scroll and zoom on touch. By default, image cropper is zoomable, to
disable zooming set <code>zoomable</code> option to <code>false</code>.</p>
<div class="image-cropper-container"><img src="../files/assets/images/modal/overflow.jpg" alt="" class="crop-zoomable img-fluid"></div>
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

<script type="text/javascript" src="../files/bower_components/switchery/js/switchery.min.js"></script>

<script src="../files/bower_components/cropper/js/cropper.min.js"></script>
<script src="../files/assets/pages/cropper/croper.js"></script>

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

<!-- Mirrored from colorlib.com//polygon/admindek/default/image-crop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:56:54 GMT -->
</html>
