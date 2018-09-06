<?php

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    //error_log("Error: [$errno] $errstr", 1, dan.buxton99@gmail.com", "From: webmaster@example.com\r\nSubject: ShobnallConnects website issue");
}

//set error handler
//set_error_handler("customError", E_ALL);
//trigger error
if (true) {
    //trigger_error("Value must be 1 or below", E_ERROR);
}

$cookie_name = "language";

function isCurrentPage($value = ' ') {
    return strpos(strtolower($_SERVER["PHP_SELF"]), strtolower($value));
}

$lang = "en";

// Check user has selected a language
// If not, force select language
// Else, alter language appropriately
if (!isset($_COOKIE[$cookie_name])) {
    if (isCurrentPage('chng-lang') != true)
        header("Location: /chng-lang/?nm=language&ret=" . rtrim($_SERVER["PHP_SELF"], "index.php"));
} else {
    $lang = strtolower($_COOKIE[$cookie_name]);

    if (isCurrentPage('chng-lang') != true && isCurrentPage('Login') != true && isCurrentPage('Admin') != true && isCurrentPage('Download') != true)
        switch (strtolower($_COOKIE[$cookie_name])) { // Need better way to do this when using POST (Forces GET)
            case 'en':
                // English by default
                break;
            case 'ur':
                if (strpos($_SERVER['QUERY_STRING'], $lang) != true)
                    header("Location: ?lng=$lang");
                break;
            case 'pa':
                if (strpos($_SERVER['QUERY_STRING'], $lang) != true)
                    header("Location: ?lng=$lang");
                break;
            case 'pl':
                if (strpos($_SERVER['QUERY_STRING'], $lang) != true)
                    header("Location: ?lng=$lang");
                break;
            case 'la':
                if (strpos($_SERVER['QUERY_STRING'], $lang) != true)
                    header("Location: ?lng=$lang]");
                break;
            default:
                // Nothing
                break;
        }
}
?>

<meta name="application-name" content="Shobnall Connect" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="icon" href="/logo.ico" />
<link rel="stylesheet" href="/assets/css/style.css" />

<?php
if (isCurrentPage('Admin')) {
    echo '<link rel="stylesheet" href="/assets/css/admin.css" />';
}
?>
<!-- Burger fonts -->
<link href="/assets/css/icons/icons/css/fontello.css" rel="stylesheet" />

<meta name="description" content="" />
<meta name="keywords" content="" />
<?php echo "<title>" . (empty($title) === false ? $title . " - " : "") . "ShobnallConnects</title>"; ?>
