$(document).ready(function(){
    $("#about").click(function(){
      $(".content").fadeOut("slow");
      $(".about").delay(666).fadeIn("fast");
    });
    $(".home").click(function(){
        $(".about").fadeOut("slow");
        $(".content").delay(666).fadeIn("fast");
      });
  });