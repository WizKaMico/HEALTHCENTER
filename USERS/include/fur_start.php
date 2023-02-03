    <div class="table-responsive">
                  <form action="#" method="POST">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        QUESTION
                      </th>
                      <th>
                        ANSWER
                      </th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        1). What age did the child became fully vaccinated ?
                        </td>
                        <td>
                      <div class="form-group">
                        <input type="number" name="fully_vacinated_age" class="form-control" value="<?php echo $rrow['fully_vacinated_age']; ?>" readonly="">
                  
                      </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                        2). Did the child have any contact with a known measles case?
                        </td>
                        <td>
                      <div class="form-group">
                         <input type="text" name="expose_to_measles" class="form-control" value="<?php echo $rrow['expose_to_measles']; ?>" readonly="">
                      </div>
                        </td>
                      </tr>

                        <tr>
                        <td>
                        3). Did the child get measles after being fully vaccinated?
                        </td>
                        <td>
                      <div class="form-group">
                         <input type="text" name="measles_after_vacination" class="form-control" value="<?php echo $rrow['measles_after_vacination']; ?>" readonly="">
                       
                      </div>
                        </td>
                      </tr>

                         <tr>
                        <td>
                        4). What age did the child experience measles?
                        </td>
                         <td>
                        <div class="form-group">
                             <input type="text" name="measles_experience" class="form-control" value="<?php echo $rrow['measles_experience']; ?>" readonly="">
                       </div>

                     
                        <div class="form-group">
                          <input type="text" name="measles_experience" class="form-control" value="<?php echo $rrow['other']; ?>" readonly="">
                         </div>   
                        </td>
                      </tr>

                         <tr>
                        <td>
                       5). Did you try self-medication on your child before deciding to see a doctor?
                        </td>
                        <td>
                      <div class="form-group">
                        <input type="text" name="self_medication" class="form-control" value="<?php echo $rrow['self_medication']; ?>" readonly="">
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      6). Did the child experience any of these symptoms? if yes what is the degree?
                        </td>
                        <td>
                      <div class="form-group">
                          <input type="text" name="symptoms" class="form-control" value="<?php echo $rrow['symptoms']; ?>" readonly="">
                      </div>
                      <div class="form-group">
                          <input type="text" name="degree" class="form-control" value="<?php echo $rrow['degree']; ?>" readonly="">
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      7). Which part of the body did the rashes first appear?
                        </td>
                        <td>
                      <div class="form-group">
                        <input type="text" name="part_body" class="form-control" value="<?php echo $rrow['part_body']; ?>" readonly="">
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      8).  How long was the duration of the symptoms?
                        </td>
                        <td>
                      <div class="form-group">
                        <input type="text" name="how_long" class="form-control" value="<?php echo $rrow['how_long']; ?>" readonly="">
                      </div>
                        </td>
                      </tr>

                     
                    
                    </tbody>
                    
                  </table>
                </form>

             
                </div>