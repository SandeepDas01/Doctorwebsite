<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <h3 class="page-title"> Pages  Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewPages()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
     
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewPages">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php
			
			$sql="SELECT * FROM `pages` ";
					
			 $result=query($sql);
			 
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="25%"><strong>Page Name</strong></td>
						  	<td width="8%"><strong>Update</strong></td>
					 	</tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td>'.$resultRow['pageTitle'].'</td>
						    <td><img src="assets/images/doc_edit.png"  onclick="updatePages('.$resultRow['pId'].')"/></td>
					   </tr>';
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="3">No Pages Listed !!</td>
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
             
            <div id="updatePagesDiv" style="display:none;"> </div>
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
	var t = checkRequiredFields('PagesForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

 function viewPages()
 {
		 window.location.href="?action=pageMaster";
 }
 

 
 
function updatePages(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getPagesDetailsById',
				  success: function(data)
				  {
				 	document.getElementById("viewPages").style.display="none"; 
				  	document.getElementById("updatePagesDiv").style.display="block";
				 	document.getElementById("updatePagesDiv").innerHTML=data;
					CKEDITOR.replace( 'desc' );
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
if(isset($_REQUEST['PagesImagesUploadedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New Pages Added Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

if(isset($_REQUEST['PagesUpdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Pages Image Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

 
?>
