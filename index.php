<!Doctype HTML>
<?php
	//require 'core/process.php';

	$title = "Home";
?>

<html>
	<head>
		<?php
			include 'includes/head.php';
		?>
	</head>
	<body>
		<?php
			include 'includes/header.php';
		?>

		<main>
			<h1>Home</h1>
			<!-- Select language popup here -->
			<div id="alternateLanguages" style="width: 100%; text-align: center;">
				<p id="languages">
					<?php
						require 'core/functions.php';

						//echo AlternateLanguages(0);

						for ($i=0; $i < count($Languages); $i++) { 
							//echo alternateLanguages($i);
						}
					?>
				</p>
			</div>
		</main>

		<?php
			include 'includes/footer.php';
		?>

		<script type="text/javascript">
            //alternateLanguages(5, "languages");
        </script>

		<script src="assets/js/responsive.js"></script>
	</body>
</html>