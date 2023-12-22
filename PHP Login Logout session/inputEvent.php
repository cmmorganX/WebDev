<?php

//if you are validuser you can see page, else redirect to login

session_start();

if(isset($_SESSION['validUser']) && $_SESSION['validUser'] ){
    //allow access
}
else {
    //deny access
    header("Location: login.php");
}

//if (user submitted form)
//process the form data
//create SQL INSERT statement
//add data to database
//display confirmation message to customer

//else (show the form)

if(isset($_POST['submit'])){
    echo "FORM HAS BEEN SUBMITTED!";
    
    $eventName = $_POST['event_name'];
    $eventDesc = $_POST['event_description'];
    $eventPresenter = $_POST['event_presenter'];


    //connect to database

    try {
        require "dbConnect.php";

        //create the SQL statement
        $sql = "INSERT INTO wdv341_events (event_name,event_description,event_presenter) 
        VALUES (:eventName,:eventDesc,:eventPresenter)";

        //prepare the SQL statement
        $stmt = $conn->prepare($sql);

         //bind parameters
        $stmt->bindParam(':eventName',$eventName);
        $stmt->bindParam(':eventDesc',$eventDesc);
        $stmt->bindParam(':eventPresenter',$eventPresenter);

        //execute the prepared statement
        $stmt->execute();

        echo "working so far";


    }
    catch(PDOException $e)
			{
				$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
				error_log(var_dump(debug_backtrace()));
			
				//Clean up any variables or connections that have been left hanging by this error.		
			
				//header('Location: files/505_error_response_page.php');	//sends control to a User friendly page					
			}

}
else {
    echo "FORM NOT SUBMITTED!";


?>

<!DOCTYPE html>
<head><title>Events Input Form</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>

    <h2>11-1 Input Event Form</h2>

    <form method="post" action="inputEvent.php">
        <p>
            <label for="first_name">Event Name: </label>
            <input type="text" name="event_name" id="event_name">
            </p>
        <p>
            <label for="event_description">Event Description: </label>
            <input type="text" name="event_description" id="event_description">
        </p>

        <p>
            <label for="event_presenter">Event Presenter: </label>
            <input type="text" name="event_presenter" id="event_presenter">
        </p>

        <p>
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="Try Again">
        </p>

</form>
</body>
</html>

<?php
}
?>