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
<h3>Form Response Porcessor</h3>

<p>This is the process page for live events contact form.</p>

</div>

<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</div>
</div>
</body>
</html>
