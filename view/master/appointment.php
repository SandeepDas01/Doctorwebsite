

	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Appointment</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Appointment</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

	
	<section class="sec-pdd-90 contact-content appointment-content">
		<div class="container">
			<img src="assets/img/resources/appointment.jpg" alt="Awesome Image"/>
			<div class="title-box">
				<span>It’s easy and fast</span>
				<h3>Make an Appoinment</h3>
				<p>Lorem ipsum dolor sit amet, eum illum dolore concludaturque ex, ius latine adipisci no. Pro at nullam laboramus definitiones. Mandamus conceptam omittantur cu cum. Brute appetere it scriptorem ei eam, ne vim velit novum nominati. Causae volutpat percipitur at sed ne.</p>				
			</div>
			
			<form action="" method="post" id="appointment-page-form" class="contact-form row" >
                     <input type="hidden" name="action" value="appoinmentDr" />
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Full Name">
							<input type="date" class="date-picker" placeholder="Select Appointment Date" name="date" >
							<input type="text" name="phone" placeholder="Phone">
						</div>
						<div class="col-md-6">
							<input type="text" name="email" placeholder="Email">
							
							<div class="clearfix half-wrapper">
								<div class="col-md-6 p0 half">
									<div class="select-input-wrapper">
										<select class="select-input" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>										
								</div>
								<div class="col-md-6 p0 half">
									<input type="date" class="date-picker" placeholder="Date Of Birth" name="dateOfBirth" >
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-5">
					<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
				</div>
				<div class="col-md-12"><button type="submit" ">Book Now</button></div>
			</form>
		</div>
	</section>
	
	
	<link type="text/css" href="assets/css/jquery.toastmessage.css" rel="stylesheet"/>
<script src="assets/js/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>
<script language="javascript" type="text/javascript">
	
function viewSliderImages()
{
	window.location.href="?action=appointment";
}
 
