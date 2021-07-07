
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Meta Tag Master</h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewMetaTag()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
 
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewMetaTag">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php  
               $sql="SELECT * FROM `metatag` order by pageId asc";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td>S. No</td>
							<td width="20%"><strong>Page Name</strong></td>
							<td width="30%"><strong>Title</strong></td>
 							<td width="10%"><strong>Update</strong></td>
					   </tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
						  	<td>'.$resultRow['pageName'].'</td>
							<td>'.$resultRow['pageTitle'].'</td>
						 	<td>
							
							<button type="button" onclick="updateMetaTag('.$resultRow['pageId'].')" class="btn green-meadow">Edit</button>
							 </td>
						  	 
					 	</tr>';
						 
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="3">No MetaTag Listed !!</td>
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
            
            <div id="updateMetaTagDiv" style="display:none;">
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
	var t = checkRequiredFields('MetaTagUpdate');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

function viewMetaTag()
{
		 window.location.href="?action=metaTagMaster";
}
 
function updateMetaTag(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getMetaTagDetailsById',
				  success: function(data)
				  {
					document.getElementById("viewMetaTag").style.display="none"; 
					document.getElementById("updateMetaTagDiv").style.display="block";
				 	document.getElementById("updateMetaTagDiv").innerHTML=data;
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
 
if(isset($_REQUEST['metatagupdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Meta Tag Updated Updated Successfully!',
            position : 'top-right',
			stayTime: 2000,
            type     : 'success'
         });
	 	</script>";
}

 
?>


</body></html>