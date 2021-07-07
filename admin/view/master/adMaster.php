<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Ad Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewAd()"><span class="btn blue dropdown-toggle">View All Ad</span></a> </li>
      <li class="btn-group"> <a onclick="addNewAd()"><span class="btn blue dropdown-toggle">Add New Ad </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewAdDiv">
              <?php 
				$sql= "select * from googlead as g 
						left join positions as p on p.pId=g.position
						 order by id desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="5%"> S.No. </th>
                    <th width="40%"> Date </th>
                    <th width="15%">Position</th>
                    <th width="15%"> View/Edit </th>
                    <th width="15%"> Delete </th>
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
						<td>'.$resultRow['date'].'</td>
						<td>'.$resultRow['pName'].'</td>
					  	<td> 
							<button type="button" onclick="updateAd('.$resultRow['id'].')" class="btn green-meadow">View/Edit</button>
						</td>
						<td>
							<button type="button" onclick="deleteAd('.$resultRow['id'].')" class="btn btn-warning">Delete</button> 
						</td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Post Found!
                      </center>
                      </b></td>
                  </tr>';
		}
		
		echo $list;
		
		 ?>
                </tbody>
              </table>
            </div>
            <div id="addNewAdDiv" style="display:none">
              <form action="#" method="post" onSubmit="return checkValidation();" name="PostForm" id="PostForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewaAd">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Position</th>
                    <td width="70%">
                     <select name="position" id="position" class="form-control requiredInput">
                        <option value="0">Select</option>
                        <?php
							$sql='select * from positions where status=1';
							$result=query($sql);
							$list='';
							while($resultRow = fetchArray($result))
							{
								$list.='<option value="'.$resultRow['pId'].'">'.$resultRow['pName'].'</option>';
							}
							echo $list;
						?>
                      </select>
                    </td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Add Script</th>
                    <td width="70%"><textarea id="addScript" name="addScript" class="form-control"></textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th colspan="3">Or</th>
                  </tr>
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Submit" class="btn green" ></td>
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
 
  

function deleteAd(Id)
{
	var temp=confirm("Are You Confirm to delete this Ad!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteAd',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Ad  Deleted Successfully!',
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

function updateAd(id)
{
 	$.ajax({
		  url: '/ajax.php&id='+id,
			  type: 'POST',
			  data: 'act=like',
			  success: function(data)
			  {
			 	document.getElementById("updateDiv").innerHTML=data;
				 
			  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewAd()
{
	document.getElementById("viewAdDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
	 document.getElementById("addNewAdDiv").style.display="block";
	 
    
}
function viewAd()
{
	window.location.href="?action=adMaster";
}

function checkAllFieldsUpdateU()
{
	var t = checkRequiredFields('PostFormU');
	if(t==true)
	{
		return true;
	}
	else
		return false;
} 
function checkValidation()
{
	var t = checkRequiredFields('PostForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>