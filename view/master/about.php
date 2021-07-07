
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>About Us</h2>
        <ul class="breadcumb">
          <li><a href="index.html">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>About Us</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section class="sec-pdd-90 about-content full-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="full-sec-content">
          <div class="sec-title style-two">
            <h2>More about us</h2>
            <span class="decor"> <span class="inner"></span> </span> </div>
          <h3>We Provide Most Proffesional Service Since 1978</h3>
          <!--Skills -->
          <div class="column Skill-column">
            <?php
				$sql="SELECT * FROM `pages` ";
			 	$result=query($sql);
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<p>'.$resultRow['pageContent'].'</p>';
				}
				echo $list;
			?>			
             </div>
        </div>
      </div>
      <div class="col-md-6 hidden-md text-right itm-mgn-top-50"> <img src="assets/img/resources/about-1.jpg" alt="Awesome Image"/> </div>
    </div>
  </div>
</section>
<section class="sec-pdd-bot-80 col-4">
  <div class="container">
    <div class="sec-title text-center">
      <h2>We Specialize In</h2>
      <p>The strength of our relationships with the university, the state, the profession, and with academic </p>
      <span class="decor"><span class="inner"></span></span> </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-specialize style">
          <div class="icon-box"> <i class="flaticon-seo-consulting"></i> </div>
          <a href="#">
          <h3>Consilting</h3>
          </a>
          <p>With the arrival of the 21st century, our <br>
		  curriculum reflects new knowledge, technical excellence,</p>
          <a href="service-details.html">Read More</a> </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-specialize style itm-mgn-sm-top-30">
          <div class="icon-box"> <i class="flaticon-badge"></i> </div>
          <a href="#">
          <h3>Prototype</h3>
          </a>
          <p>We are one of only a few dental schools in the nation to <br>
		  offer advanced education in all ADA-recognized dental specialties.</p>
          <a href="service-details.html">Read More</a> </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-specialize style itm-mgn-top-30">
          <div class="icon-box"> <i class="flaticon-premolar"></i> </div>
          <a href="#">
          <h3>Implementing</h3>
          </a>
          <p>Our research collaborations involve almost every college at The University<br>
		  of Iowa, other institutions in this country and abroad, and major oral health care companies. </p>
          <a href="service-details.html">Read More</a> </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-specialize style itm-mgn-top-30">
          <div class="icon-box"> <i class="flaticon-smile"></i> </div>
          <a href="#">
          <h3>Happy Smiling</h3>
          </a>
          <p>By linking education with clinical care and research, the College<br> 
		  of Dentistry is anticipating these needs, and is preparing dentistry for the future.</p>
          <a href="service-details.html">Read More</a> </div>
      </div>
    </div>
  </div>
</section>
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
              <p>For more than 125 years, the College of Dentistry has been an integral part of The University of Iowa and a resource to the state of Iowa. The great majority of Iowa dentists are alumni of the College of Dentistry. The strength of our relationships with the university, the state, the profession, and with academic colleagues, alumni, practitioners, and industry, has enabled us to become one of the top dental schools in the United States. Our connections involving graduate education and research extend well beyond national boundaries, and give the College of Dentistry a reputation that is recognized worldwide.</p>
              <p>Planning intensifies for our $61 million building transformation. The main phases will include a 35,000-square-foot addition; renovation/transformation of all of the clinics; renovation of the research areas; and upgrades of infrastructure (e.g., heating and cooling). This is a pivotal moment in the history of the College of Dentistry. Alumni, friends, The University of Iowa, and the state of Iowa are investing in the oral health of Iowans and a first-rate dental college.</p>
            </div>
          </div>
          <div class="accrodion ">
            <div class="accrodion-title">
              <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">Book and appoinment with any specialist anytime</span> </h4>
            </div>
            <div class="accrodion-content">
              <p>We are one of only a few dental schools in the nation to offer advanced education in all ADA-recognized dental specialties. Every discipline has at least one national leader. </p>
              <p>Outreach programs focus on children, special needs patients and seniors, including our national award-winning Geriatric Mobile Dental Unit.</p>
            </div>
          </div>
          <div class="accrodion ">
            <div class="accrodion-title">
              <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">We offer lot of service in a best price</span> </h4>
            </div>
            <div class="accrodion-content">
              <p>Our research collaborations involve almost every college at The University of Iowa, other institutions in this country and abroad, and major oral health care companies. </p>
              <p>This scholarly environment nurtures the largest dental student research program in the nation, and supports a number of federally funded</p>
            </div>
          </div>
          <div class="accrodion ">
            <div class="accrodion-title">
              <h4> <span class="decor"> <span class="inner"></span> </span> <span class="text">Online payment seystem with different method</span> </h4>
            </div>
            <div class="accrodion-content">
              <p>interdisciplinary research centers involving faculty from departments across the campus. Remaining current in a world of increasingly complex cases and constantly evolving technology will present a continuing challenge </p>
              <p>for future practitioners. By linking education with clinical care and research, the College of Dentistry is anticipating these needs, and is preparing dentistry for the future.</p>
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
<section class="sec-pdd-90 meet-doctors ">
  <div class="container">
    <div class="sec-title text-left">
      <h2>Meet Our Doctors</h2>
      <p>Over 25 new faculty have been appointed to complement an experienced senior faculty. </p>
      <span class="decor"><span class="inner"></span></span> </div>
    <div class="clearfix">
      <div class="team-carousel owl-carousel owl-theme">
        <?php 
				$sql= "select * from hiw order by hId desc";
				$result=query($sql);
				
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<div class="item">
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
								<a href="Profile/'.$resultRow['hId'].'" class="thm-btn">View Profile</a> </div>
							</div> ';
				}
				echo $list;
	   ?>
      </div>
    </div>
  </div>
</section>
<section class="sec-pdd-90-80 testimonials-wrapper">
  <div class="container">
    <div class="sec-title colored text-center">
      <h2>Testimonials</h2>
      <span class="decor"> <span class="inner"></span> </span> </div>
    <div class="testimonaials-carousel owl-carousel owl-theme">
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>I booked my appointment with one of the dentist clinics in Noida, Dentedge Dental Care for teeth braces. I have read reviews of this clinic before visiting the agency hence my expectation was high. Fortunately, the dentist @ Dentedge lived up to my expectations. I would recommend this clinic to others.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Dentedge...what to say about them, i have visited this clinic, a week ago, to get dental implants. I went, and trust me I am very much impressed with their treatment. I am very thankful to them and recommend others also to visit... plus their fee is affordable.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>I recently visited Dentedge Dental Care Clinic for dental surgery. I am very much satisfied with the staff and dentists. I booked my appointment through their website online 2 days back. The entire treatment process was painless. I would surely recommend this clinic to all who suffer from dental problems.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>I booked my appointment with one of the dentist clinics in Noida, Dentedge Dental Care for teeth braces. I have read reviews of this clinic before visiting the agency hence my expectation was high. Fortunately, the dentist @ Dentedge lived up to my expectations. I would recommend this clinic to others.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Dentedge...what to say about them, i have visited this clinic, a week ago, to get dental implants. I went, and trust me I am very much impressed with their treatment. I am very thankful to them and recommend others also to visit... plus their fee is affordable.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>I recently visited Dentedge Dental Care Clinic for dental surgery. I am very much satisfied with the staff and dentists. I booked my appointment through their website online 2 days back. The entire treatment process was painless. I would surely recommend this clinic to all who suffer from dental problems.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>I booked my appointment with one of the dentist clinics in Noida, Dentedge Dental Care for teeth braces. I have read reviews of this clinic before visiting the agency hence my expectation was high. Fortunately, the dentist @ Dentedge lived up to my expectations. I would recommend this clinic to others.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Dentedge...what to say about them, i have visited this clinic, a week ago, to get dental implants. I went, and trust me I am very much impressed with their treatment. I am very thankful to them and recommend others also to visit... plus their fee is affordable.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Dentedge...what to say about them, i have visited this clinic, a week ago, to get dental implants. I went, and trust me I am very much impressed with their treatment. I am very thankful to them and recommend others also to visit... plus their fee is affordable.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Dentedge...what to say about them, i have visited this clinic, a week ago, to get dental implants. I went, and trust me I am very much impressed with their treatment. I am very thankful to them and recommend others also to visit... plus their fee is affordable.</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
      <div class="item">
        <div class="single-testimonaials">
          <div class="qoute-box"> <i class="qoute">“</i> </div>
          <p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
          <h3>Roberto Carlos</h3>
          <span>Patient of Asthama</span> </div>
      </div>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
