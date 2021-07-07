
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Logo Master </h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewLogo()"><span class="btn blue dropdown-toggle">View</span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewLogoDiv">
              <?php 
				$sql= "select * from logo order by lId desc";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Title </th>
                    <th width="30%"> Image </th>
                    <th width="15%"> Update </th>
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
					 	<td><img src="'.$resultRow['imagePath'].'"></td>
					 	<td><button type="button" onclick="updateLogo('.$resultRow['lId'].')" class="btn green-meadow">Edit</button></td>
                  	</tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="4"><b>
                      <center>
                        No  Logo Found!
                      </center>
                      </b></td>
                  </tr>';
		}
	echo $list;
  ?>
                </tbody>
              </table>
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


 
function updateLogo(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getLogoByID',
			  success: function(data)
			  {
				document.getElementById("viewLogoDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
	 		   	document.getElementById("updateDiv").innerHTML=data;
		 	  },
			 error: function(e)
			 {
			 }
		});
}
 

function viewLogo()
{
	window.location.href="?action=logoMaster";
}
 
function checkValidation()
{
	var t = checkRequiredFields('LogoForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>