$(document).ready(function(){

$(".leftButton").click(function(){
  $("img").animate({
    top: "100px",
    width: "500px",
    border: "10px",}, 2000, function(){
  $(".leftButton").animate({top:"100px"},"fast");
  });

$(".rightButton").click(function(){
  var img = $("img");
  img.animate({height: '100px', opacity: '0.4'}, "slow");
  img.animate({height: '100px', opacity: '0.8'}, "slow");
  img.animate({height: '100px', opacity: '0.4'}, "slow");
  img.animate({height: '100px', opacity: '0.8'}, "slow");
});
});
});
