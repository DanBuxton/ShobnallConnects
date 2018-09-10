<!Doctype HTML>
<?php
	require 'core/process.php';

	$title = "Map & Walks";
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
			<h1>Map & Walks</h1>
			
			<div id="mapShobnall">
				<img id="shobnallMap" src="assets/img/shobnall.jpg" />
				
				<div id="mapMarkers">
					<?php
						/**/

						$result = $db->query("SELECT * FROM Markers;");
						/*$result = $query->fetch(PDO::FETCH_ASSOC);
						$result['id'];*/
						
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								#echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
								echo '<div class="marker">';
								echo "Id: " . $row["id"];
								echo "<br />";
								echo "Name: " . $row["name"];
								echo "<br />";
								echo "X: " . $row["x"];
								echo "<br />";
								echo "Y: " . $row["y"];
								echo "<br />";
								echo "Type: " . $row["type"];
								echo "<br />";
								echo "Address: " . $row["address"];
								echo "<br />";
								echo "Website: " . '<a href="' . $row["website"] . '" target="_blank">' . $row["website"] . '</a>';
								echo "<br />";
								echo "Number: " . $row["phone_number"];
								echo "<br />";
								echo "Description: " . $row["description"];
								echo '</div>';
								
								echo '<a><img src="assets/img/marker.png" width="20" height="25" /></a>';
							}
						}

						/**/
					?>
				</div>
			</div>
		</main>

		<?php
			include 'includes/footer.php';
		?>
		
		<script>
			
		</script>

		<script src="assets/js/responsive.js"></script>
	</body>
</html>