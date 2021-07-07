<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 sec-title colored text-center">
        <h2>Dental implants</h2>
        <ul class="breadcumb">
          <li><a href="?action=main">Home</a></li>
          <li><i class="fa fa-angle-right"></i></li>
          <li><span>Dental implants</span></li>
        </ul>
        <span class="decor"><span class="inner"></span></span> </div>
    </div>
  </div>
</section>
<section id="single_Service" class="sec-pdd-90">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="service_sideber">
          <div class="services_lis">
            <ul>
            <?php
            $sql= "select * from services order by sId desc";
				$result=query($sql);
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<li>
								<a href="'.BASEURL.'Service-Details/'.$resultRow['sId'].'">
								<i class="fa fa-check"></i> '.$resultRow['sName'].'</a>
							</li>';
				}
				echo $list;
			?>
           </ul>
          </div>
          <div class="appointment-content appointment_side_form ">
            <h2>Make An Appoinment</h2>
			<form action="" method="post" class="side_form contact-form" id="appointment-side-form" >
              <input type="hidden" name="action" value="appoinmentDr" />
              <input class="" type="text"  placeholder="Full name" name="name" />
              <input type="text"  placeholder="Email" name="email"/>
			  <input type="text"  placeholder="Phone" name="phone"/>
              <input type="text" class="date-picker" name="date" placeholder="Select Date">
			  <input type="text" class="date-picker" name="dateOfBirth" placeholder="DOB">
			  <div class="col-md-6 p0 half">
				<div class="select-input-wrapper">
						<select class="select-input" name="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
						</select>
				</div>										
			  </div>
			  <input class="" type="text"  placeholder="Massege" name="message" />
			  
			  
              <div class="select-input-wrapper">
                
              </div>
              <button type="submit" class="btn-info appoin_button">BOOK NOW</button>
            </form>
          </div>
          <div class="question_Box">
            <h2>Any Question ? Contact us</h2>
            <hr />
            <div class="qustion_list">
              <ul>
                <li><i class="flaticon-telephone5"></i><a href="#">(+91)8955031002</a></li>
				<li><i class="flaticon-email147"></i><a href="#">drmedhavisharma@gmail.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9">
        <div class="tab-content">
          <div class="service_mainconetent" id="invisalign">
          <?php
		  	$sid=$_REQUEST['sId'];
		  	$sql= "select * from services where sId=".$sid;
				$result=query($sql);
				$i=1;
				$list='';
				while($resultRow = fetchArray($result))
				{
					$list.='<div class="about_box"> <img src="'.BASEURLFORIMAGES.$resultRow['sImage'].'" style="width:100%"  alt="" />
              <h2>About '.$resultRow['sName'].'</h2>
              
              <p> '.$resultRow['desc'].'</p>
            </div>';
				}
				echo $list;

		  ?>
           <hr />
            <div class="about_promo_box">
              <h2>We are The Most Successfull in Cardiology Treatment and We Recover More Than 1000+ Patient</h2>
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="pormo_box_img"> <img src="<?php echo BASEURL; ?>assets/img/resources/service-details-2.jpg" alt="" /> </div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <div class="col-lg-12 col-md-12">
                    <div class="pormo_box_details">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                        has roots in a piece of classical Latin literature from 45 BC making over 2000 years old. Richard McClintock, </p>
                      <div class="box_list">
                        <ul>
                          <li><i class="fa fa-angle-right"></i><a href="#">Modearn Technology</a></li>
                          <li><i class="fa fa-angle-right"></i><a href="#">Recover 1000+ patiend</a></li>
                          <li><i class="fa fa-angle-right"></i><a href="#">Proffesional Doctor</a></li>
                          <li><i class="fa fa-angle-right"></i><a href="#">Low cost and best service</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="service_table">
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Symtomps</th>
                          <th>Treatment</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</td>
                          <td>Bioscopy</td>
                          <td>$150 - $250</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</td>
                          <td>Bioscopy</td>
                          <td>$150 - $250</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</td>
                          <td>Bioscopy</td>
                          <td>$150 - $250</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</td>
                          <td>Bioscopy</td>
                          <td>$150 - $250</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php   include("view/common/footer.php")?>
