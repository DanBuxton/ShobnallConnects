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

function alternateLanguages(noOfTimes, elem) {

    var languages = ["Select your language", "اپنی زبان منتخب کریں", "ਆਪਣੀ ਭਾਸ਼ਾ ਚੁਣੋ", "Wybierz swój język", "Izvēlieties savu valodu"];

	var element = document.getElementById(elem);
	var interval = 2500;

    element.innerHTML = languages[noOfTimes];

	if (noOfTimes < 1) {
    	clearTimeout(timer);
	} else {
        noOfTimes--;

        var timer = setTimeout('alternateLanguages(' + noOfTimes + ', "' + elem + '")', interval);
    }

    element.innerHTML = languages[noOfTimes];
}
