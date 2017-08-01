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

//Ajax forms
$('#formEnv').on('submit', function (e) {
	e.preventDefault();
	$.ajax({
		type: 'post',
		dataType: "html", 
		url: '../addEvnelope.php',
		data: $('#formEnv').serialize(),
		success: function (response) {
			arrayall = jQuery.parseJSON(response);
			console.log(arrayall);
			var cldel = $('.delform').clone().first();
			$(cldel).find("input").attr('value',arrayall[2]);
			$(cldel).find("span").html(arrayall[0]);
			$(".pulse-button-close").fadeOut(500);
			$("#formEnv").fadeOut(500);
			setTimeout(function(){
				$(".pulse-button-add").fadeIn(500);
				$(".envelope").append(cldel);
			},600);
			
		}
	});
});
$('.login-form').on('submit', function (e) {
	e.preventDefault();
	$.ajax({
		type: 'post',
		dataType: "html", 
		url: 'testreg.php',
		data: $('.login-form').serialize(),
		success: function () {
			location.reload();
		}
	});
});
	//Ajax forms
});