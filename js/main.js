$(document).ready(function() {
  $("#principal-content").animate({
    opacity: "1"
  }, 2000);
});

function next(iPosition) {
  var position = iPosition;
  var input1 = $('#input1').val();
  var input2 = $('#input2').val();

  if (position == "first") {
    console.log("first");
    $.ajax({
      data: {
        input1: input1,
        input2: input2,
        position: position
      },
      url: './php_functions/register_function.php',
      type: 'post',
      success: function(response) {
        console.log("succes");
        console.log(response);
        if (response == "1") {
          console.log("okay");
          $("#label1").animate({
            opacity: "0"
          }, 1000);
          $("#label2").animate({
            opacity: "0"
          }, 1000);

          setTimeout(function(){ $("#label1").html("E-Mail");}, 2000);
          setTimeout(function(){ $("#label2").html("Colegio");}, 2000);

          setTimeout(function(){ $("#label1").animate({
            opacity: "1"
          }, 1000); }, 3000);
          setTimeout(function(){ $("#label2").animate({
            opacity: "1"
          }, 1000); }, 3000);

          $('#input1').removeClass('error');
          $('#input2').removeClass('error');

        } else if (response == "0") {
          console.log("error");
          $('#input1').addClass('error');
          $('#input2').addClass('error');
        }
      }
    });
  }
}
