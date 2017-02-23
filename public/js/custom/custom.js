$('.room').on('click', function() {
	var id = $(this).attr('id');
	$('.movies_' + id).removeClass('hide');
});

$('.movie').on('click', function() {
	var id = $(this).attr('id');
	$('.movie_active_chairs_' + id).removeClass('hide');
});