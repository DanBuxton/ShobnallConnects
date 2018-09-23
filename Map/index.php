<!Doctype HTML>
<?php
require '../core/process.php';
require '../Marker.php';

$title = "Map & Walks";
?>

<html lang="en">
    <head>
        <?php
        include '../includes/head.php';
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.1/p5.js" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/npm/mappa-mundi/dist/mappa.min.js" type="text/javascript"></script>

        <script src="../assets/js/mappa.js"></script>
    </head>
    <body>
        <?php
        include '../includes/header.php';
        ?>

        <main>
            <h1><?php echo $title; ?></h1>
            <!--<h2><b>Still in Development</b></h2>-->

            <div id="canvas" class="canvas"></div>
        </main>

        <div class="clear"></div>

        <?php
        include '../includes/footer.php';
        ?>
    </body>
</html>
