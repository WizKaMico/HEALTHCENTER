    <div class="table-responsive">
                  <form action="include/test.php" method="POST">
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
                        <input type="number" name="fully_vacinated_age" class="form-control" required>
                  
                      </div>
                        </td>
                      </tr>

                       <tr>
                        <td>
                        2). Did the child have any contact with a known measles case?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control" name="expose_to_measles" required="">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                        <tr>
                        <td>
                        3). Did the child get measles after being fully vaccinated?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control" name="measles_after_vacination" required="">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                         <tr>
                        <td>
                        4). What age did the child experience measles?
                        </td>
                         <td>
                        <div class="form-group">
                         <select class="form-control" name="measles_experience" id="purpose" required="">
                            <option value="NOT APPLICABLE">NOT APPLICABLE</option>
                            <option value="Other">Other</option>
                         </select>
                       </div>

                       <div style='display:none;' id='business'>Other<br/>&nbsp;
                        <div class="form-group">
                            <input type='number' placeholder="Enter Age" class='form-control' name='other' required=""/>
                            <br/>
                         </div>   
                        </div>
                        </td>
                      </tr>

                         <tr>
                        <td>
                       5). Did you try self-medication on your child before deciding to see a doctor?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control" name="self_medication" required=""> 
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                            <option value="NOT APPLICABLE">NOT APPLICABLE</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      6). Did the child experience any of these symptoms? if yes what is the degree?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control" name="symptoms" required="">
                            <option value="Fever">Fever</option>
                            <option value="applicable Cough">applicable Cough</option>
                            <option value="applicable Runny Nose">applicable Runny Nose</option>
                              <option value="applicable Watery Eyes">applicable Watery Eyes</option>
                         </select>
                      </div>
                      <div class="form-group">
                         <select class="form-control" name="degree" required="">
                            <option value="MILD">MILD</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="SEVERE">SEVERE</option>
                            <option value="NOT APPLICABLE">NOT APPLICABLE</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      7). Which part of the body did the rashes first appear?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control"  name="part_body" required="">
                            <option value="Neck">Neck</option>
                            <option value="Chest">Chest</option>
                            <option value="Shoulder">Shoulder</option>
                            <option value="Arms">Arms</option>
                            <option value="Shoulder back">Shoulder back</option>
                            <option value="Face">Face</option>
                            <option value="Not applicable">Not applicable</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                           <tr>
                        <td>
                      8).  How long was the duration of the symptoms?
                        </td>
                        <td>
                      <div class="form-group">
                         <select class="form-control" name="how_long" required="">
                            <option value="1-3 days">1-3 days</option>
                            <option value="1-7 days">1-7 days</option>
                             <option value="1-14 days">1-14 days</option>
                             <option value="Not Applicable">Not Applicable</option>
                         </select>
                      </div>
                        </td>
                      </tr>

                     
                    
                    </tbody>
                      <tfoot class=" text-primary">
                      <th>
                         <div class="form-group">
                             <input type="hidden" class="form-control" name="patient_id" value="<?php echo $row['patient_id']; ?>" style="width:100%;">
                         <input type="submit" class="form-control" name="submit" value="submit" style="width:100%;">
                      </div>
                       
                      </th>
                     
                      
                    </tfoot>
                  </table>
                </form>

                </div>