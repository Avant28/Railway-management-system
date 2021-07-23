<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<?php
         
    // Create a database connection
    $con = mysqli_connect("localhost","root", "");
    $db = mysqli_select_db($con, 'railway');
    
    if (!$con){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    if(isset($_POST['updaten']))
    {
        $Sno = $_POST['Sno'];

    $name = $_POST['name'];

         $query = "UPDATE `reservation` SET `name`='$name' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updatee']))
    {
        $Sno = $_POST['Sno'];
        
        $Email = $_POST['Email'];

         $query = "UPDATE `reservation` SET `Email`='$Email' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updatep']))
    {
        $Sno = $_POST['Sno'];
        
        $Phone_no = $_POST['Phone_no'];

         $query = "UPDATE `reservation` SET `Phone_no`='$Phone_no' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updateDOB']))
    {
        $Sno = $_POST['Sno'];
        
        $DOB = $_POST['DOB'];

         $query = "UPDATE `reservation` SET `DOB`='$DOB' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updateg']))
    {
        $Sno = $_POST['Sno'];
        
        $Gender = $_POST['Gender'];

         $query = "UPDATE `reservation` SET `Gender`='$Gender' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updatepc']))
    {
        $Sno = $_POST['Sno'];
        
        $Pincode = $_POST['Pincode'];

         $query = "UPDATE `reservation` SET `Pincode`='$Pincode' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updatej']))
    {
        $Sno = $_POST['Sno'];
        
        $From = $_POST['From'];
        $To = $_POST['To'];

         $query = "UPDATE `reservation` SET `From`='$From',`To`='$To' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

    if(isset($_POST['updatenop']))
    {
        $Sno = $_POST['Sno'];
        
        $No_of_passengers = $_POST['No_of_passengers'];

         $query = "UPDATE `reservation` SET `No_of_passengers`='$No_of_passengers' WHERE `Sno`='$Sno'; ";
         $query_run = mysqli_query($con,$query);

         if($query_run){
             echo ' <script type="text/javascript"> alert("Data updated") </script>';
         }
         else{
            echo ' <script type="text/javascript"> alert("Data Not updated") </script>';
         }
    }

?>



<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="welcome.css">

    
    
    
        <title> Updation </title>
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
                <a href="#" class="active">Updation</a>
                <a href="cancellation.php">Cancellation</a>
                <a href="disp.php">Ticket-Status</a>
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>

<br><br><br>

        <center>
            <h1 class="head">Update your ticket here</h1><hr><br><br>

            <div>
        <form action="update.php" method="post" >

                <label for="Sno">Enter Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="name">Full Name :</label>
                <input type="text" name="name" id="name"><br>
            
            <div class="btn">
            <input  type="submit" name="updaten" value="Update name">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="Email">Email :</label>
                <input type="email" name="Email" id="Email"><br>
            
            <div class="btn">
            <input  type="submit" name="updatee" value="Update email">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="Phone number">Phone number :</label>
                <input type="text" name="Phone_no" id="Phone_no"><br>
            
            <div class="btn">
            <input  type="submit" name="updatep" value="Update phone no">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="DOB">DOB :</label>
                <input type="Date" name="DOB" id="DOB"><br>
            
            <div class="btn">
            <input  type="submit" name="updateDOB" value="Update DOB">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="gender">Gender : </label> <br>
            <input type="radio" name="Gender" value="Female" checked="checked"> Female <br>
            <input type="radio" name="Gender" value="Male" > Male <br>
            <input type="radio" name="Gender" value="Other"> Other <br>
        
            <div class="btn">
            <input type="submit" name="updateg" value="Update Gender">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="Pincode">Pincode :</label>
                <input type="text" name="Pincode" id="Pincode"><br>
        
            <div class="btn">
            <input  type="submit" name="updatepc" value="Update Pincode">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="From">Journey: From</label>
                <select name="From" id="From" size="1">
                    <option value="Delhi">Delhi</option>
                    <option value="Indore">Indore</option>
                    <option value="Shimla">Shimla</option>
                </select>

                &ensp;


                <label for="to"> To:</label>
                <select name="To" id="To" size="1">
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Jaipur">Jaipur</option>
                </select><br>
        
            <div class="btn">
            <input  type="submit" name="updatej" value="Update journey">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="No_of_passengers">Number of Passengers</label> 
            <input type="number" name="No_of_passengers" id="No_of_passengers"> <br>
        
            <div class="btn">
            <input  type="submit" name="updatenop" value="Update no of passengers">
            </div>
        </form>
    </div><hr><br>


    <div>
        <form action="update.php" method="post" >
    
                <label for="Sno">Ticket number :</label>
                <input type="text" name="Sno" id="Sno"><br><br>

                <label for="Train_name">Select Train :</label> <br>
            <select name="Train_name" id="Train_name" >
                <optgroup>
                    <option value="Rajdhani Express" selected>Rajdhani Express</option>
                    <option value="Shatabdi Express">Shatabdi Express</option>
                    <option value="Duronto Express">Duronto Express</option>
                    <option value="Vande Bharat Express">Vande Bharat Express</option>
                </optgroup>
                    
            </select><br>
        
            <div class="btn">
            <input  type="submit" name="updatet" value="Update train name">
             </div>
        </form>
    </div><hr><br>

        </center>
    </body>
</html>