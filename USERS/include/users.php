       <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Patient</h5>
              </div>
              <div class="card-body">
                <form action="#" method="POST">
                  <div class="row">
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                         <input type="hidden" class="form-control" name="patient_id" value="<?php echo $row['patient_id']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="mname" value="<?php echo $row['mname']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                       <button class="form-control" name="update">UPDATE</button>
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                       <button class="form-control">CANCEL</button>
                      </div>
                    </div>
                  </div>

                  
                </form>

                <?php 

                if(isset($_POST['update'])){

                $patient_id = $_POST['patient_id'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $address = $_POST['address'];


                   mysqli_query($conn, "UPDATE patient SET email = '$email', phone='$phone', fname='$fname', mname='$mname', lname='$lname', address='$address' WHERE patient_id = '$patient_id'");





                }


                ?>
              </div>
            </div>
          </div>