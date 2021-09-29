<!DOCTYPE html>
<html lang="en">
    <!--
    DGL123 Introduction to PHP
    Author: Montana Pistell
    Last Modified: September 29, 2021
    Purpose: Week 04 Assignment. Allows a user to input two numeric values, and outputs the sum of those values.
 -->
<head>
    <meta charset="UTF-8">
    <title>Addition Only Calculator</title>
</head>
<body>
    <h1>Addition Only Calculator</h1>

    <!-- HTML form to gather user input-->
    <form action="calculator.php" method="post">
        <label for="firstNum">First Number:</label>
        <input type="text" name="firstNum" id="firstNum" required>
        <br>
        <label for="secondNum">Second Number:</label>
        <input type="text" name="secondNum" id="secondNum" required>
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>


    <?php // Script to handle user data and print calculation result
    print "<h3>Result:</h3>";

    // Recieve data from user and store in variables
    //$firstNum = $_POST['firstNum'];
    //$secondNum = $_POST['secondNum'];
    
    // If both inputs are numeric
    if (isset($_POST['firstNum']) && isset($_POST['secondNum'])) {
        // Recieve data from user and store in variables
        $firstNum = $_POST['firstNum'];
        $secondNum = $_POST['secondNum'];
        // Calculate the sum of the first and second number
        $sum = $firstNum + $secondNum;
        // Print the sum
        print "<p>$firstNum + $secondNum = $sum</p>";
    } else {
        print "Incorrect input. Please enter valid numbers and try again.";
    }

    ?>

</body>
</html>