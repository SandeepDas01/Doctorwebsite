
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Email Master</h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewEmail()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
 
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewEmail">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php  
               $sql="SELECT * FROM `emailmaster` order by id asc";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td>S. No</td>
							<td width="20%"><strong>Type</strong></td>
						 		<td width="10%"><strong>Update</strong></td>
					   </tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
						  	<td>'.$resultRow['type'].'</td>
					 	 	<td>
						 		<button type="button" onclick="updateEmail('.$resultRow['id'].')" class="btn green-meadow">Edit</button>
							 </td>
						  	 
					 	</tr>';
						 
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="3">No Email Listed !!</td>
					 </tr>';
			}
			else
			{
				$list.='</tbody>';
			}
			echo $list;
		?>
              </table>
            </div>
            
            <div id="updateEmailDiv" style="display:none;">
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
<script>
  
function checkAllFieldsUpdate()
{
	var t = checkRequiredFields('EmailUpdate');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

function viewEmail()
{
		 window.location.href="?action=emailMaster";
}
 
function updateEmail(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getEmailMessageDetailsById',
				  success: function(data)
				  {
					document.getElementById("viewEmail").style.display="none"; 
					document.getElementById("updateEmailDiv").style.display="block";
				 	document.getElementById("updateEmailDiv").innerHTML=data;
					CKEDITOR.replace( 'message' );
		 		 	},
			error: function(e)
			{
 			}
	 });
 	 
}
 
 
 $(document).ready(function() {
	$(".requiredInput").blur(function(){
	  	$(this).removeClass("textboxError");
	});
 });
 	
</script>
 
 
<?php 
 
if(isset($_REQUEST['emailMessageUpdate']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Email Message Updated Updated Successfully!',
            position : 'top-right',
			stayTime: 2000,
            type     : 'success'
         });
	 	</script>";
}

 
?>


</body></html>