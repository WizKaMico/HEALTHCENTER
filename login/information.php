<?php $email = $_GET['user']; ?>
<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:30%; margin-top:-60px;"></center>
    Hi! <?php echo strtoupper($email); ?>
    <p style="color:white;">NOTE: This is for patient Information</p>
    <div class="form-item">
		<input type="text" name="fname" required="required" placeholder="Firstname" style="background-color:white; color:black; border-color:black;" autofocus required>
    </div>
    
    <div class="form-item">
		<input type="text" name="mname" required="required" placeholder="Middlename" style="background-color:white; color:black; border-color:black;">
    </div>
       <div class="form-item">
		<input type="text" name="lname" required="required" placeholder="Lastname" style="background-color:white; color:black; border-color:black;" required>
		<input type="hidden" name="email" required="required" value="<?php echo $email; ?>" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="register" value="register"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['register']))
		{
			$fname = mysqli_real_escape_string($conn, $_POST['fname']);
			$mname = mysqli_real_escape_string($conn, $_POST['mname']);
			$lname = mysqli_real_escape_string($conn, $_POST['lname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
             
			
			 
			        mysqli_query($conn,"UPDATE patient SET fname = '$fname', mname='$mname', lname='$lname' WHERE email = '$email'"); 
				    // mysqli_query($conn, "INSERT INTO patient (email, password) VALUES ('$email','$password')");
					header('location: index.php?view=ADDINFO&user='.$email);
				
		}
  ?>