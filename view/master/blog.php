
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>Blog Page</h2>
        <ul class="breadcumb">
          <li><a href="<?php echo BASEURL; ?>Home">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>Blog Page</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section class="blog-home sec-pdd-90 blog-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8 pull-left">
	  
	   <?php 
		  $sql= "select * from blog  order by bId desc";
		  $result=query($sql);
		  $i=1;
		  $list='';
		  while($resultRow = fetchArray($result))
		  {    
		  		$date=date_create($resultRow['date']);
			   	$da=date_format($date,"D");
			    $d=date_format($date,"d");
			  
			  $list.='<div class="single-blog-post">
						  <div class="img-box"> 
						   <img src="'.BASEURLFORIMAGES.$resultRow['imagePath'].'" style="width:100%;height:350px;max-width:700px;" alt="">
							<div class="overlay">
							  <div class="box">
								<div class="content">
								  <ul>
									<li><a href="'.BASEURL.'Blog-Details/'.$resultRow['bId'].'"><i class="fa fa-link"></i></a></li>
								  </ul>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="content-box">
							<div class="date-box">
							  <div class="inner">
								<div class="date"> <b>'.$d.'</b> '.$da.' </div>
								 
							</div>
							<div class="content"> <a href="'.BASEURL.'Blog-Details/'.$resultRow['bId'].'">
							  <h3>'.$resultRow['title'].'</h3>
							  </a>
							  <p>'.$resultRow['sDescription'].' </div>
						  </div>
						</div> </div>';
		  }
		  echo $list;
	  ?>
       
        </div>
     
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="side-bar-widget itm-mgn-top-50">
          <div class="single-sidebar-widget search">
            <form action="#">
              <input type="text" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="single-sidebar-widget category">
            <h3 class="title">Catagories</h3>
            <ul>
              <li><a href="#">Cleanings</a></li>
              <li><a href="#">Root</a></li>
              <li><a href="#">dentistry</a></li>
              <li><a href="#">Dental</a></li>
              <li><a href="#">implants</a></li>
            </ul>
          </div>
          <div class="single-sidebar-widget popular-post">
            <h3 class="title">Popular Posts</h3>
            <ul>
              <li>
                <div class="img-box">
                  <div class="inner-box"> <img src="assets/img/blog-page/s1.jpg" alt=""> </div>
                </div>
                <div class="content-box"> <a href="#">
                  <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                  </a> <span>17 jun, 2015</span> </div>
              </li>
              <li>
                <div class="img-box">
                  <div class="inner-box"> <img src="assets/img/blog-page/s2.jpg" alt=""> </div>
                </div>
                <div class="content-box"> <a href="#">
                  <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                  </a> <span>17 jun, 2015</span> </div>
              </li>
              <li>
                <div class="img-box">
                  <div class="inner-box"> <img src="assets/img/blog-page/s3.jpg" alt=""> </div>
                </div>
                <div class="content-box"> <a href="#">
                  <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                  </a> <span>17 jun, 2015</span> </div>
              </li>
              <li>
                <div class="img-box">
                  <div class="inner-box"> <img src="assets/img/blog-page/s4.jpg" alt=""> </div>
                </div>
                <div class="content-box"> <a href="#">
                  <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                  </a> <span>17 jun, 2015</span> </div>
              </li>
            </ul>
          </div>
          <div class="single-sidebar-widget archive">
            <h3 class="title">Archive</h3>
            <ul>
              <li><a href="#">October 2015</a></li>
              <li><a href="#">November 2015</a></li>
              <li><a href="#">December 2015</a></li>
              <li><a href="#">January 2016</a></li>
              <li><a href="#">February 2016</a></li>
            </ul>
          </div>
          <div class="single-sidebar-widget tags">
            <h3 class="title">Keywords</h3>
            <ul>
              <li><a href="#">Cleanings</a></li>
              <li><a href="#">Root</a></li>
              <li><a href="#">dentistry</a></li>
              <li><a href="#">Dental</a></li>
              <li><a href="#">implants</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
