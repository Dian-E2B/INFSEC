<!doctype html>
<html lang="en">
<?php
include 'z_execute/connection.php';
session_start();
$sql2="select quest_id,question from tbl_questions";//!!
 $result2 = mysqli_query($connection, $sql2);//!!
 if ($result2) {//!!
 } else {
   echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
 }

?>
<head>

  <title>XYT</title>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <style>body{padding-top: 60px;}</style>
<link href="custom/css/bootstrap.css" rel="stylesheet">
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
      if(isset($_SESSION['error_message']))
      {
        ?>
        <body  onload="error('top','center')">
          <?php
          unset($_SESSION['error_message']);
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
            <h4 class="modal-title">Register to</h4>
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
                  <form method="post" action="exec_register.php" accept-charset="UTF-8">
                    <input  required="" id="Username" class="form-control" type="text" placeholder="Username" name="user">
                    <input required style="margin-top:10px;" reqid="pass" class="form-control" type="password" placeholder="Password" name="pass">
                    <input required style="margin-top:10px;" reqid="pass" class="form-control" type="password" placeholder="Confirm Password" name="pass2">


                    <select style="height:45px; margin-top:10px;" name="var_question" class="custom-select">
                      <option selected>Choose your security question</option>
                      <?php
                      while ($row = mysqli_fetch_assoc($result2)){
                        ?>
                        <option value="<?php echo $row['quest_id'] ?>">
                          <?php echo $row['question'] ?></option>
                          <?php
                        }
                        ?>
                      </select>

                            <input required style="margin-top:10px;" reqid="pass" class="form-control" type="text" placeholder="Answer" name="sec_answer">

                      <input required style="margin-top:10px;" class="btn btn-login"  value="Register" type="submit">

                    </form>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">

              <div class="forgot register-footer"">
               <span>Already have an account?</span>
               <a href="index.php">Login</a>
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

    function error() {
      $.notify({

        message:'Password mismatched!'
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
