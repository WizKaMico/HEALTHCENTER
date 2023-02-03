<form action="action/user_change.php" method="post">
    <center><img src="assets/lawa.png" style="width:50%;"></center>
    <div class="form-item">
		<input type="text" name="password" required="required" placeholder="New Password" autofocus required></input>
		<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
    </div>
    
    <div class="form-item">
		<input type="number" name="code" required="required" placeholder="Enter Code" autofocus required></input>
    </div>
    
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="validate" value="Validate"></input>
    </div>
  </form>
