<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>Blog Details</h2>
        <ul class="breadcumb">
          <li><a href="<?php echo BASEURL; ?>Home">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>Blog Details</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section class="blog-home sec-pdd-90 blog-page blog-details">
  <div class="container">
    <div class="row">
      <div class="col-md-8 pull-left">
        <div class="single-blog-post">
          <?php 
		
		  $bId=$_REQUEST['bId'];
		  $sql= "select * from blog  where bId=".$bId;
		  $result=query($sql);
		  $i=1;
		  $list='';
		  while($resultRow = fetchArray($result))
		  {    
		  		$date=date_create($resultRow['date']);
			   	$da=date_format($date,"D");
			    $d=date_format($date,"d");
			  
			  $list.='<div class="img-box">
			  			<img src="'.BASEURLFORIMAGES.$resultRow['imagePath'].'" style="width:100%;height:350px;max-width:700px;" alt=""> </div>
					  	<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date"> <b>'.$d.'</b> '.$da.' </div>
								</div>
						 	</div>
							<div class="content">  
						  		<h3>'.$resultRow['title'].'</h3>
						 		<p>'.$resultRow['description'].'</p>
						  	</div>
					  </div> 
				';
		  }
		  echo $list;
	  ?>
        </div>
        <div class="admin-info">
          <div class="img-box">
            <div class="inner-box"> <img src="<?php echo BASEURL;  ?>assets/img/blog-page/admin.jpg" alt="Awesome Image"/> </div>
          </div>
          <div class="content">
            <h3>Rashed kabir</h3>
            <p>Planning intensifies for our $61 million building transformation.</p>
            <ul class="social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="side-bar-widget itm-mgn-top-50">
          <div class="single-sidebar-widget search">
            <form action="#">
              <input type="text" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
