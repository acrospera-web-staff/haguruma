// JavaScript Document

$(function(){
	$(".users .usersHdg").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("open");
	});
});
