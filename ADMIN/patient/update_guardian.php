<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$patient_id = $_POST['patient_id']; 
		$g_fname = $_POST['g_fname'];
		$g_mname = $_POST['g_mname'];
		$g_lname = $_POST['g_lname'];
		$o_role = $_POST['o_role'];
		$role = $_POST['role'];
 
		$sql = "UPDATE patient SET g_fname = '$g_fname', g_mname = '$g_mname', g_lname = '$g_lname', o_role = '$o_role', role = '$role' WHERE patient_id = '$patient_id'";

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