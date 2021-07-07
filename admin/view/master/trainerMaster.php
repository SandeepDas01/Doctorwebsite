<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Trainer Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewTrainer()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewTrainer">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php
			
			$sql="select * from trainer  order by `tId` desc ";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="25%"><strong>Name</strong></td>
							<td width="30%"><strong>Image</strong></td>
							<td width="8%"><strong>Status</strong></td>
						 	<td width="8%"><strong>View</strong></td>
							<td width="8%"><strong>Delete</strong></td>
					 	</tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
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
					 	<img src="assets/images/doc_view.png" onclick="viewTrainerDetails('.$resultRow['tId'].')" />
					</td>
					<td>
						<img src="assets/images/remove.png"  onclick="deleteTrainer('.$resultRow['tId'].')"/>
					</td>
				</tr>';
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="5">No Trainer Listed !!</td>
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
            <div id="viewTrainerDiv" style="display:none;"> </div>
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
 
 
 

function viewTrainer()
{
	window.location.href="?action=trainerMaster";
}

function viewTrainerDetails(id)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id,
		type: 'POST',
		data: 'act=viewTrainerDetails',
		success: function(data)
		{
			document.getElementById("viewTrainer").style.display="none";
			document.getElementById("viewTrainerDiv").style.display="block";
			document.getElementById("viewTrainerDiv").innerHTML=data;
	 	},
		error: function(e)
		{
 		}
	 });
}


function showHideTrainer(TrainerId,status)
{
	$.ajax({
		url: '?action=ajaxAction&id='+TrainerId+'&status='+status,
		type: 'POST',
		data: 'act=showHideTrainer',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Trainer Status Changed Successfully!',
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
  
  
function deleteTrainer(id)
{
	var temp=confirm("Are You Sure ? You Want to Delete This Trainer !");
	if(temp)
	{
		 $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=deleteTrainer',
				  success: function(data)
				  {
					   $().toastmessage('showToast',
						{
							text     : 'Trainer   Deleted  Successfully!',
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
 