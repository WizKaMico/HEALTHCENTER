
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">SURVEY</h5>
              </div>
              <div class="card-body ">

                 <div class="card-body">

                  <?php

                  $xresult=mysqli_query($conn, "SELECT * FROM survey_answer WHERE patient_id = '".$row['patient_id']."'")or die('Error In Session');
                  $rrow=mysqli_fetch_array($xresult);
         
                  if(!empty($rrow['patient_id'])){
                  
                  include('fur_start.php');   

                  }else{
                   
                  include('sur_start.php'); 

                  }

                   ?>
            
              </div>
             
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated a minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>