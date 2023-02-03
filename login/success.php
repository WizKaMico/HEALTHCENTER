<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:50%;"></center>
    <div class="form-item">
		<input type="text" name="email" required="required" value="<?php echo $_GET['user']; ?>" autofocus required="" readonly=""></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
			$pass = md5($password);
			$query 		= mysqli_query($conn, "SELECT * FROM patient WHERE  password='$pass' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['patient_id']=$row['patient_id'];
					header('location: USERS/index.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>