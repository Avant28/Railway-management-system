<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<?php
$con = mysqli_connect("localhost","root", "");
$db = mysqli_select_db($con, 'railway');

if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_POST['del']))
{
    $Sno = $_POST['Sno'];



     $query = "DELETE FROM `reservation` WHERE Sno ='$Sno' ; ";
     $query_run = mysqli_query($con,$query);

     if($query_run){
         echo ' <script type="text/javascript"> alert("Ticket cancelled successfully") </script>';
     }
     else{
        echo ' <script type="text/javascript"> alert("Ticket cancellation unsuccessful") </script>';
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="cancellation.css">
    <link rel="stylesheet" href="welcome.css">

    
        <title>Document</title>
</head>
<body>

<header class="topbar">
        <div class="container flex justify-between items-center"> <!-- to put all content in center-->
            <div class="icons"> <!--right side-->
                <a href="#"><img src="iconsp/facebook.svg"></a>
                <a href="#"><img src="iconsp/twitter.svg"></a>
                <a href="#"><img src="iconsp/google.svg"></a>
                <a href="#"><img src="iconsp/instagram.svg"></a>
                <a href="#"><img src="iconsp/search.svg"></a>
            </div>

            <div class="auth flex items-center"> <!--left side-->
                <div>
                    <img src="iconsp/user-icon.svg"></img alt="">
                    <a href="login.php">Log in</a>
                </div>

                <span class="divider">|</span>

                <div>
                    <img src="iconsp/edit.svg"></img alt="">
                    <a href="register.php">Register Now</a>
                </div>

                <span class="divider">|</span>

                <div>
                    <img src=""></img alt="">
                    <a href="logout.php">Logout</a>
                </div>

                <span class="divider">|</span>

                <div>
                 <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Hi ". $_SESSION['username']?></a>
                </div>

                
            </div>
        </div>
    </header>
    <div class="navbar magic-shadow">
            <div class="container flex justify-center">
                <a href="welcome.php">Home</a>
                <a href="reser.php">Reservation</a>
                <a href="update.php">Updation</a>
                <a href="#" class="active">Cancellation</a>
                <a href="disp.php">Ticket-Status</a>
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>

<br><br><br>


<div class="center">

    <h1>Cancel your ticket here</h1><hr><br><br>

    <div>
        <form action="cancellation.php" method="post" >

            <div class="enter">
                <label for="Sno">Enter Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>
            </div>

            <input class="btn" type="submit" name="del" value="Delete ticket">

        </form>
    </div>

</div>
    
</body>
</html>