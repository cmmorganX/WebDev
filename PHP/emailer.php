<?php

//testing the email() in PHP

$to = "cmmorgan2@dmacc.edu";
$subject = "Information from WDV341 PFP email function()";
$message = "This verifies that the application can send an email";
$headers = "From: contact@courtneymorgan.name" . "\r\n" ;

if( mail($to,$subject,$message,$headers) ){
    echo "Accepted email";

}
else {
    echo "email Failed";
}