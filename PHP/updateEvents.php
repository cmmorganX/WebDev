<?php
include "dbConnect.php";
//if valid user you get this page otherwise you get the login page
session_start();

//if(isset($_SESSION['valid_user']) && $_SESSION['validUser'] ){
    //allow access
//}
//else{
    //deny - go to login page
    //header("Location: login.php")
//}

if(isset($_POST['submit'])){
    echo "Form has been submitted";
}

$eventName = $_POST['event_name'];
$eventDesc = $_POST['event_description'];
$eventPresenter = $_POST['event_presenter'];

try{

    require "dbconnect.php";

	/*
	$sql = "INSERT INTO wdv341_events (event_name,event_description,event_presenter)
	VALUES (:eventName,:eventDesc,:eventPresenter)";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':eventName',$eventName);
	$stmt->bindParam(':eventDesc',$eventDesc);
	$stmt->bindParam(':evenPresenter',$eventPresenter);
*/
	$sql = "UPDATE wdv341_events SET events_name=:eventName, events_description=:eventDesc, events_presenter=:eventPresenter WHERE events_id=:newEvent";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam('eventName',$eventName);
	$stmt->bindParam('eventDesc',$eventDesc);
	$stmt->bindParam('eventPresenter',$eventPresenter);
	$stmt->bindParam('newEventId',$eventId);
	$stmt->execute();
/*
	echo "working so far";

	$newEventId = $conn->lastInsertId();
	header('Location: eventResponsePage.php?eventId=' . $newEventId);
	*/
}
catch(PDOExecption $e) {
    echo "Errors: " . $e->getMessage();
    //error msg "try again!"
}
else {
	echo "form was not submitted"

	try{
	require 'dbConnect.php';

	$sql = "SELECT * FROM wdv341_events WHERE events_id=:eventId";
	$stmt = $conn->prepare($sql);
	$stmt = $conn->bind_param(':eventId',$newEventId);

	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCHASSOC);
}

?>



<!DOCTYPE html>
<head>
<title>EVENTS UPDATE ASSN</title>
</head>

<body>
    <h1>WDV341 INTRO PHP</h1>
    <h2>UPDATE EVENTS</h2>

    <form method="post" action="eventsForm.php">
		<p>
				<label for="events_name">Event Name: </label>
				<input type="text" name="events_name" id="events_name" value="<?php echo $result['event_name'];  ?>>
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
<?php
}
?>
</body>
</html>