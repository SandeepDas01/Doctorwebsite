
<div class="row">
  <section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
      <ul>
        <?php
	 	$sql="select * from slider where status=1";
		$result=query($sql);
		$list="";
	
		while($row=fetchArray($result))
		{
		 $list.='
	 		
				<li data-transition="parallaxvertical">
					<img src="admin/'.$row["imagePath"].'"  alt="" width="1810" height="505" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 small" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="230" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Your Health
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="270" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1000">
						Our First Priority
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="353" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1500">
						We Serve Better than Any Other
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-p" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="414" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2000">
						Not sure what is going on, come in Today for a Symptom <br>Check up, There are many kind of process!!
				    </div>
					<div class="tp-caption sfl tp-resizeme" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="479" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2300">
						<a href="#" class="thm-btn">Call us Today</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme" 
				        data-x="left" data-hoffset="185" 
				        data-y="top" data-voffset="479" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div>
				</li>
			';
		}
		echo $list;
		?>
      </ul>
    </div>
  </section>
  <section class="call-to-action home-one">
    <div class="container-fluid">
      <div class="clearfix">
        <div class="call-to-action-corner col-md-4" style="background-image: url(assets/img/call-to-action/left-box-bg.jpg);">
          <div class="single-call-to-action open-hours">
            <div class="icon-box">
              <div class="inner-box"> <i class="flaticon-square"></i> </div>
            </div>
            <div class="content-box">
              <h3>OPEN HOURS</h3>
              <ul>
                <li><span>Monday - Friday</span> <span>9am - 10pm</span></li>
                <li><span>Sunday</span> <span>Closed</span></li>
                <li><span>Saturday</span> <span>Closed</span></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="call-to-action-center col-md-4" style="background-image: url(assets/img/call-to-action/center-box-bg.jpg);">
          <div class="single-call-to-action">
            <div class="icon-box">
              <div class="inner-box"> <i class="flaticon-day-15-on-calendar"></i> </div>
            </div>
            <div class="content-box">
              <h3>Appointment</h3>
              <p>Appointment are available, call us <br>
                today or book a appoinment</p>
              <a href="appointment.html" class="thm-btn inverse">Book Now</a> </div>
          </div>
        </div>
        <div class="call-to-action-corner col-md-4" style="background-image: url(assets/img/call-to-action/right-box-bg.jpg);">
          <div class="single-call-to-action">
            <div class="icon-box">
              <div class="inner-box"> <i class="flaticon-coin-of-dollar"></i> </div>
            </div>
            <div class="content-box">
              <h3>OLINE BILL SYSTEM</h3>
              <p>he opportunity to conduct research<br>
               with faculty mentors is <br>
                a major reason why students choose to attend the University </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-pdd-90">
    <div class="container">
      <div class="sec-title text-center">
        <h2>We Specialize In</h2>
        <p>Lorem ipsum is a dummy text it will use for subtitle here</p>
        <span class="decor"><span class="inner"></span></span> </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-specialize text-center">
            <div class="image-box"> <img src="assets/img/resources/featured-1.jpg" alt=""> </div>
            <div class="content">
              <h3>Consilting</h3>
             <p>he opportunity to conduct research<br>
               with faculty mentors is <br>
                a major reason why students choose to attend the University </p>
              <a href="?action=service-details" class="thm-btn">Read More</a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-sm-top-30">
          <div class="single-specialize text-center">
            <div class="image-box"> <img src="assets/img/resources/featured-2.jpg" alt=""> </div>
            <div class="content">
              <h3>Prototype</h3>
             <p>he opportunity to conduct research<br>
               with faculty mentors is <br>
                a major reason why students choose to attend the University </p>
              <a href="?action=service-details" class="thm-btn">Read More</a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-top-30">
          <div class="single-specialize text-center">
            <div class="image-box"> <img src="assets/img/resources/featured-3.jpg" alt=""> </div>
            <div class="content">
              <h3>Implementing</h3>
             <p>he opportunity to conduct research<br>
               with faculty mentors is <br>
                a major reason why students choose to attend the University </p>
              <a href="?action=service-details" class="thm-btn">Read More</a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-top-30">
          <div class="single-specialize text-center">
            <div class="image-box"> <img src="assets/img/resources/featured-4.jpg" alt=""> </div>
            <div class="content">
              <h3>Happy Smiling</h3>
             <p>he opportunity to conduct research<br>
               with faculty mentors is <br>
                a major reason why students choose to attend the University </p>
              <a href="?action=service-details" class="thm-btn">Read More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="full-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden-md hidden-sm hidden-xs"> <img class="full-image pull-right" src="assets/img/resources/full-image-1.jpg" alt=""> </div>
        <div class="col-lg-6 col-md-12">
          <div class="full-sec-content">
            <div class="sec-title style-two">
              <h2>More about us</h2>
              <span class="decor"> <span class="inner"></span> </span> </div>
            <h3>We Provide Most Proffesional Dental & Medical Service Since 2006</h3>
            <!--Skills -->
            <div class="column Skill-column">
              <p> BDS,MDS [Operative dentistry & Endodontics]
Life member FODI,RACE ,MIDA
Associate professor Mahatma Gandhi Dental College and Hospital ,RIICO industrial area ,sitapura, Jaipur.
Description-  Dr. Medhavi sharma did his graduation from premier college of india KLE institute of dental sciences Belgaum in 2006.Dr.Medhavi is university rank holder through out in his graduation years.  After that he sharpened his clinical skills by completing internship from Government Dental college and Hospital, subhash nagar, Jaipur.Dr. Medhavi completed his masters degree in field of Operative dentistry and Endodontics in 2010 through all india post graduate entrance exam from DAV [C] Dental college Yamunanagar.Dr.Medhavi is associate professor at  Mahatma Gandhi Dental College and Hospital ,RIICO industrial area ,sitapura.</p>
			  
			  
            </div>
            <a href="about" class="thm-btn">Read More</a> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-serivce sec-pdd-90-85">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Our Service</h2>
        <p>Lorem ipsum is a dummy text it will use for subtitle here</p>
        <span class="decor"><span class="inner"></span></span> </div>
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
  <section class="offer-wrapper">
    <div class="has-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="single-offer left pdd-right">
              <h3>FLORIDA SHOTS <span>immunization record</span></h3>
              <p>Research at the College reflects the complex nature of today's health care needs. Many different approaches are employed, ranging from tissue engineering to public health research.  </p>
              <a href="#" class="thm-btn">Print Now</a> </div>
          </div>
          <div class="col-md-6">
            <div class="single-offer right pdd-left">
              <h3>We Accpet Most Insurance</h3>
              <p>The Dental Student Research Program is directed by Dr. Teresa Marshall, professor in the Department of Preventive & Community Dentistry. Dr. Justine Kolker, associate professor in the Department of Operative Dentistry, supports the program as assistant director. </p>
              <a href="#">Use Our Insurance Checker <i class="fa fa-angle-double-right"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="department-section sec-pdd-90">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Our Department</h2>
        <p>Our dental research reflects innovations across the spectrum of diseases and oral health prevention: </p>
        <span class="decor"><span class="inner"></span></span> </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 company">
          <div class="company-tab">
            <ul class="nav nav-pills nav-justified">
              <li class="active"><a data-toggle="pill" href="#menu1">Normal Checkup</a></li>
              <li><a data-toggle="pill" href="#menu2">Oral Surgery</a></li>
              <li><a data-toggle="pill" href="#menu3">Dental Filling</a></li>
              <li><a data-toggle="pill" href="#menu4">Sealants</a></li>
            </ul>
            <div class="tab-content">
              <div id="menu1" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/featured-1.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Dental Implant</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-sm-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/featured-2.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Tooth Filling</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/featured-3.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Tooth Decay</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 itm-mgn-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/featured-4.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Tooth Filling</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-1.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Dental Surgery</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 itm-mgn-sm-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-2.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Cosmetic Surgery</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 itm-mgn-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-3.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Removal Teeth</h3>
                       <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="menu3" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-4.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Tooth-Colored</h3>
                       <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 itm-mgn-sm-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-5.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Tooth Filling</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="menu4" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-1.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Dental Surgery</h3>
                       <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 itm-mgn-sm-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-2.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Cosmetic Surgery</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 itm-mgn-top-30">
                    <div class="single-specialize text-center">
                      <div class="image-box"> <img src="assets/img/resources/dp-image-3.jpg" alt=""> </div>
                      <div class="content">
                        <h3>Removal Teeth</h3>
                        <p>The Office of Alumni Relations provides<br> services and assistance to dental and dental hygiene graduates. </p>
                        <a href="?action=service-details" class="thm-btn">Read More</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="sec-pdd-bot-90 faq-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="sec-title style-two">
            <h2>Why Choose us?</h2>
            <span class="decor"> <span class="inner"></span> </span> </div>
          <div class="accrodion-grp" data-grp-name="faq-accrodion">
            <div class="accrodion active">
              <div class="accrodion-title">
                <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">We are always carefull to our patient and service </span> </h4>
              </div>
              <div class="accrodion-content">
                <p>Whether your child’s feeling ill or just needs a routine physical or immunization, we are here to help. We take the time to get to know your </p>
                <p>family and understand your concerns, so we can all work together for your child’s health.</p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">Book and appoinment with any specialist anytime</span> </h4>
              </div>
             <div class="accrodion-content">
                <p>Whether your child’s feeling ill or just needs a routine physical or immunization, we are here to help. We take the time to get to know your </p>
                <p>family and understand your concerns, so we can all work together for your child’s health.</p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">We offer lot of service in a best price</span> </h4>
              </div>
             <div class="accrodion-content">
                <p>Whether your child’s feeling ill or just needs a routine physical or immunization, we are here to help. We take the time to get to know your </p>
                <p>family and understand your concerns, so we can all work together for your child’s health.</p>
              </div>
            </div>
            <div class="accrodion ">
              <div class="accrodion-title">
                <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">Online payment seystem with different method</span> </h4>
              </div>
             <div class="accrodion-content">
                <p>Whether your child’s feeling ill or just needs a routine physical or immunization, we are here to help. We take the time to get to know your </p>
                <p>family and understand your concerns, so we can all work together for your child’s health.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 hidden-md itm-mgn-top-50">
          <div class="img-masonary">
            <div class="img-w1"> <img src="assets/img/faq/1.jpg" height="450" width="280" alt=""> </div>
            <div class="img-w1 img-h1"> <img src="assets/img/faq/2.jpg" height="450" width="280" alt=""> </div>
            <div class="img-w1 img-h1"> <img src="assets/img/faq/3.jpg" height="450" width="280" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fact-counter-wrapper sec-pdd-90-85">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
          <h2>We are served since <b>35 years</b> <br>
            to our customer with trust and <br>
            we are happy</h2>
          <a href="#" class="thm-btn inverse">Be a part of us</a> </div>
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 itm-mgn-top-30">
          <div class="single-fact">
            <div class="icon-box"> <i class="flaticon-graduate-cap"></i> </div>
            <span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
            <p>Total Awards</p>
          </div>
          <div class="single-fact">
            <div class="icon-box"> <i class="flaticon-stethoscope"></i> </div>
            <span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">155</span>
            <p>Total Doctors</p>
          </div>
          <div class="single-fact">
            <div class="icon-box"> <i class="flaticon-smile"></i> </div>
            <span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">2200</span>
            <p>Total Beds</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-pdd-90 meet-doctors">
    <div class="container">
      <div class="sec-title text-left">
        <h2>Meet Our Doctors</h2>
        <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln </p>
        <span class="decor"><span class="inner"></span></span> </div>
      <div class="clearfix">
        <div class="team-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/1.jpg" alt="">
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
              <h3>Mike Rogers</h3>
              <span>CEO & Founder of dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln </p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/2.jpg" alt="">
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
              <h3>John Dogers</h3>
              <span>Implant Expert</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln </p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/3.jpg" alt="">
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
              <h3>Hansom Rob</h3>
              <span>Root Canals Dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln .</p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/4.jpg" alt="">
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
              <h3>Dr. Nicholas Fleming</h3>
              <span>Restorative Dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln .</p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/1.jpg" alt="">
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
              <h3>Mike Rogers</h3>
              <span>CEO & Founder of dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln .</p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/2.jpg" alt="">
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
              <h3>John Dogers</h3>
              <span>Implant Expert</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln </p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/3.jpg" alt="">
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
              <h3>Hansom Rob</h3>
              <span>Root Canals Dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln .</p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
          <div class="item">
            <div class="single-team-member">
              <div class="img-box"> <img src="assets/img/team/4.jpg" alt="">
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
              <h3>Dr. Nicholas Fleming</h3>
              <span>Restorative Dentist</span>
              <div class="icon-box">
                <div class="content">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <p>The MIT Pharmacy serves the entire Institute community—on campus and at Lincoln .</p>
              <a href="?action=doctor-profile" class="thm-btn">View Profile</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Testimonial Section-->
  <section class="sec-pdd-90-85 testimonial-section testimonials-wrapper">
    <div class="container">
      <div class="sec-title colored text-center">
        <h2>Testimonials</h2>
        <span class="decor"> <span class="inner"></span> </span> </div>
      <!--Three Item Carousel-->
      <div class="three-item-carousel">
        <!--Testimonial Block One-->
        <div class="testimonial-block-one">
          <div class="inner-box">
            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
            <div class="text">The Love Boat promises something for everyone now to beat every of just one and his Skipper too will do their in their tropic island nest.</div>
            <!--Author Info-->
            <div class="author-info">
              <div class="author-image"> <img src="assets/img/resources/author-1.jpg" alt="" /> </div>
              <h3>ANGEL JONES</h3>
              <div class="designation">Execfise</div>
              <!--Rating-->
              <div class="rating"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </div>
            </div>
          </div>
        </div>
        <!--Testimonial Block One-->
        <div class="testimonial-block-one">
          <div class="inner-box">
            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
            <div class="text">Routine dental care is not covered by the MIT Student or Affiliate Health Plans. A few special procedures are covered by Choice Plan, MIT Student Extended .</div>
            <!--Author Info-->
            <div class="author-info">
              <div class="author-image"> <img src="assets/img/resources/author-2.jpg" alt="" /> </div>
              <h3>MATT MORGAN</h3>
              <div class="designation">Forge</div>
              <!--Rating-->
              <div class="rating"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </div>
            </div>
          </div>
        </div>
        <!--Testimonial Block One-->
        <div class="testimonial-block-one">
          <div class="inner-box">
            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
            <div class="text">emergency room. If your problem is urgent but not serious (e.g., chipped tooth, tooth pain, lost crowns, broken dentures or fillings), we will see you as soon as possible, usually the next day. </div>
            <!--Author Info-->
            <div class="author-info">
              <div class="author-image"> <img src="assets/img/resources/author-3.jpg" alt="" /> </div>
              <h3>PAUL VINCENT</h3>
              <div class="designation">Massi</div>
              <!--Rating-->
              <div class="rating"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Testimonial Section-->
  <section class="blog-home sec-pdd-90">
    <div class="container">
      <div class="sec-title text-center">
        <h2>Latest News</h2>
        <p>If you have an urgent dental problem or emergency after hours or on weekends.</p>
        <span class="decor"> <span class="inner"></span> </span> </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-blog-post">
            <div class="img-box"> <img src="assets/img/blog/1.jpg" alt="">
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li><a href="?action=blog-details"><i class="fa fa-link"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date"> <b>24</b> apr </div>
                  <div class="comment"> <i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 8 </div>
                </div>
              </div>
              <div class="content"> <a href="?action=blog-details">
                <h3>Lates blog post with image</h3>
                </a>
                <p>If you have an urgent dental problem or emergency after hours or on weekends</p>
                <span>Tag: <a href="?action=blog-details">doctor, medicine</a></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-blog-post itm-mgn-sm-top-30">
            <div class="img-box"> <img src="assets/img/blog/2.jpg" alt="">
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li><a href="?action=blog-details"><i class="fa fa-link"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date"> <b>24</b> apr </div>
                  <div class="comment"> <i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 8 </div>
                </div>
              </div>
              <div class="content"> <a href="?action=blog-details">
                <h3>Lates blog post with image</h3>
                </a>
                <p>If you have an urgent dental problem or emergency after hours or on weekends. </p>
                <span>Tag: <a href="?action=blog-details">doctor, medicine</a></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-0 itm-mgn-top-30">
          <div class="single-blog-post">
            <div class="img-box"> <img src="assets/img/blog/3.jpg" alt="">
              <div class="overlay">
                <div class="box">
                  <div class="content">
                    <ul>
                      <li><a href="?action=blog-details"><i class="fa fa-link"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-box">
              <div class="date-box">
                <div class="inner">
                  <div class="date"> <b>24</b> apr </div>
                  <div class="comment"> <i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 8 </div>
                </div>
              </div>
              <div class="content"> <a href="?action=blog-details">
                <h3>Lates blog post with image</h3>
                </a>
                <p>If you have an urgent dental problem or emergency after hours or on weekends. </p>
                <span>Tag: <a href="?action=blog-details">doctor, medicine</a></span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php   include("view/common/footer.php")?>
