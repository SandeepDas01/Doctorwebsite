
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Forum Category Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewCategory()"><span class="btn blue dropdown-toggle">View All Category</span></a> </li>
      <li class="btn-group"> <a onclick="addNewCategory()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewCategoryDiv">
              <?php 
				$sql= "select * from forumcategory order by fcId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Name </th>
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
						<td>'.$resultRow['fcName'].'</td>
						 
					 	<td> 
						<button type="button" onclick="updateCategory('.$resultRow['fcId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteCategory('.$resultRow['fcId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Forum Category Found!
                      </center>
                      </b></td>
                  </tr>';
		}
	echo $list;
  ?>
                </tbody>
              </table>
            </div>
            <div id="addNewCategoryDiv" style="display:none">
              <form action="" method="post" onSubmit="return checkValidation();" name="CategoryForm" id="CategoryForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewForumCategory">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" name="name" id="name" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                 <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Add Forum Category" class="btn green" ></td>
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


function deleteCategory(Id)
{
	var temp=confirm("Are You Confirm to delete this Category!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteForumOurCategory',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Service Name  Deleted Successfully!',
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

function updateCategory(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getForumCategoryDetails',
			  success: function(data)
			  {
				document.getElementById("viewCategoryDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
	 			document.getElementById("addNewCategoryDiv").style.display="none";
				
				 
			  	document.getElementById("updateDiv").innerHTML=data;
		 	  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewCategory()
{
	document.getElementById("viewCategoryDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
 	document.getElementById("addNewCategoryDiv").style.display="block";
	 
}
function viewCategory()
{
	window.location.href="?action=forumCategoryMaster";
}
 
function checkValidation()
{
	var t = checkRequiredFields('CategoryForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>