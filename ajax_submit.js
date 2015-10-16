$(document).ready(function() {

	$('form #response').hide();
	$('#submit').click(function(e) {
		e.preventDefault();
		var valid = '';
		var required = ' es necesario.';
		var name = $('form #name').val();
		var email = $('form #email').val();
		var message = $('form #message').val();
		var honeypot = $('form #honeypot').val();
		var humancheck = $('form #humancheck').val();
		if (name = '' || name.length <= 2) {
			valid = '<p>T&uacute nombre' + required +'</p>';
		}
		if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<p>T&uacute correo' + required +'</p>';
		}
		if (message = '' || message.length <= 5) {
			valid += '<p>Un mensaje' + required + '</p>';
		}
		if (honeypot != 'http://') {
			valid += '<p>No se permite Spam.</p>';
		}
		if (humancheck != '') {
			valid += '<p>Un ser humano' + required + '</p>';
		}
		if (valid != '') {

			$('form #response').removeClass().addClass('error')
			.html('<strong>Favor de corregir los errores mencionados.</strong>' +valid).fadeIn('fast');
		}
		else {
			$('form #response').removeClass().addClass('processing').html('Estamos procesando su solicitud, un momento por favor...').fadeIn('fast');
			var formData = $('form').serialize();
			submitForm(formData);
		}
	});
});
function submitForm(formData) {

	$.ajax({
		type: 'POST',
		url: 'feedback.php',
		data: formData,
		dataType: 'json',
		cache: false,
		timeout: 7000,
		success: function(data) {
			$('form #response').removeClass().addClass((data.error === true) ? 'error' : 'success')
			.html(data.msg).fadeIn('fast');
			if ($('form #response').hasClass('success')) {
				setTimeout("$('form #response').fadeOut('fast')", 5000);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			$('form #response').removeClass().addClass('error')
			.html('<p>Hubo un error<strong> ' + errorThrown +
				'</strong> Debido a una <strong> ' + textStatus +
				'</strong> condici&oacuten incumplida.</p>').fadeIn('fast');
		},
		complete: function(XMLHttpRequest, status) {
			$('form')[0].reset();
		}
	});
};
