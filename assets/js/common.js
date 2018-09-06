//$(window).resize(changeSize);
$(document).ready(changeSize);
$(window).scroll(changeSize);

function changeSize() {
	let width = $(window).width();
	let height = $(window).height();

	//$('body').css('width', width + 'px');
	$('body').css('height', height + 'px');
}

$(document).ready(function () {

});