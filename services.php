<?php
include "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $country = $_POST['country'];
    $calories = $_POST['calories'];
    $activity = $_POST['activity'];
    $wakeup = $_POST['wakeup'];
    $tlsw = $_POST['tlsw'];
    $tfsw = $_POST['tfsw'];
    $tgg = $_POST['tgg'];
    $tgs = $_POST['tgs'];
    $goal = $_POST['goal'];
    $history = $_POST['history'];
    session_start();
    $usernamee =  $_SESSION['fullname'];
    $emaill = $_SESSION['emailsession'];

// Check if user is signed in
if (empty($emaill) || empty($usernamee)) {
    // Display alert and redirect to sign-in page
    echo "<script>alert('Please sign in to get a services.'); window.location.href='loginpage.php';</script>";
    exit();
}
    else {
    
    if (empty($name) || empty($email) || empty($number) || empty($gender) || empty($age) || empty($height) || empty($weight) || empty($country) || empty($calories) || empty($activity) || empty($wakeup) || empty($tlsw) || empty($tfsw) || empty($tgg) || empty($tgs) || empty($goal) || empty($history) ) {
        echo '<script type="text/javascript">alert("Please fill in all fields");window.location.href="services.php";</script>';
    }

    else{
    $sql = "INSERT INTO services(fullname,email,phonenumber,gender,age,height,weight,country,calories,activity,wakeup,lswtime,fswtime,gymtime,sleeptime,goal,history) VALUES ('$name','$email','$number', '$gender','$age',
    '$height','$weight','$country', '$calories','$activity',
    '$wakeup','$tlsw','$tfsw', '$tgg','$tgs','$goal','$history')";
            $result = mysqli_query($con, $sql) or die("mysqli_error($con)");
            echo '<script type="text/javascript">alert("we received your application we will be contact you soon!");window.location.href="services.php";</script>';
    
            if (!$result) {
                die('Record not added ...' . mysqli_error($con));
            }
            mysqli_close($con);
        } 
    } 
    
}


?>                                                                                                                                                       <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                        
    <title>Services.FitTrack</title>
    <link rel="website icon" type="png" href="./logo.webp">
    <link rel="stylesheet" href="services.css">
</head> 

<body>
    <form method="post" action ="services.php">

    <h1>FitTrack<br>GET THE BODY YOU'VE ALWAYS DREAMED OF!</h1>
    <h2>Workout,meal, and supplement programs entirely customized for you by our team</h2>


    <h3>we'll need a lot of details regarding your goals and body type to create and perfect the program, to only to
        customize it to what you need, but so we can also adapt your current life style to it!</h3>
    
        <div class="services">
        <p>Full Name <span style="color: red; font-weight: bold;">*</span></p>
        <input type="text" id="name" name = "name">

    <p>Email <span style="color: red; font-weight: bold;">*</span></p>
        <input type="email" name = "email">
    <p>Phone Number<span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "number">
        <p>Gender <span style="color: red; font-weight: bold;">*</span></p>
        <input type="radio" name="gender" value="male" style="height: 5%;margin-left: -11%;margin-top: 2%;">
        <p id="male">Male</p><br>
        <input type="radio" name="gender" value="female" style="height: 5%;margin-left: -11%;">
        <p id="female">Female</p>
        <p>Age <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "age">
        <p>Height <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "height">
        <p>Current weight <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "weight">
        <p>Country <span style="color: red; font-weight: bold;">*</span></p>
        <input type="text" name = "country">
    </div>
    <div class="mcq">
        <p style="padding-top: 7%;">How many calories do you consume daily?</p>
        <select style="font-size: 1vw;" name = "calories">
            <option required hidden>Please Select</option>
            <option>2k</option>
            <option>+2k</option>
            <option>+3k</option>
        </select>
        <p>What is your level of activity</p>
        <select style="font-size: 1vw;" name = "activity">
            <option required hidden>Please Select</option>
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>
        <p>What time do you wake up?</p>
        <select style="font-size: 1vw;" name = "wakeup">
            <option required hidden>Please Select</option>
            <option>01:00AM</option>
            <option>02:00AM</option>
            <option>03:00AM</option>
            <option>04:00AM</option>
            <option>05:00AM</option>
            <option>06:00AM</option>
            <option>07:00AM</option>
            <option>08:00AM</option>
            <option>09:00AM</option>
            <option>10:00AM</option>
            <option>11:00AM</option>
            <option>12:00AM</option>
            <option>01:00PM</option>
            <option>02:00PM</option>
            <option>03:00PM</option>
            <option>04:00PM</option>
            <option>05:00PM</option>
            <option>06:00PM</option>
            <option>07:00PM</option>
            <option>08:00PM</option>
            <option>09:00PM</option>
            <option>10:00PM</option>
            <option>11:00PM</option>
            <option>12:00PM</option>
            
            <input type="radio" name="t1" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                type="radio" name="t1" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            <p>What time do you leave to go to school/work?</p>
            <select style="font-size: 1vw;" name = "tlsw">
            <option required hidden>Please Select</option>
            <option>01:00AM</option>
            <option>02:00AM</option>
            <option>03:00AM</option>
            <option>04:00AM</option>
            <option>05:00AM</option>
            <option>06:00AM</option>
            <option>07:00AM</option>
            <option>08:00AM</option>
            <option>09:00AM</option>
            <option>10:00AM</option>
            <option>11:00AM</option>
            <option>12:00AM</option>
            <option>01:00PM</option>
            <option>02:00PM</option>
            <option>03:00PM</option>
            <option>04:00PM</option>
            <option>05:00PM</option>
            <option>06:00PM</option>
            <option>07:00PM</option>
            <option>08:00PM</option>
            <option>09:00PM</option>
            <option>10:00PM</option>
            <option>11:00PM</option>
            <option>12:00PM</option>
                <input type="radio" name="t2" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t2" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you finish school/work?</p>
            <select style="font-size: 1vw;" name = "tfsw">
            <option required hidden>Please Select</option>
            <option>01:00AM</option>
            <option>02:00AM</option>
            <option>03:00AM</option>
            <option>04:00AM</option>
            <option>05:00AM</option>
            <option>06:00AM</option>
            <option>07:00AM</option>
            <option>08:00AM</option>
            <option>09:00AM</option>
            <option>10:00AM</option>
            <option>11:00AM</option>
            <option>12:00AM</option>
            <option>01:00PM</option>
            <option>02:00PM</option>
            <option>03:00PM</option>
            <option>04:00PM</option>
            <option>05:00PM</option>
            <option>06:00PM</option>
            <option>07:00PM</option>
            <option>08:00PM</option>
            <option>09:00PM</option>
            <option>10:00PM</option>
            <option>11:00PM</option>
            <option>12:00PM</option>
                <input type="radio" name="t3" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t3" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you usually go to the gym?</p>
            <select style="font-size: 1vw;" name = "tgg">
            <option required hidden>Please Select</option>
            <option>01:00AM</option>
            <option>02:00AM</option>
            <option>03:00AM</option>
            <option>04:00AM</option>
            <option>05:00AM</option>
            <option>06:00AM</option>
            <option>07:00AM</option>
            <option>08:00AM</option>
            <option>09:00AM</option>
            <option>10:00AM</option>
            <option>11:00AM</option>
            <option>12:00AM</option>
            <option>01:00PM</option>
            <option>02:00PM</option>
            <option>03:00PM</option>
            <option>04:00PM</option>
            <option>05:00PM</option>
            <option>06:00PM</option>
            <option>07:00PM</option>
            <option>08:00PM</option>
            <option>09:00PM</option>
            <option>10:00PM</option>
            <option>11:00PM</option>
            <option>12:00PM</option>
                <input type="radio" name="t4" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t4" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you usually go to sleep?</p>
            <select style="font-size: 1vw;" name = "tgs">
            <option required hidden>Please Select</option>
            <option>01:00AM</option>
            <option>02:00AM</option>
            <option>03:00AM</option>
            <option>04:00AM</option>
            <option>05:00AM</option>
            <option>06:00AM</option>
            <option>07:00AM</option>
            <option>08:00AM</option>
            <option>09:00AM</option>
            <option>10:00AM</option>
            <option>11:00AM</option>
            <option>12:00AM</option>
            <option>01:00PM</option>
            <option>02:00PM</option>
            <option>03:00PM</option>
            <option>04:00PM</option>
            <option>05:00PM</option>
            <option>06:00PM</option>
            <option>07:00PM</option>
            <option>08:00PM</option>
            <option>09:00PM</option>
            <option>10:00PM</option>
            <option>11:00PM</option>
            <option>12:00PM</option>
                <input type="radio" name="t5" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span><input
                    type="radio" name="t5" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>

    </div>
    <div class="questions">
        <p>What is your current short term goal?</p>
        <input type="text" name = "goal">
        <p style="padding-top: 1%;">What is your history with supplements? What are you currently using?</p>
        <input type="text" name = "history"><br>
       

        <button type="submit" name = "submit">Submit</button>
    </div>
    <div class="footer">



        <a href="ppc.html">Privacy Policy</a>
        <a href="aboutus.html">about us</a>
        <a href="terms.html">Terms</a>
        <a id="copy" href="index.html">copyright &copy;2023JaberMobarak</a>


    </div>
    </form>
</body>


</html>
