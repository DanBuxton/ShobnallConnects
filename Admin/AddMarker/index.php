<!Doctype HTML>
<?php
require '../../core/process.php';
require '../../Marker.php';
?>

<html>
    <head>
        <?php
        $title = "Add Location";
        include '../../includes/head.php';
        ?>
    </head>
    <body>
        <?php
        include '../../includes/header.php';
        ?>

        <main>
            <h1>ShobnallConnects</h1>

            <p>New location's details</p>

            <form method="post" action="../updateMarker.php" style="text-align: center;">
                <input type="text" name="name" placeholder="Business Name" />
                <br />
                <input type="text" name="desc" placeholder="Business Description" />
                <br />
                <input type="text" name="lat" placeholder="Location (Latitude)" />
                <br />
                <input type="text" name="long" placeholder="Location (Longitude)" />
                <br />
                <select name="type">
                    <?php
                    $types = '';

                    for ($i = 0; $i < count(Marker::$BuildingTypes); $i++) {
                        $buildingType = Marker::$BuildingTypes[$i];

                        $types .= '<option value="' . $buildingType . '">' . $buildingType . '</option>';
                    }

                    echo $types;
                    ?>
                </select>
                <br />
                <input type="text" name="address" placeholder="Business Address" />
                <br />
                <input type="text" name="number" placeholder="Business Phone Number" />
                <br />
                <input type="text" name="website" placeholder="Business Website" />
                <br />
                <input type="submit" value="Add Location" />
            </form>
        </main>

        <?php
        include '../../includes/footer.php';
        ?>
    </body>
</html>
