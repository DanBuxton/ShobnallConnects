<!Doctype HTML>
<?php
	require '../core/process.php';
	require '../Marker.php';

	$title = "Map & Walks";
?>

<html>
	<head>
		<?php
			include '../includes/head.php';
		?>
	</head>
	<body>
		<?php
			include '../includes/header.php';
		?>

		<main>
			<h1><?php echo $title; ?></h1>
			<h2><b>Still in Development</b></h2>

			<div>
				<div id="map">
					<?php
						/**/
						$result = $db->query("SELECT * FROM Markers;");

						$mapWidth = 742; // left
						$mapHeight = 613; // top
						$marker_L_Zero = 0;
						$marker_R_Zero = 0;

						$markers = '<div style="float: left; width: ' . $mapWidth . 'px; height: 100%;">';
						$markers .= '<img id="shobnallMap" width="' . $mapWidth . 'px" height="' . $mapHeight . '" src="../assets/img/shobnall.png" alt="map" />';

						$details = '';

						//if ($result->num_rows > 0) {
							//$markers .= '<div id="markers" style="float: left;">';

						$details .= '<div id="details">';

						//while($row = $result->fetch_assoc()) {
						while($row = $result->fetch(PDO::FETCH_ASSOC)) {
							$id = $row["id"];
							$name = $row["name"];
							$x = $row["x"];
							$y = $row["y"];
							$type = $row["type"];
							$address = $row["address"];
							$website = $row["website"];
							$number = $row["phone_number"];
							$description = $row["description"];

							$markers .= '<img id="' . $id . '_marker" onclick="showhide_marker_details(\'' . $id . '\', \'h\')" src="../assets/img/marker.png" width="20" height="25" class="marker" />';
							//$markers .= '<img onclick="show_marker_details(\'' . $id . '\')" src="../assets/img/marker.png" width="20" height="25" class="marker" style="left: -' . ($marker_L_Zero + ) . 'px;" />';

							$details .= '<aside id="' . $id . '_details" class="marker_details" style="display: none;">';

							$details .= '<span class="icon-cancel" onclick="showhide_marker_details(\'' . $id . '\', \'h\')"></span>';

							$details .= '<p>Id: <span>' . $id . '</span></p>';

							$details .= '<input type="text" hidden name="id" value="' . $id . '" />';

							$details .= '<p>Name: <input type="text" name="name" value="' . $name . '" /></p>';

							$details .= '<p>X: <input id="' . $id . '_x" type="range" min="0" max="900" step="50" name="x" value="' . $x . '" onchange="updateMarker(\'' . $id . '\', \'x\', ' . $marker_L_Zero . ' - this.value)" /></p>';

							$details .= '<p>Y: <input id="' . $id . '_y" type="range" min="0" max="576" step="50" name="y" value="' . $y . '" onchange="updateMarker(\'' . $id . '\', \'y\', ' . $marker_R_Zero . ' - this.value)" /></p>';

							$details .= '<p>Type: <select name="type">';
							for ($i=0; $i < count(Marker::$BuildingTypes); $i++) {
								$buildingType = Marker::$BuildingTypes[$i];

								$details .= '<option value="' . $buildingType . '"' . ($buildingType === $type ? ' selected="selected"' : '') . '>' . $buildingType . '</option>';
							}
							$details .= '</select></p>';

							$details .= '<p>Address: <textarea name="address">' . $address . '</textarea></p>';

							$details .= '<p>Website: <input type="url" name="website" value="' . $website . '" /></p>';

							$details .= '<p>Number: <input name="number" type="tel" value="' . $number . '" /></p>';

							$details .= '<p>Description: <textarea name="desc">' . $description . '</textarea></p>';

							$details .= '<input type="submit" />';
							$details .= '</aside>';
						}

						//$markers .= '</div>';

						$details .= '</div>';
						//}

						$markers .= "</div>";

						echo $markers;

						echo $details;
						/**/
					?>
				</div>
			</div>
		</main>

		<div class="clear"></div>

		<?php
			include '../includes/footer.php';
		?>
	</body>
</html>
