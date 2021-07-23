<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="welcome.css">

    <!-- Bootstrap CSS -->
    
    <title>PHP login system!</title>
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


<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>!</h3>
<hr>

<nav>
        <div class="top">
            <div class="container flex justify-between">
                <div class="contact flex items-center">
                    <img src="iconsp/phone.svg" alt="">
                    <div>
                       <h5>Call US: (+91) 123 456 789</h5> 
                       <h6>Email : support@railway.com</h6> 
                    </div>
                </div>
                <div class="branding">
                    <img src="iconsp/railwaylogo.svg" alt="">
                </div>
                <div class="time flex justify-between items-center">
                    <img src="iconsp/clock.svg" alt="">
                <div>
                    <h5>Working Hours:</h5>
                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                </div>

            </div>
        </div>
        <div class="navbar magic-shadow">
            <div class="container flex justify-center">
                <a href="#"class="active">Home</a>
                <a href="reser.php">Reservation</a>
                <a href="update.php" >Updation</a>
                <a href="cancellation.php">Cancellation</a>
                <a href="disp.php">Ticket-Status</a>
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>
    </nav>

    <header class="hero flex  items-center">
        <div class="container">
            <div class="welcome flex items-center">
                <span>INDIAN RAILWAYS</span>
            <img src="iconsp/trainlogo.png" alt="">
            </div>
            <h1>The World's Best <span>Railway</span> Service</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, nemo.</p>
            <div>
                <button class="btn btn-primary"><a href="reser.php">Book your Ticket</a></button>
                <button class="btn btn-secondary"><a href="cancellation.php">Cancel Ticket</a></button>
            </div>
            <div class="hero-image">
                <img src="iconsp/herotrainb.png" alt="">
            </div>
        </div>
    </header>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>