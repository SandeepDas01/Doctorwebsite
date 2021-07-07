<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');

	
	function ajaxActions()
	{
	
		$act = $_REQUEST['act'];
		
		switch($act)
		{
		 
			 
			 case 'showHideSlider':
			 	showHideSlider();
			 break;
			 case 'deleteSlider':
			 	deleteSlider();
			 break;
			case 'getMemberDetailsById':
				getMemberDetailsById();
			break;
			case 'deleteTeamMember':
				deleteTeamMember();
			break;
			case 'deleteQuery':
				deleteQuery();
			break;
	 		case 'getPageDetails':
				getPageDetails();
			break;
 			 
			// Gallery
			case 'showHideGallery':
				showHideGallery();
			break;
			case 'deleteGallery':
				deleteGallery();
			break;
			case 'getGalleryDetailsById':
				getGalleryDetailsById();
			break;
			case 'showHideImage':
				showHideImage();
			break;
			case 'deleteImage':
				deleteImage();
			break;
			//End Gallery
			
			 case 'deleteAptQuery':
             deleteAptQuery();
              break;
		 
			
		 
	 // Team Master
	  		case 'getTeamDetails':
				getTeamDetails();
			break;
			case 'deleteTeam':
				deleteTeam();
			break;
	 
	 // End Team Master
		
		 
			
	  // Our Services
			case 'getServiceDetails':
				getOurServicesDetails();
			break;
			case 'deleteOurServices':
				deleteOurServices();
			break;
			
     //End Our Services
	 
	 
			
	// Project Master
		
			case 'getProjectDetailsById':
				getProjectDetailsById();
			break;
			case 'showHideProject':
				showHideProject();
			break;
			case 'deleteProject':
				deleteProject();
			break;
	
	
	// End Project Master 
	
			 
			case 'getMetaTagDetailsById':
				getMetaTagDetailsById();
			break;
			
	  
		
		//  Clients Master
			 
			case 'deleteclient':
				deleteclient();
			break;
			
			case 'showHideclient':
				showHideclient();
			break;
			
			
		// End Clients Master
		
		
		case 'getEmailMessageDetailsById':
			getEmailMessageDetailsById();
		break;
		
		
		// Start Blog 
			case 'getPostDetailsById':
				getPostDetailsById();
			break;
			case 'showHidePost':
				showHidePost();
			break;
			case 'deletePost':
				deletePost();
			break;
		 	case 'isPopularPost':
				isPopularPost();
			break;
		// End Blog	 
			 
		 case 'showHideComments':
		 	showHideComments();
		 break;
		 case 'deleteComments':
		 	deleteComments();
		 break;
			 
			 //delete query
			 
			 
			 case 'deleteAptQuery':
             deleteAptQuery();
             break;
			 
			 //delete query
			 
		/* Trainer Master*/
			
			case 'showHideTrainer':
				showHideTrainer();
			break;
			
			case 'viewTrainerDetails':
				viewTrainerDetails();
			break;
			case 'deleteTrainer':
				deleteTrainer();
			break;
			
		// End Trainer	 
		
		/* Member Master */
		
			case 'showHideMember':
				showHideMember();
			break;
			
			case 'viewMemberDetails':
				viewMemberDetails();
			break;
			case 'deleteMember':
				deleteMember();
			break;
			
			
		// End Member Master
		
			case 'showHideFourm':
				showHideFourm();
			break;
			case 'deleteForum':
				deleteForum();
			break;
			case 'getAllCommentsByFID':
				getAllCommentsByFID();
			break;
			case 'showHideFourmAnswer':
				showHideFourmAnswer();
			break;
			case 'deleteForumAnswer':
				deleteForumAnswer();
			break;
		
		
		// Page Master
		
			case 'getPagesDetailsById':
				getPagesDetailsById();
			break;
		
		
		// End Page Master
		
		
		
			case 'getForumCategoryDetails':
				getForumCategoryDetails();
			break;
			
			case 'deleteForumOurCategory':
				deleteForumOurCategory();
			break;
			
			
		/* Ad Master*/
			
			case 'getAdDetailsById':
				getAdDetailsById();
			break;
			case 'deleteAd':
				deleteAd();
			break;
		
		/* End Ad Master */
		
			case 'getLogoByID':
				getLogoByID();
			break;
		}
}
/*---------------------------------------------------FAQ MASTER--------------------------------------------------------------*/

function deletefaq()
{
	deletefaqDB();
	$result=getAllFaqListDB();
	$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['fQuestion'].'</td>
						<td>'.$resultRow['fAnswer'].'</td>
					 	<td> 
						<button type="button" onclick="updatefaq('.$resultRow['fId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deletefaq('.$resultRow['fId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}

function getfaqDetails()
{
	$result=getfaqDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="" method="post" onSubmit="return checkValidationU();" name="faqFormU" id="faqFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updatefaq">
				<input type="hidden" name="fId" value="'.$resultRow['fId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Question</th>
                    <td width="70%"><textarea name="ques" id="ques" class="form-control requiredInput">'.$resultRow['fQuestion'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Answer</th>
                    <td width="70%"><textarea name="ans" id="ans" class="form-control requiredInput">'.$resultRow['fAnswer'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update FAQ" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	
	echo $list;
}

/*---------------------------------------------------END FAQ MASTER--------------------------------------------------------------*/



function getLogoByID()
{
	$result=getLogoByIDDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.=' <form action="#" method="post" onSubmit="return checkValidationU();" name="PostFormu" id="PostFormu" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateLogo">
				<input type="hidden" name="lId" value="'.$resultRow['lId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Logo</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Title</th>
                    <td width="70%"><input type="text" name="title" id="title" class="form-control" value="'.$resultRow['title'].'"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['imagePath'].'"/></td>
                    <td width="5%"><input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

// Start Ad Master

function deleteAd()
{
	deleteAdDB();
	$result=getAllAdListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr role="row" class="filter">
					<td>'.$i++.'</td>
					<td>'.$resultRow['date'].'</td>
					<td>'.$resultRow['pName'].'</td>
					<td> 
						<button type="button" onclick="updateAd('.$resultRow['id'].')" class="btn green-meadow">View/Edit</button>
					</td>
					<td>
						<button type="button" onclick="deleteAd('.$resultRow['id'].')" class="btn btn-warning">Delete</button> 
					</td>
                  </tr>';
	}
	echo $list;
}

function getAdDetailsById()
{
	$result=getAdDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="#" method="post" onSubmit="return checkValidationU();" name="PostFormU" id="PostFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateAd">
				<input type="hidden" name="adId" value="'.$resultRow['id'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Position</th>
                    <td width="70%">
                     <select name="position" id="positionU" class="form-control requiredInput">
                        <option value="0">Select</option>
                        ';
							$sql='select * from positions where status=1';
							$resultP=query($sql);
							 
							while($resultRowP = fetchArray($resultP))
							{
								if($resultRowP['pId']==$resultRow['position'])
								{
									$list.='<option selected value="'.$resultRowP['pId'].'">'.$resultRowP['pName'].'</option>';
								}
								else
								{
									$list.='<option value="'.$resultRowP['pId'].'">'.$resultRowP['pName'].'</option>';
								}
							}
							 
				 $list.='</select>
                    </td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Add Script</th>
                    <td width="70%"><textarea id="addScriptU" name="addScript" class="form-control">'.$resultRow['addScript'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th colspan="3">Or</th>
                  </tr>
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>';
					  if($resultRow['imagePath']!="")
					  {
						   $list.='<tr>
									<th width="20%"></th>
									<td width="70%"><img style="width:350px;height:120px;" src="'.BASEURLFORSITE.$resultRow['imagePath'].'"/></td>
									<td width="5%"><input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'"></td>
								</tr>';
					  }
                  $list.='<tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
			
}

// Ad Master


function deleteForumOurCategory()
{
	deleteForumOurCategoryDB();
	$result=getAllFourmCategoryListDB();
	$i=1;
	    $list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['fcName'].'</td>
						 
					 	<td> 
						<button type="button" onclick="updateCategory('.$resultRow['fcId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteCategory('.$resultRow['fcId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}


function getForumCategoryDetails()
{
	$result=getForumCategoryDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="" method="post" onSubmit="return checkValidationU();" name="fcCategoryForm" id="fcCategoryForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateForumCategory">
				<input type="hidden" name="fcId" value="'.$resultRow['fcId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" name="name" id="nameU" value="'.$resultRow['fcName'].'" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="imageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['imagePath'].'" style="width:250px;height:150px;"></td>
                    <td width="5%"><input type="hidden" name="imagePath" value="'.$resultRow['imagePath'].'"></td>
                  </tr>
                 <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update Forum Category" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

function getPagesDetailsById()
{
	$result=getPagesDetailsByIdDB();
	$i=1;
	$list='<form enctype="multipart/form-data" method="post" name="updatePage" id="updatePage" onsubmit="return checkAllFields()" action="">
                ';
	
	while($resultRow = fetchArray($result))
	{
		$list.='<input type="hidden" value="updatePage" name="action" />
				<input type="hidden" value="'.$resultRow['pId'].'" name="id" />
                <table  class="table-form" width="100%">
				<tr>
                    
                    <td width="15%">Page Title</td>
                    <td width="85%"><input type="text"  class="form-control requiredInput" id="pTitle" name="pTitle" value="'.$resultRow['pageTitle'].'" /></td>
                    
                  </tr>
                  <tr>
                     <td width="15%">Page Description</td>
                    <td width="85%"><textarea  class="form-control" id="desc" name="desc" >'.$resultRow['pageContent'].'</textarea></td>
                    
                  </tr>
                  <tr>
                     
                     <td colspan="2"><input type="submit" class="btn green" value="Update" />
                      <input type="reset" class="btn green" value="Reset" /></td>
                    
                  </tr>';	
	}
	$list.='</table>
           </form>';
	echo $list;
}

function printFourmCommentList($fId)
{
	$result=getAllCommentsByFIDDB_DIRECT($fId);
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
		{
			 $list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['fAnswer'].'</td>
						<td>';
							if($resultRow['fa_status']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideFourmAnswer('.$resultRow["fQId"].','.$resultRow["faId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideFourmAnswer('.$resultRow["fQId"].','.$resultRow["faId"].',1)" />';
							}
							 
						 	$list.='
							</td><td>
					 	<button type="button" onclick="deleteForumAnswer('.$resultRow["fQId"].','.$resultRow['faId'].')" class="btn btn-warning">Delete</button>
						</td>
					</tr>';
		}
		echo $list;
}
function deleteForumAnswer()
{
	$fId=$_REQUEST['qId'];
	deleteForumAnswerDB();
	printFourmCommentList($fId);
}

function showHideFourmAnswer()
{
	$fId=$_REQUEST['qId'];
	showHideFourmAnswerDB();
	printFourmCommentList($fId);
}


function getAllCommentsByFID()
{
	$result=getAllCommentsByFIDDB();
	$i=1;
		$list='<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="60%"> Answer </th>
                    <th width="10%"> Status </th>
                	<th width="10%"> Delete </th>
                  </tr>
                </thead>
                <tbody id="innerContentComments">';
				$ques='';
		while($resultRow = fetchArray($result))
		{
			if($i==1)
			{
				$ques='<div><h3 class="page-title"><strong>Question :</strong> '.$resultRow['f_Question'].'</h3></div>';
			}
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['fAnswer'].'</td>
						<td>';
							if($resultRow['fa_status']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideFourmAnswer('.$resultRow["fQId"].','.$resultRow["faId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideFourmAnswer('.$resultRow["fQId"].','.$resultRow["faId"].',1)" />';
							}
							 
						 	$list.='
							</td><td>
					 	<button type="button" onclick="deleteForumAnswer('.$resultRow["fQId"].','.$resultRow['faId'].')" class="btn btn-warning">Delete</button>
						</td>
				 </tr>';
		}
		$list.='</table>';
		echo $ques.''.$list;
}

function printAllForum()
{
	$result=getAllForumListDB();
	$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['f_Question'].'</td>
						<td>'.$resultRow['fcName'].'</td>
						<td>';
							if($resultRow['f_status']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideFourm('.$resultRow["forumId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideFourm('.$resultRow["forumId"].',1)" />';
							}
							 
						 	$list.='
							</td>
					   <td><button type="button" onclick="viewForumPost('.$resultRow['forumId'].')" class="btn green-meadow">View</button> </td>
					 	<td> 
						 <button type="button" onclick="deleteForum('.$resultRow['forumId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}

function deleteForum()
{
	deleteForumDB();
	printAllForum();
}

function showHideFourm()
{
	showHideFourmDB();
	printAllForum();
	
}

 
// Member master

function viewMemberDetails()
{
	$result=viewMemberDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<tr>
						<th colspan="5">Member Profile</th>
				 	</tr>
					<tr>
						<td>Name</td>
						<td>'.$resultRow['mName'].'</td>
						<td></td>
						<td>Gender</td>
						<td>'.$resultRow['mGender'].'</td>
					</tr>
					 <tr>
						<td>Phone</td>
						<td>'.$resultRow['mMobile'].'</td>
						<td></td>
						<td>Email</td>
						<td>'.$resultRow['mEmail'].'</td>
					</tr>
				 	<tr>
						<td> </td>
						<td colspan="3"><input type="button" class="btn" value="Back" onclick="viewMember()"></td>
					 	<td></td>
					</tr>
				 </table>';
	}
	echo $list;
}
function printMembers()
{
	$result=getAllMemberListDB();
	$i=1;
	$list='';
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td>'.$resultRow['mName'].'</td>
							<td>'.$resultRow['mMobile'].'</td>
						 	<td>';
								if($resultRow['mStatus']=="1")
								{
									$list.='<img src="assets/images/active.png" onclick="showHideMember('.$resultRow["mId"].',0)" />';
								}
								else
								{
									$list.='<img src="assets/images/deactive.png" onclick="showHideMember('.$resultRow["mId"].',1)" />';
								}
						$list.='</td>
								<td>
									<img src="assets/images/doc_view.png" onclick="viewMemberDetails('.$resultRow['mId'].')" />
								</td>
								<td>
									<img src="assets/images/remove.png"  onclick="deleteMember('.$resultRow['mId'].')"/>
								</td>
					 	</tr>';
			}
			echo $list;
			
}


function showHideMember()
{
	showHideMemberDB();
	printMembers();
}
function deleteMember()
{
	deleteMemberDB();
	printMembers();
}

// End Member Master
 
// Trainer Start

function viewTrainerDetails()
{
	$result=viewTrainerDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<tr>
						<th colspan="5">Trainer Profile</th>
				 	</tr>
					<tr>
						<td>Name</td>
						<td>'.$resultRow['tName'].'</td>
						<td></td>
						<td>Gender</td>
						<td>'.$resultRow['tGender'].'</td>
					</tr>
					 <tr>
						<td>Phone</td>
						<td>'.$resultRow['tPhone'].'</td>
						<td></td>
						<td>Email</td>
						<td>'.$resultRow['tEmail'].'</td>
					</tr>
					 <tr>
						<td>About</td>
						<td>'.$resultRow['tAbout'].'</td>
						<td></td>
						<td>Address</td>
						<td>'.$resultRow['address'].'</td>
					</tr>
					<tr>
						<td>Title Line</td>
						<td>'.$resultRow['tTitle'].'</td>
						<td></td>
						<td> </td>
						<td> </td>
					</tr>
					 <tr>
						<td>Image</td>
						<td colspan="3"><img src="'.BASEURLFORADMIN.$resultRow['tImage'].'" style="width:150px;height:100px;"></td>
					 	<td></td>
					</tr>
					<tr>
						<td> </td>
						<td colspan="3"><input type="button" class="btn" value="Back" onclick="viewTrainer()"></td>
					 	<td></td>
					</tr>
				 </table>';
	}
	echo $list;
}


function printTrainerListDB()
{
	$result=getAllTrainerListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
					<td>'.$i++.'</td>
					<td>'.$resultRow['tName'].'</td>
					<td><img src="'.BASEURLFORADMIN.$resultRow['tImage'].'" style="width:75px;height:75px;"></td>
					<td>';
					if($resultRow['tStatus']=="1")
					{
						$list.='<img src="assets/images/active.png" onclick="showHideTrainer('.$resultRow["tId"].',0)" />';
					}
					else
					{
						$list.='<img src="assets/images/deactive.png" onclick="showHideTrainer('.$resultRow["tId"].',1)" />';
					}
			$list.='</td>
					<td>
					 	<img src="assets/images/doc_view.png" onclick="viewTrainer('.$resultRow['tId'].')" />
					</td>
					<td>
						<img src="assets/images/remove.png"  onclick="deleteTrainer('.$resultRow['tId'].')"/>
					</td>
				</tr>';
	}
	echo $list;
}

function deleteTrainer()
{
	deleteTrainerDB();
	printTrainerListDB();
}

function showHideTrainer()
{
	showHideTrainerDB();
	printTrainerListDB();
}


// End Trainer


// Start HIW

function deleteTeam()
{
	deleteHIWDB();
	$result=getAllHIWListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['hName'].'</td>
						<td><img src="'.$resultRow['hImage'].'" style="width:250px;height:120px;" /></td>
					 	<td> 
						<button type="button" onclick="updateTeam('.$resultRow['hId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteTeam('.$resultRow['hId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
	echo $list;
}

function getTeamDetails()
{
	$result=getTeamDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
	  $list.='<form action="" method="post" onSubmit="return checkValidationU();" name="cHIWFormU" id="cHIWFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateTeam">
				<input type="hidden" name="hId" value="'.$resultRow['hId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" value="'.$resultRow['hName'].'" name="name" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                    <th width="20%">Post</th>
                    <td width="70%"><input type="text" value="'.$resultRow['hpost'].'" name="tpost" id="tpostU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th width="20%"> Description</th>
                    <td width="70%"><textarea name="desc" id="titleU" class="form-control">'.$resultRow['hDesc'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="imageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['hImage'].'">
						<input type="hidden" value="'.$resultRow['hImage'].'" name="oldImagePath">
					</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}


// End HIW
 
 
// Start Comments

function deleteComments()
{
	deleteCommentsDB();
	$result=getAllCommentsListDB();
	printComments($result);
}
 
function showHideComments()
{
	showHideCommentsDB();
	$result=getAllCommentsListDB();
	printComments($result);
}

function printComments($result)
{
	$i=1;
	$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['name'].'</td>
						<td>'.$resultRow['message'].'</td>
						<td>'.$resultRow['date'].'</td>
						<td>'.$resultRow['email'].'</td>
					 	<td>';	
							if($resultRow['status']==1)
							 {
									$list.='<button onclick="showHideComments('.$resultRow["cId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideComments('.$resultRow["cId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							
						$list.='</td>
					 	<td>
						<button type="button" onclick="deleteComments('.$resultRow['cId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}

// End Comments

 
// Start Blog
 
 
function printPost($result)
{ 
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['title'].'</td>
						 
						<td>';	
							if($resultRow['status']==1)
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							
						$list.='</td>
					 	<td>';	
							if($resultRow['isPopular']==1)
							 {
									$list.='<img title="Popular" src="assets/images/active.png" onclick="isPopular('.$resultRow["bId"].',0)" type="button"> ';
							 }
							 else
							 {
									$list.='<img title="Not Popular" src="assets/images/deactive.png" onclick="isPopular('.$resultRow["bId"].',1)" type="button"> ';
							 }
							
						$list.='</td>
					 	<td> 
						<button type="button" onclick="updatePost('.$resultRow['bId'].')" class="btn green-meadow">View/Edit</button>
						</td>
						<td>
						<button type="button" onclick="deletePost('.$resultRow['bId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
			echo $list;
}

function deletePost()
{
	deletePostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function showHidePost()
{
	showHidePostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function isPopularPost()
{
	isPopularPostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function getPostDetailsById()
{
	$result=getPostDetailsByIdDB();
	
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="#" method="post" onSubmit="return checkAllFieldsUpdateU();" name="PostFormU" id="PostFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateBlogPost">
			 	<input type="hidden" name="bId" value="'.$resultRow['bId'].'">
                <table  class="table-form">
				
				  <tr>
                    <th width="20%">Category</th>
                    <td width="70%">
					 <select name="category" id="categoryU" class="form-control requiredInput">
                    	<option value="0">Select</option>
                        ';
							$sql='select * from services where sStatus=1';
							$resultC=query($sql);
						 	while($resultRowC = fetchArray($resultC))
							{
								if($resultRowC['sId']==$resultRow['bcId'])	
								{
									$list.='<option value="'.$resultRowC['sId'].'" selected>'.$resultRowC['sName'].'</option>';
								}
								else
								{
									$list.='<option value="'.$resultRowC['sId'].'">'.$resultRowC['sName'].'</option>';
								}
							}  
			 		$list.='</select>
						</td>
                    <td width="5%">&nbsp;</td>
                  </tr>	
				<tr>
					  <th width="20%">URL</th>
					  <td width="70%">
					  	<input type="text" name="url" id="urlU"  value="'.$resultRow['url'].'" class="form-control requiredInput">
					  </td>
					  <td width="5%">&nbsp;</td>
            	</tr>
			      <tr>
                    <th width="20%">Title</th>
                    <td width="70%"><input type="text" name="title" id="titleU" value="'.$resultRow['title'].'" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th>Description</th>
                    <td><textarea class="form-control" name="description" id="descriptionU" >'.$resultRow['description'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				 <tr>
                    <th> Description</th>
                    <td><textarea class="form-control" name="sdescription" id="sdescriptionU" >'.$resultRow['sDescription'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   ';
					if($resultRow['trainerId']!=0)
					{
						$list.='<tr>
								<th> </th>
								<td>
								<img src="'.BASEURLFORSITE.$resultRow['imagePath'].'" style="width:235px;height:130px;">
								<input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'">';
					}
					else
					{
						$list.='<tr>
								<th>Image</th>
								<td><input type="file" name="image" id="image" class="form-control"></td>
								<td width="5%">&nbsp;</td>
							  </tr>
							  <tr>
								<th> </th>
								<td><img src="'.$resultRow['imagePath'].'" style="width:235px;height:130px;">
								<input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'">';
					}
						
					$list.='</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

// End Blog 
/* Project Master*/

function printProjectData()
{
	$result=getAllProjectsListDB();
	$i=1;
	$list='';
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['image'].'" style="width:255px;height:120px;"></td>
							<td>'.$resultRow['pName'].'</td>
							<td>';
							if($resultRow['status']=="1")
							 {
									$list.='<button onclick="showHideProject('.$resultRow["pId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
								 $list.='<button onclick="showHideProject('.$resultRow["pId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
						 	$list.='
							</td>
						 	<td><button type="button" onclick="updateProject('.$resultRow['pId'].')" class="btn green-meadow">Edit</button>
							  </td>
						  	<td>
								<button type="button" onclick="deleteProject('.$resultRow['pId'].')" class="btn btn-warning">Delete</button>
							</td>
					 	</tr>';
			}
			echo $list;
}

function deleteProject()
{
	deleteProjectDB();
	printProjectData();
}


function showHideProject()
{
	showHideProjectDB();
	 printProjectData();
}

function getProjectDetailsById()
{
	$result=getProjectDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form enctype="multipart/form-data" method="post" name="ProjectFormUpdate" id="ProjectFormUpdate" onsubmit="return checkAllFieldsUpdate()" action="">
                	<input type="hidden" value="updateProject" name="action" />
				  	<input type="hidden" name="pId" value="'.$resultRow['pId'].'" />
					
                <table  class="table-form" width="100%">
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Image</td>
                    <td width="31%"><input type="file"  class="form-control" id="image" name="image" />
					
						<input type="hidden" name="oldImagePath" value="'.$resultRow['image'].'" />
					</td>
                    <td width="38%"></td>
                  </tr>
				  
				   <tr>
                    <td width="14%"></td>
                    <td width="17%"></td>
                    <td width="31%"><img src="'.$resultRow['image'].'" style="width:250px;height:150px;"></td>
                    <td width="38%"></td>
                  </tr>
				  
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Title</td>
                    <td width="31%"><input type="text"  class="form-control requiredInput" id="titleU" name="title" value="'.$resultRow['pName'].'" /></td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td width="14%"></td>
                    <td width="17%">About</td>
                    <td width="31%"><textarea  class="form-control requiredInput" id="aboutU" name="about">'.$resultRow['about'].'</textarea></td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td width="14%"></td>
                    <td width="17%">Date</td>
                    <td width="31%"><input type="text"  class="form-control requiredInput" id="dateU" name="date"  value="'.$resultRow['date'].'"/></td>
                    <td width="38%"></td>
                  </tr>
                  <tr >
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Update" />
                      <input type="button" onclick="viewProject()" class="btn green" value="Cancel" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
	
}
 
 
 /* End Project Master*/
 
 
//Start---------

function getEmailMessageDetailsById()
{
	$result=getEmailMessageDetailsByIdDB();
	
	$list='';
	$i=1;
 $list='<form action="" method="post" id="emailForm" name="emailForm" enctype="multipart/form-data"  onsubmit="return checkAllFieldsUpdate()">
	 <table class="table">';
	while($resultRow = fetchArray($result))
	{
	 	$list.='<tr>
					<th width="10%">Email Type</th>
					<td width="60%">'.$resultRow['type'].'</td>  
					<td width="10%">
						<input type="hidden" name="action" value="emailMessageUpdate">
						<input type="hidden" name="id" value="'.$resultRow['id'].'">
					</td>
					<td width="20%"> </td>
				</tr>
				<tr>
					<th>Message:</th>
					<td><textarea  name="message" id="message" class="form-control requiredInput" >'.$resultRow['message'].'</textarea></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
					<th> </th>
					<td> 
						<input type="submit" name="add_banner" value="Update" class="btn green" >
					  	<input type="button" class="btn green" onclick="viewEmail()" value="Cancel">
					</td>
					<td> </td>
					<th> </th>
				</tr>';
	}
	$list.='</table></form>';
	echo $list;
}


// Clients Master

function showHideclient()
{
	showHideclientDB();
	$result=getAllClientsListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['cImage'].'" style="width:75px;height:75px;"></td>
							<td>'.$resultRow['caption'].'</td>
							<td>';
							if($resultRow['cStatus']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideclient('.$resultRow["cId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideclient('.$resultRow["cId"].',1)" />';
							}
						  $list.='
							</td>
							<td>
								<img src="assets/images/remove.png"  onclick="deleteclient('.$resultRow['cId'].')"/>
							</td>
					 	</tr>';
			}
		echo $list;
}

function deleteclient()
{
	deleteClientsDB();
	$result=getAllClientsListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['cImage'].'" style="width:75px;height:75px;"></td>
							<td>'.$resultRow['caption'].'</td>
							<td>';
							if($resultRow['cStatus']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideclient('.$resultRow["cId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideclient('.$resultRow["cId"].',1)" />';
							}
						  $list.='
							</td>
							<td>
								<img src="assets/images/remove.png"  onclick="deleteclient('.$resultRow['cId'].')"/>
							</td>
					 	</tr>';
			}
		echo $list;
}

 


// End Clients  Master


// Meta Tag Master
function getMetaTagDetailsById()
{
	$result=getMetaTagDetailsByIdDB();
	$list='<form action="" method="post" id="metaForm" name="metaForm" enctype="multipart/form-data"  onsubmit="return checkAllFieldsUpdate()">
			
	<table class="table">';
	while($resultRow = fetchArray($result))
	{
	 	$list.='<tr>
					<th width="10%">Page Name</th>
					<td width="60%">'.$resultRow['pageName'].'</td>  
					<td width="10%"><input type="hidden" name="action" value="updateMetatag"> </td>
					<td width="20%"><input type="hidden" name="pageId" value="'.$resultRow['pageId'].'"> </td>
				</tr>
				<tr>
					<th>pageTitle:</th>
					<td><input type="text" value="'.$resultRow['pageTitle'].'" name="pageTitle" id="pageTitle" class="form-control requiredInput" ></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
					 <th>metaContent:</th>
					<td><textarea class="form-control requiredInput" name="metaContent" id="metaContent">'.$resultRow['metaContent'].'</textarea></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
					 <th>metaKeyword:</th>
					<td><textarea class="form-control requiredInput" name="metaKeyword" id="metaKeyword">'.$resultRow['metaKeyword'].'</textarea></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
				 	<th>metaDescription:</th>
					<td><textarea class="form-control requiredInput" name="metaDescription" id="metaDescription" >'.$resultRow['metaDescription'].'</textarea></td>
				 	<td width="10%"></td>
					<td width="20%"></td>
				</tr>
			 	 <tr>
					<th> </th>
					<td> <input type="submit" name="add_banner" value="Update" class="btn green" >
					  <input type="button" class="btn green" onclick="viewMetaTag()" value="Cancel"> </td>
					<td> </td>
					<th> </th>
				</tr>';
	}
	$list.='</table></form>';
	echo $list;
}
 

 
// Start Our service

function deleteOurServices()
{
	deleteOurServicesDB();
	$result=getAllServicesNameListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['sName'].'</td>
						<td><img src="'.$resultRow['sImage'].'" style="width:250px;height:120px;" /></td>
					 	<td> 
						<button type="button" onclick="updateServices('.$resultRow['sId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteServices('.$resultRow['sId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
	echo $list;
}

function getOurServicesDetails()
{
	$result=getOurServicesDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
	  $list.='<form action="" method="post" onSubmit="return checkValidationU();" name="cServicesFormU" id="cServicesFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateOurServices">
				<input type="hidden" name="sId" value="'.$resultRow['sId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" value="'.$resultRow['sName'].'" name="name" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th width="20%"> Description</th>
                    <td width="70%"><textarea name="desc" id="titleU" class="form-control">'.$resultRow['desc'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="imageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                    <th width="20%">Home Image</th>
                    <td width="70%"><input type="file" name="himage" id="himageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['sImage'].'">
						<input type="hidden" value="'.$resultRow['sImage'].'" name="oldImagePath">
					</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['hImage'].'">
						<input type="hidden" value="'.$resultRow['hImage'].'" name="oldHImagePath">
					</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update Services" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

// End Our Service

 
// Start Testimonials

function getTestimonialsDetailsById()
{
	$result=getTestimonialsDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="#" method="post" onSubmit="return checkValidationU();" name="testmonialsFormU" id="testmonialsFormU" enctype="multipart/form-data">
					<input type="hidden" name="action" value="updateTestimonials">
					<input type="hidden" name="tId" value="'.$resultRow['tId'].'">
					<table  class="table-form">
					   <tr>
						<th>Name</th>
						<td><input type="text" name="name" value="'.$resultRow['name'].'" id="name1" class="form-control"></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					   <tr>
						<th>Message</th>
						<td><textarea name="message" id="message1" class="form-control">'.$resultRow['message'].'</textarea></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					  
					  <tr>
						<th></th>
						<td><img src="'.$resultRow['image'].'" style="width:250px;height:150px;"></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					  
					  <tr>
                    	<th>Image</th>
                    		<td><input type="file" name="image" id="imageU" class="form-control"></td>
                    		<td width="5%"><input type="hidden" name="oldImagePath" value="'.$resultRow['image'].'"></td>
                 	 </tr>
				 	  <tr>
						<td></td>
						<td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					</table>
				  </form>';
	}
	echo $list;
}

function printTestimonials($result)
{
		$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
					 	<td>'.$resultRow['name'].'</td>
						<td>';
							if($resultRow['status']==1)
							{
								$list.='<button onclick="showHide('.$resultRow["tId"].',0)" type="button" class="btn btn-info">Active</button>';
						 	}
						 	else
						 	{
								$list.='<button onclick="showHide('.$resultRow["tId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
						 	}
						
						$list.='</td>
						<td> 
						<button type="button" onclick="updateMessage('.$resultRow['tId'].')" class="btn green-meadow">View/Edit</button>
						<button type="button" onclick="deleteMessage('.$resultRow['tId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
                 
}

function deleteTestimonials()
{
	deleteTestimonialsDB();
	$result=getAllTestimonialsListDB();
	printTestimonials($result);
}

function showHideTestimonials()
{
	showHideTestimonialsDB();
	$result=getAllTestimonialsListDB();
	printTestimonials($result);
}

// End Testimonials
// Gallery
function getGalleryDetailsById()
{
	$result=getGalleryDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form enctype="multipart/form-data" method="post" name="GalleryForm1" id="GalleryForm1" onsubmit="return checkAllFieldsUpdate()" action="">
                <input type="hidden" value="updateGalleryImage" name="action" />
				<input type="hidden" value="'.$resultRow['gId'].'" name="gId" />
              <table   class="table-form" width="100%">
                  
                 
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Caption</td>
                    <td width="31%"><input type="text" value="'.$resultRow['gCaption'].'"  class="form-control" id="caption" name="caption" /></td>
                    <td width="38%"></td>
                  </tr>
				   <tr>
                    <td width="14%"></td>
                    <td width="17%">Image</td>
                    <td width="31%"><input type="file"  class="form-control" id="image" name="image" /></td>
                    <td width="38%"></td>
                  </tr>
				  <tr>
                    <td width="14%"></td>
                    <td width="17%"> </td>
                    <td width="31%">
						<img src="'.$resultRow['gImagePath'].'" style="width:230px;height:150px;"/>
						<input type="hidden" name="oldImage" value="'.$resultRow['gImagePath'].'">
					</td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Submit" />
                      <input type="button" onclick="viewGallery()" class="btn green" value="Cancle" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}
function deleteGallery()
{
	deleteGalleryDB();
	$result=getAllGalleryListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
					 <td>'.$i++.'</td>
							<td><img src="'.$resultRow['gImagePath'].'" style="width:255px;height:120px;"></td>
							<td>'.$resultRow['gCaption'].'</td>
							<td>';
							if($resultRow['gStatus']=="1")
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							$list.='
							</td>
							 
							<td><button type="button" onclick="updateGallery('.$resultRow['gId'].')" class="btn green-meadow">Edit</button>
							  </td>
						  	<td>
							<button type="button" onclick="deleteGallery('.$resultRow['gId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
	}
	echo $list;
}
function showHideImage()
{
	showHideImageDB();
	$result=getAllImagesListDB();
	printImageData($result);
}
function deleteImage()
{
	deleteImageDB();
	$result=getAllImagesListDB();
	printImageData($result);
}
function printImageData($result)
{
	$i=1;
	$list='';
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['imImageMaster'].'" style="width:180px;height:80px;"></td>
							<td><input type="text" readonly="readonly" value="'.BASEURL.$resultRow['imImageMaster'].'"  class="form-control"></td>
						 	 <td>
							<button type="button" onclick="deleteImage('.$resultRow['imId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
			}
			echo $list;
}


function showHideGallery()
{
	showHideGalleryDB();
	$result=getAllGalleryListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['gImagePath'].'" style="width:255px;height:120px;"></td>
							<td>'.$resultRow['gCaption'].'</td>
							<td>';
							if($resultRow['gStatus']=="1")
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							$list.='
							</td>
							 
							<td><button type="button" onclick="updateGallery('.$resultRow['gId'].')" class="btn green-meadow">Edit</button>
							  </td>
						  	<td>
							<button type="button" onclick="deleteGallery('.$resultRow['gId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
	}
	echo $list;
}
// End Gallery


//Services
function printServicesName($result)
{
		$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td><input type="text" class="form-control" value="'.$resultRow['sName'].'" id="sName_'.$resultRow['sId'].'"></td>
					 	<td> 
						<button type="button" onclick="updateServices('.$resultRow['sId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteServices('.$resultRow['sId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}

function deleteServicesName()
{
	deleteServicesNameDB();
	$result=getAllServicesNameListDB();
	printServicesName($result);
}

 

// End Services

function getPageDetails()
{
	$result=getPageDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.=' <form enctype="multipart/form-data" method="post" name="PageDataFormUpdate" id="PageDataFormUpdate" onsubmit="return checkAllFieldsUpdate()" action="">
              <input type="hidden" value="updateNewPage" name="action" />
			  <input type="hidden" value="'.$resultRow['pageId'].'" name="pageId" />
                <table   class="table">
                  <tr>
                    <td width="6%"></td>
                    <td width="14%">Page Name</td>
                    <td width="76%"><input type="text" class="form-control requiredInput" id="pageNameU" value="'.$resultRow['pageName'].'" name="pageName" /></td>
                    <td width="4%"></td>
                  </tr>
                 <tr>
                    <td width="6%"></td>
                    <td width="14%">Page Content</td>
                    <td width="76%"><textarea class="textBox requiredInput" id="pageContent1U" name="pageContent1">'.$resultRow['pageData'].'</textarea></td>
                    <td width="4%"></td>
                  </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Update" />
                      <input type="button" class="btn green" value="Cancle" onclick="viewPageData()" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

function deleteQuery()
{
	deleteQueryDB();
	$result=getAllContactQueryListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td>'.$resultRow['cName'].'</td>
					<td>'.$resultRow['cPhone'].'</td>
					<td>'.$resultRow['cEmailId'].'</td>
					<td><textarea>'.$resultRow['message'].'</textarea></td>
				     <td> <button type="button" onclick="deleteQuery('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  </tr>';
		}
	echo $list;	
		
}
function printSliderData($result)
{
	$list='';
	$i=1;
	while($resultRow = fetchArray($result))
	{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td><img src="'.$resultRow['imagePath'].'" width="235" height="120"/></td>
                    <td> <button type="button" onclick="deleteSlider('.$resultRow['sId'].')" class="btn btn-warning">Delete</button>';
                     if($resultRow['status']==1) 
					 { 
					 	$list.='<button onclick="showHide('.$resultRow["sId"].',0)" type="button" class="btn btn-info">Active</button>';
					 }
					 else
					 {
						 $list.='<button onclick="showHide('.$resultRow["sId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
					 }
                   $list.='</td>
                  </tr>';
	}
	echo $list;
}
function deleteSlider()
{
	deleteSliderDB();
	$result=getAllSliderImagesDB();
	printSliderData($result);
}
function showHideSlider()
{
	showHideSliderDB();
	$result=getAllSliderImagesDB();
	printSliderData($result);
}
 
  
   //delete query
  function deleteAptQuery()
{
 deleteAptQueryDB();
 $result=getAllAptQueryListDB();
 $list='';
 $i=1;
  while($resultRow = fetchArray($result))
  {
   $list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td>'.$resultRow['name'].'</td>
					<td>'.$resultRow['phone'].'</td>
					<td>'.$resultRow['email'].'</td>
					<td>'.$resultRow['gender'].'</td>
					<td>'.$resultRow['dateOfBirth'].'</td>
					<td>'.$resultRow['date'].'</td>
					<td><textarea>'.$resultRow['message'].'</textarea></td>
         <td> <button type="button" onclick="deleteQuery('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  </tr>';
  }
 echo $list; 
}
  
?>