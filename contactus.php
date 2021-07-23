<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="welcome.css">
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
                <a href="cancellation.php" ">Cancellation</a>
                <a href="disp.php">Ticket-Status</a>
                <a href="#" class="active">Contact Us</a>
            </div>
        </div>

<br><br><br>

    <div class="container">
        <h1>Connect with us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum blanditiis <br>
            unde dicta, optio quidem excepturi corrupti voluptates aliquam! Eum, inventore.</p>
        <div class="contact-box" >
            <div class="contact-left">
                <h3>Our Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56026.712153011664!2d77.20305043928246!3d28.63966563138799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8913afee1665916!2sNew%20Delhi%20Railway%20Station!5e0!3m2!1sen!2sin!4v1626097895154!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-right">
                <h3>Reach Us :</h3>
                <table>
                    <tr>
                        <td >Email :</td>
                        <td>
                            <ul>
                                <li>railway@support.com</li>
                                <li>railway@help.com</li>
                                <li>railway@enquiry.com</li>
                            </ul> 
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Phone :</td>
                        <td>
                            <ul>
                                <li>+91 9876543456</li>
                                <li>+91 8872654430</li>
                                <li>+001 26578365</li>
                            </ul> 
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>Chanakya Puri, New Delhi,
                            Delhi 110021 · ~25.5 km</td>
                    </tr>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>

    </div>
</body>
</html>