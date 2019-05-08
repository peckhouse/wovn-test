$(document).ready(function () {
  $('#button-1').on('click', function () {
    $('#loader-1').addClass('loading');
    $('.dynamic-content-1').html('');
    var random = Math.floor(Math.random() * 2) + 3;

    $.ajax( "../includes/_dynamic-content-1.php" )
      .done(function(data) {
        setTimeout(function() {
          $('.dynamic-content-1').html(data)
          $('#loader-1').removeClass('loading');
        }, random * 1000);
      });
  });
});