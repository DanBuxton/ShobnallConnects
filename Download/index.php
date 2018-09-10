<!Doctype HTML>
<?php
$title = "Download";

require '../core/functions.php';
?>

<html>
    <head>
        <?php require '../includes/head.php'; ?>
    </head>
    <body>
        <main>
            <h1><?php echo $title; ?></h1>
            
            <?php
            $version = 'latest';

            if (test_input($_SERVER['REQUEST_METHOD']) == "GET")
                if (isset($_GET['v']))
                {$version = test_input($_GET['v']);}

            $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/docs/leaflet-$version.pdf";

            echo '<script>window.open(\'' . $link . '\');</script>';

            if (isset($_GET['ret']))
            {echo '<script>window.location.href = "' . test_input ($_GET('ret')) . '";</script>';}
            //header("Location: " . $_GET['ret']);
            else
            {echo '<script>window.location.href="/";</script>';}
            //header("Location: /");
            ?>

            <p>Your download should start shortly. If not, please ensure that you enable have popups and click <a target="_blank" href="<?php echo $link ?>">here</a>.</p>
        </main>
    </body>
</html>
