<?php

$contactName = $_POST["formName"]; //this will spit out the name enetered in the form name field at the top of the form
$confirmEmail = $_POST["formEmail"]; // this will spit out the email entered in the email field on the form
$confirmSubject = "Contact Confirmation"; // fills in the subject line of the email assuring the form filler outer than the form hath been filled and confirmed with our benevolent robot overlords on Chiron Beta Prime.
$confirmMessage = "

<html> 
        <head>
            <title>Confirmation Email</title>
        </head>
        <body style='background-color: #e8b178; color:#37261f; '>
            <div style=''>
                <p>$contactName,</p> 
                <p>Thank you! Your information has been received. We will contact you within 3 business days about the status of your concern.</p>
                    <p>
                    <strong>Savanna’s Coffee House</strong><br>
                    604 24th Street<br>
                    St. Paul, Minnesota<br>
                    United States<br>
                    702-971-1154<br>
                    </p>
                    <p>
                        Hours:<br>
                        Sun: 7 AM - 9 PM<br>
                        M – Th: 6 AM to 10 PM<br>
                        Fri: 6 AM to 11 PM<br>
                        Sat: 6:30 AM to 11 PM<br>
                    </p>
                </div>
            </div>
        </body>
    </html>
    ";

$headers = "From: contact@courtneymorgan.name" . "\r\n"; // this is the host site email [sender email] and the one that will get the confirm email that everything went well and the robot overlords are pleased.
$headers .= "MIME-Version: 1.0" . "\r\n"; // these are needed to make sure the html works with the form and nothing upsets the
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // totally benevolent Robot Overlords who will not destroy us all 

mail($confirmEmail, $confirmSubject, $confirmMessage, $headers); // this is sending the email out and making sure these fields are full and sending that info out in the confirmation

$receiveEmail = "contact@courtneymorgan.name"; // this is the email that will get the confirmation and data
$receiveSubject = $_POST["contactSubject"]; // this is sending out the results of the dropdown menu - what they entered
$receiveMessage = "From " . $contactName . "\n" . "Sent ". date('m/d/Y') . "\n" . $_POST["formComments"] ;
                    // this is sending out the contact info, when it was sent + the date in that format, and the contents of the text area

mail($receiveEmail, $receiveSubject, $receiveMessage);     // spitting out all the info and message to our email -- sending email confirmation, subject, and the message within    

?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Savannah's Coffee House PHP</title>

  <meta charset="UTF-8">
  <meta name="description" content="Savannah's Coffee House PHP">
  <meta name="keywords" content="Savannah's Coffee House, MSU, coffee, expresso, sandwiches, soup, menu, cafe, restaurant, coffee shop, coffee house, hot drinks, cold drinks, live entertainment, live bands, event venue, St. Paul, Minnesota, Campus town, MSU coffee shop, St. Paul coffee shop, live music, live bands, live entertainment, events venue, live shows, contact form, fill out form, book a venue, book us">
  <meta name="author" content="Courtney Morgan">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/savanna_style.css">

<style>

#container  {
			width: 800px;
			border: 1px solid black;
			padding: 10px;
			margin: 10px auto;
			}
.colorRed {
	color: #F00;
}

*. {
  margin:0;
  padding:0;
  box-sizing:border-box;
  }
  
body  {
    background-color:white;
    }

h1, h2, h3, h4, h5, h6 {
  background-color: black;
  color:white;
  padding:0.3em;
}

main {
    color:black;
    background-color: #ffac4c;
    padding: 0.9em;
    margin:0;
    border:1px solid black;
}

.col-sm-3 {
    color:black;
    background-color: #f0dab7;
    padding: 0.9em;
    margin:0;
    border:1px solid #af7047;
}

footer {
  display: flex;
  justify-content: space-around;
  padding-left:4em;
  padding-right:4em;
  padding-top: 2em;
  padding-bottom: 1em;
  margin:0;
}

iframe {
	display: flex;
  width:100%;
  flex-wrap:wrap;
}

p.thicker {
  font-weight: 900;
  color:red;
}

p.white {
  font-weight: 900;
  color:white;
}

a.blackout {
	background-color: black;
}

@media screen and (max-width:700px)
  {
    .body-container, .bodyrow, nav ul, header, footer {
      flex-direction:column;
    }

    #container
    {
      width:100%;
      margin:0;
    }

    main {
    background-color: #358f4f;
  }

@media only screen and (max-width: 768px) {
  body {
    background-color: #358f4f;
  }

@media only screen and (max-width: 768px) {
  div.example {
    font-size: 25px;
  }
}
</style>
</head>

<body>

<div class="container">
<section is="top"></section>
  <header>
    <img src="images/savanna_banner_home.jpg" width="100%">

  </header>

<div class="row">

<div class="col-sm-12 d-flex flex-wrap align-content-center justify-content-center">
<h1>Savannah's Coffee House</h1>
<h3>Form Response Processor</h3>

<p>This is the process page for live events contact form.</p>

</div>

<hr>
<p>&nbsp;</p>



</div>
</div>
</body>
</html>
