<?php
session_start(); //start session
session_unset(); // log off user, reset
session_destroy(); // ends session
header("Location: login.php"); // takes us back to login page to start all this madness all over again

?>
<!doctype html>
<html>
	<head>
	<title>THIS IS THE LOGOUT PAGE BUT NO ON WILL EVER SEE IT BUT THE ROBOTS IN THE MATRIX</title>
	</head>
        <p>no one will see this but it's here and now you know it's here</p>
	<body>
	</body>
</html>