<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Forum Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewForum()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewForumDiv">
              <?php 
				$sql= "select * from forum as f 
						left join forumcategory as fc on f.fcatId=fc.fcId
						order by forumId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="60%"> Question </th>
                    <th width="60%"> Category </th>
                    <th width="10%"> Status </th>
                	<th width="10%"> View Comments </th>
                    <th width="10%"> Delete </th>
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
						<td>'.$resultRow['f_Question'].'</td>
						<td>'.$resultRow['fcName'].'</td>
						<td>';
							if($resultRow['f_status']=="1")
							{
								$list.='<img src="assets/images/active.png" onclick="showHideFourm('.$resultRow["forumId"].',0)" />';
							}
							else
							{
								$list.='<img src="assets/images/deactive.png" onclick="showHideFourm('.$resultRow["forumId"].',1)" />';
							}
							 
						 	$list.='
							</td>
					   <td><button type="button" onclick="viewForumPost('.$resultRow['forumId'].')" class="btn green-meadow">View</button> </td>
					 	<td> 
						 <button type="button" onclick="deleteForum('.$resultRow['forumId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Forum Found!
                      </center>
                      </b></td>
                  </tr>';
		}
	echo $list;
  ?>
                </tbody>
              </table>
            </div>
             <div id="viewCommentsDiv"> </div>
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


function deleteForumAnswer(qId,ansId)
{
	var temp=confirm("Are You Confirm to delete this Comments !");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&ansId='+ansId+'&qId='+qId,
			  type: 'POST',
			  data: 'act=deleteForumAnswer',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Forum Answer Deleted Successfully!',
						position : 'top-right',
						stayTime: 4000,
						type     : 'success'
					 });
				  document.getElementById("innerContentComments").innerHTML=data;
			  },
			 error: function(e)
			 {
			 }
		});
	}
}

function deleteForum(Id)
{
	var temp=confirm("Are You Confirm to delete this Question !");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteForum',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Forum Topic Deleted Successfully!',
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
 
function showHideFourm(FourmId,status)
{
	$.ajax({
		url: '?action=ajaxAction&FourmId='+FourmId+'&status='+status,
		type: 'POST',
		data: 'act=showHideFourm',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Fourm Status Changed Successfully!',
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
function showHideFourmAnswer(qId,ansId,status)
{
	$.ajax({
		url: '?action=ajaxAction&ansId='+ansId+'&status='+status+'&qId='+qId,
		type: 'POST',
		data: 'act=showHideFourmAnswer',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Fourm Comments Status Changed Successfully!',
				position : 'top-right',
				stayTime: 2000,
				type     : 'success'
			});
			 document.getElementById("innerContentComments").innerHTML=data;
		 					 
		},
		error: function(e)
		{
 		}
	 });
} 
function viewForumPost(id)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id,
		type: 'POST',
		data: 'act=getAllCommentsByFID',
		success: function(data)
		{
			 document.getElementById("viewForumDiv").style.display="none";
			  document.getElementById("viewCommentsDiv").style.display="block";
			 document.getElementById("viewCommentsDiv").innerHTML=data;
		 					 
		},
		error: function(e)
		{
 		}
	 });
}

function viewForum()
{
	window.location.href="?action=forumMaster";
}
 
 

</script>
</body></html>