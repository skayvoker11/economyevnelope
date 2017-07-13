$(function(){


	$('.message a').click(function(){
		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});
//header-button
$(".pulse-button-add").click(function(){
	$(".pulse-button-add").fadeOut(500);
	setTimeout(function(){
		$(".pulse-button-close").fadeIn(500);
		$("#formEnv").fadeIn(500);
	},600);
});
$(".pulse-button-close").click(function(){
	$(".pulse-button-close").fadeOut(500);
	$("#formEnv").fadeOut(500);
	setTimeout(function(){
		$(".pulse-button-add").fadeIn(500);
	},600);
});
//header-button
});