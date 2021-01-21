$(document).ready(function(){
    $(".open-btn").click(function(){
      $(".navbar_responsive").css("display","flex");
      $(".open-btn").css("display", "none");
      $(".titreContact").css("display", "none");
      $(".header").css("background-color", "rgba(255, 97, 111, 1)");
      $(".header").css("justify-content", "center");

    });

    $(".close-btn").click(function(){
      $(".navbar_responsive").css("display","none");
      $(".open-btn").css("display", "flex");
      $(".titreContact").css("display", "flex");
      $(".header").css("background-color", "rgba(255, 97, 111, 0.9)");
      $(".header").css("justify-content", "space-between");

    });


    $(".navbar_responsive li").click(function(){
      $(".navbar_responsive").css("display","none");
      $(".open-btn").css("display", "flex");
      $(".titreContact").css("display", "flex");
      $(".header").css("background-color", "rgba(255, 97, 111, 0.9)");




    });
  });