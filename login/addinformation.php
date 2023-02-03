<?php $email = $_GET['user']; ?>
<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:30%;  margin-top:-60px;"></center>
    HI! <?php echo strtoupper($email); ?>
      <p style="color:white;">NOTE: This is for your address</p>
    <div class="form-item">
		  <input type="text" name="street" required="required" placeholder="street/barangay" style="background-color:white; color:black; border-color:black;" required>	
		  <input type="hidden" name="email" required="required" value="<?php echo $email; ?>" required></input>	
    </div>
    
    <div class="form-item">
		<select id="province" class="form-control" name="province" style=" border: none;
		  background:white;
		  color: black;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px;" required></select>	
    </div>
       <div class="form-item">
		<select id="city" class="form-control" name="city" style=" border: none;
		  background:white;
		  color: black;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px;" required></select>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="register" value="register"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['register']))
		{
			$street = mysqli_real_escape_string($conn, $_POST['street']);
			$province = mysqli_real_escape_string($conn, $_POST['province']);
			$city = mysqli_real_escape_string($conn, $_POST['city']);
			$email = mysqli_real_escape_string($conn, $_POST['email']); 
			$address = $street.','.$province.','.$city; 

             
			
			 
			        mysqli_query($conn,"UPDATE patient SET address = '$address' WHERE email = '$email'"); 
				    // mysqli_query($conn, "INSERT INTO patient (email, password) VALUES ('$email','$password')");
					header('location: index.php?view=ADDINFO2&user='.$email);
				
		}
  ?>