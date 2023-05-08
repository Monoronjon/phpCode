function calculateBMI() {
    // Get input values
    var weight = document.getElementById('weightInput').value;
    var height = document.getElementById('heightInput').value;
  
    // Calculate BMI
    var bmi = weight / (height * height);
  
    // Display result
    var resultElement = document.getElementById('result');
    resultElement.innerHTML = 'Your BMI is ' + bmi.toFixed(2);
  }
  