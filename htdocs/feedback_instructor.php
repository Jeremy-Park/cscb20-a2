<div class="boxes">

    <!-- My Feedback -->
    <div class="box">
        <h2>My Feedback</h2>

            <?php
                $profid = $_SESSION['login_user'];
                $sql_feedback = "SELECT a, b, c, d FROM feedback WHERE profid = '$profid'";
                $result_feedback = mysqli_query($db, $sql_feedback);

                // If results
                if (mysqli_num_rows($result_feedback) > 0) {
                    
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_feedback)) {

                        echo '<div class="table">
                            <div class="header-row-feedback">
                                <div class="col">
                                    <p>What do you like about the instructor teaching?</p>
                                </div>
                            </div>

                            <div class="row-feedback">
                                <div class="col">
                                    <p>' . $row["a"] . '</p>
                                </div>
                            </div>

                            <div class="header-row-feedback">
                                <div class="col">
                                    <p>What do you recommend the instructor to do to improve their teaching?</p>
                                </div>
                            </div>

                            <div class="row-feedback">
                                <div class="col">
                                    <p>' . $row["b"] . '</p>
                                </div>
                            </div>

                            <div class="header-row-feedback">
                                <div class="col">
                                    <p>What do you like about the labs?</p>
                                </div>
                            </div>

                            <div class="row-feedback">
                                <div class="col">
                                    <p>' . $row["c"] . '</p>
                                </div>
                            </div>

                            <div class="header-row-feedback">
                                <div class="col">
                                    <p>What do you recommend the lab instructors to do to improve their lab teaching?</p>
                                </div>
                            </div>

                            <div class="row-feedback">
                                <div class="col">
                                    <p>' . $row["d"] . '</p>
                                </div>
                            </div>
                    
                        </div>
                        <br><br><br>';
                    }

                // If no results
                } else {
                    echo '<div class="table">
                        <div class="header-row">
                            <div class="col">
                                <p>Feedback</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>0 results</p>
                            </div>
                        </div>
                    </div>';
                }
            
            ?>

        </div>
    </div>
</div>