<?php
// Single line comment
$timeOfDay = date('H');
$timeOfDay = 23;
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>WDV341 Intro PHP</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *,:after,:before{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}body{font:normal 15px/25px 'Open Sans',Arial,Helvetica,sans-serif;color:#444;text-align:left}h1,h2,h3{font-weight:400}h1{font:normal 40px/120px 'Open Sans',Arial,Helvetica,sans-serif;text-align:center;color:#444;margin:0}h1 span{color:#484c9b}h2{font-size:25px;line-height:30px;color:#484c9b;margin:50px 0 10px}h3{font-size:18px;line-height:35px;margin:50px 0 0}a{color:#484c9b;text-decoration:none}a:focus,a:hover{text-decoration:underline}p{margin:0 0 2rem}p span{color:#aaa}header{width:98%;margin:40px auto 0;border-bottom:1px solid #ddd;padding-bottom:40px;text-align:center}header p{margin:0}section{width:95%;max-width:910px;margin:40px auto}pre{background:#f9f9f9;padding:10px;font-size:12px;border:1px solid #eee;white-space:pre-wrap;border-radius:10px}table{border:1px solid #eee;background:#f9f9f9;width:100%;border-collapse:collapse;border-spacing:0;margin-bottom:3rem}thead{background:#5965af;color:#fff}tbody tr td,thead td{padding:.5rem .75rem}tbody tr:nth-child(even){background:#efefef}tbody tr td:first-child{padding-left:1.25rem}tbody tr td:first-child,tbody tr td:nth-child(3),thead td:first-child,thead td:nth-child(3){width:15%}tbody tr td:nth-child(2),thead td:nth-child(2){width:20%}tbody tr td:last-child,thead td:last-child{width:50%}@media only screen and (min-width:768px){body{font-size:20px;line-height:30px}h2{font-size:30px;line-height:45px}h3{font-size:22px;line-height:45px;margin-top:50px}p{margin-bottom:2rem}h1{font-size:60px}pre{padding:20px;font-size:15px}}
    </style>
</head>

<body>
	<header>
		<h1>WDV341 Intro <span>PHP</span> </h1>
		<p>Unit-3 PHP Basics Code Example-2</p>
	</header>
	<section>
		<p>Using PHP to display different content based upon if statements and other selections.</p>

		<p>The PHP processor reads the entire contents of a file with the .php extension. It will ignore any file without the .php extension including files that may contain PHP code. It will NOT go into a file looking for PHP code. It WILL only look at the file extionson for .php to trigger the PHP processor.</p>

		<p>When the processor encounters non PHP content it will move it to the output Response object exactly as it is written in the file. A PHP programmer can use this process to send HTML content to the Response object depending upon how the PHP code is processed. This allows you to send 'chunks' of HTML content to the Response Object without having to use the PHP echo or pring commands. This is faster and more efficient.</p>

		<p>The hour of the day is: <?php echo $timeOfDay; ?></p>

		<h2>Display heading using PHP echo commands</h2>
		<p>The following example will display a heading depending the time of day. It will use the PHP echo command to display the heading.</p>
		<?php
		if ($timeOfDay < 12) {
			echo "<h3>Good Morning!</h3>";
		} elseif ($timeOfDay >= 12 && $timeOfDay < 17) {
			echo "<h3>Good Afternoon!</h3>";
		} elseif ($timeOfDay >= 17 && $timeOfDay < 24) {
			echo "<h3>Good evening!</h3>";
		} else {
			echo "<h3>Good morning!</h3>";
		}
		?>

		<h2>Display heading using chunks of HTML content!</h2>
		<p>The following example will display the heading using the PHP's processing to display HTML content instead of PHP echo commands.</p>
		<?php
		if ($timeOfDay < 12) {
		?>
			<h3>Good Morning!</h3>
		<?php
		} elseif ($timeOfDay >= 12 && $timeOfDay < 17) {
		?>
			<h3>Good Afternoon!</h3>
		<?php
		} elseif ($timeOfDay >= 17 && $timeOfDay < 24) {
		?>
			<h3>Good evening!</h3>
		<?php
		} else {
		?>
			<h3>Good morning!</h3>
		<?php
		}
		?>


		<h2>Display content for the Login Process</h2>
		<?php
		$signedOn = false;	//Had the user signed into the system or needs to see the Login Form

		if ($signedOn) {
		?>
			<h4>Hello Jamie Welcome Back to DMACC</h4>

		<?php
		} else {
		?>
			<form>
				<h4>Please Login to continue!</h4>

				<p>
					<label>Username:
						<input type="text">
					</label>
				</p>
				<p>
					<label>Password:
						<input type="password">
					</label>
				</p>
				<p>
					<input type="submit">
					<input type="reset">
				</p>

			</form>
		<?php } ?>
	</section>
</body>
</html>