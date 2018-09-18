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
        <title>CSCB20 | Announcements</title>
        <link rel="icon" href="favicon.png">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Introduction to Databases and Web Applications">
        <link rel="stylesheet" type="text/css" href="index.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet"> -->
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(){
                document.getElementsByClassName("toggle")[0].addEventListener("click", function(){
                    var ul = document.getElementsByTagName("ul")[0];
                    if (ul.getAttribute("class") !== "active"){
                        ul.setAttribute("class", "active");
                    } else {
                        ul.removeAttribute("class");
                    }
                });
            });
        </script>
    </head>
    <body>
        <!-- header -->
        <?php require("header.php"); ?>

        <!--Main Content-->
        <div class="main">
            <div id="titlecard">
                <div id="tcText">
                    <h1>
                        Announcements
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('announcements.jpeg');"></div>
            </div>
            <div class="boxes">
                <div class="container">
                    <div class="box">
                        <h2>Another great example of user stories.</h2>
                        <p style="font-size:12px;">Posted on 7 Mar 2018</p>
                        <p>Here is another example of user stories, that I think you will find useful:

                        <br><br><a href="https://westborosystems.com/2010/02/user-story-examples/" target="_blank">https://westborosystems.com/2010/02/user-story-examples/</a>
                        </p>
                    </div>
                    <hr>
                    <div class="box">
                        <h2>TA Office Hours</h2>
                        <p style="font-size:12px;">Posted on 5 Mar 2018</p>
                        <p>
                            Hello Everyone, here are some office hours by TA for this week.
                            <br><br>Nagarjun - Tuesday 9am - 12pm @ IC404
                            <br><br>Zhongyang - Friday 1pm - 4pm @ IC404
                            <br><br>Syeda - Thursday 11am-12pm &amp; Friday 3pm to 5pm @ IC404
                        </p>
                    </div>
                    <hr>
                    <div class="box">
                        <h2>2nd Quiz and upcoming lab</h2>
                        <p style="font-size:12px;">Posted on 3 Mar 2018</p>
                        <p>
                            Hello everyone,

                            <br><br>I will move the 2nd Quiz from 5th March over to 12th March. I am doing this because we have so far just had one lecture on HTML and CSS. I do not think it is fair if I ask you to write a quiz just after one lecture. I want you guys to do well on the quiz, and by having two lectures under our belt, you will be better prepared for the quiz. 
 
                            <br><br>Also the lab that is coming up, we will explore floats and CSS in greater detail. This will also allow you to get better and apply it on your assignment. 
                        </p>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php require("footer.php"); ?>

        </div>
    </body>
</html>