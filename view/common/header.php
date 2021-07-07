<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Om Dental</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- master stylesheet -->
<link rel="stylesheet" href="<?php echo BASEURL; ?>/assets/css/style.css">
<!-- responsive stylesheet -->
<link rel="stylesheet" href="<?php echo BASEURL; ?>/assets/css/responsive.css">
</head>
<body>
<section class="top-bar">
  <div class="container">
    <div class="left-text pull-left">
      <p><span>Opening Hours :</span> Monday to Saturday - 8am to 5pm</p>
    </div>
    <!-- /.left-text -->
    <div class="social-icons pull-right">
      <ul>
        <li><a href="https://www.facebook.com/Om-dental-medical-119583118769717/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>
    <!-- /.social-icons -->
  </div>
</section>
<!-- /.top-bar -->
<header class="header">
  <div class="container">
    <div class="logo pull-left"> <a href="<?php echo BASEURL; ?>Home"> <img src="<?php echo BASEURL; ?>/assets/img/resources/logo.png" alt="Awesome Image"/> </a> </div>
    <div class="header-right-info pull-right clearfix">
      <div class="single-header-info">
        <div class="icon-box">
          <div class="inner-box"> <i class="flaticon-symbol"></i> </div>
        </div>
        <div class="content">
          <h3>EMAIL</h3>
          <p>drmedhavisharma@gmail.com</p>
        </div>
      </div>
      <div class="single-header-info">
        <div class="icon-box">
          <div class="inner-box"> <i class="flaticon-technology"></i> </div>
        </div>
        <div class="content">
          <h3>Call Now</h3>
          <p><b>(+91)8955031002</b></p>
        </div>
      </div>
      <div class="single-header-info"> <a href="Appointment" class="thm-btn">Appointment</a> </div>
    </div>
  </div>
</header>
<!-- /.header -->
<nav class="mainmenu-area stricky">
  <div class="container">
    <div class="navigation pull-left">
      <div class="nav-header">
        <ul>
          <li> <a href="<?php echo BASEURL; ?>Home">Home</a> </li>
          <li><a href="<?php echo BASEURL; ?>About">About</a></li>
          <li class="dropdown"> <a href="<?php echo BASEURL; ?>Services">Services</a>
            <ul class="submenu">
              <?php
            $sql= "select * from services order by sId desc";
				$result=query($sql);
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<li>
								<a href="'.BASEURL.'Service-Details/'.$resultRow['sId'].'">
								 '.$resultRow['sName'].'</a>
							</li>';
				}
				echo $list;
			?>
            </ul>
          </li>
          <li> <a href="<?php echo BASEURL; ?>Team">Team</a> </li>
          <li> <a href="<?php echo BASEURL; ?>Blog">Blog</a> </li>
          <li class="dropdown"><a href="#">Gallery</a>
		    <ul class="submenu">
			 <li class="dropdown"><a href="<?php echo BASEURL; ?>Gallery">PhotoGallery</a></li>
			  <li class="dropdown"><a href="<?php echo BASEURL; ?>Video-Gallery"> VideoGallery</a></li>
			</ul>
		  </li>
          <li><a href="<?php echo BASEURL; ?>?action=pricing-1">Price</a></li>
          <li><a href="<?php echo BASEURL; ?>Contact-Us">Contact Us</a></li>
        </ul>
      </div>
      <div class="nav-footer">
        <button><i class="fa fa-bars"></i></button>
      </div>
    </div>
    <div class="search-box pull-right">
      <form action="#">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<?php if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}?>
<!-- /.mainmenu-area -->
