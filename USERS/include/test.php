
                <?php

                include('../../connection/connection.php');
                if (isset($_POST['submit']))
                  {
             

                    $fully_vacinated_age = mysqli_real_escape_string($conn, $_POST['fully_vacinated_age']);
                    $expose_to_measles = mysqli_real_escape_string($conn, $_POST['expose_to_measles']);
                    $measles_after_vacination = mysqli_real_escape_string($conn, $_POST['measles_after_vacination']);
                    $measles_experience = mysqli_real_escape_string($conn, $_POST['measles_experience']);
                    $other = mysqli_real_escape_string($conn, $_POST['other']);
                    $self_medication = mysqli_real_escape_string($conn, $_POST['self_medication']);
                    $symptoms = mysqli_real_escape_string($conn, $_POST['symptoms']);
                    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
                    $part_body = mysqli_real_escape_string($conn, $_POST['part_body']);
                    $how_long = mysqli_real_escape_string($conn, $_POST['how_long']);
                    $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                    date_default_timezone_set('Asia/Manila');
                    $date_answered = mysqli_real_escape_string($conn, date('Y-m-d'));
                           
                    
                     
                            // mysqli_query($conn,"UPDATE patient SET fname = '$fname', mname='$mname', lname='$lname' WHERE email = '$email'"); 
                          mysqli_query($conn, "INSERT INTO survey_answer (fully_vacinated_age, expose_to_measles, measles_after_vacination, measles_experience, other, self_medication, symptoms, degree, part_body, how_long, patient_id, date_answered) VALUES ('$fully_vacinated_age', '$expose_to_measles', '$measles_after_vacination', '$measles_experience', '$other', '$self_medication', '$symptoms', '$degree', '$part_body', '$how_long', '$patient_id', '$date_answered')");


                            echo '<script>alert("Based on the clasification you are '.$symptoms.' | '.$degree.'"); window.location.href = "../index.php?view=SURVEY"; </script>';
                           // header('Location:../index.php?view=SURVEY');
                      
                      
                  }
                ?>