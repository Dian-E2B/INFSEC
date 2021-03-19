<?php
//db_con
include 'connection.php';

//FOR tbl_records
date_default_timezone_set("Singapore");
$date_today=date('Y-m-d h:m:s');


//start session
session_start();


//getvalues
$username=$_POST['user'];
$password=$_POST['pass'];
$hashPassword=md5($password);

$sql1="SELECT username from tbl_spadmin WHERE username='$username'";
$result1=mysqli_query($connection,$sql1);
$confirm_result1=mysqli_fetch_assoc($result1);

if (mysqli_num_rows($result1) > 0) { //if naa nag username.
	$_SESSION['error2']="Username found!";
	echo "FOUND!";
	echo $username;
	//header("Location:../index1.php");
	//unset($_SESSION['error_all']);

	$sql="SELECT *from tbl_spadmin WHERE username='$username' AND password='$hashPassword'";
	$result=mysqli_query($connection,$sql);
	$confirm_result=mysqli_fetch_assoc($result);

			if($confirm_result){
				unset($_SESSION['numTries']);
				$getusername=$confirm_result['username'];


				$_SESSION['username']=$getusername;
				//$_SESSION['user_id']=$getuserid;

				$sql2="INSERT into tbl_records(actions,date,user_id) values('$getusername Logged in','$date_today','1')";
				if (!mysqli_query($connection, $sql2)) {
					echo "Error: 2" . $sql2 . "<br>" . mysqli_error($connection);
				}else {
					header("Location:../table.php");
				}

			}

			else {
				// $sql="SELECT *from tbl_login WHERE username='$username'";
				// $result=mysqli_query($connection,$sql);
				// $confirm_result=mysqli_fetch_assoc($result);
				// $_SESSION['username']=$getusername;

				$_SESSION['error_message']="Incorrect username or password";

				if (!isset($_SESSION['numTries'])) {
					$_SESSION['numTries']=0;
					if ($_SESSION['numTries']>=3) {
						echo "sobra da";
						$_SESSION['error_message']="cant login";
						header("Location:../sp_index.php");
					}else{
						$_SESSION['numTries'] ++;
						header("Location:../sp_index.php");
					}
					echo $_SESSION['numTries'];
				}
				else{

					if ($_SESSION['numTries']==0) {
						$_SESSION['numTries'] ++;
						if ($_SESSION['numTries']>=3) {
							echo "sobra da";
							$_SESSION['error_message']="cant login";
							header("Location:../sp_index.php");

						}else{
							$_SESSION['numTries'] ++;
							header("Location:../sp_index.php");
						}


					} else {
						if ($_SESSION['numTries']>=3) {
					echo "3 ATTEMPTS ALREADY"; //ADD LOCATION  HERE
					$_SESSION['error_message']="cant login";
					header("Location:../sp_index.php");
				}else{
					$_SESSION['numTries'] ++;
					header("Location:../sp_index.php");
				}
				
				}

			echo $_SESSION['numTries'];
			

			}

			}
}

else{ //if wala nag username.
	echo "NOT FOUND!";
	echo $username;
	$_SESSION['error1']="Username not found!";
	header("Location:../sp_index.php");

	
	
			
	}

// 	$sql="SELECT *from tbl_login WHERE username='$username' AND password='$hashPassword'";
// 	$result=mysqli_query($connection,$sql);
// 	$confirm_result=mysqli_fetch_assoc($result);

// 	if($confirm_result){
// 		unset($_SESSION['numTries']);
// 		$getusername=$confirm_result['Username'];


// 		$_SESSION['username']=$getusername;
// 		$_SESSION['user_id']=$getuserid;

// 		$sql2="INSERT into tbl_records(actions,date,user_id) values('$getusername Logged in','$date_today','1')";
// 		if (!mysqli_query($connection, $sql2)) {
// 			echo "Error: 2" . $sql2 . "<br>" . mysqli_error($connection);
// 		}else {
// 			header("Location:../table.php");
// 		}

// 	}
// 	else {
// 		$sql="SELECT *from tbl_login WHERE username='$username'";
// 		$result=mysqli_query($connection,$sql);
// 		$confirm_result=mysqli_fetch_assoc($result);
// 		$_SESSION['username']=$getusername;

// 		$_SESSION['error_message']="Incorrect username or password";

// 		if (!isset($_SESSION['numTries'])) {
// 			$_SESSION['numTries']=0;
// 			if ($_SESSION['numTries']>=3) {
// 				echo "sobra da";
// 				$_SESSION['error_message']="cant login";
// 				header("Location:../sp_index.php");
// 			}else{
// 				$_SESSION['numTries'] ++;
// 				header("Location:../index1.php");
// 			}
// 			echo $_SESSION['numTries'];
// 		}
// 		else{

// 			if ($_SESSION['numTries']==0) {
// 				$_SESSION['numTries'] ++;
// 				if ($_SESSION['numTries']>=3) {
// 					echo "sobra da";
// 					$_SESSION['error_message']="cant login";
// 					header("Location:../sp_index.php");

// 				}else{
// 					$_SESSION['numTries'] ++;
// 					header("Location:../index1.php");
// 				}


// 			} else {
// 				if ($_SESSION['numTries']>=3) {
// 			echo "3 ATTEMPTS ALREADY"; //ADD LOCATION  HERE
// 			$_SESSION['error_message']="cant login";
// 			header("Location:../sp_index.php");
// 		}else{
// 			$_SESSION['numTries'] ++;
// 			header("Location:../index1.php");
// 		}

// 	}

// 	echo $_SESSION['numTries'];
// }	
// }




?>
