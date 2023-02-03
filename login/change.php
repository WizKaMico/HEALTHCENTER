<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:50%;"></center>
    <div class="form-item">
		<input type="text" name="password" required="required" placeholder="New Password" autofocus required></input>
		<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
    </div>
    
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="Validate" value="Validate"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['Validate']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$newpass = mysqli_real_escape_string($conn, md5($_POST['password']));

			    mysqli_query($conn,"UPDATE patient SET password = '$newpass' WHERE email = '$email'"); 
				    // mysqli_query($conn, "INSERT INTO patient (email, password) VALUES ('$email','$password')");
					header('location: index.php?view=USER');

		}
  ?>