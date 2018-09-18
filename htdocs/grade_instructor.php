<?php
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // remark request info sent from form 

        $myassignment = mysqli_real_escape_string($db,$_POST['assignments']);
        $mygrade = mysqli_real_escape_string($db,$_POST['grade']);
        $mystudent = mysqli_real_escape_string($db,$_POST['students']);



        $sql_submit_grade = "SELECT utorid FROM grades WHERE utorid = '$mystudent'";
        $result = mysqli_query($db,$sql_submit_grade);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        // If no results, then student has not already submitted a remark for this assignment so it is valid

        if ($count == 0) {
            $sql_submit_grade = "INSERT INTO grades (utorid, $myassignment) VALUES ('$mystudent', '$mygrade')";            
            $result = mysqli_query($db, $sql_submit_grade); 

        } else {
            $sql_submit_grade = "UPDATE grades SET $myassignment = $mygrade WHERE utorid='$mystudent'";            
            $result = mysqli_query($db, $sql_submit_grade);
        }
        if ($result) {
            $message = "Grade submitted";
        } else {
            $message = "Unsuccessful submission";
        }
        echo "<script type='text/javascript'>alert('$message');</script>";   
    }
?>

<div class="boxes">

    <!-- Submit marks -->
    <div class="box">
        <h2>Submit Grade</h2>

        <div style="margin:30px">

            <form action="" method="post">
                <label>Assignment: </label>
                <select name="assignments">
                    <!-- php part for enumerating through assignments -->
                    <?php
                        $sql = "SHOW COLUMNS FROM grades";
                        $result = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_array($result)){
                            if($row['Field'] != "utorid") {
                                echo '<option value="' . $row['Field'] . '">' . strtoupper($row['Field']) . '</option>';
                            }
                        }
                    ?>
                </select>
                <br>
                <br>


                <label>Student: </label>
                <select name="students">
                    <!-- php part for enumerating through assignments -->
                    <?php
                        $sql_students = "SELECT * FROM users WHERE userType = 'student'";
                        $result_students = mysqli_query($db, $sql_students);

                        // $row = mysqli_fetch_all($result_students, MYSQLI_ASSOC);
                        // var_dump($row);

                        while($row = mysqli_fetch_assoc($result_students)){
                            echo '<option value="' . $row['utorid'] . '">' . strtoupper($row['utorid']) . '</option>';
                        }
                    ?>
                </select>
                <br>
                <br>



                <label>Grade:</label>
                <br>
                <input type="number" name="grade" required>
                <br />
                <br />
                <input type="submit" value=" Submit " />
                <br />
            </form>

            <div style="font-size:11px; color:#cc0000; margin-top:10px">
                <?php echo $error; ?>
            </div>
        </div>
    </div>

    <hr>

    <!-- View marks -->
    <div class="box">
        <h2>View Grades</h2>

        <div class="table">

            <!-- column headers row -->
            <div class="header-row">
                <div class="col">
                    <p>UtorID</p>
                </div>
                <div class="col">
                    <p>A1</p>
                </div>
                <div class="col">
                    <p>A2</p>
                </div>
                <div class="col">
                    <p>Lab1</p>
                </div>
                <div class="col">
                    <p>Lab2</p>
                </div>
                <div class="col">
                    <p>Midterm</p>
                </div>
                <div class="col">
                    <p>Final</p>
                </div>
            </div>

            <?php

                $sql_grades = "SELECT * FROM grades";
                $result_grades = mysqli_query($db, $sql_grades);

                // If results
                if (mysqli_num_rows($result_grades) > 0) {

                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_grades)) {

                        echo '<div class="row">
                            <div class="col">
                                <p>' . $row["utorid"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["a1"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["a2"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["lab1"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["lab2"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["midterm"] . '</p>
                            </div>

                            <div class="col">
                                <p>' . $row["final"] . '</p>
                            </div>
                        </div>';
                    }

                // If no results
                } else {
                    echo '<div class="row">
                            <div class="col">
                                <p>0 results</p>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>

    <hr>

    <!-- Remark requests -->
    <div class="box">
        <h2>Remark Requests</h2>

        <div class="table">

            <!-- column headers row -->
            <div class="header-row">
                <div class="col">
                    <p>UtorID</p>
                </div>
                <div class="col">
                    <p>Assignment</p>
                </div>
                <div class="col">
                    <p>Reason</p>
                </div>
            </div>

            <?php
                $sql_remark = "SELECT utorid, assignment, reason FROM remarkRequests";
                $result_remark = mysqli_query($db, $sql_remark);

                // If results
                if (mysqli_num_rows($result_remark) > 0) {
                    
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_remark)) {

                        echo '<div class="row">
                                <div class="col">
                                    <p>' . $row["utorid"] . '</p>
                                </div>
                                <div class="col">
                                    <p>' . $row["assignment"] . '</p>

                                </div>
                                <div class="col">
                                    <p>' . $row["reason"] . '</p>
                                </div>
                            </div>';
                    }

                // If no results
                } else {
                    echo '<div class="row">
                            <div class="col">
                                <p>0 results</p>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</div>