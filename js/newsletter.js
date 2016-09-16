$(function() {
  $('#newsletter-button').click(function (e) {
    $.ajax({
      url: 'https://miemma.com/suscribe', 
      data: $('#newsletter-form').serialize(),
      beforeSend: function () {
        $($('#newsletter-button')).addClass('disabled');
      },
      complete: function () {
        $($('#newsletter-button')).removeClass('disabled');
      }
    });
  });
});