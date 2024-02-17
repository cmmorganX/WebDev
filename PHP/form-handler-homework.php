<?php
//Model-Controller Area.  The PHP processing code goes in this area.
require_once('functions.php');
if(isset($_POST['submit']) && empty($_POST['address'])) {  //user is valid and not a bot
// PHP form submission code goes here
	
if(empty($_POST['offers'])) {
    $specialOffers = "No";
}
else {
    $specialOffers = "Yes";
}

echo "Thanks so much! " . $_POST['first_name'] . " " . $_POST['last_name'] . "<br>";
echo "We will be sending your subscription: " . $_POST['sub_type'] . "<br>";
echo "Also, your requested these Special Offers: $specialOffers <br>";
echo "You found us from: " . $_POST['dropdown'] . "<br>";
echo "Your Sign Up confirmation is being sent to: " . $_POST['email'] . ". Thank you for your support!";

}


else {
	
	if(!empty($_POST['address'])) {
		echo "An error has occurred. Unable to process form.";
	}

?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV 341 Intro PHP - Code Example</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *,:after,:before{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}body{font:normal 15px/25px 'Open Sans',Arial,Helvetica,sans-serif;color:#444;text-align:left}h1,h2,h3{font-weight:400}h1{font:normal 40px/120px 'Open Sans',Arial,Helvetica,sans-serif;text-align:center;color:#444;margin:0}h1 span{color:#484c9b}h2{font-size:25px;line-height:30px;color:#484c9b;margin:50px 0 10px}h3{font-size:18px;line-height:35px;margin:50px 0 0}a{color:#484c9b;text-decoration:none}a:focus,a:hover{text-decoration:underline}p{margin:0 0 2rem}p span{color:#aaa}header{width:98%;margin:40px auto 0;border-bottom:1px solid #ddd;padding-bottom:40px;text-align:center}header p{margin:0}section{width:95%;max-width:910px;margin:40px auto}pre{background:#f9f9f9;padding:10px;font-size:12px;border:1px solid #eee;white-space:pre-wrap;border-radius:10px}table{border:1px solid #eee;background:#f9f9f9;width:100%;border-collapse:collapse;border-spacing:0;margin-bottom:3rem}thead{background:#5965af;color:#fff}tbody tr td,thead td{padding:.5rem .75rem}tbody tr:nth-child(even){background:#efefef}tbody tr td:first-child{padding-left:1.25rem}tbody tr td:first-child,tbody tr td:nth-child(3),thead td:first-child,thead td:nth-child(3){width:15%}tbody tr td:nth-child(2),thead td:nth-child(2){width:20%}tbody tr td:last-child,thead td:last-child{width:50%}@media only screen and (min-width:768px){body{font-size:20px;line-height:30px}h2{font-size:30px;line-height:45px}h3{font-size:22px;line-height:45px;margin-top:50px}p{margin-bottom:2rem}h1{font-size:60px}pre{padding:20px;font-size:15px}}
        .container {
            width:400px;
            height:auto;
        }
        input, select {
            margin:18px;
        }
        input[type=button], input[type=submit], input[type=reset] {
        background-color: #017210;
        color: #fff;
        margin-left:30px;
        width:90px;
        height:45px;
        border-radius: 15px;
      }
        h2, h3 {
            margin:10px;
            background-color: rgb(252, 246, 225);
            color:rgb(1, 59, 4);
        }
        p{
            padding-left:10px;
        }
        p.honeypot {
			opacity: 0;
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
            /*bots can detect a display:none and one or two layers of protection and need this additional hiding features to
            keep the smarter bots from realizing it's a honeypot*/
		}
    </style>
    </style>
</head>

<body>
    <header>
        <h1>WDV341 Intro <span>PHP</span></h1>
        <p>Form Handler Result Page - Code Example</p>
    </header>

    <section>
        <h2>Newsletter Signup</h2>
        <h3>Please enter your full name and email to recieve our super sweet newsletter!</h3>

        <form id="newsletter-form" name="newsletter_form" method="post" action="form-handler-homework.php">
            <p>First Name: <input type="text" name="first_name" id="first-name" /></p>
            <p>Last Name: <input type="text" name="last_name" id="last-name" /></p>
            <p class="address">Address: <input type="text" name="address" id="address" /></p>
            <p>Email: <input type="text" name="email" id="email" /></p>

        <h3>Please select a subscription type:</h3>
                <input type="radio" id="normal" name="sub_type" value="Normal">
                <label for="normal">Normal</label><br>
                <input type="radio" id="expert" name="sub_type" value="Expert">
                <label for="expert">Expert</label><br>

        <h3>Recieve special offers and latest updates?</h3>
                <input type="checkbox" id="offers" name="offers" value="Offers">
                <label for="offers">Yes</label><br>

        <h3>How did you find us?</h3>
                <select name = "dropdown" id="dropdown" value="dropdown">
                <option value = "word" selected>Word of Mouth</option>
                <option value = "internet">Internet</option>
                <option value = "podcast" required>Podcast</option>
                </select>

        <p class="honeypot">
				<label for="address"></label>
				<input type="text" name="address" id="address">
		</p>

        <p>
            <input type="submit" name="submit" id="button" value="Submit" />
            <input type="reset" name="reset" id="button2" value="Clear Form" />
        </p>

        </form>
    </section>
</body>

</html>


<?php
}
?> <!-- it's yer boy, that hanging bracket, here to save the day-->