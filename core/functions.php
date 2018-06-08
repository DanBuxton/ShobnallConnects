<?php
	function ChangeDateFormat($date) {
		return date_format($date, "j/m/Y");
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$Languages = array("Select your language", "اپنی زبان منتخب کریں", "ਆਪਣੀ ਭਾਸ਼ਾ ਚੁਣੋ", "Wybierz swój język", "Izvēlieties savu valodu");
	$SupportedLanguages = array("English", "Urdu", "Panjabi", "Polish", "Latvian");

	function AlternateLanguages($index)
	{
		$Languages = array("Select your language", "اپنی زبان منتخب کریں", "ਆਪਣੀ ਭਾਸ਼ਾ ਚੁਣੋ", "Wybierz swój język", "Izvēlieties savu valodu");

		$differentLanuages = '';

		for ($i=0; $i < count($Languages); $i++) { 
			$differentLanuages .= '<p class="language">' . $Languages[$i] . '</p>';
		}

		return $differentLanuages;
	}
?>