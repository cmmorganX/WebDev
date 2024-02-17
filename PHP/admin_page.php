<?php

//connect to the database -- MUST INCLUDE
//dtart the session for cookies/new user
//need username
// start SQL SELECT
//prepare
//execute
//grab rows from database
// catch errors with $e
//show ADMIN "ADD EVENT" page if user was valid
//

include "dbConnect.php";  //connect to db

session_start();  //starting a new session on browser/ new user experience
$userName = $_GET["userName"];

//starting sql - select - getting db info and executing
try 
{
	$sql = "SELECT events_id, events_name, events_description, events_presenter, events_date, events_time, events_date_inserted, events_date_updated FROM wdv341_events";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	$arrayOfRows = $stmt->fetchAll(PDO::FETCH_ASSOC); //getting "fetching" the db rows + info
}


catch(PDOException $e){
	echo "Error: " . $e->getMessage();  // if invalid user - get this message
}

?> <!-- END PHP -->

<!doctype html>
<html>
	<head>
		<title>ADMIN ADD EVENT PAGE</title>
	</head>

	<body>
		
		<h1>WELCOME <?php echo $userName ?></h1>  <!-- adds in username input by the user-->
		
		<p><a href="self_posting_form.php">ADD NEW EVENT</a></p> <!-- brining in the self posting form-->
		
		<ol>
		<?php   //display the rows for each event + update and delete buttons for ADMIN to add, delete, update an event or one tehy are entering
			foreach($arrayOfRows as $oneEvent) {
				echo "<li>".$oneEvent["events_name"];
				echo "<span><button class='update'>Update</button>";
				echo "<button class='delete'>Delete</button></span>";
				echo "</li>";
			}
		?>
		</ol>
		
		<p><a href="logout.php">Logout</a></p> <!-- logs user out-->
		
	</body>
</html>