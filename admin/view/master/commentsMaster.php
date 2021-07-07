
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Comments Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewComments()"><span class="btn blue dropdown-toggle">View All Comments</span></a> </li>
     
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewCommentsDiv">
              <?php 
				$sql= "select * from comments as b order by cId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="5%"> S.No. </th>
                    <th width="10%"> Name </th>
                    <th width="40%">Message</th>
                    <th width="10%">Date</th>
                     <th width="15%">Email</th>
                    <th width="10%"> Status </th>
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
						<td>'.$resultRow['name'].'</td>
						<td>'.$resultRow['message'].'</td>
						<td>'.$resultRow['date'].'</td>
						<td>'.$resultRow['email'].'</td>
					 	<td>';	
							if($resultRow['status']==1)
							 {
									$list.='<button onclick="showHideComments('.$resultRow["cId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideComments('.$resultRow["cId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							
						$list.='</td>
					 	<td>
						<button type="button" onclick="deleteComments('.$resultRow['cId'].')" class="btn btn-warning">Delete</button> </td>
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

 
function showHideComments(id,status)
{
	$.ajax({
		url: '?action=ajaxAction&id='+id+'&status='+status,
		type: 'POST',
		data: 'act=showHideComments',
		success: function(data)
		{
			$().toastmessage('showToast',
			{
				text     : 'Comments Status Changed Successfully!',
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


function deleteComments(Id)
{
	var temp=confirm("Are You Confirm to delete this Comments!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteComments',
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
function viewComments()
{
	window.location.href="?action=commentsMaster";
}

 
</script>
</body></html>