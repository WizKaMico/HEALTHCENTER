<?php session_start(); ?>
<?php include('connection/connection.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<script src="city.js"></script>	

	<script>	
window.onload = function() {	

	// ---------------
	// basic usage
	// ---------------
	var $ = new City();
	$.showProvinces("#province");
	$.showCities("#city");

	// ------------------
	// additional methods 
	// -------------------

	// will return all provinces 
	console.log($.getProvinces());
	
	// will return all cities 
	console.log($.getAllCities());
	
	// will return all cities under specific province (e.g Batangas)
	console.log($.getCities("Batangas"));	
	
}
</script>
</head>
<body>
<div class="form-wrapper">
  
  <?php if(!empty($_GET['view'])){ ?>

  <?php if($_GET['view'] == 'ADMIN'){ ?>
  <?php include('login/admin.php'); ?>
  <?php } else if($_GET['view'] == 'USER') { ?>
  <?php include('login/user.php'); ?>
  <?php } else if($_GET['view'] == 'REGISTER') { ?> 
  <?php include('login/register.php'); ?>
  <?php } else if($_GET['view'] == 'INFORMATION') { ?> 
  <?php include('login/information.php'); ?>
  <?php } else if($_GET['view'] == 'ADDINFO') { ?> 
  <?php include('login/addinformation.php'); ?>
  <?php } else if($_GET['view'] == 'ADDINFO2') { ?> 
  <?php include('login/addinformation2.php'); ?>
  <?php } else if($_GET['view'] == 'SUCCESS') { ?> 
  <?php include('login/success.php'); ?>
  <?php } else if($_GET['view'] == 'FORGOT') { ?> 
  <?php include('login/forget.php'); ?>
  <?php } else if($_GET['view'] == 'FORGET') { ?> 
  <?php include('login/fogot.php'); ?>
  <?php } else if($_GET['view'] == 'CHANGE') { ?> 
  <?php include('login/change.php'); ?>
  <?php } else if($_GET['view'] == 'CHANGEADMIN') { ?> 
  <?php include('login/change_admin.php'); ?>
   <?php } else if($_GET['view'] == 'CHANGEUSER') { ?> 
  <?php include('login/change_user.php'); ?>

  <?php } else { ?>
  
  <?php } ?>
  <?php } else { ?>

  <form action="#" method="post">
    <center><img src="assets/lawa.png" style="width:30%;"></center>
    <div class="button-panel">
    <button  class="button">
    		<a href="index.php?view=ADMIN">ADMIN</a>
		</button>
    </div>
     <div class="button-panel">
    <button  class="button">
    	<a href="index.php?view=USER">USER</a>
		</button>
    </div>
     <div class="button-panel">
     	<button  class="button">
    	<a href="index.php?view=REGISTER">REGISTER USER</a>
		  </button>
    </div>
  </form>


  <?php } ?> 

  <div class="reminder">
  </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == 'OTHERS')
      {
        $("#business").show();
      }
      else
      {
        $("#business").hide();
      }
    });
});

</script>

</body>
</html>