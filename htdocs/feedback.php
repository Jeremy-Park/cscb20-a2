<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->

<?php
   require('session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSCB20 | Anonymous Feedback</title>
        <link rel="icon" href="favicon.png">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Introduction to Databases and Web Applications">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="table.css">
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
                        Anonymous Feedback
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('feedback.jpg');"></div>
            </div>

            <!-- Show data based on type of user currently logged in. -->
            <?php 
                if ($_SESSION['user_type'] == 'instructor') {
                    require('feedback_instructor.php');

                } elseif ($_SESSION['user_type'] == 'student') {
                    require('feedback_student.php');

                } else {
                    require('error.php');
                }
            ?>
        </div>

        <!-- footer -->
        <?php require("footer.php"); ?>

        </div>
    </body>
</html>