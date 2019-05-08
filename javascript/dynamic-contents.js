$(document).ready(function () {
  console.log('YES');


  $('#button-1').on('click', function () {
    $('#loader-1').addClass('.loading');


    $.ajax( "../includes/_dynamic-content-1.php" )
      .done(function(data) {
        console.log("success", data);

        $('.dynamic-content-1').html(data)
        setTimeout(function() {
          $('#loader-1').removeClass('.loading');
        }, 2000)
      });
  });
})