<!DOCTYPE html>
<html lang="en">
<?php
include 'z_execute/connection.php';
session_start();
$sqlshow_supplies="select supplier_id,company_name,email,phone from tbl_supplier";
$sqlexecute=mysqli_query($connection,$sqlshow_supplies);
 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XYT - Suppliers</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>

    .styled-table {
    border-collapse: collapse;
    position: relative;
    margin: 50px;
    font-size: 0.9em;
    min-width: 600px;
    height: 500px;
    overflow: auto;
    display: block;
    }

    .styled-table thead tr {
    background-color: #4e73df;
    color: #ffffff;
    text-align: left;
    }

    .styled-table th, .styled-table td {
    padding: 12px 15px;
    }

    .styled-table tbody tr {
    border-bottom: thin solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #4e73df;
    }

    .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #4e73df;
    }

    </style>


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
		
<div class="row">
	<div class="col-md-3" style="margin-left:50px; max-width: 150px;  padding-top: 10px; padding-bottom: -25px;">
	<button onclick="window.location='products.php';" style="  position: relative;" class="btn btn-google btn-user btn-block"><i class="fas fa-cube"></i> Products</button>
	</div>
	
	<div class="col-md-3" style="max-width: 150px; padding-top: 10px; padding-bottom: -25px;">
	<button onclick="window.location='index.php';" style=" position: relative;" class="btn btn-google btn-user btn-block"><i class="fas fa-window-close"></i> Logout</button>
	</div>	
	</div>	
		
		
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 d-none d-lg-block">

                      <table class="styled-table">
                        <thead>
                            <tr>
								<th style="width:80px;">ID</th>
                                <th style="width:200px;">Company</th>
                                <th style="width:230px;">Email</th>
                                <th style="width:150px;">Phone</th>
                            </tr>
                        </thead>
						<?php 
						while($users=mysqli_fetch_assoc($sqlexecute)){							
						?>
					<tbody>
					<tr>
					<td><?php echo $users['supplier_id']; ?></td>
					<td><?php echo $users['company_name']; ?></td>
					<td><?php echo $users['email']; ?></td>
					<td><?php echo $users['phone']; ?></td>
					</tr>
					</tbody>
						<?php 
						}
						?>
						
                    </table>

                    </div>



                    <div class="col-lg-5" style="min-height: 600px;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add a supplier</h1>
                            </div>
                            <form method="POST" action="z_execute/add_supplier.php" class="user">
                                <div class="form-group">
                                    <input name="companyname" type="company" class="form-control form-control-user" id="Company Name"
                                        placeholder="Company Name">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="comp_email" type="email" class="form-control form-control-user"
                                            id="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="comp_phone" type="phone" class="form-control form-control-user"
                                            id="phone" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input target="_blank" type="submit" value="Save" class="btn btn-primary btn-user btn-block"></input>
                                  </div>
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input href="" value="Cancel" class="btn btn-google btn-user btn-block"></input>
                                  </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
