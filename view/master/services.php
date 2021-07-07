	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Services</h2>
					<ul class="breadcumb">
						<li><a href="?action=main">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Services</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>
	
	<section class="sec-pdd-90 col-4">
		<div class="container">
			<div class="sec-title text-center">
				<h2>We Specialize In</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-specialize style">
						<div class="icon-box">
							<i class="flaticon-seo-consulting"></i>
						</div>
						<a href="#"><h3>Consilting</h3></a>
						<p>There are many variations of lorem <br>passagei of Lorem Ipsum available but the majority have </p>
						<a href="?action=service-details">Read More</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-specialize style itm-mgn-sm-top-30">
						<div class="icon-box">
							<i class="flaticon-badge"></i>
						</div>
						<a href="#"><h3>Prototype</h3></a>
						<p>There are many variations of lorem <br>passagei of Lorem Ipsum available but the majority have </p>
						<a href="?action=service-details">Read More</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-specialize style itm-mgn-top-30">
						<div class="icon-box">
							<i class="flaticon-premolar"></i>
						</div>
						<a href="#"><h3>Implementing</h3></a>
						<p>There are many variations of lorem <br>passagei of Lorem Ipsum available but the majority have </p>
						<a href="?action=service-details">Read More</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-specialize style itm-mgn-top-30">
						<div class="icon-box">
							<i class="flaticon-smile"></i>
						</div>
						<a href="#"><h3>Happy Smiling</h3></a>
						<p>There are many variations of lorem <br>passagei of Lorem Ipsum available but the majority have </p>
						<a href="?action=service-details">Read More</a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="offer-wrapper">
		<div class="has-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="single-offer left">
							<h3>FLORIDA SHOTS <span>immunization record</span></h3>
							<p>Tracking  immunizations has never been easier or more secure with Florida SHOTS™. To print your child's record, you will need </p>
							<a href="#" class="thm-btn">Print Now</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-offer right">
							<h3>We Accpet Most Insurance</h3>
							<p>Lorem Ipsum is dummy text  printing and typesetting industry. Lorem Ipsum has been the industry's of type and scrambled </p>
							<a href="#">Use Our Insurance Checker <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home-serivce sec-pdd-90">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Our Service</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row">
             <?php
			 	$sql= "select * from services order by sId desc";
				$result=query($sql);
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<div class="col-md-4 col-sm-6">
								<div class="single-service-home">
									<div class="icon-box">
										<div class="inner-box">
										 <img src="'.BASEURLFORIMAGES.$resultRow['hImage'].'" style="width: 45px;height: 45px;border-radius: 100%;
"/>
										</div>
									</div>
									<div class="content">
										<h3>'.$resultRow['sName'].'</h3>
										<p>There are many variations of lorem <br>passagei of Lorem Ipsum available <br> but the majority have </p>
										<a href="'.BASEURL.'Service-Details/'.$resultRow['sId'].'">Read More</a>
									</div>
								</div>
							</div> ';
				}
				echo $list;
			?>
			 
			</div>
		</div>
	</section>

	<section class="sec-pdd-bot-90 faq-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="sec-title style-two">
						<h2>Why Choose us?</h2>
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<div class="accrodion-grp" data-grp-name="faq-accrodion">
						<div class="accrodion active">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">We are always carefull to our patient and service </span>
								</h4>
							</div>
							<div class="accrodion-content">
								<p>Lorem Ipsum is simply du my text of the pritin industry. Lorm Ipsum hasbeen the industry's standardsdummy text eversince the 1500s,  when an unknown printer</p>
								<p>took a galley of type and scramble it to make type specimen book. It has survived not only five centurie, but also the leap into</p>
							</div>
						</div>
						<div class="accrodion ">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">Book and appoinment with any specialist anytime</span>
								</h4>
							</div>
							<div class="accrodion-content">
								<p>Lorem Ipsum is simply du my text of the pritin industry. Lorm Ipsum hasbeen the industry's standardsdummy text eversince the 1500s,  when an unknown printer</p>
								<p>took a galley of type and scramble it to make type specimen book. It has survived not only five centurie, but also the leap into</p>
							</div>
						</div>
						<div class="accrodion ">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">We offer lot of service in a best price</span>
								</h4>
							</div>
							<div class="accrodion-content">
								<p>Lorem Ipsum is simply du my text of the pritin industry. Lorm Ipsum hasbeen the industry's standardsdummy text eversince the 1500s,  when an unknown printer</p>
								<p>took a galley of type and scramble it to make type specimen book. It has survived not only five centurie, but also the leap into</p>
							</div>
						</div>
						<div class="accrodion ">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">Online payment seystem with different method</span>
								</h4>
							</div>
							<div class="accrodion-content">
								<p>Lorem Ipsum is simply du my text of the pritin industry. Lorm Ipsum hasbeen the industry's standardsdummy text eversince the 1500s,  when an unknown printer</p>
								<p>took a galley of type and scramble it to make type specimen book. It has survived not only five centurie, but also the leap into</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-md">
					<div class="img-masonary">
						<div class="img-w1">
							<img src="assets/img/faq/1.jpg" height="450" width="280" alt="">
						</div>
						<div class="img-w1 img-h1">
							<img src="assets/img/faq/2.jpg" height="450" width="280" alt="">
						</div>
						<div class="img-w1 img-h1">
							<img src="assets/img/faq/3.jpg" height="450" width="280" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php   include("view/common/footer.php")?>