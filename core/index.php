<?php

$error = 0x00;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['lang']) && isset($_POST['name']) && isset($_POST['return'])) {
        $lang = $_POST['lang'];
        $ret = $_POST['return'];

        $cookie_name = $_POST['name'];

        if (strpos(strtolower($lang), "select") === false) {
            // Destroy Old
            setcookie($cookie_name, "", time() - 3600);

            // Create New
            setcookie($cookie_name, $lang, time() + (86400 * 30), "/"); // 86400 = 1 day


            header("Location: $ret");
        } else {
            header("Location: /chng-lang/?nm=$cookie_name&ret=" . $_POST["return"] . "&error=1");
        }
    } else {
        header("Location: /");
    }
} else {
    header("Location: /");
}
?>
