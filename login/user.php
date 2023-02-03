<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:50%;"></center>
    <div class="form-item">
		<input type="text" name="email" required="required" placeholder="Email" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
		<a href="index.php?view=FORGOT"  style="border: none;
		  background:transparent;
		  color: #fff;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px; text-decoration:none;">FORGOT PASSWORD</a>
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