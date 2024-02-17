<?php
include "dbConnect.php";

echo $_GET['eventID'];  //access the GET parameter from namevalue pair eventId=?

$deleteId = $_GET['eventId'];


try {
require 'dbConnect.php';


$sql = "DELETE FROM edv341_events WHERE events_id=eventId";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':eventId',$deleteId);
$stmt->execute();


echo "<h1>Number of rows deleted: " . $stmt->rowCount() . "</h1>";  //how many rows effected by SQL execute?

$numDeletes = $stmt->rowCount();   //flag? switch?

}
catch(PDOExecption $e) {
    echo "Errors: " . $e->getMessage();
    //error msg "try again!"
}


?> <!-- end of php-->

<!DOCTYPE html>
<head>
    <title>Delete Event Page</title>
</head>

<body>
    <h1>DELETE THE EVENT PAGE</h1>
    <?php
        //if good - delete display confirmation + link back to login
        
        if($numDeletes > 0){
            //display confirmation
        }

        else {
            //display error - no delete
        }

        //else display error msg and linkback to selectEvents and try again


?> <!-- end of php part2-->
</body>
</html>