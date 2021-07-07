
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Testimonials Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewTestimonials()"><span class="btn blue dropdown-toggle">View Testimonials </span></a> </li>
      <li class="btn-group"> <a onclick="addNewTestimonials()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewTestimonialsDiv">
              <?php 
				$sql= "select * from testimonials order by tId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Name </th>
                    <th width="15%"> Status </th>
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
					 	<td>'.$resultRow['name'].'</td>
						<td>';
							if($resultRow['status']==1)
							{
								$list.='<button onclick="showHide('.$resultRow["tId"].',0)" type="button" class="btn btn-info">Active</button>';
						 	}
						 	else
						 	{
								$list.='<button onclick="showHide('.$resultRow["tId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
						 	}
						
						$list.='</td>
						<td> 
						<button type="button" onclick="updateMessage('.$resultRow['tId'].')" class="btn green-meadow">View/Edit</button>
						<button type="button" onclick="deleteMessage('.$resultRow['tId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Message Found!
                      </center>
                      </b></td>
                  </tr>';
		}
		
		echo $list;
		
		 ?>
                </tbody>
              </table>
            </div>
            <div id="addNewTestimonialsDiv" style="display:none">
              <form action="#" method="post" onSubmit="return checkValidation();" name="testmonialsForm" id="testmonialsForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewTestimonials">
                <table  class="table-form">
                  <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" id="name" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th>Message</th>
                    <td><textarea class="form-control requiredInput" name="message" id="message"></textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                    <tr>
                    <th>Image</th>
                    <td><input type="file" name="image" id="image" class="form-control requiredInput"></td>
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
function showHide(Id,status)
{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id+'&status='+status,
			  type: 'POST',
			  data: 'act=showHideTestimonials',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Testimonials Status Changed Successfully!',
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


function deleteMessage(Id)
{
	var temp=confirm("Are You Confirm to delete this Message!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteTestimonials',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Testimonials Deleted Successfully!',
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
			  data: 'act=getTestimonialsDetailsById',
			  success: function(data)
			  {
				document.getElementById("viewTestimonialsDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
				document.getElementById("addNewTestimonialsDiv").style.display="none";
				document.getElementById("updateDiv").innerHTML=data;
				CKEDITOR.replace( 'aboutUsU' );
			  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewTestimonials()
{
	document.getElementById("viewTestimonialsDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
	
	document.getElementById("addNewTestimonialsDiv").style.display="block";
	  
}
function viewTestimonials()
{
	window.location.href="?action=testimonialsMaster";
}

function checkValidationU()
{
	var t = checkRequiredFields('testmonialsFormU');
	if(t==true)
	{
		return true;
	}
	else
		return false;
} 
function checkValidation()
{
	var t = checkRequiredFields('testmonialsForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>