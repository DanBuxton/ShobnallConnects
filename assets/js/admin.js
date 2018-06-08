function show_marker_details(id) {
	var elemId = id + "_details";
	var markDetails = $("#" + elemId);

	markDetails.css("display", "block");
}

function hide_marker_details(id) {
	var elemId = id + "_details";
	var markDetails = $("#" + elemId);

	markDetails.css("display", "none");
}

function updateMarker(id, xOrY, value) {
	var markerId = "#" + id + "_marker";
	var marker = $(markerId);

	if (xOrY == 'x')
		marker.css("left", value);
	else
		marker.css("top", value);
}

