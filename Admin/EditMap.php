<!Doctype HTML>
<?php
	require '../core/process.php';

	require '../Marker.php';
?>

<html>
	<head>
		<?php
			$title = "Edit Shobnall map";
			include '../includes/head.php';
		?>
	</head>
	<body>
		<?php
			include '../includes/header.php';

			//echo '<script>var sliderX; var sliderY;</script>';
		?>

		<main>
			<form method="get" action="updateMarker.php">
				<h1>ShobnallConnects</h1>

				<div id="map">
					<?php
						$query = $db->query("SELECT * FROM Markers;");
						$result = $query->fetch(PDO::FETCH_ASSOC);
						$result['id'];

						$mapWidth = 900; // left
						$mapHeight = 576; // top
						$marker_L_Zero = 0;
						$marker_R_Zero = 0;

						$markers = '<div style="float: left; width: 900px; height: 576px;">';
						$markers .= '<img id="shobnallMap" src="../assets/img/shobnall.png" width="900px" height="576" alt="map" />';

						$details = '';

						if ($result->num_rows > 0) {
							//$markers .= '<div id="markers" style="float: left;">';

							$details .= '<div id="details">';

							while($row = $result->fetch_assoc()) {
								$id = $row["id"];
								$name = $row["name"];
								$x = $row["x"];
								$y = $row["y"];
								$type = $row["type"];
								$address = $row["address"];
								$website = $row["website"];
								$number = $row["phone_number"];
								$description = $row["description"];

								$markers .= '<img id="' . $id . '_marker" onclick="show_marker_details(\'' . $id . '\')" src="../assets/img/marker.png" width="20" height="25" class="marker" />';
								//$markers .= '<img onclick="show_marker_details(\'' . $id . '\')" src="../assets/img/marker.png" width="20" height="25" class="marker" style="left: -' . ($marker_L_Zero + ) . 'px;" />';

								$details .= '<aside id="' . $id . '_details" class="marker_details">';

								$details .= '<span class="icon-cancel" onclick="hide_marker_details(\'' . $id . '\')"></span>';

								$details .= '<p>Id: <span>' . $id . '</span></p>';

								$details .= '<p>Name: <input type="text" value="' . $name . '" /></p>';

								$details .= '<p>X: <input id="' . $id . '_x" type="range" min="0" max="900" step="50" value="' . $x . '" onchange="updateMarker(\'' . $id . '\', \'x\',' . $marker_L_Zero . ' - this.value)" /></p>';

								$details .= '<p>Y: <input id="' . $id . '_y" type="range" min="0" max="576" step="50" value="' . $y . '" onchange="updateMarker(\'' . $id . '\', \'y\',' . $marker_R_Zero . ' - this.value)" /></p>';

								$details .= '<p>Type:<select>';
								for ($i=0; $i < count(Marker::$BuildingTypes); $i++) {
									$buildingType = Marker::$BuildingTypes[$i];

									$details .= '<option value="' . $buildingType . '"' . ($buildingType === $type ? ' selected="selected"' : '') . '>' . $buildingType . '</option>';
								}
								$details .= '</select></p>';

								$details .= '<p>Address: <textarea>' . $address . '</textarea></p>';

								$details .= '<p>Website: <input type="url" value="' . $website . '" /></p>';

								$details .= '<p>Number: <input name="number_' . $id . '" type="tel" value="' . $number . '" /></p>';

								$details .= '<p>Description: <textarea>' . $description . '</textarea></p>';
								$details .= '</aside>';
							}

							//$markers .= '</div>';

						$details .= '</div>';
						}

						$markers .= "</div>";

						echo $markers;

						echo $details;
					?>
				</div>
			</form>
		</main>

		<?php
			include '../includes/footer.php';
		?>

		<script src="../assets/js/responsive.js"></script>
		<script src="../assets/js/admin.js" type="text/javascript"></script>
	</body>
</html>