<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HEALTH</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
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
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
		<div class="col-sm-12 col-sm-offset-2">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>AID</th>
						<th>Firstname</th>
						<th>Middlename</th>
						<th>Lastname</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM admin";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['user_id']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['mname']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['address']."</td>
									<td>".$row['phone']."</td>
									<td>";
									
									if($row['status'] == 'ACTIVATE')
										{
										echo "<a href='#active_".$row['user_id']."' class='btn btn-success btn-sm' data-toggle='modal'><u>ACTIVATED</u></a> "; 
										echo "<a href='#deactived_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:red; border-color:red; color:white;'> DEATIVATED</span></a> ";	
										echo "<a href='#inactive_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:grey; border-color:grey; color:white;'> INACTIVE</a> ";	
									    }
									else if($row['status'] == 'DEACTIVATED')
										{
										echo "<a href='#active_".$row['user_id']."' class='btn btn-success btn-sm' data-toggle='modal'>ACTIVATED</a> "; 
										echo "<a href='#deactived_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:red; border-color:red; color:white;'><u> DEATIVATED</u></span></a> ";	
										echo "<a href='#inactive_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:grey; border-color:grey; color:white;'> INACTIVE</a> ";		
										}     
									else
										{
										echo "<a href='#active_".$row['user_id']."' class='btn btn-success btn-sm' data-toggle='modal'>ACTIVATED</a> "; 
										echo "<a href='#deactived_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:red; border-color:red; color:white;'> DEATIVATED </span></a> ";	
										echo "<a href='#inactive_".$row['user_id']."' class='btn btn-sm' data-toggle='modal' style='background-color:grey; border-color:grey; color:white;'><u> INACTIVE</u></a> ";
										}	
										echo "<a href='#edit_".$row['user_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['user_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							

						?>
					</tbody>
				</table>
			</div>
        </div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>