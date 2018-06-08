<footer>
			<p>Copyright &copy; 2018 <?php echo (date("Y") > 2018 ? "- " . date("Y") : ""); ?> Shobnall Connects</p>
		</footer>

		<div id="footer-logos">
		<?php if (strpos($_SERVER["PHP_SELF"], 'Admin')) { ?>
	<a target="_blank" href="https://www.bsdc.ac.uk">
				<img src="../assets/img/BSDC logo.jpg" width="150" height="100" />
			</a>
			<a target="_blank" href="http://www.staffscvys.org.uk" style="width: auto; height: auto;">
				<img src="../assets/img/NewSCVYSlogo.jpg" width="100" height="100" />
			</a>
			<a target="_blank" href="https://www.staffordshire.gov.uk" style="width: 122px; height: 97px;">
				<img src="../assets/img/SCC logo.jpg" />
			</a>
		<?php } else { ?>
			<a target="_blank" href="https://www.bsdc.ac.uk">
				<img src="assets/img/BSDC logo.jpg" width="150" height="100" />
			</a>
			<a target="_blank" href="http://www.staffscvys.org.uk" style="width: auto; height: auto;">
				<img src="assets/img/NewSCVYSlogo.jpg" width="100" height="100" />
			</a>
			<a target="_blank" href="https://www.staffordshire.gov.uk" style="width: 122px; height: 97px;">
				<img src="assets/img/SCC logo.jpg" />
			</a>
		<?php } ?>
</div>

<?php
	if (strpos($_SERVER["PHP_SELF"], 'Admin')) {
		echo '<script src="../assets/js/common.js"></script>';
		echo '<script src="../assets/js/functions.js"></script>';
	} else {
		echo '<script src="assets/js/common.js"></script>';
		echo '<script src="assets/js/functions.js"></script>';
	}

	echo "<title>" . (empty($title) === false ? $title . " - " : "") . "ShobnallConnects</title>";
?>