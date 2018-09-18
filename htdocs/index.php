<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->
<!-- header and footer now in their own files, so they are not retyped in different php files -->

<?php require('session.php');?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSCB20</title>
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
            <!--Titlecard -->
            <div id="titlecard">
                <div id="tcText">
                    <h1>
                        <?php
                            echo "Hello " . $_SESSION['first_name'] . ",<br>";
                            echo "Welcome to CSCB20";
                        ?>
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('home.jpeg')"></div>
            </div>

            <div class="boxes">
                <div class="box">
                    <h2>Course Description</h2>
                    <p>A practical introduction to databases and Web app development. Databases: terminology and applications; creating,
                        querying and updating databases; the entity-relationship model for database design. Web documents and
                        applications: static and interactive documents; Web servers and dynamic server-generated content; Web
                        application development and interface with databases.

                        <br>
                        <br>
                        <b>Prerequisite:</b> Some experience with programming in an imperative language such as Python, Java or
                        C.
                        <br>
                        <br>
                        <b>Exclusion:</b> This course may not be taken after - or concurrently with - any C- or D-level CSC course.
                        <br>
                        <br>
                        <b>Syllabus:</b>
                        <a href="http://www.utsc.utoronto.ca/~bretscher/b20/syllabus.pdf" target="_blank">pdf</a>
                    </p>
                </div>
                <hr>
                <div class="box">
                    <h2>Instructor</h2>
                    <p>
                        <b>Abbas Attarwala</b>
                        <br>
                        <br>
                        <b>Email:</b> abbas.attarwala@utoronto.ca
                        <br>
                        <br>
                        <b>Office Hours:</b> 11:30am-1:30pm on Mondays and Fridays
                        <br>
                        <br>
                        <b>Office:</b> IC478
                    </p>
                </div>
                <hr>
                <div class="box">
                    <h2>Resources</h2>
                    <p>
                        <b>MySQL and SequelPro</b>
                        <br>
                        <br>1) Download MySQL Community edition on your computer from here:
                        <a href="https://dev.mysql.com/downloads/mysql/" target="_blank">https://dev.mysql.com/downloads/mysql/</a>
                        <br>
                        <br>During installation, a random password will be generated and presented to you as a dialog box. Make sure
                        to save this!! You will use this later in SequelPro to connect to your database.

                        <br>
                        <br>2a) Download SequelPro from here:
                        <a href="https://www.sequelpro.com" target="_blank">https://www.sequelpro.com</a>

                        <br>
                        <br>2b) If you are on Windows or Mac or Linux (you can use this 30 day trial version)
                        <a href="https://razorsql.com/download_win.html" target="_blank">https://razorsql.com/download_win.html</a>

                        <br>
                        <br>From 2a) and 2b) you only require one of the other. You do not require both of them. If you want to use
                        the command line or MySQLWorkBench these are also some other alternative. You require 1) and 2) for your
                        first assignment.
                    </p>
                </div>
            </div>
            <!-- footer -->
            <?php require("footer.php"); ?>
        </div>
    </body>
</html>