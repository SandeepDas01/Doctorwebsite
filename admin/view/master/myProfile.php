 
        <div class="page-container">
<div class="page-content-wrapper">
  <div class="page-content">
     
<h3 class="page-title"><small>user account page</small> </h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12">
     <div class="profile-content">
      <div class="row">
        <div class="col-md-12">
          <div class="portlet light ">
            <div class="portlet-title tabbable-line">
              <div class="caption caption-md"> <i class="icon-globe theme-font hide"></i> <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span> </div>
              <ul class="nav nav-tabs">
                <li class="active"> <a href="#tab_1_1" data-toggle="tab">Personal Info</a> </li>
                <li> <a href="#tab_1_3" data-toggle="tab">Change Password</a> </li>
                 </ul>
            </div>
            <div class="portlet-body">
              <div class="tab-content">
                <!-- PERSONAL INFO TAB -->
                <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="" name="updateUserForm" id="updateUserForm" method="post" enctype="multipart/form-data" onsubmit="return checkAllFields()">
                  	<input type="hidden" name="action" value="updateUserDetails" />
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" name="name" id="name" value="<?php echo $_SESSION['fitnessSession']; ?>" class="form-control requiredInput" />
                    </div>
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <input type="text" name="email" id="email" value="<?php echo $_SESSION['fitnessAdminEmail']; ?>" class="form-control requiredInput" />
                    </div>
                   
                     <div class="form-group">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div>
							<span class="btn default btn-file">
								<input type="file" name="image">
                                <input type="hidden" value="<?php echo $_SESSION['fitnessimage']; ?>" name="oldImagePath" />
							</span> 
					 	</div>
                      </div>
                     </div>
                     <div class="form-group">
                       <img src="<?php echo $_SESSION['fitnessimage']; ?>" alt="Image Not Found" style="width:250px;height:250px;" />
                    </div>
                    <div class="margiv-top-10"> <input type="submit" value="Save Changes" class="btn green">  </div>
                  </form>
                </div>
                 
                <div class="tab-pane" id="tab_1_3">
                  <form action="" method="post" name="updatePasswordForm" id="updatePasswordForm" onsubmit="return checkPasswordFields()">
                  	<input type="hidden" name="action" value="updatePassword" />
				     <div class="form-group">
                      <label class="control-label">Current Password</label>
                      <input type="password" name="currentPass" id="currentPass" class="form-control requiredInput" />
                    </div>
                    <div class="form-group">
                      <label class="control-label">New Password</label>
                      <input type="password" name="newPass" id="newPass" class="form-control requiredInput" />
                    </div>
                    <div class="form-group">
                      <label class="control-label">Re-type New Password</label>
                      <input type="password" name="rPass" id="rPass" class="form-control requiredInput" />
                    </div>
                    <div class="margin-top-10"> <input type="submit" class="btn green" value="Change Password"></div>
                  </form>
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PROFILE CONTENT -->
  </div>
</div>
</div>
</div>
</div>


<?php
	include "view/common/footer.php";
?>
<link type="text/css" href="assets/css/jquery.toastmessage.css" rel="stylesheet"/>
<script src="assets/js/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>
<script>

function checkAllFields()
{
	var t = checkRequiredFields('updateUserForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}
function checkPasswordFields()
{
	var t = checkRequiredFields('updatePasswordForm');
	if(t==true)
	{
		if(document.getElementById("newPass").value==document.getElementById("rPass").value)
		{
			return true;
		}
		else
		{
			$().toastmessage('showToast',
			{
					text     : 'New Passwrod And Confirm Password Does Not Match!',
					position : 'top-right',
					stayTime: 4000,
					type     : 'error'
		  	});
			return false;
		}
		
		
	}
	else
		return false;
}


</script>
<?php 
if(isset($_REQUEST['IncorrectPassword']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Current Password Is Wrong !',
            position : 'top-right',
			stayTime: 4000,
            type     : 'error'
         });
			 
		</script>";
}
if(isset($_REQUEST['updatePasswordDone']))
{
	   echo "<script> 
	    $().toastmessage('showToast',
		{
            text     : 'Password Updated Successfully!',
            position : 'top-right',
			stayTime: 4000,
            type     : 'success'
         });
			 
		</script>";
}
?>