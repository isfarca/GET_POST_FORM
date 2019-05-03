<html>

<head>

<style>

/* GROUND PLAN */

html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    text-align: center;
}

#section {
    min-height: 100%;
}

a {
    text-decoration: none;
}

li {
    list-style-type: none;
}

h1, h2, h3, a {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    color: #494949;
    text-transform: uppercase;
}

h2 {
    color: #5d7177;
}

h3 {
    font-size: 40px;
    padding-top: 8%;
    margin-bottom: 5px;
}

h4, p {
    font-family: 'Roboto Slab', serif;
    color: #494949;
}

hr {
    width: 30px;
    height: 3px;
    background: #494949;
    border: 0;
    margin: 0 auto 40px auto;
}

/* PHP TEST */

form input, textarea {
    font-family: 'Roboto Slab', serif;
    font-size: 15px;
    margin-bottom: 10px;
    border-radius: 2px;
    border: 2px solid #494949;
}

form input:first-child {
    margin-top: 10px;
}

form input {
    width: 552px;
    height: 30px;
}

form textarea {
    width: 550px;
    height: 200px;
    resize: none;
}

.input_text {
    color: #494949;
    padding-left: 10px;
}

.log {
	border: none;
	height: 100px;
}

/* PHP TEST PLACEHOLDER WITH BROWSER SUPPORT */

::-webkit-input-placeholder {
    color: #999999;
}

::-moz-placeholder {
    color: #999999;
}

:-ms-input-placeholder {
    color: #999999;
}

:-moz-placeholder {
    color: #999999;
}

/* PHP TEST SEND BUTTON */

.button {
    background-color: #f0f0f0;
    color: #494949;
    width: 566px;
    height: 50px;
}

.button:hover {
    background-color: #494949;
    color: #f0f0f0;
}

/* MEDIA QUERIES */

/* TABLETS */

@media screen and (max-width: 1024px) {
    form input, form textarea {
        width: 60%;
    }

    .button {
        width: 62%;
    }
}

/* MOBILES */

@media screen and (max-width: 517px) {
    form input, form textarea {
        width: 70%;
    }

    .button {
        width: 72%;
    }
}

</style>

	<title>PHP Test</title>
	
</head>

<body>

	<?php
	
	// Globals.
	$GLOBALS['firstname'] = "";
	$GLOBALS['lastname'] = "";
	$GLOBALS['address'] = "";
	$GLOBALS['houseNumber'] = "";
	$GLOBALS['postcode'] = "";
	$GLOBALS['place'] = "";
	$GLOBALS['log'] = "";
	
	// Click events.
	if (array_key_exists('submit', $_POST)) // Click register button.
	{
		// Call function.
		submitForm();
	}
	
	// Output submitted form values.
	function submitForm()
	{
		// Get form values.
		$GLOBALS['firstname'] = $_POST['firstname'];
		$GLOBALS['lastname'] = $_POST['lastname'];
		$GLOBALS['address'] = $_POST['address'];
		$GLOBALS['houseNumber'] = $_POST['houseNumber'];
		$GLOBALS['postcode'] = $_POST['postcode'];
		$GLOBALS['place'] = $_POST['place'];
		
		$GLOBALS['log'] = "Your name is: " . $GLOBALS['lastname'] . ", " . $GLOBALS['firstname'] .
		"<br>Your address: " . $GLOBALS['address'] . " " . $GLOBALS['houseNumber'] .
		"<br>Your place: " . $GLOBALS['postcode'] . " " . $GLOBALS['place'];
	}
	
	?>

	<div id="section">
	
	<h1>PHP Test</h1>
	<hr>

	<form method="POST">
		
		<input name="firstname" class="input_text" type="name" placeholder="Firstname" value="<?php $GLOBALS['firstname'] ?>" required>
		<br>
		
		<input name="lastname" class="input_text" type="name" placeholder="Lastname" value="<?php $GLOBALS['lastname'] ?>" required>
		<br>
		
		<input name="address" class="input_text" type="text" placeholder="Address" value="<?php $GLOBALS['address'] ?>" required>
		<br>
		
		<input name="houseNumber" class="input_text" type="number" placeholder="House number" value="<?php $GLOBALS['houseNumber'] ?>" required>
		<br>
		
		<input name="postcode" class="input_text" type="number" placeholder="Postcode" value="<?php $GLOBALS['postcode'] ?>" required>
		<br>
		
		<input name="place" class="input_text" type="name" placeholder="Place" value="<?php $GLOBALS['place'] ?>" required>
		<br>

		<input name="submit" type="submit">
		<br>
		
		<p name="log" class="log"><?php echo $GLOBALS['log']; ?></p>
		<br>
		
	</form>
	
	</div>

</body>

</html>