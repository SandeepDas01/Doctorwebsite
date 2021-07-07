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
			
			$sql="select * from gallery  order by `gId` desc ";
			$result=query($sql);
			$i=1;
			$list='';
			while($resultRow = fetchArray($result))
			{
				 $list.='<div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
						<a class="thumbnail fancybox" rel="ligthbox" href="'.BASEURLFORIMAGES.$resultRow['gImagePath'].'">
							<img class="img-responsive" alt="" src="'.BASEURLFORIMAGES.$resultRow['gImagePath'].'" style="width:380px;height:250px;" />
					 		</a>
					</div> ';
				 
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
