<form action="#" method="post" style=" margin-top: -200px;">
    <center><img src="assets/lawa.png" style="width:30%;"></center>
     <p style="color:black;"><b><?php echo strtoupper('NOTE: Guardian Information'); ?></b></p>
    <div class="form-item">
		<input type="text" name="g_fname" required="required" placeholder="Firstname" style="background-color:white; color:black; border-color:black;" autofocus required>
    </div>
    <div class="form-item">
		<input type="text" name="g_mname" required="required" placeholder="Middlename" style="background-color:white; color:black; border-color:black;" autofocus required>
    </div>
    <div class="form-item">
		<input type="text" name="g_lname" required="required" placeholder="Lastname" style="background-color:white; color:black; border-color:black;" autofocus required>
    </div>
     <div class="form-item">
		<select name="role" style=" border: none;
		  background:white;
		  color: black;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px;" id='purpose' required>
       <option>---ROLE--</option>
       <option value="MOTHER">MOTHER</option>
       <option value="FATHER">FATHER</option>
       <option value="OTHERS">OTHERS</option>
		</select>
    </div>

    <div style='display:none;' id='business'>
     <div class="form-item">
		<input type="text" name="o_role" placeholder="Specify" style="background-color:white; color:black; border-color:black;" autofocus>
    </div>	
    </div>	

    <div class="form-item"> 
		<input type="text" name="email" required="required" placeholder="Email" style="background-color:white; color:black; border-color:black;"  autofocus required>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password"  style="background-color:white; color:black; border-color:black;" required>
    </div>

       <div class="form-item">
		<input type="number" name="phone" required="required" placeholder="Phone"  style="background-color:white; color:black; border-color:black;" required>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="REGISTER">
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{

			$g_fname = mysqli_real_escape_string($conn, $_POST['g_fname']);
			$g_mname =  mysqli_real_escape_string($conn, $_POST['g_mname']);
			$g_lname =  mysqli_real_escape_string($conn, $_POST['g_lname']);
			$role = mysqli_real_escape_string($conn, $_POST['role']);
			$o_role = mysqli_real_escape_string($conn, $_POST['o_role']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
			$password = mysqli_real_escape_string($conn, md5($_POST['pass']));
			$query 		= mysqli_query($conn, "SELECT * FROM patient WHERE  email='$email' AND phone = '$phone'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			

				    echo 'Email Already In Use';	
				}
			else
				{
			
				     mysqli_query($conn,"INSERT INTO patient (g_fname, g_mname, g_lname, role, o_role, email, password, phone) VALUES ('$g_fname', '$g_mname', '$g_lname', '$role', '$o_role', '$email','$password', '$phone')"); 
					header('location: index.php?view=INFORMATION&user='.$email);
				}
		}
  ?>