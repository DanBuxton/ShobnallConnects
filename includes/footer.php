<footer>
    <p>Copyright &copy; 2018 <?php echo (date("Y") > 2018 ? "- " . date("Y") : ""); ?> Shobnall Connects</p>
    <p><?php echo '<p>Current language: ' . $_COOKIE[$cookie_name] . '</p><a href="/chng-lang/?nm=' . $cookie_name . '&ret=' . rtrim($_SERVER["PHP_SELF"], "index.php") . '">Change Language</a>'; ?></p>
    <p>Download the digital leaflet <a href="/Download/?ret=<?php echo rtrim($_SERVER["PHP_SELF"], "index.php"); ?>">here</a></p>
</footer>

<div id="footer-logos">
    <a target="_blank" href="https://www.bsdc.ac.uk">
        <img src="/assets/img/BSDC logo.jpg" width="150" height="100" />
    </a>
    <a target="_blank" href="http://www.staffscvys.org.uk" style="width: auto; height: auto;">
        <img src="/assets/img/NewSCVYSlogo.jpg" width="100" height="100" />
    </a>
    <a target="_blank" href="https://www.staffordshire.gov.uk" style="width: 122px; height: 97px;">
        <img src="/assets/img/SCC logo.jpg" />
    </a>
</div>

<script src="/assets/js/responsive.js"></script>
<script src="/assets/js/common.js"></script>
<script src="/assets/js/functions.js"></script>

<?php
if (isCurrentPage('admin'))
    echo '<script src="/assets/js/admin.js" type="text/javascript"></script>';

if (!empty($db))
    $database->Dispose();
?>
