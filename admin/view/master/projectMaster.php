
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Project Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewProject()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="newProject()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewProject">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <?php
			
			$sql="select * from projects  order by `pId` desc ";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="25%"><strong>Image</strong></td>
							<td width="30%"><strong>Title</strong></td>
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
						<td>
						<button type="button" onclick="updateProject('.$resultRow['pId'].')" class="btn green-meadow">Edit</button>
							</td>
						  	<td>
								<button type="button" onclick="deleteProject('.$resultRow['pId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="6">No Project Listed !!</td>
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
            <div id="newProject" style="display:none">
              <form enctype="multipart/form-data" method="post" name="ProjectForm" id="ProjectForm" onsubmit="return checkAllFields()" action="">
                <input type="hidden" value="addNewProject" name="action" />
                <table  class="table-form" width="100%">
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Image</td>
                    <td width="31%"><input type="file"  class="form-control requiredInput" id="image" name="image" /></td>
                    <td width="38%"></td>
                  </tr>
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Title</td>
                    <td width="31%"><input type="text"  class="form-control requiredInput" id="title" name="title" /></td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td width="14%"></td>
                    <td width="17%">About</td>
                    <td width="31%"><textarea class="form-control requiredInput" id="about" name="about"></textarea></td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td width="14%"></td>
                    <td width="17%">Date</td>
                    <td width="31%"><input type="text"  class="form-control requiredInput" id="date" name="date" /></td>
                    <td width="38%"></td>
                  </tr>
                  <tr >
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Submit" />
                      <input type="reset" class="btn green" value="Reset" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="updateProjectDiv" style="display:none;"> </div>
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

function checkAllFieldsUpdate()
{
	var t = checkRequiredFields('ProjectFormUpdate');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

function checkAllFields()
{
	var t = checkRequiredFields('ProjectForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

 function viewProject()
 {
		 window.location.href="?action=ourProject";
 }
	
 function newProject()
 {
	 document.getElementById("viewProject").style.display="none"; 
	 document.getElementById("updateProjectDiv").style.display="none";
	 document.getElementById("newProject").style.display="block";
 }

function showHideProject(ProjectId,status)
{
	$.ajax({
		url: '?action=ajaxAction&ProjectId='+ProjectId+'&status='+status,
		type: 'POST',
		data: 'act=showHideProject',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Project Status Changed Successfully!',
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
  
 
function updateProject(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getProjectDetailsById',
				  success: function(data)
				  {
					  
					document.getElementById("viewProject").style.display="none"; 
					document.getElementById("newProject").style.display="none";
					document.getElementById("updateProjectDiv").style.display="block";
				 	document.getElementById("updateProjectDiv").innerHTML=data;
			 	},
			error: function(e)
			{
 			}
	 });
 	 
}
function deleteProject(id)
{
	var temp=confirm("Are You Sure ? You Want to Delete This Project Image !");
	if(temp)
	{
		 $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=deleteProject',
				  success: function(data)
				  {
					   $().toastmessage('showToast',
						{
							text     : 'Project Image Deleted  Successfully!',
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
if(isset($_REQUEST['ProjectImagesUploadedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New Project Added Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

if(isset($_REQUEST['ProjectUpdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Project Image Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

 
?>
