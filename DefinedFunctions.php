<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Defined Functions</title>
</head>
<body>
    <h1 style="text-align: center">USER DEFINED FUNCTIONS</h1>

    <h2>Exercise 1: VAT Calculator</h2>
    <?php
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DATABASE", "exercises");
            $connection = mysqli_connect(HOSTNAME,USERNAME, PASSWORD, DATABASE);
    
        $price = 50;
        $vat = 0.15;

        function calculateVat($price, $vat) {
            return $price + ($price * $vat);
        }

        $total = calculateVat($price, $vat);
        echo "Price is: $price<br>";
        echo "VAT is: $vat<br>";
        echo "Total price is: $total<br>";
    ?>
    <br>

    <h2>Exercise 2: Leap Year</h2>
    <?php
        $year = 2025;

        function isLeapYear($year) {
            return ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0);
        }

        if (isLeapYear($year)) {
            echo "$year is a leap year<br>";
        } else {
            echo "$year is not a leap year<br>";
        }
    ?>
    <br>

    <h2>Exercise 3: Calculator</h2>
    <?php
        $num1 = 25;
        $num2 = 5;

        function addNumbers($a, $b) {
            return $a + $b;
        }

        function subtractNumbers($a, $b) {
            return $a - $b;
        }

        function multiplyNumbers($a, $b) {
            return $a * $b;
        }

        function divideNumbers($a, $b) {
            return $b != 0 ? $a / $b : "Cannot divide by zero";
        }

        echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "<br>";
        echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "<br>";
        echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "<br>";
        echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . "<br>";
    ?>
    <br>

    <h2>Exercise 4: Swapping Numbers</h2>
    <?php
        $a = 8;
        $b = 16;

        echo "Before swapping: num1 = $a, num2 = $b<br>";

        function swapNumbers($x, $y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
            echo "After swapping: num1 = $x, num2 = $y<br>";
        }

        swapNumbers($a, $b);
    ?>
    <br>

    <h2>Exercise 5: Even or Odd</h2>
    <?php
        $num1 = 8;

        function evenOrNot($num) {
            if ($num % 2 == 0) {
                echo "$num is even<br>";
            } else {
                echo "$num is odd<br>";
            }
        }

        evenOrNot($num1);
    ?>
    <br>

    <h2>Exercise 6: Prime Number</h2>
    <?php
        $num1 = 18;

        function isPrime($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        if (isPrime($num1)) {
            echo "$num1 is a prime number<br>";
        } else {
            echo "$num1 is not a prime number<br>";
        }
    ?>
</body>
</html>