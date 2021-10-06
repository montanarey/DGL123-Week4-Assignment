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

    <?php 
    // Only proceed with script below if the form has been filled in
    if (isset($_POST['firstNum']) && isset($_POST['secondNum'])) {
        print "<h3>Result:</h3>"; // Print header

        // Recieve and store user data
        $firstNum = $_POST['firstNum'];
        $secondNum = $_POST['secondNum'];
    
        // If numeric values, add and print
        if (is_numeric($firstNum) && is_numeric($secondNum)) {
            $sum = $firstNum + $secondNum;
            print "<p>$firstNum + $secondNum = $sum</p>";
        } else {
            // If not a numeric value, output error message
            print "Incorrect input. Please enter valid numbers and try again.";
        }
    }
    ?>

</body>
</html>