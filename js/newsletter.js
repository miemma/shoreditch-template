$(function() {
  $('#newsletter-button').click(function (e) {
    $.ajax({
      type: 'POST',
      url: 'https://miemma.com/subscribe/', 
      data: $('#newsletter-form').serialize(),
      beforeSend: function () {
        var isEmail = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        if (isEmail.test($('#newsletter-email').val())) {
          $('#newsletter-button').addClass('disabled');
          $('#newsletter-label').text('');
        } else {
          $('#newsletter-label').text('Introduce una dirección de correo válida.');
          return false;
        }
      },
      success: function (data) {
        if (data.status === 'subscribed') {
          $('#newsletter-label').text('Suscripción realizada con éxito');
        } else {
          $('#newsletter-label').text('Ocurrió un error.');
        }
      },
      error: function () {
        $('#newsletter-label').text('Ocurrió un error.');
      },
      complete: function () {
        $('#newsletter-button').removeClass('disabled');
      }
    });
  });
});