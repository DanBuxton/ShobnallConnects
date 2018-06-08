<meta name="application-name" content="Shobnall Connect" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Edit the style.scss for styles -->
<?php
	if (strpos($_SERVER["PHP_SELF"], 'Admin')) {
		//icon
		echo '<link rel="icon" href="../logo.ico" />';

		//css
		echo '<link rel="stylesheet" href="../assets/css/style.css" />';
		echo '<link rel="stylesheet" href="../assets/css/admin.css" />';
		//Burger fonts
		echo '<link href="../assets/css/icons/icons/css/fontello.css" rel="stylesheet" />';
	} else {
		//icon
		echo '<link rel="icon" href="logo.ico" />';

		//css
		echo '<link rel="stylesheet" href="assets/css/style.css" />';
		//Burger fonts
		echo '<link href="assets/css/icons/icons/css/fontello.css" rel="stylesheet" />';
	}

	echo "<title>" . (empty($title) === false ? $title . " - " : "") . "ShobnallConnects</title>";
?>

<meta name="description" content="" />
<meta name="keywords" content="" />