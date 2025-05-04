<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Types</title>
</head>
<body>
    <h1 style ="text-align:center">CONTROL STRUCTURES</h1>
    
    <h2>Exercise 1:</h2>
    <p>
        <?php
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "exercises");
        $connection = mysqli_connect(HOSTNAME,USERNAME, PASSWORD, DATABASE);

        $a = 5;
        $b = 3;
        echo "Highest value is " . max($a, $b) . "<br>";
        echo "Lowest value is " . min($a, $b) . "<br>";
         ?>
    <br>
    <br>

    <h2>Exercise 2:</h2>
        <?php
        $value = 2;
        switch ($value) {
            case 1:
                echo "Spades";
                break;
            case 2:
                echo "Hearts";
                break;
            case 3:
                echo "Diamonds";
                break;
            case 4:
                echo "Clubs";
                break;
            default:
                echo "Invalid value. Must be between 1 and 4.";
        }
         ?>
    <br>
    <br>

    <h2>Exercise 3:</h2>
        <?php
        $score = 85;
        if ($score >= 90 && $score <= 100) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "Student got grade $grade.<br>";
        echo ($grade == 'F' || $grade == 'D') ? "Student failed." : "Student passed.";
             ?>
    <br>
    <br>

    <h2>Exercise 4:</h2>
        <?php
        $hours = 12000;
        $age = 6;
        $failures = 30;

        if ($hours > 10000 || $age > 7 || $failures > 25) {
            echo "Machine needs replacement.";
        } else {
            echo "Machine does not need replacement.";
        }        ?>
    <br>
    <br>

    <h2>Exercise 5:</h2>
        <?php
        $year = 2024; // Change this to test
        if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
        ?>
    <br>
    <br>

    <h2>Exercise  6:</h2>
        <?php
        $start = 1;
        $end = 5;
        $num = 7;

        for ($i = $start; $i <= $end; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
        ?>
    <br>

    <h2>Exercise 7: Fibonacci Series (0–50)</h2>
    <?php
        $a = 0;
        $b = 2;

        echo "$a, $b";
        while (true) {
            $next = $a + $b;
            if ($next > 50) break;
            echo ", $next";
            $a = $b;
            $b = $next;
        }
    ?>
    </p>
 </body>
</html>