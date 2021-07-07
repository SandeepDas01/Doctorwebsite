
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Before After Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewbAfter()"><span class="btn blue dropdown-toggle">View bAfter </span></a> </li>
      <li class="btn-group"> <a onclick="addNewbAfter()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewbAfterDiv">
              <?php 
				$sql= "select * from beforeafer order by id desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Before Image </th>
                    <th width="15%"> After Image </th>
                    <th width="15%">View / Delete </th>
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
						 
					 	<td><img src="'.$resultRow['imagePath'].'" alt="Image Not Found" width="150" height="75"/></td>
						<td><img src="'.$resultRow['aImagePath'].'" alt="Image Not Found" width="150" height="75"/></td>
						<td> 
						<button type="button" onclick="updateMessage('.$resultRow['id'].')" class="btn green-meadow">View/Edit</button>
						<button type="button" onclick="deleteMessage('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Promotions Found!
                      </center>
                      </b></td>
                   </tr>';
		}
		
		echo $list;
		
		 ?>
                </tbody>
              </table>
            </div>
            <div id="addNewbAfterDiv" style="display:none">
              <form action="#" method="post" onSubmit="return checkValidation();" name="bAfterForm" id="bAfterForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewBeforeMaster">
                <table  class="table-form">
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" id="title" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th>Before Image</th>
                    <td><input type="file" name="image" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th>After Image</th>
                    <td><input type="file" name="aimage" id="aimage" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Add New" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="updateDiv"> </div>
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
 


function deleteMessage(Id)
{
	var temp=confirm("Are You Confirm to delete this Message!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteBeforeAfter',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Image Deleted Successfully!',
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

function updateMessage(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getbAfterDetailsById',
			  success: function(data)
			  {
				document.getElementById("viewbAfterDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
				document.getElementById("addNewbAfterDiv").style.display="none";
				document.getElementById("updateDiv").innerHTML=data;
			 },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewbAfter()
{
	document.getElementById("viewbAfterDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
	document.getElementById("addNewbAfterDiv").style.display="block";
	 
}
function viewbAfter()
{
	window.location.href="?action=beforeAfterMaster";
}

function checkValidationU()
{
	var t = checkRequiredFields('bAfterFormU');
	if(t==true)
	{
		return true;
	}
	else
		return false;
} 
function checkValidation()
{
	var t = checkRequiredFields('bAfterForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html><?php
 
if(isset($_REQUEST['updateBADone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Before After Updated Successfully!!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}
if(isset($_REQUEST['bAfterAddedDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'New Before After Added Successfully!!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}
?>