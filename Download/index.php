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

            if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "GET") {
                if (filter_input(INPUT_GET, 'v')) {
                    $version = test_input(filter_input(INPUT_GET, 'v'));
                }
            }

            $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/docs/leaflet-$version.pdf";

            echo '<script>window.open(\'' . $link . '\');</script>';

            if (isset($_GET['ret'])) {
                echo '<script>window.location.href = "' . $_GET['ret'] . '";</script>';
            }
            //header("Location: " . $_GET['ret']);
            else {
                echo '<script>window.location.href="/";</script>';
            }
            //header("Location: /");
            ?>

            <p>Your download should start shortly. If not, please ensure that you enable have popups and click <a target="_blank" href="<?php echo $link ?>">here</a>.</p>
        </main>
    </body>
</html>
