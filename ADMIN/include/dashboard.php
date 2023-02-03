<?php 

include('../connection/connection.php');

$mresult=mysqli_query($conn, "select *,COUNT(patient_id) as TOTAL from patient WHERE status = 'MEASLES'");
$mrow=mysqli_fetch_array($mresult);


$vresult=mysqli_query($conn, "select *,COUNT(patient_id) as TOTAL from patient WHERE status = 'VACINATED'");
$vrow=mysqli_fetch_array($vresult);


$iresult=mysqli_query($conn, "select *,SUM(stocks) as TOTAL from inventory");
$irow=mysqli_fetch_array($iresult);
 

?>

    <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <a href="index.php?view=MEASLES"><p class="card-category">MEASLES PATIENTS</p></a>
                      <p class="card-title"><?php echo $mrow['TOTAL']; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <a href="index.php?view=VACINATED"><p class="card-category">VACCINATED PATIENT</p></a>
                      <p class="card-title"><?php echo $vrow['TOTAL']; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                   <i class="fa fa-refresh"></i>
                  Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-app"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">MMR VACCINE</p>
                      <p class="card-title"><?php echo $irow['TOTAL']; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fa fa-refresh"></i>
                  Update Now
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">STATISTICAL TREATMENT (BAR GRAPH)</h5>
              </div>
              <div class="card-body ">
               <iframe src="include/stats.php" style="width:100%; height:400px; border:none;"></iframe>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated a minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">STATISTICAL TREATMENT (PIE GRAPH)</h5>
              </div>
              <div class="card-body ">
               <iframe src="include/pie.php" style="width:100%; height:400px; border:none;"></iframe>
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

          <div class="row">
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">AGE STATISTICS (BAR GRAPH)</h5>
              </div>
              <div class="card-body ">
               <iframe src="include/age_stats.php" style="width:100%; height:400px; border:none;"></iframe>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated a minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">GENDER STATISTICS (PIE GRAPH)</h5>
              </div>
              <div class="card-body ">
               <iframe src="include/pie_gender.php" style="width:100%; height:400px; border:none;"></iframe>
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
