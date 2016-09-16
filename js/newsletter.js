$(function() {
  $('#newsletter-button').click(function (e) {
    $.ajax({
      url: 'https://miemma.com/suscribe', 
      data: $('#newsletter-form').serialize(),
      beforeSend: function () {
        $('#newsletter-button').addClass('disabled');
        $('#newsletter-label').text('');
      },
      success: function () {
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