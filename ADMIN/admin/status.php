<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['user_id'])){

		$status = $_GET['status'];
		$sql = "UPDATE admin SET status = '$status' WHERE user_id = '".$_GET['user_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>