<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- it do be some code-->
<title>WDV101 Basic Form Handler Example</title> <!-- jeff made this stuff-->
</head>

<body>
<h1>WDV101 Intro HTML and CSS</h1>
<h2>UNIT 3 Forms - Lesson 2 Server Side Processes</h2>
<p>This page will demonstrate how a server side application will take the data that was entered on a form and display it within an HTML table. This example will work for any form. It is setup to read any or all fields on a form without needing any changes.  Other applications are more specific to the form they process and require updates anytime the form is changed.</p>

<h3>Instructions</h3> <!-- here be the instructions-->
<ol>
  <li>Place the file name 'demonstrateFormHandler.php' in the action attribute of your form. This is using the default pathname and will look for this file in the same location as the form.html page. You may place server side processes in their own folder on the server.  It is common to use a folder called 'files' which contains server side processes. In that case you would include the pathname in your action attribute. Example: action='files/demonstrateFormHandler.php' </li>
  <li>Move your form.html page AND this page to your host server.</li>
  <li>Use your browser to locate and run the form.html page on your host server. </li>
  <li>Complete the form and click Submit.</li>
</ol>
<p>The table below displays the 'name=value' pairs that were entered on the form and processed on the server.  This page is a result of that server side process.</p>
<p>The <strong>Field Name</strong> column contains the value of the name attribute for each field on the form. <em>Example: &lt;input name=&quot;first_name&quot;&gt;</em>  This displays what you coded into the HTML. NOTE: If you do not have a name attribute for a field OR if the name attribute does not have a value the form will NOT send the data to the server.</p>
<p>The <strong>Value of Field</strong> column contains the value of each field that was sent to the server by the form. This will vary depending upon the HTML form element and how the value attribute was used for a field.</p>
<h3>Form Name-Value Pairs</h3>
<?php

	echo "<table border='1'>"; // setting the border to 1 so it's thin and teeny
	echo "<tr><th>Field Name</th><th>Value of Field</th></tr>"; // table row with table header field name and value of field
	foreach($_POST as $key => $value) // for each key and value and then putting it in the table
	{					// $key => $value  -- key replaces the index of the array and the value is the data point/the input
						// first name => Courtney

		echo '<tr>'; //setting up the tab;e, this is a row
		echo '<td>',$key,'</td>';    // "<td>$key</td>; "<td>" . $key . "</td>"; concnncannatninon the $key . actual $key input . end data
		echo '<td>',$value,'</td>'; // same "
		echo "</tr>"; // end row
	} 
	echo "</table>"; //end table
	echo "<p>&nbsp;</p>"; // empty line - space placeholder for beautiful web page layout

?>

<p>Dear <?php echo $_POST["first_name"];?>,</p> <!-- taking whatever was put in the first name field and putting it here to trick people into thinking the robots know who rthey are and they are best best best friends and this is a letter between actual Hoomanz -->

    <p>Thank you for your interest in DMACC.</p> <!-- this is how a rejection letter starts -->

    <p>We have you listed as a <?php echo $_POST["academic_standing"];?> starting this fall.</p> <!-- this is pulling from the form where they chose their academic standing to further sell the illusion that we are all definently hoomanz and friendz-->

    <p>You have declared <?php echo $_POST["student_major"]; ?> as your major.</p> <!-- pulling from the form whatever they chose from the student major portion, really got 'em snowed now boys -->

    <p>Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["email_address"] ?>:</p> <!-- puts their email from the form here to add a spicy intimidation layer to the rejection letter -->

    <p>
        <?php 
            if(isset($_POST["contact_program_info"]) && ($_POST["contact_program_info"] == "yes")) {  // pulling the responses from the checkboxes
				  // checking if the checkboxes have been checkboxed and served all the checkbox needs therein -- completely as a human, of course
                echo "Additional program information"; // doing the same for additional program info, ditto on still being human
            }
        ?>
    </p>

    <p>
        <?php
            if(isset($_POST["contact_advisor"]) && ($_POST["contact_advisor"] == "yes")) { // checkbox portion where we desperately wanted the advisor to netlfix and chill but they were very married and said no, but it was nice talking to you, fellow human
                echo "Advisor contact information"; // putting the response here to confirm the checkbox and human status
            }
        ?>
    </p>

    <p>You have shared the following comments which we will review:</p> <!-- this is not dissuading me from thinking this is s rejection letter -->

    <p><?php echo $_POST["comments"] ?></p> <!-- this is where the text field comment stuff goes and where cage comes down and it is reveleaed that LO! we were robots all along -->


</body>
</html>
