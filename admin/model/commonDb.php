<?php 
 
if ( ! defined('ABSPATH')) exit('No direct script access allowed');

function deleteAptQueryDB()
{
 $id=$_REQUEST['id'];
 $sql='delete from aptquery where id='.$id;
 query($sql);
}
function getAllAptQueryListDB()
{
 $sql= "select * from aptquery order by id desc";
 return query($sql);
}






function logoutDB()
{
	$_SESSION['fitnessSession']="";
 	unset($_SESSION['fitnessSession']);
	unset($_SESSION['fitnessAdminEmail']);
	unset($_SESSION['fitnessimage']);
}




function updatePasswordDB()
{
	$nPass=$_REQUEST['newPass'];
	$cPass=$_REQUEST['currentPass'];
	
	$flag="2";
	
	if($_SESSION['fitnessPass']==$cPass)
	{
		$sql='update adminlogin set password="'.$nPass.'"';
		$flag=query($sql);
	 
		if($flag=="1")
		{
			$_SESSION['fitnessPass']=$nPass;
		}
	}
 	return $flag;	
}

function updateUserDetailsDB()
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$des2=$_REQUEST['oldImagePath']; 
 	if($_FILES['image']['name']!='')
	{
	  	$random=rand(0,999999);
		$des2="assets/uploads/profile/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	 
	$_SESSION['fitnessSession']=$name;
	$_SESSION['fitnessAdminEmail']=$email;
	$_SESSION['fitnessimage']=$des2; 
	 
	$sql='update  adminlogin  set `emailId`="'.$email.'",userName="'.$name.'",image="'.$des2.'" ';
	query($sql);
 
}

function forgetPasswordMailSendDB()
{
	$email=$_REQUEST['emailId'];
	$sql='select * from adminlogin where  emailId="'.$email.'"';
	$result=query($sql);
	$flag=0;
	while($resultRow = fetchArray($result))
	{
		$flag=1;
			$subject1='Recover Password ';
			$message1="Your Pasword Is:".$resultRow['password'];
	 
		mail($resultRow['emailId'],$subject1,$message1,"From: ".SENDMAILFROM."\n");
	}
	return $flag;
}
function loginCheckDB()
{
	$userName=$_REQUEST['userName'];
	$password=$_REQUEST['password'];
	$query='select * from adminlogin where userName="'.$userName.'" and password="'.$password.'" and status=1';
	$result=query($query);
	$flag=0;
	while($resultRow = fetchArray($result))
	{
		$_SESSION['fitnessSession']=$resultRow['userName'];
		$_SESSION['fitnessPass']=$resultRow['password'];
	 	$_SESSION['fitnessAdminEmail']=$resultRow['emailId'];
		$_SESSION['fitnessimage']=$resultRow['image'];
	 	$flag=1;
	}
	return $flag;
	
}

// --------------------------------------------------------------------Slider Start --------------------------------------------------------------------------//

function addNewSliderImageDB()
{
	if($_FILES['image']['name']!='')
	{
	  	$random=rand(0,999999);
		$des2="assets/uploads/sliderImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
		$sql='insert into slider (`imagePath`,`status`) values("'.$des2.'",1)';
		query($sql);
	}
	 
}
function showHideSliderDB()
{
	$id=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	$sql='update slider set status='.$status.' where sId='.$id;
	query($sql);
}
function getAllSliderImagesDB()
{
	$sql='select * from slider ';
	return query($sql);
}
function deleteSliderDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from slider where sId='.$id;
	query($sql);
}
 // --------------------------------------------------------------------End Slider --------------------------------------------------------------------------//
 // --------------------------------------------------------------------Query Start --------------------------------------------------------------------------//
function deleteQueryDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from contactquery where id='.$id;
	query($sql);
}

function getAllContactQueryListDB()
{
	$sql= "select * from contactquery order by id desc";
	return query($sql);
}
// --------------------------------------------------------------------End Query --------------------------------------------------------------------------//
 
 // --------------------------------------------------------------------Start Services --------------------------------------------------------------------------//

function addNewServicesDB()
{
	$name=$_REQUEST['name'];
	$desc=$_REQUEST['desc'];
	
	$des2="";
	$des1="";
	
	if($_FILES['image']['name']!='')
	{
	  	$random=rand(0,999999);
		$des2="assets/uploads/services/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
		 
	}
	if($_FILES['himage']['name']!='')
	{
	  	$random=rand(0,999999);
		$des1="assets/uploads/services/".$random.'_'.$_FILES['himage']['name'];
		$res1=$_FILES['himage']['tmp_name'];
		move_uploaded_file($res1,$des1);
		 
	}
	
	$sql='insert into `services`(`sName`,`sImage`,`hImage`,`desc`,`sStatus`) 
			values("'.$name.'","'.$des2.'","'.$des1.'","'.$desc.'",1)';
	query($sql);
}
function getOurServicesDetailsDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from `services` where sId='.$id;
	return query($sql);
}
function updateOurServicesDB()
{
	$name=$_REQUEST['name'];
	$des2=$_REQUEST['oldImagePath'];
	$des1=$_REQUEST['oldHImagePath'];
	$desc=$_REQUEST['desc'];
	$id=$_REQUEST['sId'];
	
	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($des2);
		}
	 	$random=rand(0,999999);
		$des2="assets/uploads/services/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	if($_FILES['himage']['name']!='')
	{
		if(file_exists ($des1))
		{
			unlink($des1);
		}
	 	$random=rand(0,999999);
		$des1="assets/uploads/services/".$random.'_'.$_FILES['himage']['name'];
		$res1=$_FILES['himage']['tmp_name'];
		move_uploaded_file($res1,$des1);
	}
 
	$sql='update `services` set `sName`="'.$name.'",hImage="'.$des1.'",`desc`="'.$desc.'",`sImage`="'.$des2.'" where sId='.$id;
	query($sql);
}

function deleteOurServicesDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from `services` where sId='.$id;
	$result=query($sql);
 	while($resultRow = fetchArray($result))
	{
		if(file_exists ($resultRow['sImage']))
		{
			unlink($resultRow['sImage']);
		}
		if(file_exists ($resultRow['hImage']))
		{
			unlink($resultRow['hImage']);
		}
	}
	$sql='delete from services where sId='.$id;
	query($sql);
}
function getAllServicesNameListDB()
{
	$sql= "select * from services order by sId desc";
    $result=query($sql);
	return $result;
}


 


// --------------------------------------------------------------------End Services --------------------------------------------------------------------------//

// -------------------------------------------------Start Team ------------------------------------------------------------------//

function addNewTeamDB()
{
	$name=$_REQUEST['name'];
	$desc=$_REQUEST['desc'];
	$post=$_REQUEST['tpost'];
	
	$des2="";
	
	if($_FILES['image']['name']!='')
	{
	  	$random=rand(0,999999);
		$des2="assets/uploads/hiw/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
		 
	}
	
	$sql='insert into hiw(hName,hImage,hDesc,hStatus,hpost) 
			values("'.$name.'","'.$des2.'","'.$desc.'",1,"'.$post.'")';
			
	query($sql);
}

function getTeamDetailsDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from `hiw` where hId='.$id;
	return query($sql);
}
function updateTeamDB()
{
	$name=$_REQUEST['name'];
	$des2=$_REQUEST['oldImagePath'];
	$desc=$_REQUEST['desc'];
	$id=$_REQUEST['hId'];
	$post=$_REQUEST['tpost'];
	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($des2);
		}
	 	$random=rand(0,999999);
		$des2="assets/uploads/hiw/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
 
	$sql='update `hiw` set `hName`="'.$name.'",`hDesc`="'.$desc.'",hpost="'.$post.'",`hImage`="'.$des2.'" where hId='.$id;
	query($sql);
}

function deleteHIWDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from `hiw` where hId='.$id;
	$result=query($sql);
 	while($resultRow = fetchArray($result))
	{
		if(file_exists ($resultRow['hImage']))
		{
			unlink($resultRow['hImage']);
		}
	}
	$sql='delete from hiw where hId='.$id;
	query($sql);
}


function getAllHIWListDB()
{
	$sql= "select * from hiw order by hId desc";
    $result=query($sql);
	return $result;
}


// ------------------------------------------------------End How It work  --------------------------------------------------------------------------//


// ------------------------------------------------------Start FAQ  --------------------------------------------------------------------------//
 

function addNewfaqDB()
{
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];
	
	$ans = str_replace('"', "'", $ans);
	$ques = str_replace('"', "'", $ques);
	 	
	$sql='insert into `faq`(`fQuestion`,`fAnswer`,`fDate`,`fStatus`) 
		values("'.$ques.'","'.$ans.'",NOW(),1)';
	query($sql);
}
function updatefaqDB()
{
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];
	$fId=$_REQUEST['fId'];
	$ans = str_replace('"', "'", $ans);
	$ques = str_replace('"', "'", $ques);
	 	
	$sql='update `faq` set `fQuestion`="'.$ques.'",`fAnswer`="'.$ans.'" where fId='.$fId;
	query($sql);
}

function getfaqDetailsDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from faq where fId='.$id;
	return query($sql);
}
function getAllFaqListDB()
{
	$sql= "select * from faq order by fId desc";
	return query($sql);
}

function deletefaqDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from faq where fId='.$id;
	query($sql);
}

// ------------------------------------------------------End FAQ -------------------------------------------------------------------------//


// Start Gallary
function addNewGalleryDB()
{
	

	 $des2='';
	 $caption=$_REQUEST['caption'];
	
	 
		if($_FILES['image']['name']!='')
		{
		   		$random=rand(0,999999);
				$des2="assets/uploads/galleryImages/".$random.'_'.$_FILES['image']['name'];
				$res1=$_FILES['image']['tmp_name'];
				move_uploaded_file($res1,$des2);
		 }
	 $sql='insert into gallery(`gCaption`,`gImagePath`,`gStatus`) 
	 	values("'.$caption.'","'.$des2.'",1)';
	query($sql);
}
function showHideGalleryDB()
{
	$gId=$_REQUEST['galleryId'];
	$status=$_REQUEST['status'];
	
	$sql='update gallery set gStatus='.$status.' where gId='.$gId;
	query($sql);
}
function getAllGalleryListDB()
{
	$sql='select * from gallery order by gId desc';
	$result=query($sql);
	return $result;
}
function deleteGalleryDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from gallery  where gId='.$id;
	$result=query($sql);
	while($resultRow = fetchArray($result))
	{
		if(file_exists ($resultRow['gImagePath']))
		{
			unlink($resultRow['gImagePath']);
		}
	}
	
	$sql1='delete from gallery where gId='.$id;
	query($sql1);
}

function getGalleryDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from gallery where gId='.$id;
	$result=query($sql);
	return $result;
}
function updateGalleryImageDB()
{
 	$caption=$_REQUEST['caption'];
	$gId=$_REQUEST['gId'];
	$sId=$_REQUEST['sId'];
 	$des2=$_REQUEST['oldImage'];
	 
	
 	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($des2);
		}
		$random=rand(0,999999);
		$des2="assets/uploads/galleryImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
 	
	$sql='update gallery set `gCaption`="'.$caption.'",`gImagePath`="'.$des2.'",serviceId='.$sId.' where gId='.$gId;
 	query($sql);
}


function addNewImageDB()
{
	for($i=1;$i<=4;$i++)
	{
		if($_FILES['image'.$i]['name']!='')
		{
		 	$random=rand(0,999999);
			$des2="assets/uploads/OtherImages/".$random.'_'.$_FILES['image'.$i]['name'];
			$res1=$_FILES['image'.$i]['tmp_name'];
			move_uploaded_file($res1,$des2);
			
			$sql='insert into imagemaster(`imImageMaster`,`imStatus`) 
				values("'.$des2.'",1)';
			query($sql);
		}
	}
}

function showHideImageDB()
{
	$iId=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	
	$sql='update imagemaster set imStatus='.$status.' where imId='.$iId;
	query($sql);
}
function deleteImageDB()
{
	$id=$_REQUEST['id'];
	$sql='select *  from imagemaster  where imId='.$id;
	$result=query($sql);
	while($resultRow = fetchArray($result))
	{
		if(file_exists ($des2))
		{
			unlink($resultRow['imImageMaster']);
		}
	}
	
	$sql='delete from imagemaster  where imId='.$id;
	query($sql);
}
function getAllImagesListDB()
{
	$sql="select * from imagemaster order by `imId` desc ";
	$result=query($sql);
	return $result;
}

//End Gallery 

 
//Testimonial

function addNewTestimonialsDB()
{
  	$name=$_REQUEST['name'];
	$message=$_REQUEST['message'];
	$des2='';
 	if($_FILES['image']['name']!='')
	{
	 	$random=rand(0,999999);
		$des2="assets/uploads/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
 	
	$sql='insert into `testimonials`(`name`,`message`,`image`,`date`,`status`) 
			values("'.$name.'","'.$message.'","'.$des2.'",NOW(),1)';
	query($sql);		
}

function updateTestimonialsDB()
{

	$tId=$_REQUEST['tId'];
 	$name=$_REQUEST['name'];
	$message=$_REQUEST['message'];
	
	$des2=$_REQUEST['oldImagePath'];
 	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($resultRow['imImageMaster']);
		}
		
	 	$random=rand(0,999999);
		$des2="assets/uploads/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	
 	$sql='update `testimonials` set `name`="'.$name.'",message="'.$message.'",image="'.$des2.'" where tId='.$tId;
	query($sql);	
}
function showHideTestimonialsDB()
{
	$id=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	$sql='update testimonials set status='.$status.' where tId='.$id;
	query($sql);
}

function getAllTestimonialsListDB()
{
	$sql= "select * from testimonials order by tId desc";
	$result=query($sql);
	return $result;
}
function getTestimonialsDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql= 'select * from testimonials where tId='.$id;
	$result=query($sql);
	return $result;
}

function deleteTestimonialsDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from testimonials where tId='.$id;
	query($sql);
}


//	End Testimonial
  

function deleteApQueryDB()
{
	$id=$_REQUEST['id'];
	$sql1='delete from patient_personal where p_pId='.$id;	
	$sql2='delete from patient_financial_info where pf_Id='.$id;	
	$sql3='delete from pdantalhistory where  pdh_id='.$id;	
	$sql4='delete from pmhistory where pmh_Id='.$id;	
	
	query($sql1);
	query($sql2);
	query($sql3);
	query($sql4);
}

function allApQueryListDB()
{
	$sql= "select * from patient_personal order by p_pId desc";
	return query($sql);
}


//  Start Meta 

function getMetaTagDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from metatag where pageId='.$id;
	$result=query($sql);
	return $result; 
}
function updateMetatagDB()
{
	$pageId=$_REQUEST['pageId'];
	$pageTitle=$_REQUEST['pageTitle'];
	$metaContent=$_REQUEST['metaContent'];
	$metaKeyword=$_REQUEST['metaKeyword'];
	$metaDescription=$_REQUEST['metaDescription'];
    $metaContent = str_replace('"', "'", $metaContent);
	$metaKeyword = str_replace('"', "'", $metaKeyword);
	$metaDescription = str_replace('"', "'", $metaDescription);
 
	$sql='update metatag set pageTitle="'.$pageTitle.'",metaContent="'.$metaContent.'",metaKeyword="'.$metaKeyword.'",metaDescription="'.$metaDescription.'"
			where pageId='.$pageId;
	query($sql);
}
// End Meta Tag
 
 

function getEmailMessageDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from emailmaster where id='.$id;
	return query($sql);
}
function emailMessageUpdateDB()
{
	$id=$_REQUEST['id'];
	$message=$_REQUEST['message'];
	$sql='update emailmaster set message="'.$message.'" where id='.$id; 
	query($sql);
}


// Blog Master

function addNewPostDB()
{
	$title=$_REQUEST['title'];
	$desc=$_REQUEST['description'];
	 
	$desc = str_replace('(', '[', $desc);
	$desc = str_replace('"', "'", $desc);
	$desc = str_replace("'", "`", $desc);
	$desc = str_replace(')', ']', $desc);
	
	$sDescription=$_REQUEST['sdescription'];
	$sDescription = str_replace("'", '`', $sDescription);
	$sDescription = str_replace('"', ' ', $sDescription);
	$des2="";
	
	if($_FILES['image']['name']!='')
	{
 		$random=rand(0,999999);
		$des2="assets/uploads/blogImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	
	 
	
	$sql='insert into `blog`(`title`,`imagePath`,`description`,sDescription,`date`,`status`)
values("'.$title.'","'.$des2.'","'.$desc.'","'.$sDescription.'",CURDATE(),1)';
 
	query($sql);
	
}

function getPostDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from blog where bId='.$id;
	return query($sql);;
}

function updateBlogPostDB()
{
	$title=$_REQUEST['title'];
	$desc=$_REQUEST['description'];
	$bId=$_REQUEST['bId'];
	 
	$sDescription=$_REQUEST['sdescription'];
	
	$sDescription = str_replace("'", '`', $sDescription);
	$sDescription = str_replace('"', ' ', $sDescription);
	$category=$_REQUEST['category'];
	 
	$desc = str_replace("'", '`', $desc);
	$desc = str_replace('"', ' ', $desc);
 	$desc = str_replace('&lt;', '<', $desc);
	$desc = str_replace('&gt;', '>', $desc);
	$desc = str_replace('&quot;', ' ', $desc);
	
	$desc = str_replace('(', '[', $desc);
	$desc = str_replace(')', ']', $desc);
	
	
	$des2=$_REQUEST['oldImagePath'];
	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($des2);
		}
		
 		$random=rand(0,999999);
		$des2="assets/uploads/blogImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	
	$sql='update `blog` set `title`="'.$title.'",`imagePath`="'.$des2.'",`description`="'.$desc.'",sDescription="'.$sDescription.'"  where bId='.$bId;
	query($sql);
}

function showHidePostDB()
{
	$bId=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	
	$sql='update blog set status='.$status.' where bId='.$bId;
	query($sql);
}
function isPopularPostDB()
{
	$bId=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	
	$sql='update blog set isPopular='.$status.' where bId='.$bId;
	query($sql);
}
function getAllPostListDB()
{
	$sql= "select * from blog as b order by bId desc";
	$result=query($sql);
	return $result;
}
function deletePostDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from blog where bId='.$id;
	query($sql);
}



// End Blog 

 // Start Comments
function showHideCommentsDB()
{
	$cId=$_REQUEST['id'];
	$status=$_REQUEST['status'];
	
	$sql='update comments set status='.$status.' where cId='.$cId;
	query($sql);
}

function deleteCommentsDB()
{
	$cId=$_REQUEST['id'];
	 $sql='delete from comments  where cId='.$cId;
	query($sql);
}

function getAllCommentsListDB()
{
	$sql= "select * from comments as b order by cId desc";
	return query($sql);
}

// End Comments

function showHideFourmDB()
{
	$id=$_REQUEST['FourmId'];
	$status=$_REQUEST['status'];
	$sql='update forum set f_status='.$status.' where forumId='.$id;
	query($sql);
}

function getAllForumListDB()
{
	$sql= "select * from forum as f 
						left join forumcategory as fc on f.fcatId=fc.fcId
						order by forumId desc";
	return query($sql);
}

function deleteForumDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from forum  where forumId='.$id;
	query($sql);
	
	$sqlA='delete from forum_answer  where fQId='.$id;
	query($sqlA);
}
function getAllCommentsByFIDDB_DIRECT($id)
{
	$sql='select * from forum_answer  as f
			left join forum as fm on fm.forumId=f.fQId
			where fQId='.$id.' order by fQId desc';
	return query($sql);
}

function getAllCommentsByFIDDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from forum_answer  as f
			left join forum as fm on fm.forumId=f.fQId
			where fQId='.$id.' order by fQId desc';
	return query($sql);
}

function showHideFourmAnswerDB()
{
	$id=$_REQUEST['ansId'];
	$status=$_REQUEST['status'];
	$sql='update forum_answer set fa_status='.$status.' where faId='.$id;
	query($sql);
}

function deleteForumAnswerDB()
{
	$id=$_REQUEST['ansId'];
	$sql='delete from forum_answer where faId='.$id;
	query($sql);
	
	$sqlF='update forum set tComments=tComments-1 where forumId='.$id;
	query($sqlF);
}



/* --------------------------------------------------------------------  Page Master -------------------------------------------------------------*/

function getPagesDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from pages where pId='.$id;
	return query($sql);
}

function updatePageDB()
{
	$id=$_REQUEST['id'];
	$title=$_REQUEST['pTitle'];
	$desc=$_REQUEST['desc'];
	$desc = str_replace("'", '`', $desc);
	$desc = str_replace('"', ' ', $desc);
 	$desc = str_replace('&lt;', '<', $desc);
	$desc = str_replace('&gt;', '>', $desc);
	$desc = str_replace('&quot;', ' ', $desc);
	
	$desc = str_replace('(', '[', $desc);
	$desc = str_replace(')', ']', $desc);
	
	$sql='update pages set pageContent="'.$desc.'",pageTitle="'.$title.'" where pId='.$id;
	
	 
	query($sql);
	
	
}





/*--------------------------------------------------------------------- End Page Master ----------------------------------------------------------*/

// Forum Category

function addNewForumCategoryDB()
{
	$name=$_REQUEST['name'];
	$des2='';
	if($_FILES['image']['name']!='')
	{
		$random=rand(0,999999);
		$des2="assets/uploads/forumImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	
	$sql='insert into `forumcategory`(`imagePath`,`fcName`,`fcStatus`) values("'.$des2.'","'.$name.'",1)';
	query($sql);
}

function getForumCategoryDetailsDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from forumcategory where fcId='.$id;
	return query($sql);
	
}

function updateForumCategoryDB()
{
	$name=$_REQUEST['name'];
	$fcId=$_REQUEST['fcId'];
	
	$des2=$_REQUEST['imagePath'];
	if($_FILES['image']['name']!='')
	{
		if(file_exists ($des2))
		{
			unlink($des2);
		}
		$random=rand(0,999999);
		$des2="assets/uploads/forumImages/".$random.'_'.$_FILES['image']['name'];
		$res1=$_FILES['image']['tmp_name'];
		move_uploaded_file($res1,$des2);
	}
	
	$sql='update `forumcategory` set imagePath="'.$des2.'",`fcName`="'.$name.'" where fcId='.$fcId;
	query($sql);
}

function deleteForumOurCategoryDB()
{
	$id=$_REQUEST['id'];
	$sql='delete from forumcategory where fcId='.$id;
	query($sql);
}

function getAllFourmCategoryListDB()
{
	$sql= "select * from forumcategory order by fcId desc";
	return query($sql);
}

/* --------------------------------------------------------Start Ad Master ------------------------------------------*/

function addNewaAdDB()
{
	$addScript=$_REQUEST['addScript'];
	$position=$_REQUEST['position'];
  	 	if($_FILES['image']['name']!='')
		{
			$random=rand(0,9999);
		  	$des2="advertisement/".$random.$_FILES['image']['name'];
			$res1=$_FILES['image']['tmp_name'];
		 	move_uploaded_file($res1,$des2);
		 
			$des2="<img width='100%' height='100%' src='".BASEURL."/advertisement/".$random.$_FILES['image']['name']."'/>";
			$imagePath="admin/advertisement/".$random.$_FILES['image']['name'];
 
 			$sql='insert into `googlead`(`addScript`,`date`,`position`,`imagePath`,`status`)  
				values("'.$des2.'",NOW(),'.$position.',"'.$imagePath.'",1)';	
			 
	 		query($sql);
	 	}
		else
		{
	 			$sql='insert into `googlead`(`addScript`,`date`,`position`,`imagePath`,`status`)  
				values("'.$addScript.'",NOW(),'.$position.',"",1)';	
			query($sql);
		}
}
function updateAdDB()
{
	$addScript=$_REQUEST['addScript'];
	$position=$_REQUEST['position'];
	$adId=$_REQUEST['adId'];
	$des2=$_REQUEST['oldImagePath'];
	
  	 	if($_FILES['image']['name']!='')
		{
			
			if(file_exists ($des2))
			{
				unlink($des2);
			}
			
			$random=rand(0,9999);
		  	$des2="advertisement/".$random.$_FILES['image']['name'];
			$res1=$_FILES['image']['tmp_name'];
		 	move_uploaded_file($res1,$des2);
		 
			$des2="<img width='100%' height='100%' src='".BASEURL."/advertisement/".$random.$_FILES['image']['name']."'/>";
			$imagePath="admin/advertisement/".$random.$_FILES['image']['name'];
 
 			$sql='update `googlead` set `addScript`="'.$des2.'",`position`='.$position.',`imagePath`="'.$imagePath.'" where id='.$adId;	
			 
	 		query($sql);
	 	}
		else
		{
	 			$sql='update `googlead` set  `addScript`="'.$addScript.'",`position`='.$position.'  where id='.$adId;	
			query($sql);
		}
}

function getAdDetailsByIdDB()
{
	$id=$_REQUEST['id'];
	
	$sql= "select * from googlead where id=".$id;
	return query($sql);
}
function deleteAdDB()
{
	$id=$_REQUEST['id'];
 	$sql= "delete from googlead where id=".$id;
	query($sql);
}

function getAllAdListDB() 
{
	$sql= "select * from googlead as g 
			left join positions as p on p.pId=g.position
			order by id desc";
	return query($sql);
}

/* --------------------------------------------------------End Ad Master ------------------------------------------*/


function getLogoByIDDB()
{
	$id=$_REQUEST['id'];
	$sql='select * from logo where lId='.$id;
	return query($sql);
}
function updateLogoDB()
{
	$lId=$_REQUEST['lId'];
	$title=$_REQUEST['title'];
	$des2=$_REQUEST['oldImagePath'];
		if($_FILES['image']['name']!='')
		{
			
			if(file_exists ($des2))
			{
				unlink($des2);
			}
			
			$random=rand(0,9999);
		  	$des2="logo/".$random.$_FILES['image']['name'];
			$res1=$_FILES['image']['tmp_name'];
		 	move_uploaded_file($res1,$des2);
		  
	 	}
	$sql='update `logo` set `title`="'.$title.'",`imagePath`="'.$des2.'" where lId='.$lId;	
	query($sql);
}

?>