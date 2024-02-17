<?php
if(isset($_POST['submit']) && empty($_POST['first_name'])) { // when forms submits IN ADDITION TO the first name input is blank
	echo "FORM HAS BEEN SUBMITTED"; // successful form submission
	
	$eventName = $_POST['events_name'];  //this part is self explanatory
	$eventDesc = $_POST['events_description'];
	$eventPresenter = $_POST['events_presenter'];
	
	// connect to database
	try {
		require "dbConnect.php"; // if this were a hackers movie we would be saying "we're in"
		

        //all the same set up as other pages:

		$sql = "INSERT INTO wdv341_events (events_name,events_description,events_presenter) VALUES (:eventName,:eventDesc,:eventPresenter)";
		$stmt = $conn->prepare($sql);

        //binding parameters
		$stmt->bindParam(':eventName',$eventName);
		$stmt->bindParam(':eventDesc',$eventDesc);
		$stmt->bindParam(':eventPresenter',$eventPresenter);
		
		$stmt->execute();
		
		$newEventId = $conn->lastInsertId();
		
		// show the customer they did it right
		header("Location: eventResponsePage.php?eventId=" . $newEventId);
		
	}
	catch(PDOException $e){
		$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
		error_log($e->getMessage());  // sends an error log to the sys admin
		
		error_log(var_dump(debug_backtrace()));  // logs all the stuff that ahppened up until backtrace
			
                    } //ends catch
    }  // ends try
else {
	if(!empty($_POST['first_name'])) { //if first name is blank the form will not submit
		echo "FORM NOT SUBMITTED"; // First name MUST be filled in
	} //ends else
?>

<!doctype html>
<html>
	<head>
		<title>SELF POSTING FORM</title>		
		<style>
			
			p.honey {  /*adding the honey pot  to make the first name actuall work*/
				opacity: 0;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}  /* all this is necessary because bots have gotten too smart for simple display:none and 1 or 2 hidden factors*/		
		</style>
		
</head>
<body>
		
		<h1>WDV341 SELF POSTING FORM</h1>
		
		<h2>11-1 Input Event Form</h2>
		
		<form method="post" action="self_posting_form.php">
			
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
				<input type="submit" value="Submit" name="submit">
				<input type="reset" value="Try Again">
			</p>
			
			<p class="honey">  <!-- this is the start of the honey pot-->
				<label for="first_name"></label>
				<input type="text" name="first_name" id="first_name">
			</p><!-- end of the honey pot-->
			<!-- bots will try to fill this in because they can tell there's something there but regular people can not
                    ergo, if filled - it's a bot, if not filled - it's a person-->
		</form>
		
	</body>
</html>

<?php
}
?>