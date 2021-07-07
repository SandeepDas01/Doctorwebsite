<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Video Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="listVideo()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="linkupload()"><span class="btn blue dropdown-toggle">Add New Link [You tube ]</span></a> </li>
      <li class="btn-group"> <a onclick="videoupload()"><span class="btn blue dropdown-toggle">Add New Video</span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="videoList" >
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr>
                    <th>S.NO</th>
                    <th width="45%">Video Name</th>
                    <th width="15%">Cover Image</th>
                    <th width="10%">Delete</th>
                  </tr>
                </thead>
                <tbody id="interContent">
                  <?php
						$sql="select * from video where status=1 order by Date desc";
						$result=query($sql);
						$i=1;
						$list='';		
							while($resultRow = fetchArray($result))
							{$i++;
								$list.='<tr>
											<td>'.$resultRow["videoId"].'</td>
											<td>'.$resultRow["videoName"].'</td>
											<td><img src="..//'.$resultRow["videoImagePath"].'" style="width:80px;height:80px" /></td>
										    <td><img src="assets/images/delete.png" onclick="deleteVideo('.$resultRow["videoId"].')"/></td>
										</tr>';
							}
							echo $list;
            	?>
                </tbody>
              </table>
            </div>
            <div id="videoUpload" style="display:none" class="beta01 top-margin12 float-l">
              <form method="post" enctype="multipart/form-data" onSubmit="return validateVideoUploadForm()" id="videoUploadForm">
                <input type="hidden" name="action" value="videoUpload" />
                <table width="100%" class="table-form">
                  <tr>
                    <td> Video Name </td>
                    <td><input type="text" name="videoName" id="videoName2" class="form-control requiredInput"/></td>
                  </tr>
                  <tr>
                    <td> Browse Track </td>
                    <td><input type="file" name="videoFile" id="videoFile2" class="form-control requiredInput"/></td>
                  </tr>
                  <tr>
                    <td> Track Image </td>
                    <td><input type="file" name="videoImageFile" id="videoImageFile2" class=" form-control requiredInput"/></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="videoUpload" class="btn green" value="upload" /></td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="linkUpload" style="display:none" class="beta01 top-margin12 float-l">
              <form method="post" enctype="multipart/form-data" onSubmit="return validateLinkVdoForm()" id="linkVdoForm">
                <input type="hidden" name="action" value="linkUpload" />
                 <table width="100%" class="table-form">
                  <tr>
                    <td width="25%"> Video Title </td>
                    <td><input type="text" name="videoName" id="videoName" class=" form-control requiredInput" /></td>
                  </tr>
                  <tr>
                    <td> Track Image </td>
                    <td><input type="file" name="videoImageFile" id="videoImageFile2" class="  form-control requiredInput"/></td>
                  </tr>
                  <tr>
                    <td> Video Link </td>
                    <td><textarea name="videoLink"  id="videoLink" class="  form-control " ></textarea></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><input type="submit" class="btn green"  name="linkUpload" value="upload" /></td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="videoUpdateDiv" style="display:none" class="beta01 top-margin12 float-l"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body><?php include "view/common/footer.php"; ?>
<link type="text/css" href="assets/css/jquery.toastmessage.css" rel="stylesheet"/>
<script src="assets/js/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>
<script language="javascript" type="text/javascript">
 
 function linkupload()
{
	  	document.getElementById("videoList").style.display="none"; 
		document.getElementById("videoUpload").style.display="none"; 
		document.getElementById("videoUpdateDiv").style.display="none";
		document.getElementById("linkUpload").style.display="block"; 
}
 
function videoupload()
{
	   	document.getElementById("videoList").style.display="none"; 
	    document.getElementById("videoUpdateDiv").style.display="none";
		document.getElementById("linkUpload").style.display="none"; 
		document.getElementById("videoUpload").style.display="block"; 
}
 

function validateVideoUploadFormU()
{
		t = checkRequiredFields('videoUploadFormU');
		if(t==true)
		return true
		else
		return false;
}

function validateVideoUploadForm()
{

		t = checkRequiredFields('videoUploadForm');
		if(t==true)
		return true
		else
		return false;
}
function listVideo()
{
	   document.location.href="?action=video";
}

$(document).ready(function()
{
	$(".requiredInput").blur(function(){
	  	$(this).removeClass("textboxError");
	});
});
 

function deleteVideo(id)
{
	var temp=confirm("Are You Sure For Delete This Video !");
 	if(temp)
	{
 	 	$.ajax({
			  url: '?action=ajaxAction&videoId='+id,
			  type: 'GET',
			  data: 'act=deleteVideo',
			  success: function(data) {
				//called when successful
			$().toastmessage('showToast', {
				text     : 'Video Deleted Successfully',
				position : 'top-right',
				stayTime: 4000,
				type     : 'success'
            });
			document.getElementById('interContent').innerHTML =data;
	 
            },
			  error: function(e) {
				//called when there is an error
				//console.log(e.message);
			  }
		 });
	}
}

 
 
 </script>
<?php 
  
  if(isset($_REQUEST['videoUploadDone']))
  {
	echo "<script> $().toastmessage('showToast', {
            text     : 'New Video Uploaded Successfully',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
            });</script>";
  }
  
  if(isset($_REQUEST['LinkUploadDone']))
  {
	echo "<script> $().toastmessage('showToast', {
            text     : 'New Video Link Added Successfully',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
            });</script>";
  }
   if(isset($_REQUEST['updateVideoDetailsdone']))
  {
	echo "<script> $().toastmessage('showToast', {
            text     : 'Video Updated Successfully',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
            });</script>";
  }
  
 
 
  ?>
