<?php

    //line comment

    /*
        block comment
    */

    //define some PHP variables 

    $firstName = "Jeff";
    $lastName = "Gullion";

    //$fmt = numfmt_create( 'us_US', NumberFormatter::CURRENCY );
    //$formattedSales = numfmt_format_currency($fmt, $totalSales, "USD")."\n";
    //echo numfmt_format_currency($fmt, 1234567.891234567890000, "EUR")."\n";

    function processSalesPerson(){
        //code goes here
        global $firstName, $lastName;        //allows access to global variables

        $salesName = $lastName . ", " . $firstName;
        return $salesName;
    }

    //processSalesPerson();     //calls the function!

    $totalSales = 1235.45;

    echo "<h1>$firstName</h1>";     //pay attention to the variable within the quotes


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>PHP Syntax examples</h2>

    <h3>Salesperson: <?php echo processSalesPerson(); ?></h3>
    <h3>Salesperson: <?php echo $firstName . " " .  $lastName ?></h3>
    <p>Total Sales from today: <?php echo $formattedSales ?></p>
    
</body>
</html>