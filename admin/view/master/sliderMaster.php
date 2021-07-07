
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Home Silder </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewSliderImages()"><span class="btn blue dropdown-toggle">View Slider Images </span></a> </li>
      <li class="btn-group"> <a onclick="addNewSliderImage()"><span class="btn blue dropdown-toggle">Add New Image </span></a> </li>
      
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewSliderDiv">
              <?php 
				$sql= "select * from slider";
				$result=query($sql);
	 			?>
             <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Image </th>
                    <th width="15%"> Delete / Status </th>
                  </tr>
                </thead>
                <tbody id="innerContent">
                  <?php 
				$i=1;
	$list='';
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
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Slider Image Found!
                      </center>
                      </b></td>
                  </tr>';
		}
		
		echo $list;
		
		 ?>
                </tbody>
              </table>
            </div>
          <div id="addNewSliderDiv" style="display:none">
          	<form action="#" method="post" onSubmit="return checkValidation();" name="sliderForm" id="sliderForm" enctype="multipart/form-data">
		 		<input type="hidden" name="action" value="addNewSliderImage">
<div class="form-group">
					<label class="control-label">Slider Image <span style="color:#FF0000;"> (Width:1280px , Height:450px)</span></label>
					<div>
					<span class="btn default btn-file">
					<span class="fileinput-new">
				  </span>
					
					<input type="file" name="image" id="image" class="requiredInput">
					</span>
					<span id="image_error" style="color:#FF0000;"></span>
				</div>
				</div>
				<div class="margin-top-10">
					<input type="submit" name="add_banner" value="Add Banner" class="btn green" >
										
				</div>
			</form>
          </div>  
            
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
function deleteSlider(Id)
{
	var temp=confirm("Are You Confirm to delete this Image");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteSlider',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Slider Image Deleted Successfully!',
						position : 'top-right',
						stayTime: 4000,
						type     : 'success'
					 });
				  document.getElementById("innerContent").innerHTML=data;
			  },
			 error: function(e)
			 {
			 }
		});
	}
}
function showHide(Id,status)
{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id+'&status='+status,
			  type: 'POST',
			  data: 'act=showHideSlider',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Slider Image Status Changed Successfully!',
						position : 'top-right',
						stayTime: 4000,
						type     : 'success'
					 });
				  document.getElementById("innerContent").innerHTML=data;
			  },
			 error: function(e)
			 {
			 }
		});
}


function addNewSliderImage()
{
	document.getElementById("viewSliderDiv").style.display="none";
	document.getElementById("addNewSliderDiv").style.display="block";
}
function viewSliderImages()
{
	window.location.href="?action=sliderMaster";
}

function checkAllFieldsUpdate()
{
	var t = checkRequiredFields('SliderUpdateForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
} 
function checkValidation()
{
	var t = checkRequiredFields('sliderForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>