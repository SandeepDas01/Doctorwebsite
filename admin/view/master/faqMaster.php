
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> FAQ Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewfaq()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li class="btn-group"> <a onclick="addNewfaq()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewfaqDiv">
              <?php 
				$sql= "select * from faq order by fId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Question </th>
                    <th width="15%"> Answer </th>
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
						<td>'.$resultRow['fQuestion'].'</td>
						<td>'.$resultRow['fAnswer'].'</td>
					 	<td> 
						<button type="button" onclick="updatefaq('.$resultRow['fId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deletefaq('.$resultRow['fId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No faq Found!
                      </center>
                      </b></td>
                  </tr>';
		}
	echo $list;
  ?>
                </tbody>
              </table>
            </div>
            <div id="addNewfaqDiv" style="display:none">
              <form action="" method="post" onSubmit="return checkValidation();" name="faqForm" id="faqForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addNewfaq">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Question</th>
                    <td width="70%"><textarea name="ques" id="ques" class="form-control requiredInput"></textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Answer</th>
                    <td width="70%"><textarea name="ans" id="ans" class="form-control requiredInput"></textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Add faq" class="btn green" ></td>
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

function deletefaq(Id)
{
	var temp=confirm("Are You Confirm to delete this faq!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deletefaq',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'How it works Deleted Successfully!',
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

function updatefaq(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getfaqDetails',
			  success: function(data)
			  {
				document.getElementById("viewfaqDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
	 			document.getElementById("addNewfaqDiv").style.display="none";
				
				 
			  	document.getElementById("updateDiv").innerHTML=data;
		 	  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewfaq()
{
	document.getElementById("viewfaqDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
 	document.getElementById("addNewfaqDiv").style.display="block";
	 
}
function viewfaq()
{
	window.location.href="?action=faqMaster";
}
 
function checkValidation()
{
	var t = checkRequiredFields('faqForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>