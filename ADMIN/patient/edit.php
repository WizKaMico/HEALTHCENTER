<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$patient_id = $_POST['patient_id']; 
		$fname = $_POST['fname'];
		$mname = $_POST['mname']; 
		$lname = $_POST['lname']; 
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
        date_default_timezone_set('Asia/Manila'); 
        $today = date('Y-m-d');
        $diff = date_diff(date_create($birthday), date_create($today));
		// $age = $_POST['age'];
		$age = $diff->format('%y');
		$phone = $_POST['phone'];
		$status = $_POST['status'];
		$sql = "UPDATE patient SET fname = '$fname', mname = '$mname', lname = '$lname', gender = '$gender', age = '$age', birthday = '$birthday', phone = '$phone', status = '$status' WHERE patient_id = '$patient_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>