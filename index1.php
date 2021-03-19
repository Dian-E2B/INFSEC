<!doctype html>
<html lang="en">
<?php
include 'z_execute/connection.php';
session_start();
?>
<head>

    <title>XYT</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="assetslogin/css/bootstrap.css" rel="stylesheet" />
    <link href="animate/animate.css" rel="stylesheet">
	<link href="assetslogin/css/login-register.css" rel="stylesheet" />
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

    <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="assetslogin/js/bootstrap.js" type="text/javascript"></script>
	<script src="assetslogin/js/login-register.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script src="assets/js/demo.js"></script>
</head>
<body>
    <div class="container">
      
         <div class="col-9 mx-auto text-center">
                <div style="z-index: 1040;"  class="">

                  <?php
                  if(isset($_SESSION['error1']))
                  {
                  ?>
                  <body  onload="error1('top','center')">
                  <?php
                  unset($_SESSION['error1']);
                  }
                  ?>


                </div>

                <div style="z-index: 1040;"  class="">

                  <?php
                  if(isset($_SESSION['error2']))
                  {
                  ?>
                  <body  onload="error2('top','center')">
                  <?php
                  unset($_SESSION['error2']);
                  }
                  ?>


                </div>

                <div class="">
                <?php

                if(isset($_SESSION['success_message'])) {
                ?>

                <body onload="success('top','center')">
                <?php unset($_SESSION['success_message']);
                }
                ?>
                  </div>


              </div>


		 <div   class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button hidden type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login to</h4>
                    </div>
                    <div class="modal-body">
                        <div  class="box">
                             <div class="content">
                                <div class="social">
                                    <h1>XYT<h1>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>-</span>
                                    <div class="line r"></div>
                                </div><div class="error"></div>
                                
                                <div class="form loginBox">
                                    <form method="post" action="z_execute/validate.php" accept-charset="UTF-8">
                                    <input  required="" id="Username" class="form-control" type="text" placeholder="Username" name="user">
                                    <input required style="margin-top:10px;" reqid="password" class="form-control" type="password" placeholder="Password" name="pass">
                                    <input required style="margin-top:10px; background-color: blue;" class="btn btn-login"  value="Login" type="submit">
                                    
                                    </form>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>

<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
	
	$('#loginModal').modal({
    backdrop: 'static',
    keyboard: false
})


</script>
<script type="text/javascript">
    function success() {
  $.notify({

    message:'Password successfully changed.'
  }, {
    // settings
    offset: 50,
    type: 'success',
    placement: {
      from: "top",
      align: "center"
    }
  });
}

function error1() {
  $.notify({

    message:'Username not found!'
  }, {
    // settings
    offset: 50,
    type: 'danger',
    placement: {
      from: "top",
      align: "center"
    }
  });
}

function error2() {
  $.notify({

    message:'Password Incorrect!'
  }, {
    // settings
    offset: 50,
    type: 'danger',
    placement: {
      from: "top",
      align: "center"
    }
  });
}

</script>

</body>
</html>
