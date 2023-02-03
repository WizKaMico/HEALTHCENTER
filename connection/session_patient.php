<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['patient_id']) || (trim($_SESSION['patient_id']) == '')) {
    header("location: ../index.php?view=USER");
    exit();
}
$session_id=$_SESSION['patient_id'];

?>