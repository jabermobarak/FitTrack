



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="./logo.webp">
    <title>FtiTrack</title>
    <script>
        var inactivityTime = 60000; 
        var logoutTimer;

        function resetTimer() {
            clearTimeout(logoutTimer);
            logoutTimer = setTimeout(logout, inactivityTime);
        }

        function logout() {
            // Redirect to the login page
            window.location.href = "loginpage.php";
        }

        // Reset the timer on user activity
        document.addEventListener("mousemove", resetTimer);
        document.addEventListener("keydown", resetTimer);
        resetTimer();
    </script>
</head>
<script>
    function toggleDarkMode() {
      var body = document.body;
      body.classList.toggle("dark-mode");
    }
  </script>

<body>
    <h1>FitTrack</h1>
    <div class="nav-buttons">
        <button class="login"><a href="loginpage.php">Login</a></button>
        <button class="signup"><a href="signup.php">Sign Up</a></button>
        <img id="darkimg" src="./dark.png" onclick="toggleDarkMode()">
       
  
 
    </div>

    <nav class="Menu">
        
           <a href="calculator.php" name="calculator">cal calculator</a>
            <a href="services.php" name="services">Services</a>
            <a href="productstore.php">product store</a>
           <a href="aboutus.html">About us</a>

          <a href="contactus.php">Contact us</a>
          
           

        
        
    </nav>

    <div class="gym">
        <h2>The Power of Gym Workouts for <span>Physical and Mental Health</span></h2>
        <p>Gyms, or fitness centers, have gained popularity in recent years due to their many benefits. Regular gym
            workouts can positively impact physical health, mental well-being, and overall quality of life. They improve
            cardiovascular health, muscle strength, flexibility, and can aid in weight management and reduce the risk of
            chronic diseases. Gym workouts also have mental health benefits, reducing stress, anxiety, and depression,
            improving mood and cognitive function. Gyms provide a social environment that encourages social interaction,
            promoting a sense of community. Regular gym workouts can boost self-esteem and confidence, leading to a
            healthier and happier lifestyle.</p>
        <img src="./pain.jpg" style="width: 30%; height: 30%; margin-left: 55%;margin-top: -70%;" >
           
        <img src="./gympic.jpg" alt="gympic">


        <h2>Benefits of <span>Cardio Exercises</span></h2>

        <p>Cardio exercises, also known as cardiovascular exercises, are an essential part of any fitness routine. These
            exercises are designed to elevate the heart rate and increase breathing, helping to improve cardiovascular
            health, burn calories, and boost endurance. Common examples of cardio exercises include running, cycling,
            swimming, brisk walking, and jumping rope. Cardio exercises are known to improve lung and heart function,
            reduce the risk of chronic diseases such as heart disease and diabetes, and increase overall fitness levels.
            Regular cardio exercise can also aid in weight management, improve mood, reduce stress, and enhance sleep
            quality. Incorporating cardiovascular exercises into a well-rounded fitness routine can lead to a healthier
            and more active lifestyle.</p>
        <img src="./motv1.webp"  style="width: 30%; height: 30%; margin-left: 55%;margin-top: -70%;">
        <img src="./cardio.jpg" alt="cardio">
        <h2>Power of Gym <span>Supplements</span></h2>
        <p>Gym supplements are popular among fitness enthusiasts as they are believed to support various fitness goals.
            From protein powders that aid in muscle recovery and growth, to pre-workout supplements that provide an
            energy boost and enhance performance, gym supplements are designed to complement regular exercise routines.
            Some supplements also contain vitamins, minerals, and other nutrients that may help support overall health
            and well-being. However, it's important to note that supplements are not a substitute for a healthy diet and
            exercise, and their effectiveness may vary from person to person. It's always recommended to consult with a
            healthcare professional before adding any new supplement to your fitness routine.</p>
        <img src="./motv3.jpg"  style="width: 30%; height: 30%; margin-left: 55%;margin-top: -70%;">
        <img src="./supplements.png" alt="supplements" style="padding-bottom: 3%;">
    </div>



    <div class="footer">

       
            
            <a href="ppc.html">Privacy Policy</a>
           <a href="aboutus.html">About us</a>
           <a href="terms.html">Terms</a>
           <a id="copy" href="index.html">Copyright &copy;2023JaberMobarak</a>
      

    </div>

</body>

</html>