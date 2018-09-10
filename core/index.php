<?php

$error = 0x00;

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "POST") {
    if (isset(filter_input(INPUT_GET, 'lang')) && isset(filter_input(INPUT_GET, 'name')) && isset(filter_input(INPUT_GET, 'return'))) {
        $lang = filter_input(INPUT_GET, 'lang');
        $ret = filter_input(INPUT_GET, 'return');

        $cookie_name = filter_input(INPUT_POST, 'name');

        if (strpos(strtolower($lang), "select") === false) {
            // Destroy Old
            setcookie($cookie_name, "", time() - 3600);

            // Create New
            setcookie($cookie_name, $lang, time() + (86400 * 30), "/"); // 86400 = 1 day


            header("Location: $ret");
        } else {
            header("Location: /chng-lang/?nm=$cookie_name&ret=" . filter_input(INPUT_GET, 'return') . "&error=1");
        }
    } else {
        header("Location: /");
    }
} else {
    header("Location: /");
}
?>
