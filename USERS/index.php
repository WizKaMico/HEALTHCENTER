<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<?php 
include('../connection/connection.php');
include('../connection/session_patient.php'); 

$result=mysqli_query($conn, "select * from patient where patient_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BARANGAY HEALTH CENTER OF LAWA OBANDO
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        
        <a href="#" class="simple-text logo-normal">

          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">


           <li class="active ">
            <a href="index.php?view=DASHBOARD">
              <i style="color:black;" class="nc-icon nc-bank"></i>
              <p style="color:black;">Dashboard</p>
            </a>
          </li>

           <li>
            <a href="index.php?view=CALENDAR">
              <i style="color:black;" class="nc-icon nc-calendar-60"></i>
              <p style="color:black;">Calendar</p>
            </a>
          </li>
        

            <li>
            <a href="index.php?view=USER">
              <i style="color:black;" class="nc-icon nc-single-02"></i>
              <p style="color:black;">Profile</p>
            </a>
          </li>
        
           <li>
            <a href="index.php?view=CONTACT">
              <i style="color:black;" class="nc-icon nc-alert-circle-i"></i>
              <p style="color:black;">Contact Us</p>
            </a>
          </li>


           <li>
            <a href="index.php?view=SURVEY">
              <i style="color:black;" class="nc-icon nc-alert-circle-i"></i>
              <p style="color:black;">Survey Form</p>
            </a>
          </li>
          
        
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">HI! <?PHP echo strtoupper($row['fname']); ?></a>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
               <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../logout.php">LOGOUT</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
           <?php if(!empty($_GET['view'])){ ?>
         
          

           <?php  if($_GET['view'] == 'CALENDAR'){ ?> 


           <?php include ('include/calendar.php'); ?>  


           <?php }else if($_GET['view'] == 'CONTACT'){ ?> 


           <?php include ('include/contact.php'); ?> 

          <?php }else if($_GET['view'] == 'SURVEY'){ ?> 


           <?php include ('include/survey.php'); ?>   


           <?php }else if($_GET['view'] == 'USER'){ ?> 


           <?php include ('include/users.php'); ?>  

             <?php }else if($_GET['view'] == 'DASHBOARD'){ ?> 


           <?php include ('include/dashboard.php'); ?> 

          <?php } else { ?>

          <?php } ?>  

          <?php } else { ?>
            
          <?php include ('include/dashboard.php'); ?>

          <?php } ?>  

      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
             
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script> BARANGAY HEALTH CENTER OF LAWA OBANDO
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

  <script>
    
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == 'Other')
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
