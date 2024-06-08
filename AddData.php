<?php
include "config.php";
$con = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    $result = mysqli_query($con, "INSERT INTO Fittrack services(FullName, Email, PhoneNumber, Gender,Age,Height,CurrentWeight,Country,Calories,ActivityLevel,WakeUpTime,SchoolWorkTimeL,SchoolWorkTimeF	,GymTime,SleepTime,Goal,SupplementsH) 
    VALUES ('$_POST[Fullname]','$_POST[email]','$_POST[phonenumber]','$_POST[gender]','$_POST[age]','$_POST[height]','$_POST[currentweight]','$_POST[country]','$_POST[x]','$_POST[x]','$_POST[x]','$_POST[x]','$_POST[x]','$_POST[x]','$_POST[x]','$_POST[goal]','$_POST[Shistory]',)");

    if (!$result) {
        die("Record not added.." . mysqli_error($con));
    } else {
        echo "New record is added";
    }

    mysqli_close($con);
}
?>
<!DOCTYPE html>
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

    <h1>FitTrack<br>GET THE BODY YOU'VE ALWAYS DREAMED OF!</h1>
    <h2>Workout,meal, and supplement programs entirely customized for you by our team</h2>


    <h3>we'll need a lot of details regarding your goals and body type to create and perfect the program, to only to
        customize it to what you need, but so we can also adapt your current life style to it!</h3>
    <div class="services">
        <p>Full Name <span style="color: red; font-weight: bold;">*</span></p>
        <input type="text" id="name" name = "Fullname">

    <p>Email <span style="color: red; font-weight: bold;">*</span></p>
        <input type="email" name = "email">
    <p>Phone Number<span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "phonenumber">
        <p>Gender <span style="color: red; font-weight: bold;">*</span></p>
        <input type="radio" name="gender" value="m" style="height: 5%;margin-left: -11%;margin-top: 2%;">
        <p id="male">Male</p><br>
        <input type="radio" name="gender" value="f" style="height: 5%;margin-left: -11%;">
        <p id="female">Female</p>
        <p>Age <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "age">
        <p>Height <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "height">
        <p>Current weight <span style="color: red; font-weight: bold;">*</span></p>
        <input type="number" name = "currentweight">
        <p>Country <span style="color: red; font-weight: bold;">*</span></p>
        <input type="text" name = "country">
    </div>
    <div class="mcq">
        <p>How many calories do you consume daily?</p>
        <select style="font-size: 1vw;">
            <option required hidden>Please Select</option>
            <option>Under 2,000</option>
            <option>Over 2,000</option>
            <option>Over 3,000</option>
        </select>
        <p>What is your level of activity</p>
        <select style="font-size: 1vw;">
            <option required hidden>Please Select</option>
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>
        <p>What time do you wake up?</p>
        <select style="font-size: 1vw;">
            <option required hidden>Please Select</option>
            <option>01:00</option>
            <option>02:00</option>
            <option>03:00</option>
            <option>04:00</option>
            <option>05:00</option>
            <option>06:00</option>
            <option>07:00</option>
            <option>08:00</option>
            <option>09:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <input type="radio" name="t1" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                type="radio" name="t1" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            <p>What time do you leave to go to school/work?</p>
            <select style="font-size: 1vw;">
                <option required hidden>Please Select</option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <input type="radio" name="t2" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t2" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you finish school/work?</p>
            <select style="font-size: 1vw;">
                <option required hidden>Please Select</option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <input type="radio" name="t3" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t3" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you usually go to the gym?</p>
            <select style="font-size: 1vw;">
                <option required hidden>Please Select</option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <input type="radio" name="t4" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span> <input
                    type="radio" name="t4" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>
            <p>What time do you usually go to sleep?</p>
            <select style="font-size: 1vw;">
                <option required hidden>Please Select</option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <input type="radio" name="t5" style="margin-right: 1%;"><span style="font-size: 1.2vw;">AM</span><input
                    type="radio" name="t5" style="margin-right: 1%;"><span style="font-size: 1.2vw;">PM</span>
            </select>

    </div>
    <div class="questions">
        <p>What is your current short term goal?</p>
        <input type="text" name = "goal">
        <p>What is your history with supplements? What are you currently using?</p>
        <input type="text" name = "Shistory"><br>
       

        <button type="submit" name = "submit">Submit</button>
    </div>
    <div class="footer">



        <a href="ppc.html">Privacy Policy</a>
        <a href="aboutus.html">about us</a>
        <a href="terms.html">Terms</a>
        <a id="copy" href="index.html">copyright &copy;2023JaberMobarak</a>


    </div>
</body>

</html>
