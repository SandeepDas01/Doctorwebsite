
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Member Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewMember()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewMember">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php
			
			$sql="select * from member  order by `mId` desc ";
			$result=query($sql);
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="25%"><strong>Name</strong></td>
							<td width="30%"><strong>Phone</strong></td>
							<td width="14%"><strong>Status</strong></td>
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
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="5">No Member Listed !!</td>
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
            <div id="viewMemberDiv" style="display:none;"> </div>
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
 

function viewMember()
{
	window.location.href="?action=memberMaster";
}
function viewMemberDetails(id)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id,
		type: 'POST',
		data: 'act=viewMemberDetails',
		success: function(data)
		{
			document.getElementById("viewMember").style.display="none";
			document.getElementById("viewMemberDiv").style.display="block";
			document.getElementById("viewMemberDiv").innerHTML=data;
	 	},
		error: function(e)
		{
 		}
	 });
}

function showHideMember(MemberId,status)
{
	$.ajax({
		url: '?action=ajaxAction&id='+MemberId+'&status='+status,
		type: 'POST',
		data: 'act=showHideMember',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Member Status Changed Successfully!',
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
  
  
function deleteMember(id)
{
	var temp=confirm("Are You Sure ? You Want to Delete This Member Image !");
	if(temp)
	{
		 $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=deleteMember',
				  success: function(data)
				  {
					   $().toastmessage('showToast',
						{
							text     : 'Member  Deleted  Successfully!',
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
if(isset($_REQUEST['MemberImagesUploadedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New Member Added Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

if(isset($_REQUEST['MemberUpdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Member Image Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

 
?>
