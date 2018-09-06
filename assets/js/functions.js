/*
 * Common JavaScript functions are placed here. 
 */

jQuery.fn.rotate = function (degrees) {
    $(this).css({
        '-webkit-transform': 'rotate(' + degrees + 'deg)',
        '-moz-transform': 'rotate(' + degrees + 'deg)',
        '-ms-transform': 'rotate(' + degrees + 'deg)',
        'transform': 'rotate(' + degrees + 'deg)'
    });
    return $(this);
};

function alternateLanguages(number, elem) {
    // English, Urdu, Punjabi, Polish, Latvian
    //let languages = ["Select your language", "اپنی زبان منتخب کریں", "ਆਪਣੀ ਭਾਸ਼ਾ ਚੁਣੋ", "Wybierz swój język", "Izvēlieties savu valodu"];
    let languages = ["English", "اردو", "ਪੰਜਾਬੀ", "Polskie", "Latviešu"];

	var element = $('#' + elem);
	var interval = 2500;
    /*
    while(true) {
        element.innerHTML = languages[number];

    	if (number < 1) {
        	clearTimeout(timer);
            break;
    	} else {
            number--;

            var timer = setTimeout('alternateLanguages(' + number + ', "' + elem + '")', interval);
        }
    }
    /**/

    element.innerHTML = languages[number-1];
}

// Marker functions

function showhide_marker_details(id, showHide) {
    var elemId = id + "_details";
    var markDetails = $("#" + elemId);

    if (showHide.toLowerCase() == 's') {
        markDetails.css("display", "block");
    } else {
        markDetails.css("display", "none");
    }
}

function updateMarker(id, xOrY, value) {
    var markerId = "#" + id + "_marker";
    var marker = $(markerId);

    if (xOrY.toLowerCase() == 'x')
        marker.css("left", value);
    else
        marker.css("top", value);
}