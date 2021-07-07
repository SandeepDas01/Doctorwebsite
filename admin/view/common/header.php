<!DOCTYPE html>

<html lang="en">
   

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<title><?php echo SITENAME; ?> | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="assets/css/my-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
<!-- BEGIN HEADER INNER -->
<div class="page-header-inner ">
<!-- BEGIN LOGO -->
<div class="page-logo"> <a href="?action=home"> <img   src="assets/images/logo.png" alt="fitness" style="padding-top: 7%;width: 100%;" class="logo-default" /> </a>
  <div class="menu-toggler sidebar-toggler"> <span></span> </div>
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> <span></span> </a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
<ul class="nav navbar-nav pull-right">
<li class="dropdown dropdown-user"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img alt="" class="img-circle" src="<?php echo $_SESSION['fitnessimage']; ?>" /> <span class="username username-hide-on-mobile"> <?php echo $_SESSION['fitnessSession']; ?> </span> <i class="fa fa-angle-down"></i> </a>
  <ul class="dropdown-menu dropdown-menu-default">
    <li> <a href="?action=myProfile"> <i class="icon-user"></i> My Profile </a> </li>
    <li> <a href="?action=logout"> <i class="icon-key"></i> Log Out </a> </li>
  </ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
<!-- BEGIN QUICK SIDEBAR TOGGLER -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-quick-sidebar-toggler"> <a href="javascript:;" class="dropdown-toggle"> <i class="icon-logout"></i> </a> </li>
</div>
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
  <!-- BEGIN SIDEBAR -->
  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
  <div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
      <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
      <li class="sidebar-toggler-wrapper hide">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler"> <span></span> </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
      </li>
      <li class="nav-item start open  <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="home")){ echo "active";} ?> "> <a href="?action=home" > <i class="icon-home"></i> <span class="title">Dashboard</span> <span class="selected"></span><span class="arrow open"></span> </a> </li>
      <li class="nav-item <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="sliderMaster" ||   $_REQUEST['action']=="testimonialsMaster" ||   $_REQUEST['action']=="serviceNameMaster"  ||   $_REQUEST['action']=="metaTagMaster" ||   $_REQUEST['action']=="hiwMaster" || $_REQUEST['action']=="addNewhiw" || $_REQUEST['action']=="clientsMaster"  || $_REQUEST['action']=="forumMaster" || $_REQUEST['action']=="logoMaster" || $_REQUEST['action']=="forumCategoryMaster" || $_REQUEST['action']=="pageMaster")){ echo " active";} ?>" > 
      <a href="javascript:void(0);" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">CMS</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="sliderMaster")){ echo "class='active'";} ?>> <a href="?action=sliderMaster"> <i class="fa fa-folder-open"></i>Slider Master</a> </li>
          <li <?php  if( isset($_REQUEST['action']) && ($_REQUEST['action']=="serviceNameMaster" || $_REQUEST['action']=="addNewServices")){ echo "class='active'";} ?>> <a href="?action=serviceNameMaster"> <i class="fa fa-folder-open"></i>Services</a> </li>
          <li <?php if( isset($_REQUEST['action']) && ($_REQUEST['action']=="metaTagMaster" || $_REQUEST['action']=="updatemetaTagMaster")){ echo "class='active'";} ?>> <a href="?action=metaTagMaster"> <i class="fa fa-folder-open"></i>Meta Tag </a> </li>
          <li <?php if( isset($_REQUEST['action']) && ($_REQUEST['action']=="hiwMaster" || $_REQUEST['action']=="addNewhiw")){ echo "class='active'";} ?>> <a href="?action=hiwMaster"> <i class="fa fa-folder-open"></i>Team</a> </li>
          <li <?php if( isset($_REQUEST['action']) && ($_REQUEST['action']=="pageMaster" || $_REQUEST['action']=="updatePageMaster")){ echo "class='active'";} ?>> <a href="?action=pageMaster"> <i class="fa fa-folder-open"></i>Pages</a> </li>
        </ul>
      </li>
	  
      <li class="nav-item <?php if( isset($_REQUEST['action']) && ($_REQUEST['action']=="blogMaster" || $_REQUEST['action']=="commentsMaster" || $_REQUEST['action']=="addNewPost"  || $_REQUEST['action']=="addNewBlogCategory" )){ echo " active";} ?>" > <a href="javascript:void(0);" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">Blog Master</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li class="nav-item <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="blogMaster")){ echo " active";} ?> "> <a href="?action=blogMaster"> <i class="fa fa-folder-open"></i>Post Master</a> </li>
          <li class="nav-item <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="commentsMaster")){ echo " active";} ?> "> <a href="?action=commentsMaster"> <i class="fa fa-folder-open"></i>Comments Master</a> </li>
        </ul>
      </li>
	  
     <li class="nav-item <?php   if( isset($_REQUEST['action']) && ($_REQUEST['action']=="galleryMaster"  || $_REQUEST['action']=="addNewGallery" || $_REQUEST['action']=="updateGalleryImage"  || $_REQUEST['action']=="video"  )){ echo " active ";} ?> " > <a href="javascript:void(0);" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">Gallery</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
           <li <?php   if(isset($_REQUEST['action']) && ($_REQUEST['action']=="galleryMaster")){ echo "class='active'";} ?>> <a href="?action=galleryMaster"> <i class="fa fa-folder-open"></i>Gallery Images</a> </li>
           <li <?php  if(isset($_REQUEST['action']) && ($_REQUEST['action']=="video")){ echo "class='active'";} ?>> <a href="?action=video"> <i class="fa fa-folder-open"></i>Video Gallery</a> </li>
        </ul>
      </li>
	  <li class="nav-item <?php if( isset($_REQUEST['action']) && ($_REQUEST['action']=="contactQuery" || $_REQUEST['action']=="aptQuery" )){ echo "  active";} ?>" > <a href="javascript:void(0);" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">Queries</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="contactQuery")){ echo "class='active'";} ?>> <a href="?action=contactQuery"> <i class="fa fa-folder-open"></i>Contact-Query</a> </li>
           <li <?php if(isset($_REQUEST['action']) && ($_REQUEST['action']=="aptQuery")){ echo "class='active'";} ?>> <a href="?action=aptQuery"> <i class="fa fa-folder-open"></i>Appointment-Query</a> </li>
        </ul>
      </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
  </div>
  <!-- END SIDEBAR -->
</div>
