<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style>
.gallery1 {
	display: inline-block;
	margin-top: 20px;
}
</style>
<section class="inner-header">
<div class="container">
  <div class="row">
    <div class="col-md-12 sec-title colored text-center">
      <h2>Gallery</h2>
      <ul class="breadcumb">
        <li><a href="<?php echo BASEURL; ?>Home">Home</a></li>
        <li><i class="fa fa-angle-right"></i></li>
        <li><span>Gallery</span></li>
      </ul>
      <span class="decor"><span class="inner"></span></span> </div>
  </div>
</div>
</section>
<section class="sec-pdd-top-90 meet-doctors team-page">
  <div class="container">
    <div class="row">
      <div class='list-group gallery1'>
        <?php
			$sql="select * from video where status=1 ORDER BY Date Desc LIMIT 3";
			$videoList=query($sql);
			$list="";
			$i=1;
			$firstSong="";
			$path;
			$link;
			while($resultRow = fetchArray($videoList))
			{
				$path=$resultRow['videoPath'];
		 		$link=$resultRow['videoLink'];
				
				if($path=="")
				{
					$list.='  <div class="col-sm-6">
							 		'.$link.'
						 	  </div>';
			 	}
				else
				{
					$list.='  <div class="col-sm-6">
							 
									<video width="100%" height="312"  controls>
										<source  src="'.$path.'" type="video/mp4">
										<source src="'.$path.'" type="video/ogg">
										Your browser does not support the video tag.
									</video>
								 
							  </div>';
			 	}
	 		}
		 echo $list;
 ?>
      </div>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
<script>
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
</script>
