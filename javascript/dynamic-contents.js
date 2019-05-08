$(document).ready(function () {
  $('#button-1').on('click', function () {
    $('#loader-1').addClass('.loading');

    $.ajax( "../includes/_dynamic-content-1.php" )
      .done(function(data) {
        setTimeout(function() {
          $('.dynamic-content-1').html(data)
        }, 1000)
      });
  });
})