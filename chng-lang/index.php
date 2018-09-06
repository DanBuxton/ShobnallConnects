
<?php
$title = "Change Language";
include '../includes/head.php';
?>
<style type="text/css">
    /**/
    body {
        background-color: lightgrey;

        text-align: center;

        margin: auto auto;
        padding-top: 2vh;
    }

    @media only screen and (min-width: 768px) {
        form {
            vertical-align: middle;

            padding: 0 0;
            padding-top: 2vh;
            padding-bottom: 2vh;

            margin: auto auto;
            margin: 0 25vw 0 25vw;

            border: 2px white solid;
            border-radius: 1rem;
        }
    }

    select.error {
        border-color: red;
    }

    span.error {
        color: red;
    }
    /**/
</style>
<body>
    <main>
        <?php
        require '../core/functions.php';

        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET["nm"])) {
                $cookie_name = $_GET["nm"];

                //echo '<form method="post" action="' . $_SERVER['PHP_SELF'] . '">';
                echo '<form method="post" action="/core/">';

                // Dropdown for languages??
                echo '<select name="lang" class="' . (isset($_GET["error"]) ? ($_GET["error"] === "1" ? "error" : "") : "") . '">';
                echo '<option>Select your language</option>';
                for ($i = 0; $i < count($languages); $i++) {
                    $language = $languages[$i];

                    if (!empty($_COOKIE[$cookie_name]))
                        echo '<option value="' . strtolower($langCodes[$i]) . '"' . (strtolower($langCodes[$i]) === $_COOKIE[$cookie_name] ? ' selected="selected"' : '') . '>' . $language . '</option>';
                    else
                        echo '<option value="' . $language . '">' . $language . '</option>';
                }
                echo "</select><span" . (isset($_GET["error"]) ? ($_GET["error"] === "1" ? ' class="error"' : "") : "") . "> *</span>";

                echo "<br />";

                echo '<input type="submit" value="Update" />';

                echo '<input name="name" type="text" value="' . $_GET["nm"] . '" style="display: none;" />';

                echo '<input name="return" type="text" value="' . $_GET["ret"] . '" style="display: none;" />';

                echo "</form>";
            } else {
                header("Location: /");
            }
        } else {
            header("Location: /");
        }
        ?>
    </main>
</body>
