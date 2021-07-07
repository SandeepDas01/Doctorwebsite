
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Gallery Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewGallery()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="newGallery()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewGallery">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <?php
			
			$sql="select * from gallery  order by `gId` desc ";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="25%"><strong>Image</strong></td>
							<td width="30%"><strong>Caption[Title] </strong></td>
							<td width="14%"><strong>Status</strong></td>
						 	<td width="8%"><strong>Update</strong></td>
							<td width="8%"><strong>Delete</strong></td>
						  
						</tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
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
								 $list.='<input type="checkbox" onchange="showHideGallery('.$resultRow["gId"].',1)" class="make-switch" data-on-text="&nbsp;Active&nbsp;">';
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
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="4">No Gallery Listed !!</td>
						</tr>';
			}
			else
			{
				$list.='</tbody>';
			}
			echo $list;
		?>
                </tbody>
                
              </table>
            </div>
            <div id="newGallery" style="display:none">
              <form enctype="multipart/form-data" method="post" name="GalleryForm" id="GalleryForm" onsubmit="return checkAllFields()" action="">
                <input type="hidden" value="addNewGallery" name="action" />
                <table  class="table-form" width="100%">
                  
                  <tr>
                    <td width="14%"></td>
                    <td width="17%">Image</td>
                    <td width="31%"><input type="file"  class="form-control requiredInput" id="image" name="image" /></td>
                    <td width="38%"></td>
                  </tr>
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Caption</td>
                    <td width="31%"><input type="text"  class="form-control" id="caption" name="caption" /></td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Submit" />
                      <input type="reset" class="btn green" value="Reset" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="updateGalleryDiv" style="display:none;"> </div>
          </div>
        </div>
        <!-- End: life time stats -->
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include "view/common/footer.php"; ?>
<link type="text/css" href="assets/css/jquery.toastmessage.css" rel="stylesheet"/>
<script src="assets/js/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>
<script language="javascript" type="text/javascript">
function checkAllFields()
{
	var t = checkRequiredFields('GalleryForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

 function viewGallery()
 {
		 window.location.href="?action=galleryMaster";
 }
	
 function newGallery()
 {
	 document.getElementById("viewGallery").style.display="none"; 
	 document.getElementById("updateGalleryDiv").style.display="none";
	 document.getElementById("newGallery").style.display="block";
 }

function showHideGallery(galleryId,status)
{
	$.ajax({
		url: '?action=ajaxAction&galleryId='+galleryId+'&status='+status,
		type: 'POST',
		data: 'act=showHideGallery',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Gallery Status Changed Successfully!',
				position : 'top-right',
				stayTime: 2000,
				type     : 'success'
			});
			 document.getElementById("innerContent").innerHTML=data;
		 					 
		},
		error: function(e)
		{
 		}
	 });
}
  
 
function updateGallery(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getGalleryDetailsById',
				  success: function(data)
				  {
					  
					document.getElementById("viewGallery").style.display="none"; 
					document.getElementById("newGallery").style.display="none";
					document.getElementById("updateGalleryDiv").style.display="block";
				 	document.getElementById("updateGalleryDiv").innerHTML=data;
			 	},
			error: function(e)
			{
 			}
	 });
 	 
}
function deleteGallery(id)
{
	var temp=confirm("Are You Sure ? You Want to Delete This Gallery Image !");
	if(temp)
	{
		 $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=deleteGallery',
				  success: function(data)
				  {
					   $().toastmessage('showToast',
						{
							text     : 'Gallery Image Deleted  Successfully!',
							position : 'top-right',
							stayTime: 2000,
							type     : 'success'
						 });
					   
						 document.getElementById("innerContent").innerHTML=data;
						 
				},
			error: function(e)
			{
 				//called when there is an error
				//console.log(e.message);
			}
		});
	}
}
 
 $(document).ready(function() {
	$(".requiredInput").blur(function(){
	  	$(this).removeClass("textboxError");
	});
 });
 	
</script>
<?php 
if(isset($_REQUEST['galleryImagesUploadedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New Gallery Added Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

if(isset($_REQUEST['galleryUpdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Gallery Image Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

 
?>
