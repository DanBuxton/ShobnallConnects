<!Doctype HTML>
<?php
	require '../core/functions.php';

	session_start();

	$hasError = false;

	// postback code here.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$hasError = false;

		if (empty($_POST["username"])) {
			//$nameErr = "Name is required";
			$hasError = true;
		} else {
			$username = test_input($_POST["username"]);
			// check if username only contains letters
			if (!preg_match("/^[a-zA-Z]*$/", $username)) {
				//$nameError = "Only letters and white space allowed";
				$hasError = true;
			}
		}

		if (empty($_POST["password"])) {
			//$emailErr = "Password is required";
			$hasError = true;
		} else {
			$password = test_input($_POST["password"]);
		}

		if ($hasError == false) {
			if ((strtolower($username) == "admin" && $password == "Shobnall") || (strtolower($username) == "developer" && $password == "Developer")) {

				$_SESSION["username"] = $username;
				$_SESSION["password"] = md5($password);

				header('Location: ../Admin/');
			} else {
				$hasError = true;
			}
		} else {
			echo "Error detected";
		}
	}
?>

<html>
	<head>
		<?php
			$title = "Login";
			include '../includes/head.php';
		?>
	</head>
	<body>
		<?php
			include '../includes/header.php';
		?>

		<main>
			<h1>ShobnallConnects</h1>

			<form id="fmLogin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<p>Username: </p>
				<input tabindex="1" type="text" name="username" placeholder="Username" autocomplete="0" value="<?php echo (isset($_SESSION["username"]) ? $_SESSION["username"] :''); ?>">

				<p>Password: </p>
				<input tabindex="2" type="password" name="password" placeholder="Password" autocomplete="0">
				<br />
				<input tabindex="3" type="submit" name="submit">
			</form>

			<?php
				if ($GLOBALS['hasError'] === true) {
					echo '<p style="color: red;">There was an issue with your username and/or password</p>';
				}
			?>
		</main>

		<?php
			include '../includes/footer.php';
		?>
	</body>
</html>
