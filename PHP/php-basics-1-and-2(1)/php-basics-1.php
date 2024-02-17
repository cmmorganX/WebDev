<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WDV341 Intro PHP - PHP Basics</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *,:after,:before{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}body{font:normal 15px/25px 'Open Sans',Arial,Helvetica,sans-serif;color:#444;text-align:left}h1,h2,h3{font-weight:400}h1{font:normal 40px/120px 'Open Sans',Arial,Helvetica,sans-serif;text-align:center;color:#444;margin:0}h1 span{color:#484c9b}h2{font-size:25px;line-height:30px;color:#484c9b;margin:50px 0 10px}h3{font-size:18px;line-height:35px;margin:50px 0 0}a{color:#484c9b;text-decoration:none}a:focus,a:hover{text-decoration:underline}p{margin:0 0 2rem}p span{color:#aaa}header{width:98%;margin:40px auto 0;border-bottom:1px solid #ddd;padding-bottom:40px;text-align:center}header p{margin:0}section{width:95%;max-width:910px;margin:40px auto}pre{background:#f9f9f9;padding:10px;font-size:12px;border:1px solid #eee;white-space:pre-wrap;border-radius:10px}table{border:1px solid #eee;background:#f9f9f9;width:100%;border-collapse:collapse;border-spacing:0;margin-bottom:3rem}thead{background:#5965af;color:#fff}tbody tr td,thead td{padding:.5rem .75rem}tbody tr:nth-child(even){background:#efefef}tbody tr td:first-child{padding-left:1.25rem}tbody tr td:first-child,tbody tr td:nth-child(3),thead td:first-child,thead td:nth-child(3){width:15%}tbody tr td:nth-child(2),thead td:nth-child(2){width:20%}tbody tr td:last-child,thead td:last-child{width:50%}@media only screen and (min-width:768px){body{font-size:20px;line-height:30px}h2{font-size:30px;line-height:45px}h3{font-size:22px;line-height:45px;margin-top:50px}p{margin-bottom:2rem}h1{font-size:60px}pre{padding:20px;font-size:15px}}
    </style>
</head>

<body>
	<header>
		<h1>WDV341 Intro <span>PHP</span></h1>
		<p>Unit-3 PHP Basics - Code Example-1</p>
	</header>

	<section>
		<p>The following code examples are written in PHP. They will ONLY RUN when processed by a server. </p>
		<p>You will need to move this file into your XAMPP location or your webhost folder and call it from there in order to see the results of the PHP code. </p>

		<ol>
			<li><p>Use PHP to display your name HERE in this paragraph.</p>
				<ul>
					<li><p><b>Result:</b> Use PHP to display your name <?php echo "Jamie" ?> in this paragraph.</p></li>
				</ul>
			</li>
			<li>
				<p>Use PHP to format an h2 element with the words &quot;Hello World&quot; and display it below this line.</p>
				<?php echo "<h2>Hello World</h2>"; ?>
				<p>&nbsp;</p>
			</li>
			<li>
				<p>Create a string variable called yourName. Assign it the value of your name and display it HERE.</p>
				<?php $yourName = "Jamie Keomanivong"; ?>
				<p><b>Result:</b> Create a string variable called yourName. Assign it the value of your name and display it <?php echo $yourName ?></p>
			</li>
			<li>
				<p>Create a boolean variable call trueFalse. Assign it a true value.</p>
				<?php
				$trueFalse = true;		//Notice in a boolean variable you do NOT use quotes for a true or false value
				?>
			</li>
			<li>
				<p>Display the trueFalse variable within an string literal using concatenation and within a paragraph element.</p>
				<?php
				echo "<p>The trueFalse variable contains " . $trueFalse . ". </p>";	//concatenation - joining of multiple parts into a single string
				?>
			</li>
			<li>
				<p>Display the trueFalse variable within a string literal withing a paragraph element. Notice how the PHP processor uses the value of the variable even within the quotes. This is a very useful feature of PHP. </p>
				<?php
				echo "<p>The trueFalse variable contains $trueFalse.</p>";	//concatenation - joining of multiple parts into a single string
				?>
			</li>
			<li>
				<p>Place a Javascript command within the following script element that will place an h1 element on the page saying &quot;Hello World&quot;. Hint: think about how you would write the command in Javascript. Use PHP to create the command in Javascript and the browser will run it. </p>
				<script>
					<?php echo "document.write( '<h1>Hello World</h1>' );"; ?>
				</script>
			</li>
		</ol>
	</section>
</body>
</html>