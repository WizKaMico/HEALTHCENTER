<?php $email = $_GET['user']; ?>
<form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:30%;"></center>
    HI! <?php echo strtoupper($email); ?>
      <p style="color:white;">NOTE: This is for patient Information</p>
    <div class="form-item">
			<input type="date" name="birthday" required="required" style="background-color:white; color:black; border-color:black;"></input>	
			  <input type="hidden" name="email" required="required" value="<?php echo $email; ?>" required></input>	
    </div>
    
       <div class="form-item">
		<select id="city" class="form-control" name="gender" style=" border: none;
		  background:white;
		  color: black;
		  margin-top:11px;
		  font-family: 'Open Sans', sans-serif;
		  font-size: 1.2em;
		  height: 49px;
		  padding: 0 16px;
		  width: 100%;
		  padding-left: 55px;" required>
       <option value="MALE">MALE</option>
       <option value="FEMALE">FEMALE</option>
		</select>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="register" value="register"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['register']))
		{
			$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
			$gender = mysqli_real_escape_string($conn, $_POST['gender']);
			$email = mysqli_real_escape_string($conn, $_POST['email']); 

			  date_default_timezone_set('Asia/Manila'); 
	        $today = date('Y-m-d');
	        $diff = date_diff(date_create($birthday), date_create($today));
			// $age = $_POST['age'];
			$age = $diff->format('%y');

             
			
			 
			        mysqli_query($conn,"UPDATE patient SET gender = '$gender', age = '$age', birthday='$birthday', status = 'MEASLES' WHERE email = '$email'"); 
				    // mysqli_query($conn, "INSERT INTO patient (email, password) VALUES ('$email','$password')");

     echo '<script>alert("Youre succesfully registered"); window.location.href = "index.php?view=SUCCESS&user='.$email.'"; </script>';

				
				
		}
  ?>