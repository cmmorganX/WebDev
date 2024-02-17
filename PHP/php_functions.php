<?php

$currDate = date_create();  //creates date variable that inputs the current local date automatically

$sampleString = "Welcome to DMACC"; // puts the phrase "welcome to dmacc" where it's put

$testPhoneNum = "1234567890";  // puts the dmacc phone number where it is put in the body

$testCurrency = "123456"; // testing the numerical values to make sure they work - puts the numbers where we want when called

function dateAmericanFormat($inDate) {    // it's a function that is showing the current american date - in that paranthesis we need to have a parameter for this to work
    return date_format($inDate, "m/d/Y");   // spits out month/day/year where we put the date format -- this is hard coded into php -
    //second part is dictating the format we want this to be in
}

function dateEuropeanFormat($inDate) {   // this is the same as the above one only it's for international/european format
    return date_format($inDate,"d/m/Y");  // shows the dateEuropeanFormat as day / month / year -- as they do over there in the place of many accents and treaties
}

function displayStringInfo($inString) {  // this is counting the number of characters in the "welcome to dmacc" phrase
    echo "Number of Characters: " . strlen($inString) . "<br>";  //strlen() is the function for counting number fo characters
    trim($inString);  // cutting off the white space before and after counting the characters so they are not included
    echo strtolower($inString) . "<br>";  // turns every chracter into lower case characters

    echo "Contains 'DMACC'?: ";  // checking if it contains "dmacc"
    if (stristr($inString, "DMACC") != false) {  // if stristr() is checking if there is Dmacc there and then "!= false," means "if it is not there, if it is -not equal to false-"
            echo "TRUE"; // if dmacc IS there it will say TRUE
    } else {
            echo "FALSE"; // if dmacc is NOT there it will say false
    }
}

function formatPhoneNum($inPhoneNum) {  //formatting the phone number
    if (strlen($inPhoneNum) == 10) { // if the phone number is equal to 10 characters
        echo "(" . substr($inPhoneNum, 0, 3) . ") " . substr($inPhoneNum, 3, 3) . "-" . substr($inPhoneNum, 6);  // concacananantting the portions of the phone number to display as (XXX)XXX-XXXX.
    }  // substr is just taking a portion of the string and concncncncanting it so it looks right
}

function formatUSCurrency($inCurrency) {  // we are formatting the way the currency will display - it will display in American dollars and amount
    return "$" . number_format($inCurrency, 2, ".", ","); // concnncancnnting the currency to look like this $1,000.00
}                                // the  2 here is talking about how many decimal points there are
                                    // the comma is for thousands places

?>

<!doctype html> <!-- the beginning of the document -->
<html>
    <head>

        <title>PHP Functions</title>

    </head>

    <body>

        <p>Current Date (mm/dd/yyyy): <?php echo dateAmericanFormat($currDate); ?></p>  <!-- showing the current American date using the php functions -->


        <p>Current Date (dd/mm/yyyy): <?php echo dateEuropeanFormat($currDate); ?></p>  <!-- showing the current International/European date using the php functions -->

        <p><?php displayStringInfo($sampleString); ?></p>  <!-- showing the "welcome to dmacc" part of the php and displaying the character counts and in lowercase-->

        <p><?php formatPhoneNum($testPhoneNum); ?></p> <!-- showing the phone number in the format dictated in the php function-->

        <p><?php echo formatUSCurrency($testCurrency); ?></p>  <!-- showing the currency amount in American dollars and format -->


    </body>
</html>