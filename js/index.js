$(function () {
	// var flage = false;
	$('.navbar-header button').click(function () {
		$('.navbar-collapse').slideToggle();
	});
	$('#nav').children().click(function () {
		$('.navbar-collapse').slideUp();
	});
})