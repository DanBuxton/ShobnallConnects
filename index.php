<!Doctype HTML>
<?php
$title = "Home";
?>
<html>
    <head>
        <?php
        include 'includes/head.php';
        ?>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>

        <main>
            <h1><?php echo $title; ?></h1>

            <section>
                <h3>About</h3>

                <?php
                // Google Translate
                // Needs Billing!?!

                /* use vendor\google\cloud\Translate\TranslateClient;

                  $text = "The text to translate.";
                  $targetLanguage = 'ja';  // Which language to translate to?

                  $translate = new TranslateClient();
                  $result = $translate->translate($text, [
                  'target' => $targetLanguage,
                  'source' => 'en',
                  ]);
                  print("Source language: $result[source]\n");
                  print("Translation: $result[text]\n"); */
                ?>

                <p>One of the most Known things about Shobnall would be the canal that runs alongside it. The other would be its Beer.</p>
                <p>Brewing is a key part of the history of Shobnall, with the water in the river Trent containing a higher amount of Gypsum, which is a mineral useful for brewing Ale.</p>
                <p>Because of its canals, burton and, by proxy, Shobnall was used as a trade route due to it being the furthest port from the sea meaning that resources could be taken incredibly far by making use of the canals and then the rest of the journey could be made by cart.</p>
            </section>
        </main>

        <?php
        include 'includes/footer.php';
        ?>
        <script type="text/javascript">
            alternateLanguages(5, 'languages');
        </script>
    </body>
</html>
