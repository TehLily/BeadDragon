
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>

<link rel="stylesheet" href="css/main_style.css">
<link rel="stylesheet" href="css/structure.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chivo&family=Neucha&family=Patua+One&family=Roboto+Slab&display=swap" rel="stylesheet"> 

<style type="text/css">
#container  {
			width: 1000px;
			border: 1px solid black;
			padding: 10px;
			margin: 10px auto;
			}
.colorRed {
	color: #F00;
}

#instructions {
	width: 800px;
	background-color: white;
	padding: 5px 40px;
	margin: auto;
}

</style>
</head>

<body>
<header>
<h1>Koala Bear National Information Center</h1>

<nav class="clearfix">
<a href="index.html">Home</a>
<a href="save_koalas.html">Save Koalas!</a>
<a href="faq.html">FAQ</a>
<a href="gallery.html">Gallery</a>
<a href="adopt.html">Adopt</a>
<a class="active" href="contact.html">Contact Us</a>
</nav>

<img src="images/koala_banner.jpg" alt="Koala Banner" width="100%">

</header>



<div id="container">
<h1>WDV101 Intro HTML and CSS</h1>
<h2> Form Response Porcessor</h2>

<p>This process will process the 'name = value' pairs for all the elements of your contact form. It will format and respond by sending an html page containing a table with the information you entered in the form.
</p>

<p id="instructions">Instructions:</p>
<ol id = "instructions">
  <li>To call this page use <strong>form_response_basic.php</strong> in the action attribute of your form.</li>
  <li>Make sure you choose method=&quot;post&quot;.</li>
  <li>Ensure a link to this form from your homework page</li>
  <li>Upload the updates homework page, the form.html page AND the php processor file to your host server. NOTE: the html form page AND the processor PHP page must be in the same location!</li>
  </ol>

</div><!--close div container-->

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
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

</body>
</html>
