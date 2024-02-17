<?php

//display form that can be used to input the information for the event
//DBcolumns
    //name, description, presenter, date and time
    //the date_inserted and date_updated should have current info
//action attribute of form will call a php file that will insert data into your database
//include at least one form protection like honeypot, captcha

//USE PHP PDO AND SQL to process the form data into your database

//it will connect to your wdv341 database using the dbconnect
//it will access the wdv_event table
//use a PDO prepared statement to process a SQL insert and command it to insert form data into table

if(isset($_POST['submit']) && empty($_POST['address'])) {  // if the address input is empty AND submit button is hit - valid user submit form
	echo "FORM HAS BEEN SUBMITTED";  // went through and worked
	

    //information from db loading in
	$eventName = $_POST['events_name'];
	$eventDesc = $_POST['events_description'];
	$eventPresenter = $_POST['events_presenter'];
	$eventDate = $_POST['events_date'];
	$eventTime = $_POST['events_time'];
	$dateInserted = date("Y-m-d");
	$dateUpdated = date("Y-m-d");
	
	// connect to database
	try {
		require "dbConnect.php";
		

    //start SQL INSERT - prepare stmt, bind parameters - execute
		$sql = "INSERT INTO wdv341_events (events_name,events_description,events_presenter,events_date,events_time,events_date_inserted,events_date_updated) VALUES (:eventName,:eventDesc,:eventPresenter,:eventDate,:eventTime,:dateInserted,:dateUpdated)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':eventName',$eventName);
		$stmt->bindParam(':eventDesc',$eventDesc);
		$stmt->bindParam(':eventPresenter',$eventPresenter);
		$stmt->bindParam(':eventDate',$eventDate);
		$stmt->bindParam(':eventTime',$eventTime);
		$stmt->bindParam(':dateInserted',$dateInserted);
		$stmt->bindParam(':dateUpdated',$dateUpdated);
		
		$stmt->execute();
		
		$newEventId = $conn->lastInsertId();
		
		// show customer this page when they did everything correctly and ARE NOT a bot
		header("Location: eventSuccessPage.php?eventId=" . $newEventId);
		
	}
	catch(PDOException $e){ //something goes wrong= error message
		$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
		error_log($e->getMessage()); //sends error log to system admin
		
		error_log(var_dump(debug_backtrace())); // logs all info until this backtrace
    }//ends the catch

}//ends the try
else {
	if(!empty($_POST['address'])) {
		echo "FORM NOT SUBMITTED";
	}//ends the else
?>

<!doctype html>
<html>
<head>
<title>SELF POST EVENT FORM</title>
<style>
			p.honeypot {
				opacity: 0;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}
</style>
</head>
<body>
		<h1>EVENT FORM</h1>
		
		<form method="post" action="eventsForm.php">
		<p>
				<label for="events_name">Event Name: </label>
				<input type="text" name="events_name" id="events_name">
        </p>
		<p>
				<label for="events_description">Event Description: </label>
				<input type="text" name="events_description" id="events_description">
		</p>
		<p>
				<label for="events_presenter">Event Presenter: </label>
				<input type="text" name="events_presenter" id="events_presenter">
		</p>
		<p>
				<label for="events_date">Event Date: </label>
				<input type="text" name="events_date" id="events_date" placeholder="YYYY-MM-DD">
        </p>
		<p>
				<label for="events_time">Event Time: </label>
				<input type="text" name="events_time" id="events_time" placeholder="00:00:00">
		</p>
		<p>
				<input type="submit" value="Submit" name="submit">
				<input type="reset" value="Try Again">
		</p>
		<p class="honeypot">
				<label for="address"></label>
				<input type="text" name="address" id="address">
		</p>
</form>
		
</body>
</html>

<?php
} // ends the IF
?>