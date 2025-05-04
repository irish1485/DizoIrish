<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Types</title>
</head>
<body>
    <h1 style ="text-align:center">DATA TYPES</h1>
    
    <h2>Exercise 1:  Personal information</h2>
    <p>
        <?php
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "exercises");
        $connection = mysqli_connect(HOSTNAME,USERNAME, PASSWORD, DATABASE);

            $x = 9;
            $y = 8;
            $z = ($x + $y) * 5;
            echo "The total is $z";
         ?>
    <br>
    <br>

    <h2>Exercise 2: Value added tax</h2>
        <?php
            $price = 100;
            $vat = $price * .08;
            $totalPrice = $price + $vat;
            echo "Price: $price <br>";
            echo "Vat: $vat <br>";
            echo "Total Price: $totalPrice";
         ?>
    <br>
    <br>

    <h2>Exercise 3: Average</h2>
        <?php
            $x = 99;
            $y = 88;
            $z = 85;
            $average = ($x + $y + $z) / 3;
            echo "The average is " .number_format($average,2);
         ?>
    <br>
    <br>

    <h2>Exercise 4: Countries and capitals</h2>
        <?php
            $countries = [
                "Netherlands" => "Amsterdam<br>",
                "Thailand" => "Bangkok<br>",
                "Germany" => "Berlin<br>",
                "Japan" => "Tokyo<br>",
                "Philippines" => "Manila"
            ];

            foreach ($countries as $country => $capital)
            {
                echo "The capital of $country = $capital";
            }
         ?>
    <br>
    <br>

    <h2>Exercise 5: Centimeters to inches</h2>
        <?php
            $cm = 50;
            $inch = $cm * 0.39;
            echo "$cm centimeters is $inch inches";
         ?>
    <br>
    <br>

    <h2>Exercise  6: Expenses</h2>
        <?php
            $expenses = [1500, 350, 200, 150];
            $totalAmount = 0;

            foreach ($expenses as $expense)
            {
                $totalAmount += $expense;
            }

            $amountOfExpenses = count($expenses);
            echo "My $amountOfExpenses biggest expenses were $totalAmount<br>";
         ?>
    <br>
    </p>
 </body>
</html>