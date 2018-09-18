<?php
   require("config.php");
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
        $myfirstname = mysqli_real_escape_string($db,$_POST['firstname']);
        $mylastname = mysqli_real_escape_string($db,$_POST['lastname']);
        $myusertype = mysqli_real_escape_string($db,$_POST['usertype']);

        $sql = "SELECT utorid FROM users WHERE utorid = '$myusername'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        // If no results, then username doesnt exist in db so it is valid

        if($count == 0) {
            $_SESSION['login_user'] = $myusername;
            $_SESSION['user_type'] = $myusertype;
            $_SESSION['first_name'] = $myfirstname;

            $sql_insert = "INSERT INTO users (utorid, userpw, firstname, lastname, usertype) VALUES ('$myusername', '$mypassword', '$myfirstname', '$mylastname', '$myusertype')";            
            mysqli_query($db, $sql_insert);
            header("Location: index.php");
        }else {
            $error = "Your Utorid already exists in the database!";
      }
   }
?>



    <!-- Crystal Lim, Jeremy Park -->
    <!-- All resources for content like text and images are coded in html NOT css -->
    <!-- All titlecard images used are from pexel, so they are royalty free -->
    <!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Log in / Sign Up</title>
        <link rel="icon" href="favicon.png">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Introduction to Databases and Web Applications">
        <link rel="stylesheet" type="text/css" href="index.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet"> -->
        <script src="menuClick.js"></script>
    </head>

    <body>

        <!-- header -->
        <!-- CUSTOM HEADER. SAME AS LOG IN -->
        <header>
            <nav>
                <a id="logo" href="index.php">CSCB20</a>
                <a style="position: absolute; top: 0; right: 0; font-family: 'Helvetica', sans-serif; font-size: 15px; padding: 25.5px 15px;"
                    href="login.php">Log In</a>
            </nav>
        </header>

        <!-- from lecture code -->
        <div align="center">
            <div style="width:300px; border: solid 1px #333333; margin-top: 150px; margin-bottom: 15%;" align="left">
                <div style="background-color:#333333; color:#FFFFFF; padding:3px;">
                    <b>Signup</b>
                </div>

                <div style="margin:30px">

                    <form action="" method="post">
                        <label>Utorid :</label><br>
                        <input type="text" name="username" required/><br><br>
                        <label>Password :</label><br>
                        <input type="password" name="password" required/><br><br>
                        <label>First Name :</label><br>
                        <input type="text" name="firstname" required/><br><br>
                        <label>Last Name :</label><br>
                        <input type="text" name="lastname" required/><br><br>

                        <label>Sign up as :</label>
                        <br>

                        <input type="radio" name="usertype" value="student" checked />Student
                        <br>
                        <input type="radio" name="usertype" value="ta" />TA
                        <br>
                        <input type="radio" name="usertype" value="instructor" />Instructor
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

        <!-- footer -->
        <?php require("footer.php"); ?>

        </div>
    </body>

    </html>