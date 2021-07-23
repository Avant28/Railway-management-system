<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Email = $_POST['Email'];
    $Phone_no = $_POST['Phone_no'];
    $DOB = $_POST['DOB'];
    $Pincode = $_POST['Pincode'];
    $Gender = $_POST['Gender'];
    $From = $_POST['From'];
    $To = $_POST['To'];
    $Date = $_POST['Date'];
    $No_of_passengers = $_POST['No_of_passengers'];
    $Train_name = $_POST['Train_name'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `railway`.`reservation` (`Email`, `Phone_no`, `DOB`, `Pincode`, `Gender`, `From`, `To`, `Date`, `No_of_passengers`, `Train_name`, `arrival_time`, `name`) VALUES ('$Email', '$Phone_no', '$DOB', '$Pincode', '$Gender', '$From','$To','$Date', '$No_of_passengers', '$Train_name',current_time(),'$name');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Reservation Form</title>
    <style>

    </style>
    <link rel="stylesheet" href="reser.css">
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
                <a href="#" class="active">Reservation</a>
                <a href="update.php">Updation</a>
                <a href="cancellation.php">Cancellation</a>
                <a href="disp.php">Ticket-Status</a>
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>

<br><br><br>

    <h1 class="head">Reservation Form</h1>
        <div class='inst'><?php echo "Hi ". $_SESSION['username']?>! Enter your details and submit this form to confirm your reservation </div>

        <?php
        if($insert == true){
        echo "<p class='submitMsg'><b><u>Reservation is Successful. We wish you a safe and happy journey</b></u></p>";
        }
    ?>

    <div>
        <form action="reser.php" method="post" >
             <!-- Personal information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Full Name :</label>
                <input type="text" name="name" id="name"><br><br>

                <label for="email">E-mail :</label> 
            <input type="email" name="Email" id="Email"> <br><br>

            
            <label for="Phone_no">Phone number :</label> 
            <input type="text" name="Phone_no" id="Phone_no"> <br><br>

            <label for="DOB">Date of Birth :</label> 
            <input type="date" name="DOB" id="DOB"> <br><br>


            <label for="Pincode">Pincode :</label> 
            <input type="text" name="Pincode" id="Pincode"> <br><br>

            <label for="gender">Gender : </label> <br>
            <input type="radio" name="Gender" value="Female" checked="checked"> Female <br>
            <input type="radio" name="Gender" value="Male" > Male <br>
            <input type="radio" name="Gender" value="Other"> Other <br>
         
            </fieldset>
            <br>
            <hr>

            <!-- ticket information -->

            <fieldset >
                <legend>Ticket Booking</legend>
                <label for="From">Journey: From</label>
                <select name="From" id="From" size="1">
                    <option value="Delhi">Delhi</option>
                    <option value="Indore">Indore</option>
                    <option value="Shimla">Shimla</option>
                </select>
                &ensp;


                <label for="to"> To</label>
                <select name="To" id="To" size="1">
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Jaipur">Jaipur</option>
                </select>
                <br> <br>


                <label for="Date">train's arrival Date :</label> 
            <input type="date" name="Date" id="Date"> <br><br>


            <label for="No_of_passengers">Number of Passengers</label> 
            <input type="number" name="No_of_passengers" id="No_of_passengers"> <br><br>


            <label for="Train_name">Select Train :</label> <br>
            <select name="Train_name" id="Train_name" >
                <optgroup>
                    <option value="Rajdhani Express" selected>Rajdhani Express</option>
                    <option value="Shatabdi Express">Shatabdi Express</option>
                    <option value="Duronto Express">Duronto Express</option>
                    <option value="Vande Bharat Express">Vande Bharat Express</option>
                </optgroup>
                    
            </select>
            </fieldset>
            <br>
            <input class="btn" type="reset">
            <input class="btn" type="submit" value="submit">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>