<!DOCTYPE HTML>
<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>XYT</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet" />

  <!--  Light Bootstrap Table core CSS    -->
  <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/getrekt.css" rel="stylesheet" />


  <!--     Fonts and icons     -->

  <link href="fontawesome0/css/all.min.css" rel="stylesheet">
  <!-- <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
<head>
<body>
<div class="sidebar" data-color="purple">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <div class="sidebar-wrapper">
        <div class="" style="margin-bottom: -10px;">
            <ul class="nav nav-bar" >
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>

                            <div
                                style="font-size: 20px; text-align: center; font-weight: bold; text-transform: uppercase;">
                                <?php 


                                echo $_SESSION['username'];?></div>


                        </p>
                    </a>

                  
            </ul>
        </div>
        <hr>

        <ul class="nav">
            <li>
                <a href="reports.php">
                    <i class="fas fa-chart-pie"></i>
                    <p>Reports</p>
                </a>
            </li>
            <li class="active">

                <a href="table.php">
                    <i class="fad fa-clipboard"></i>
                    <p>Product Lists</p>

                </a>

            <li>
                <a href="supplier_table.php">
                    <i class="fad fa-dolly"></i>
                    <p>Suppliers</p>
                </a>
            </li>
            <li>
                <a href="icons.php">
                    <i class="fal fa-money-check-edit-alt"></i>
                    <p>Sales</p>
                </a>
            </li>
            <li>
                <a href="ordersummary.php">
                    <i class="fal fa-truck"></i>
                    <p>Orders</p>
                </a>
            </li>
            <li>
                <a href="Records.php">
                    <i class="fad fa-cabinet-filing"></i></i>
                    <p>Records</p>
                </a>
            </li>
             <li>
                <a href="./index.php">
                    <i class="fad fa-sign-out"></i></i>
                    <p>Logout</p>
                </a>
            </li>

<?php if ($_SESSION['username']=="spadmin") {
    # code...
    echo '<li>
            <a href="./users_table.php">
                   <i class="fad fa-book-user"></i>
                    <p>Users</p>
                </a>
        </li>';
}
    
   

?>
            
        </ul>
    </div>
</div>

</body>

</html>