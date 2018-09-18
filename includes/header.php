<header id="header">
    <div class="icon"><i id="toggle-nav" class="icon-menu"></i></div>
    <!-- icon-cancel for the X symbol -->
    <nav id="nav">
        <img id="logo" src="/assets/img/NewSCVYSlogo.jpg" alt="logo" width="100" height="100" />

        <a href="/">Home</a>
        <a href="/Information">Information</a>
        <a href="/Map">Map & Walks</a>
        <a href="/Links">Useful Links</a>
        <?php
        if (isCurrentPage('Admin')) {
            echo '<a href="/Admin/Logout.php">Logout</a>';
        } else {
            echo '<a href="/Login/">Login</a>';
        }
        ?>
        <div class="clear"></div>
    </nav>
    <div class="clear"></div>
</header>
