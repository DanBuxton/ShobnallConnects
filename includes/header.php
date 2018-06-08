<header>
    <div class="icon"><i id="toggle-nav" class="icon-menu"></i></div>
    <!-- icon-cancel for the X symbol -->
	<nav id="nav">
        <?php
            if (strpos($_SERVER["PHP_SELF"], 'Admin')) {
                echo '<img id="logo" src="../assets/img/NewSCVYSlogo.jpg" alt="logo" width="100" height="100" />';

                echo '<a href="../index.php">Home</a>';
                echo '<a href="../Information.php">Information</a>';
                echo '<a href="../Map.php">Map & Walks</a>';
                echo '<a href="../Links.php">Useful Links</a>';
                echo '<a href="Logout.php">Logout</a>';
            } else {
                echo '<img id="logo" src="assets/img/NewSCVYSlogo.jpg" alt="logo" width="100" height="100" />';

                echo '<a href="index.php">Home</a>';
                echo '<a href="Information.php">Information</a>';
                echo '<a href="Map.php">Map & Walks</a>';
                echo '<a href="Links.php">Useful Links</a>';
                echo '<a href="Login.php">Login</a>';
            }
        ?>
    <div class="clear"></div>
</nav>
	<div class="clear"></div>
</header>