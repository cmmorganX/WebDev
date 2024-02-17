<?php
// Use GET - fetch info
// fetch record from db
// insert info
// confirmation - personal message?



$eventId = $_GET["eventId"]; // get name value pair from URL
        echo "<h3>New record detected of $eventId. Us lowly bots will fetch that for you in miliseconds. Please don't beat us again.</h3>";



// connect to db
// create sql= SELECT + WHERE
// prepare
// bind parameters
// execute
// fetch row from statement object -> PHP array
// display fields as needed

try {
		require "dbConnect.php";  // the usual and the riga ma roll
		
		$sql = "SELECT events_name, events_description FROM wdv341_events WHERE events_id=:eventId;";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":eventId",$eventId);
	
		$stmt->execute();  // she be out here executing statements!
	
		$eventRecord = $stmt->fetch(PDO::FETCH_ASSOC);  // get that record ID and then chuck it far away	
	}



	catch(PDOException $e){  // that catch though
		$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
		error_log($e->getMessage()); //this tattles on the user who started all the trouble
		
		error_log(var_dump(debug_backtrace()));	  // This function displays data from the code that led up to the debug_backtrace() function.
	}
?>

<!doctype html>
<html>
	<head>
	
		<title>EVENT RESPONSE PAGE</title>
		
	</head>

	<body>

		<h1>EVENT RESPONSE PAGE</h1>
		
		<h3>Congratultions! You input an Event Correctly!</h3>
		
		<p>Event Name: <?php echo $eventRecord["events_name"]; ?></p> <!-- inputs the specific event and makes it  seem like it was persoanlized-->
		
		<p>Event Description: <?php echo $eventRecord["events_description"] ?></p> <!-- ditto on the personalization-->

	</body>
</html>