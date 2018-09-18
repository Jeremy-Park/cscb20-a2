<?php
$mya = "";
$myb = "";
$myc = "";
$myd = "";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
        // feedback info sent from form 

        $myprofid = mysqli_real_escape_string($db,$_POST['profid']);
        $mya = mysqli_real_escape_string($db,$_POST['a']);
        $myb = mysqli_real_escape_string($db,$_POST['b']);
        $myc = mysqli_real_escape_string($db,$_POST['c']);
        $myd = mysqli_real_escape_string($db,$_POST['d']);

        $sql_feedback = "SELECT profid FROM feedback WHERE profid = '$myprofid' AND a = '$mya' AND b = '$myb' AND c = '$myc' AND d = '$myd'";
        $result_feedback = mysqli_query($db,$sql_feedback);
        $row = mysqli_fetch_array($result_feedback,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result_feedback);

        
        // If no results, then student did not submit the exact feedback before.
        if ($count == 0) {
            $sql_submit_feedback = "INSERT INTO feedback (profid, a, b, c, d) VALUES ('$myprofid', '$mya', '$myb', '$myc', '$myd')";            
            $result_submit_feedback = mysqli_query($db, $sql_submit_feedback);
            
            // Check again if there is now a feedback in database.
            if ($result_submit_feedback) {
                $message = "Feedback submitted successfully.";
            } else {
                $message = "Unsuccessful submission.";
            }

        } else {
            // If results then its spam.
            $message = "You have already submitted the same feedback before.";
        }
        echo "<script type='text/javascript'>alert('$message');</script>";   
    }
?>



    <div class="boxes">

        <!-- Submit Feedback -->
        <div class="box">
            <h2>Submit Anonymous Feedback</h2>

            <div style="margin:30px">

                <form action="" method="post">
                    <label>Professors: </label>
                    <select name="profid">
                        <!-- php part for enumerating through professors -->
                        <?php
                            $sql_profid = "SELECT utorid FROM users WHERE userType = 'instructor'";
                            $result_profid = mysqli_query($db, $sql_profid);
                            while($row = mysqli_fetch_array($result_profid)){
                                echo '<option value="' . $row['utorid'] . '">' . strtoupper($row['utorid']) . '</option>';
                            }
                        ?>
                    </select>
                    <br>
                    <br>
                    <label>What do you like about the instructor teaching?</label><br>
                    <textarea name="a" rows="10" style="resize: vertical; width: 95%;" required></textarea>
                    <br>
                    <br>
                    <label>What do you recommend the instructor to do to improve their teaching?</label><br>
                    <textarea name="b" rows="10" style="resize: vertical; width: 95%;" required></textarea>
                    <br>
                    <br>
                    <label>What do you like about the labs?</label><br>
                    <textarea name="c" rows="10" style="resize: vertical; width: 95%;" required></textarea>
                    <br>
                    <br>
                    <label>What do you recommend the lab instructors to do to improve their lab teaching?</label><br>
                    <textarea name="d" rows="10" style="resize: vertical; width: 95%;" required></textarea>
                    <br>
                    <br>
                    <input type="submit" value=" Submit " />
                    <br>
                </form>

                <div style="font-size:11px; color:#cc0000; margin-top:10px">
                    <?php echo $error; ?>
                </div>
            </div>
        </div>
    </div>