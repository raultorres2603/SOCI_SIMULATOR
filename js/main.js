$(document).ready(function() {
  $("#principal-content").animate({
    opacity: "1"
  }, 2000);
});

function next(iPosition) {
  var position = iPosition;

  if (position == "first") {
    $("#label1").animate({
      opacity: "0"
    }, 2000);
    $("#label2").animate({
      opacity: "0"
    }, 2000);
    setTimeout($("#label1").animate({
      opacity: "1"
    }, 2000), 4000);
    setTimeout($("#label2").animate({
      opacity: "1"
    }, 2000), 4000);
    setTimeout($('#label1').html('E-mail'),6000);
    setTimeout($('#label2').html('Colegio'),6000);
  }
}
