<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname']; 
		$lname = $_POST['lname']; 
		$street = $_POST['street'];
		$province = $_POST['province'];
        $city = $_POST['city'];
        $address = $street.','.$province.','.$city; 
		$gender = $_POST['gender'];		
		$birthday = $_POST['birthday'];
        date_default_timezone_set('Asia/Manila'); 
        $today = date('Y-m-d');
        $diff = date_diff(date_create($birthday), date_create($today));
		// $age = $_POST['age'];
		$age = $diff->format('%y');
		$phone = $_POST['phone'];
		$status = $_POST['status'];
		$sql = "INSERT INTO patient (fname, mname, lname, address, gender, age, birthday, phone, status) VALUES ('$fname', '$mname', '$lname', '$address', '$gender', '$age', '$birthday', '$phone', '$status')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>