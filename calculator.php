<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caloriesCalculator.FitTrack</title>
    <link rel="website icon" type="png" href="./logo.webp">
    <link rel="stylesheet" href="calculator.css">
</head>

<body>
    <h1>Calorie Calculator</h1>
    <h3>Powerd by FitTrack</h3>
    <div class="inputs">
        <p style="padding-bottom: 4%;font-size: 1.3vw;">Gender</p>
        <span style="font-weight: bold;"><span style="font-size: 1.3vw; color: whitesmoke;">Male</span></span><input type="radio" name="gender" value="m" id="maleRadio" style="height: 3.6%;width: 20%;" >
        <span style="font-weight: bold;"><span style="font-size: 1.3vw; color: whitesmoke;">Female</span></span><input type="radio" name="gender" value="f" id="femaleRadio" style="height: 3.6%;width: 20%;"><br>
        <p>Age</p> <input type="number" id="ageInput" min="15"
            max="80"><br>

        <p>Height (cm)</p> <input type="number"
            id="heightInput"><br>
        <p>Weight (kg)</p> <input type="number"
            id="weightInput"><br>
        <button onclick="calculateCalories()">Calculate</button>
        <p id="total">Total Calories: <span id="totalCalories"></span></p>

    </div>

    

    <script>
        function calculateCalories() {
            var ageInput = document.getElementById("ageInput");
            var genderMale = document.getElementById("maleRadio").checked;
            var genderFemale = document.getElementById("femaleRadio").checked;
            var heightInput = document.getElementById("heightInput");
            var weightInput = document.getElementById("weightInput");

            var age = parseInt(ageInput.value);
            var height = parseInt(heightInput.value);
            var weight = parseInt(weightInput.value);

            if (!isNaN(age) && !isNaN(height) && !isNaN(weight)) {
                var calories = 0;
                if (genderMale) {
                    calories = weight * 1 * 24;
                } else if (genderFemale) {
                    calories = weight * 0.9 * 24;
                }

                var totalCalories = calories;
                document.getElementById("totalCalories").textContent = totalCalories;

                // Reset the input values
                ageInput.value = "";
                heightInput.value = "";
                weightInput.value = "";

                // Uncheck the radio buttons
                document.getElementById("maleRadio").checked = false;
                document.getElementById("femaleRadio").checked = false;
            }
        }
    </script>
    <div class="footer">

       
            
        <a href="ppc.html">Privacy Policy</a>
       <a href="aboutus.html">about us</a>
       <a href="terms.html">Terms</a>
       <a id="copy" href="index.html">copyright &copy;2023JaberMobarak</a>
    
    
    </div>
</body>

</html>