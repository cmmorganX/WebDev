<?php

//clear any session variables related to the user
//close any connections for the user
//redirect 

$conn->close();  //close a database connection

header("Location: login.php"); ?>

