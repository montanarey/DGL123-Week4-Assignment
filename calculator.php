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

        // Print header
        print "<h3>Result:</h3>";

        // Recieve and store user data
        $firstNum = $_POST['firstNum'];
        $secondNum = $_POST['secondNum'];
    
        // Error handling for non-numeric values
        if (is_numeric($firstNum) && is_numeric($secondNum)) {
            
            // Calculate  and print the sum
            $sum = $firstNum + $secondNum;
            print "<p>$firstNum + $secondNum = $sum</p>";
        } else {
        print "Incorrect input. Please enter valid numbers and try again.";
        }
    }
    ?>

</body>
</html>