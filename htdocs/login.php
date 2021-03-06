<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->

<?php
   require("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT utorid FROM users WHERE utorid = '$myusername' and userpw = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;

         $sql_type = "SELECT userType FROM users WHERE utorid = '$myusername' limit 1";
         $value_type = mysqli_fetch_object(mysqli_query($db, $sql_type));
         $_SESSION['user_type'] = $value_type->userType;

         $sql_name = "SELECT firstName FROM users WHERE utorid = '$myusername' limit 1";
         $value_name = mysqli_fetch_object(mysqli_query($db, $sql_name));
         $_SESSION['first_name'] = $value_name->firstName;
         header("Location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

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
        <!-- THIS ONE IS CUSTOM. NOT THE SAME AS HEADER.PHP -->
        <header>
            <nav>

                <a id="logo" href="index.php">CSCB20</a>
                <a style="position: absolute; top: 0; right: 0; font-family: 'Helvetica', sans-serif; font-size: 15px; padding: 25.5px 15px;"
                    href="signup.php">Sign Up</a>
            </nav>
        </header>

        <!-- from lecture code -->
        <div align="center">
            <div style="width:300px; border: solid 1px #333333; margin-top: 150px; margin-bottom: 15%;" align="left">
                <div style="background-color:#333333; color:#FFFFFF; padding:3px;">
                    <b>Login</b>
                </div>

                <div style="margin:30px">

                    <form action="" method="post">
                        <label id>Utorid :</label><br>
                        <input type="text" name="username" required /><br><br>

                        <label>Password :</label><br>
                        <input type="password" name="password" required /><br><br>

                        <input type="submit" value=" Submit " />

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