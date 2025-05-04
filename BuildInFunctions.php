<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Built-in Functions</title>
</head>
<body>
    <h1 style="text-align:center;">BUILT-IN FUNCTIONS</h1>

    <h2>Exercise 1: Sorting Array (Descending)</h2>
    <?php
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DATABASE", "exercises");
            $connection = mysqli_connect(HOSTNAME,USERNAME, PASSWORD, DATABASE);
    
        $numbers = [23, 5, 87, 12, 56];
        rsort($numbers); // sort in descending order
        echo "Sorted Numbers (Descending): " . implode(", ", $numbers) . "<br>";
    ?>
    <br>

    <h2>Exercise 2: Birthday Countdown</h2>
    <?php
        $today = new DateTime();
        $birthday = new DateTime('2025-12-25'); // Change to your birthday

        if ($today > $birthday) {
            $birthday->modify('+1 year');
        }

        $interval = $today->diff($birthday);
        echo "Days until your birthday: " . $interval->days . " day(s)<br>";
    ?>
    <br>

    <h2>Exercise 3: Generating Random Float Numbers</h2>
    <?php
        function randNumber($min = 0, $max = 1) {
            return $min + mt_rand() / mt_getrandmax() * ($max - $min);
        }

        echo "Random float: " . randNumber(1, 10) . "<br>";
    ?>
    <br>

    <h2>Exercise 4: Lowercase Check</h2>
    <?php
        $str = "ThIs IS A Long PiEce oF TeXT WiTh MiXeD CasE.";
        function lowercaseCheck($str) {
            return strtolower($str);
        }

        echo "Lowercase version: " . lowercaseCheck($str) . "<br>";
    ?>
    <br>

    <h2>Exercise 5: Search Inside of a Text (Count Punctuation)</h2>
    <?php
        $text = "Hello! How are you? I'm fine, thank you. And you?";
        function searchText($str, $punctuationList) {
            $count = 0;
            foreach (str_split($str) as $char) {
                if (in_array($char, $punctuationList)) {
                    $count++;
                }
            }
            echo "The text has $count punctuations.<br>";
        }

        searchText($text, ['.', ',', '!', '?']);
    ?>
    <br>

    <h2>Exercise 6: Lowest and Highest Values</h2>
    <?php
        $onlyNumbers = [14, 3, 25, 8, 87, 0, 99];
        $min = min($onlyNumbers);
        $max = max($onlyNumbers);
        echo "The lowest value is $min and the highest value is $max<br>";
    ?>
    <br>

    <h2>Exercise 7: String Repeat</h2>
    <?php
        $str = "EXO ";
        echo str_repeat($str, 8);
    ?>
</body>
</html>
