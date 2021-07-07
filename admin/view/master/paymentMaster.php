<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <h3 class="page-title">Payment  Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewclient()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="newclient()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewclient">
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <?php
			
			$sql="SELECT * FROM `payment` as p
					left join trainer as t on t.tId=p.`p_trainerId`
					left join member as m on m.mId=p.`memberId`
					left join dietplans as dp on dp.dpId=p.dplanId
					order by pId Desc";
					
			 $result=query($sql);
			 
			 $list='<thead>
						<tr>
							<td width="5%"><strong>No.</strong></td>
							<td width="10%"><strong>Amount</strong></td>
							<td width="25%"><strong>Plan Name</strong></td>
							<td width="15%"><strong>Buyer Name</strong></td>
							<td width="15%"><strong>Trainer Name</strong></td>
							<td width="14%"><strong>View</strong></td>
						 	<td width="8%"><strong>Payment Confirmed</strong></td>
					 	</tr>
						</thead>
						<tbody id="innerContent">';
			$i=1;
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td>'.$resultRow['amount'].'</td>
							<td>'.$resultRow['planName'].'</td>
							<td>'.$resultRow['mName'].'</td>
							<td>'.$resultRow['tName'].'</td>
						    <td><input type="button" value="View Details"  onclick="viewPayment('.$resultRow['pId'].')"></td>
						 	<td><input type="button" value="Payment Done"  onclick="viewPayment('.$resultRow['pId'].')"/></td>
					 	</tr>';
			}
			
			if($i==1)
			{
				$list='<tr>
							<td colspan="5">No client Listed !!</td>
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
            <div id="newclient" style="display:none">
              <form enctype="multipart/form-data" method="post" name="clientForm" id="clientForm" onsubmit="return checkAllFields()" action="">
                <input type="hidden" value="addNewclient" name="action" />
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
            <div id="updateclientDiv" style="display:none;"> </div>
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
	var t = checkRequiredFields('clientForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

 function viewclient()
 {
		 window.location.href="?action=clientsMaster";
 }
	
 function newclient()
 {
	 document.getElementById("viewclient").style.display="none"; 
	 document.getElementById("updateclientDiv").style.display="none";
	 document.getElementById("newclient").style.display="block";
 }

function showHideclient(clientId,status)
{
	$.ajax({
		url: '?action=ajaxAction&clientId='+clientId+'&status='+status,
		type: 'POST',
		data: 'act=showHideclient',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'client Status Changed Successfully!',
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
  
 
function updateclient(id)
{
    	  $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=getclientDetailsById',
				  success: function(data)
				  {
					  
					document.getElementById("viewclient").style.display="none"; 
					document.getElementById("newclient").style.display="none";
					document.getElementById("updateclientDiv").style.display="block";
				 	document.getElementById("updateclientDiv").innerHTML=data;
			 	},
			error: function(e)
			{
 			}
	 });
 	 
}
function deleteclient(id)
{
	var temp=confirm("Are You Sure ? You Want to Delete This client Image !");
	if(temp)
	{
		 $.ajax({
				  url: '?action=ajaxAction&id='+id,
				  type: 'POST',
				  data: 'act=deleteclient',
				  success: function(data)
				  {
					   $().toastmessage('showToast',
						{
							text     : 'client Image Deleted  Successfully!',
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
if(isset($_REQUEST['clientImagesUploadedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New client Added Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

if(isset($_REQUEST['clientUpdateDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'client Image Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}

 
?>
