$(document).ready(function (e) {
	$('#date').hide();
	$('#d4321').hide();
	$('#d4322').hide();
});

function test() {
	var se = $('#se').val();
	if (se == 'c') {

		$('#date').show();
		$('#d4321').hide();
		$('#d4322').hide();

	} else if (se == 'd') {

		$('#date').hide();
		$('#d4321').show();
		$('#d4322').show();

	} else {
		$('#date').hide();
		$('#d4321').hide();
		$('#d4322').hide();
	}
}
