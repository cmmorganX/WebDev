<?php  //php
 
$yourName = "Courtney Morgan"; // make the variable yourName -- I put in my name, not your name. Because it is my name.
                                //I applied the value of my name to it like the assignment says to do

$number1 = 1;  // assigning the value to $number1
$number2 = 2;  //assigning the value to $number2
$total = $number1 + $number2;  // $total is adding the values of $number1 and $number2 together and getting the grand total number and you win a Hawaii vacation.

$languages = array( "PHP", "HTML", "JavaScript" );  //Create a PHP variable that is an array containing the values 'PHP', 'HTML' and 'Javascript'.  Did this here

?>

<!DOCTYPE html>
<html>
<head>

        <title>PHP Basics</title> <!--html-->

        <script>
            let languagesJS = [];  //javascript

            <?php  //php

                foreach ($languages as $val){  //here be loops. The foreach loop is specifically for arrays.
                    echo "languagesJS.push('" . $val . "');";
                }  //Then, use a PHP loop to iterate through the array and create a javascript array that contains those values.
            ?>
            console.log(languagesJS);  ///javascript
        </script>

</head>

    <body>

        <?php  //php

            echo "<h1>PHP Basics</h1>";  // this is the name of the assignment in an h1 element - using html language

        ?>

        <h2><?php echo $yourName; ?></h2>  <!-- using HTMl -- put the h2 element on the page. It's echoi/putting my name, not your name, in the element-->

        <p>
            First Number: <?php echo $number1; ?><br>   <!-- Create the following variables:  number1, number2 and total.  Assign a value to them.   -->
            Second Number: <?php echo $number2; ?><br>   <!-- catching the values of $number1 nad $number2 here and $total on the next line -->
            Total: <?php echo $total; ?>  <!-- this is where the concatcatinaiontion of the $number1 and $number2 values together to get the total outcome value -->
        </p>

        <script>document.write(languagesJS);</script>  <!-- Lastly, write a javascript script that displays the values of the array on the page. -->
        <!--PHP Array to JavaScript-->


    </body><!--html-->
</html>