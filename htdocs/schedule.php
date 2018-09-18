<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->

<?php
   require('session.php');
   $type_sql = mysqli_query($db, "SELECT userType FROM users WHERE utorid = '$user_check' ");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSCB20 | Schedule</title>
        <link rel="icon" href="favicon.png">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Introduction to Databases and Web Applications">
        <link rel="stylesheet" type="text/css" href="index.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet"> -->
        <script src="menuClick.js"></script>
    </head>

    <body>
        <!-- header -->
        <?php require("header.php"); ?>


        <!--Main Content-->
        <div class="main">
            <div id="titlecard">
                <div id="tcText">
                    <h1>
                        Schedule
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('schedule.jpg');"></div>
            </div>

            <div class="boxes">

                <!-- Box 1 -->
                <div class="box">
                    <h2>Lecture Schedule</h2>
                    <p>
                        Mondays 9am-11am. There is only one lecture section for this course. Please be sure to attend!
                    </p>
                </div>
                <hr>

                <!-- Box 2 -->
                <div class="box">
                    <h2>Term Test</h2>
                    <p>
                        The schedule has been set for term tests - ours is Friday March 2nd at 7pm. <br>
                        The term test is scheduled to be 75min. <br>

                        <img src="http://www.utsc.utoronto.ca/~bretscher/b63/w18/tests/rooms.jpg" width="600px" height="280px">
                    </p>
                </div>
            </div>

        <!-- footer -->
        <?php require("footer.php"); ?>

        </div>
    </body>
</html>