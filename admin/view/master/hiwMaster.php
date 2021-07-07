
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Team </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewhiw()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="addNewhiw()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewhiwDiv">
              <?php 
				$sql= "select * from hiw order by hId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Name </th>
                    <th width="15%"> Image </th>
                    <th width="15%"> Post </th>
                    <th width="15%">Update / Delete </th>
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
						<td>'.$resultRow['hName'].'</td>
					

						<td><img src="'.$resultRow['hImage'].'" style="width:250px;height:120px;" /></td>
							<td>'.$resultRow['hpost'].'</td>
					 	<td> 
						<button type="button" onclick="updateTeam('.$resultRow['hId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteTeam('.$resultRow['hId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Team Member Found!
                      </center>
                      </b></td>
                  </tr>';
		}
	echo $list;
  ?>
                </tbody>
              </table>
            </div>
            <div id="addNewhiwDiv" style="display:none">
              <form action="" method="post" onSubmit="return checkValidation();" name="hiwForm" id="hiwForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewTeam">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" name="name" id="name" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Post</th>
                    <td width="70%"><input type="text" name="tpost" id="tpost" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Description</th>
                    <td width="70%"><textarea name="desc" id="desc" class="form-control requiredInput"></textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Add hiw" class="btn green" ></td>
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

function deletehiw(Id)
{
	var temp=confirm("Are You Confirm to delete this hiw!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteTeam',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Team Member Deleted Successfully!',
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

function updateTeam(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getTeamDetails',
			  success: function(data)
			  {
				document.getElementById("viewhiwDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
	 			document.getElementById("addNewhiwDiv").style.display="none";
				
				 
			  	document.getElementById("updateDiv").innerHTML=data;
				CKEDITOR.replace( 'titleU' ); 
		 	  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewhiw()
{
	document.getElementById("viewhiwDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
 	document.getElementById("addNewhiwDiv").style.display="block";
	CKEDITOR.replace( 'desc' ); 
}
function viewhiw()
{
	window.location.href="?action=hiwMaster";
}
 
function checkValidation()
{
	var t = checkRequiredFields('hiwForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>