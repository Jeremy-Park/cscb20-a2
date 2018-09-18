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
        <title>CSCB20 | Course Materials</title>
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
                        Course Materials
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('course.jpg');"></div>
            </div>

            <div class="boxes">

                <!-- Box 1 -->
                <div class="box">
                    <h2>Overview</h2>
                    <p>
                        Here are the handouts for the assignments, lectures and tutorials. I will be posting the exercise and assignment handouts here. All exercises and assignments will be submitted on MarkUs.
                    </p>
                </div>
                <hr>

                <!-- Box 2 -->
                <div class="box">
                    <h2>Lecture Material</h2>
                    <div class="table">

                        <!-- column headers row -->
                        <div class="header-row">
                            <div class="col">
                                <p>Slides</p>
                            </div>
                            <div class="col">
                                <p>Topic</p>
                            </div>
                            <div class="col">
                                <p>Code/Resources</p>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w1.pdf" target="_blank">Week 1</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Introduction, Databases background</p>
                            </div>
                            <div class="col">
                                <p></p>
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w2.pdf" target="_blank">Week 2</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Schema Diagrams, Relational Algebra</p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/worksheets/schema_relational_algebra.pdf" target="_blank">Worksheet</a>
                                    <br>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/worksheets/schema_relational_algebra_soln.pdf" target="_blank">Worksheet Solutions</a>
                                </p>
                            </div>
                        </div>

                        <!-- row 3 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w3.pdf" target="_blank">Week 3</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>SQL and MySQL</p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/worksheets/mysql_intro.pdf" target="_blank">MySQL Worksheet</a>
                                    <br>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/week4_inclass.rtf" target="_blank">In-Class MySQL</a>
                                </p>
                            </div>
                        </div>

                        <!-- row 4 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w4.pdf" target="_blank">Week 4</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>MySQL Queries, Creating and Editing Tables</p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/worksheets/more_mysql.pdf" target="_blank">More MySQL Worksheet</a>
                                    <br>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/inclass_w5.rtf" target="_blank">In-Class MySQL</a>
                                </p>
                            </div>
                        </div>

                        <!-- row 5 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    Week 5
                                    <br>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w5.pdf" target="_blank">MySQL</a>
                                    /
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/html.pdf" target="_blank">HTML</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>MySQL Outer Joins, Views, NULL, string functions, HTML</p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/worksheets/mysql_views.pdf" target="_blank">More MySQL Worksheet</a>
                                </p>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/lectures/w7.pdf" target="_blank">Week 6</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>HTML, CSS</p>
                            </div>
                            <div class="col">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Box 2 -->
                <div class="box">
                    <h2>Tutorials</h2>

                    <div class="table">

                        <!-- column headers row -->
                        <div class="header-row">
                            <div class="col">
                                <p>Handout</p>
                            </div>
                            <div class="col">
                                <p>Topic</p>
                            </div>
                            <div class="col">
                                <p>Solutions</p>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/tutorials/t1/" target="_blank">Week 2</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Python, Command line</p>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/tutorials/t2/relational.pdf" target="_blank">Week 3</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Relational Algebra</p>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <!-- row 3 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    Week 4<br>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/tutorials/t3/index.html" target="_blank">Handout</a>
                                    / 
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/tutorials/t3/university.sql" target="_blank">university.sql</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>MySQL</p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/tutorials/t3/query_solns.html" target="_blank">Query Solutions</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Box 4 -->
                <div class="box">
                    <h2>Assignments</h2>
                    <div class="table">

                        <!-- column headers row -->
                        <div class="header-row">
                            <div class="col">
                                <p>Handouts</p>
                            </div>
                            <div class="col">
                                <p>Topic/Weightage</p>
                            </div>
                            <div class="col">
                                <p>Due Date</p>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/assignments/a1/" target="_blank">A1</a>
                                    /
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/assignments/a1/soln.pdf" target="_blank">Solutions</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Relational Algebra and MySQL (15%)</p>
                            </div>
                            <div class="col">
                                <p>
                                    <b>Part 1</b>: Wednesday, 1 Feb, 11.59pm
                                    <br>
                                    <b>Part 2, 3</b>: Saturday, 11 Feb, 11.59pm (For 5% bonus) OR Friday, 17 Feb, 11.59pm
                                </p>
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/assignments/a2/" target="_blank">A2</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>HTML, CSS, PHP (15%)</p>
                            </div>
                            <div class="col">
                                <p>
                                    <b>Part 1</b>: Friday, 10 March, 11.59pm
                                    <br>
                                    <b>Part 2</b>: Friday, 19 March, 11.59pm
                                </p>
                            </div>
                        </div>

                        <!-- row 3 -->
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="http://www.utsc.utoronto.ca/~bretscher/b20/assignments/a3/a3.html" target="_blank">A3</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>Web Applications and Databases (15%)</p>
                            </div>
                            <div class="col">
                                <p>
                                    Friday, 31 March, 11.59pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Box 3 -->
                <div class="box">
                    <h2>FAQ</h2>
                    <p>
                        <b>If the mysql portion asks for a director or actor without specifying which attributes, what should I
                            return?</b>
                        <br> Return the first name, last name.

                        <br>
                        <br>
                        <b>Does our webpage need to adapt to mobile devices?</b>
                        <br> You are not required to do this. At least not for A2. However, if you are feeling adventurous and would
                        like to make this work for A2, and if done well, We *may* give you some bonus marks.
                    </p>
                </div>
            </div>

            <!-- footer -->
            <?php require("footer.php"); ?>

        </div>
    </body>
</html>