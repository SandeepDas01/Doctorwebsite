
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>Doctor Profile</h2>
        <ul class="breadcumb">
          <li><a href="<?php echo BASEURL; ?>Home">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>Doctor Profile</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section class="doctor-profile sec-pdd-90">
  <div class="container">
    <div class="row">
		<?php 
				$tId=$_REQUEST['tId'];
				$sql= "select * from hiw where hId=".$tId;
				$result=query($sql);
				
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<div class="col-md-5"> 
								<img src="'.BASEURLFORIMAGES.$resultRow['hImage'].'" style="width:100%;" alt=""> 
							</div>
							<div class="col-md-7 single-team-member item-margin-top-40">
								<h3>'.$resultRow['hName'].'</h3>
								<span>'.$resultRow['hpost'].'</span>
							 	<p>'.$resultRow['hDesc'].'</p>
							</div>';
				}
				echo $list;
	   ?>
        
    </div>
  </div>
</section>
<section class="home-appointment-form doctor-profile no-bg">
  <div class="container">
    <hr>
    <div class="heading">
      <h3>Make an Appoinment With Dr. Rashed kabir ? <br>
        Book Now!!</h3>
    </div>
    <div class="form-grp clearfix">
      <form action="#" class="clearfix contact-form" id="appointment-form">
        <div class="single-form">
          <input type="text" placeholder="Full Name" name="name">
        </div>
        <div class="single-form">
          <input type="text" placeholder="Email" name="email">
        </div>
        <div class="single-form">
          <input type="text" placeholder="Select Date" name="date" class="date-picker">
        </div>
        <div class="single-form">
          <div class="select-input-wrapper">
            <select class="select-input" name="category">
              <option value="" selected="selected">Select Category</option>
              <option value="General Motors">Primary Health Care</option>
              <option value="Land Rover">Dental Care</option>
              <option value="Lexus">Neurology</option>
              <option value="Lincoln">Kidney Treatment</option>
              <option value="Lincoln">Eye Treatment</option>
            </select>
          </div>
        </div>
        <div class="single-form">
          <button type="submit">Book Now</button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
