
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Blog Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewBlog()"><span class="btn blue dropdown-toggle">View All Post</span></a> </li>
      <li class="btn-group"> <a onclick="addNewBlog()"><span class="btn blue dropdown-toggle">Add New Post </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewBlogDiv">
              <?php 
				$sql= "select * from blog  order by bId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="5%"> S.No. </th>
                    <th width="40%"> Title </th>
                    <th width="15%">Status</th>
                    <th width="15%"> Is Popular </th>
                    <th width="15%"> View </th>
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
						<td>'.$resultRow['title'].'</td>
					 	<td>';	
							if($resultRow['status']==1)
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							
						$list.='</td>
					 	<td>';	
							if($resultRow['isPopular']==1)
							 {
									$list.='<img title="Popular" src="assets/images/active.png" onclick="isPopular('.$resultRow["bId"].',0)" type="button"> ';
							 }
							 else
							 {
									$list.='<img title="Not Popular" src="assets/images/deactive.png" onclick="isPopular('.$resultRow["bId"].',1)" type="button"> ';
							 }
							
						$list.='</td>
					 	<td> 
						<button type="button" onclick="updatePost('.$resultRow['bId'].')" class="btn green-meadow">View/Edit</button>
						</td>
						<td>
						<button type="button" onclick="deletePost('.$resultRow['bId'].')" class="btn btn-warning">Delete</button> </td>
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
            <div id="addNewBlogDiv" style="display:none">
              <form action="#" method="post" onSubmit="return checkValidation();" name="PostForm" id="PostForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewPost">
                <table  class="table-form">
                  
                  <tr>
                    <th width="20%">Title</th>
                    <td width="70%"><input type="text" name="title" id="title" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th>Image</th>
                    <td><input type="file" name="image" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td><textarea class="form-control" name="description" id="description" > </textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th>Small Description</th>
                    <td><textarea class="form-control" name="sdescription" id="sdescription" > </textarea></td>
                    <td width="5%">No Image </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Submit Post" class="btn green" ></td>
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
 
function isPopular(id,status)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id+'&status='+status,
		type: 'POST',
		data: 'act=isPopularPost',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Post Status Changed Successfully!',
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
function showHidePost(id,status)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id+'&status='+status,
		type: 'POST',
		data: 'act=showHidePost',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Post Status Changed Successfully!',
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


function deletePost(Id)
{
	var temp=confirm("Are You Confirm to delete this Post!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deletePost',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Post  Deleted Successfully!',
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

function updatePost(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getPostDetailsById',
			  success: function(data)
			  {
				document.getElementById("viewBlogDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
				document.getElementById("addNewBlogDiv").style.display="none";
				document.getElementById("updateDiv").innerHTML=data;
				CKEDITOR.replace( 'sdescriptionU' );
				CKEDITOR.replace( 'descriptionU' );
			  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewBlog()
{
	document.getElementById("viewBlogDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
	
	document.getElementById("addNewBlogDiv").style.display="block";
	CKEDITOR.replace( 'sdescription' );
    CKEDITOR.replace( 'description' );
}
function viewBlog()
{
	window.location.href="?action=blogMaster";
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