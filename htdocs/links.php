<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->
<?php require("session.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>CSCB20 | Links</title>
        <link rel="icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Introduction to Databases and Web Applications">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet"> -->
        <script src="menuClick.js"></script>
    </head>

    <body>

        <!-- header -->
        <?php require("header.php");?>


        <!--Main Content-->
        <div class="main">
            <div id="titlecard">
                <div id="tcText">
                    <h1>
                        Links
                    </h1>
                </div>
                <div id="tcImg" style="background-image: url('links.jpg');"></div>
            </div>

            <div class="boxes">

                <!-- Box 1 -->
                <div class="box">
                    <h2>Piazza</h2>
                    <p>
                        <a href="https://piazza.com/utoronto.ca/winter2018/cscb20h3" target="_blank">Here</a>
                    </p>
                </div>
                <hr>

                <!-- Box 1 -->
                <div class="box">
                    <h2>Markus</h2>
                    <p>
                        <a href="https://markus.utsc.utoronto.ca/cscb20w18" target="_blank">Here</a>
                    </p>
                </div>
                <hr>

                <!-- Box 1 -->
                <div class="box">
                    <h2>UTSC Labs</h2>
                    <p>
                        <a href="http://www.utsc.utoronto.ca/iits/computer-labs" target="_blank">Here</a>
                    </p>
                </div>
            </div>

        <!-- footer -->
        <?php require("footer.php"); ?>
        </div>
    </body>
</html>