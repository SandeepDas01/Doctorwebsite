
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>Our Doctors</h2>
        <ul class="breadcumb">
          <li><a href="<?php echo BASEURL; ?>Home">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>Our Doctors</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section class="sec-pdd-top-90 meet-doctors team-page">
  <div class="container">
    <div class="row">
	<?php 
				$sql= "select * from hiw order by hId desc";
				$result=query($sql);
				
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="single-team-member">
								  <div class="img-box"> <img src="'.BASEURLFORIMAGES.$resultRow['hImage'].'" style="272px;height:230px;" alt="">
									<div class="overlay">
									  <div class="box">
										<div class="content">
										  <ul>
											<li><a href="#"><i class="fa fa-plus"></i></a></li>
										  </ul>
										</div>
									  </div>
									</div>
								  </div>
								 <h3>'.$resultRow['hName'].'</h3>
								<span>'.$resultRow['hpost'].'</span>
							 	<p>'.substr($resultRow['hDesc'],0,50).'</p>
								 <a href="Profile/'.$resultRow['hId'].'" class="thm-btn">View Profile</a>  </div>
							  </div> ';
				}
				echo $list;
	   ?>
     
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
