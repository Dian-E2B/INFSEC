<!DOCTYPE HTML>

<div class="sidebar" data-color="purple">

<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


<div class="sidebar-wrapper">
    <div class="" style="margin-bottom: -10px;">
        <ul class="nav nav-bar">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle"  data-toggle="dropdown" >
            <p>
            
            <div style="font-size: 20px; text-align: center; font-weight: bold; text-transform: uppercase;"><?php echo $_SESSION['username'];  ?></div>
             

        </p>
       </a>
       
         <ul class="dropdown-menu">
                                    <li><a href="./add_productform.php"><i style="font-size:16px;"class="fas fa-cubes"></i>&nbsp;Add Product</a></li>
                                    <li><a href="./add_supplierform.php"><i class="fas fa-parachute-box"></i>&nbsp;Add Supplier</a></li>
                                    <li><a href="./table1.php"><i style="font-size:20px;" class="fad fa-window-close"></i>&nbsp;Inactive Products</a>
                                    </li>
                            
                               
                                 
        </ul>
        </li>
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
    </ul>
</div>
</div>
<script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script>

var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("myBtn").click();
  }
});
</script>