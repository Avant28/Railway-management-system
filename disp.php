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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="disp.css">

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
                <a href="cancellation.php" ">Cancellation</a>
                <a href="#" class="active">Ticket-Status</a>
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>

<br><br><br>


<div class="info">
    <h1><?php echo "Hi ". $_SESSION['username']?>!</h1> <br>
    <h2 id="animate">Enter your phone number to know your ticket details</h2>
    <p>All the tickets reserved through the entered number will be showed</p><hr><br>
</div>

<br><br><br>

    <center>
        <div class="container">
            <div class="formdiv">
            <form action="disp.php" method="POST">
                    <input type="number" name="Phone_no" id="Phone_no" placeholder="Phone no">
                    <input type="submit" name="search" value="search by phone number" id="hovering">
                    <div id="phone"><img src="iconsp/dispphone.png" alt=""></div>
            </div>
            </form>
            <table>
                <tr>
                    <th>name</th>
                
                    <th>DOB</th>
                
                    <th>Phone number</th>
                
                    <th>Email</th>
                
                    <th>Gender</th>
                
                    <th>Pincode</th>
                
                    <th>ticket number</th>
                
                    <th>train's arrival date</th>
                
                    <th>train's arrival time</th>
                
                    <th>Origin</th>
                
                    <th>Destination</th>
                
                    <th>train name</th>
                
                    <th>number of Passengers</th>
                </tr><br>



    <?php
           

    // Create a database connection
    $con = mysqli_connect("localhost","root", "");
    $db = mysqli_select_db($con, 'railway');
    
    if (!$con){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    

    if(isset($_POST['search']))
    {
        $Phone_no = $_POST['Phone_no'];

         $query = "SELECT * FROM `reservation` WHERE Phone_no='$Phone_no' ";
         $query_run = mysqli_query($con,$query);

         while ($row = mysqli_fetch_array($query_run)) {
              ?>
                <tr class="entries">
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['DOB'] ?></td>
                    <td><?php echo $row['Phone_no'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Gender'] ?></td>
                    <td><?php echo $row['Pincode'] ?></td>
                    <td><?php echo $row['Sno'] ?></td>
                    <td><?php echo $row['Date'] ?></td>
                    <td><?php echo $row['arrival_time'] ?></td>
                    <td><?php echo $row['From'] ?></td>
                    <td><?php echo $row['To'] ?></td>
                    <td><?php echo $row['Train_name'] ?></td>
                    <td><?php echo $row['No_of_passengers'] ?></td>
                </tr>
              <?php
         }
    }
                ?>
                
            </table>
        </div>
    </center>
    
</body>
</html>