<?php

/*
    if(form is submitted){
        process form data
        do database stuff
    }
    else {
        //display form
    }

    isset(_POST)

*/
include "dbConnect.php";
session_start();

    //$validUser = false;  //asume invalid user until signed in

if(isset($_SESSION['user_name']) ){ // if valid user
        header("Location: admin_page.php?userName=" . $_SESSION['user_name']); //starting admin session - page load
}       

        //processing when submit button used
if(isset($_POST['submit'])) {

            //proces the login info against db
$loginName = $_POST['loginName'];
$loginPW = $_POST['loginPassword'];

        //connect to db
        //create SQL stmt
        //prepare SQL stmt
        //bind parameters
        // execute stmt
            // if valud user/pass then display admin info
            //else display "invalid user/pass" and show form again
            

try {
    require "dbConnect.php";
                
                $sql = "SELECT event_user_name, event_user_password FROM event_user WHERE event_user_name=:userName AND event_user_password=:userPW";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':userName',$loginName);
                $stmt->bindParam(':userPW',$loginPW);
                
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
/*
        $count = $stmt->fetchColumn();

        if($count == ""){
            echo "invalid user/pass. Display error and form."
        }
        else{
            echo "Welcome Back $count";
        }
*/
        if($user === false) {  // if this user is false / not a user / entered wrong info

            echo "Incorrect Username/Password";  // error message comes out
}
        else { // otherwise we assume it's a real user
            $_SESSION['user_name'] = $user['event_user_name']; //start session with correct user and pw info

            header("Location: admin_page.php?userName=" . $loginName); // takes you to admin page and logs in
}

    /*$resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $numRows = count($resultArray);
    echo "Number of rows found: $numRows"
        if($numRows == 1){
        }
        else{
        }
        echo "working so far";
    }*/
}
catch(PDOExecption $e){

        //$message = "There has been a problem. System Admin has been contaced."

        //error_log($e->getMessage());
        //error_log(var_dump(debug-backtrace()));
}
    //else{
        //echo "form needs to be displayed to the user"
}
?> <!--ends php-->

<html>
    <head></head>
    <body>

    <h1> MY COMPANY SIGN ON PAGE</h1>

    <form method="post" action="login.php">

    <div>
        <label for="loginName">Username: </label>
        <input type="text" name="loginName" id="loginName">
    </div>

    <div>
    <label for="loginPassword">Password: </label>
        <input type="text" name="loginPassword" id="loginPassword">
    </div>

    <div>
        <input type="submit" name="submit" value="Sign On">
        <input type="reset">

    </div>
    </form>


    </body>
    </html>