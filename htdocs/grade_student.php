<?php
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
        // remark request info sent from form 

        $myassignment = mysqli_real_escape_string($db,$_POST['assignments']);
        $myreason = mysqli_real_escape_string($db,$_POST['reason']);
        $myusername = $_SESSION['login_user'];



        $sql_remark = "SELECT utorid FROM remarkRequests WHERE utorid = '$myusername' AND assignment = '$myassignment'";
        $result = mysqli_query($db,$sql_remark);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        // If no results, then student has not already submitted a remark for this assignment so it is valid
        if ($count == 0) {
            $sql_remark = "INSERT INTO remarkRequests (utorid, assignment, reason) VALUES ('$myusername', '$myassignment', '$myreason')";            
            $result = mysqli_query($db, $sql_remark);

            if ($result) {
                $message = "Remark request submitted";
            } else {
                $message = "Unsuccessful submission";
            }
            echo "<script type='text/javascript'>alert('$message');</script>";    


        } else {
            $error = "You have already submitted a remark request for this assignment!";
      }
   }
?>

<div class="boxes">

    <div class="box">
        <h2>Remark Request</h2>


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
                    <label>Reason:</label><br>
                    <textarea name="reason" rows="10" style="resize: vertical; width: 95%;" required></textarea>
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

    <!-- My Grades -->
    <div class="box">
        <h2>My Grades</h2>

        <div class="table">

            <!-- column headers row -->
            <div class="header-row">
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

                $sql_grades = "SELECT * FROM grades WHERE utorid = '" . $_SESSION['login_user'] . "'";
                $result_grades = mysqli_query($db, $sql_grades);

                // If results
                if (mysqli_num_rows($result_grades) > 0) {
                    
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_grades)) {

                        echo '<div class="row">
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
</div>