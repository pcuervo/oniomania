(function( $ ) {
    "use strict";
	$(function(){
		$(".menu").click(function() {
			$(".menu-desktop").removeClass("menu-bottom").addClass("menu-top");
			$(".menu-mobile").css({"top":"0","transition":"ease all 1s"});
			$(".js-to-load").css({"top":"0","transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"0","transition":"ease all 1s"});
		})

		$(".show-home").click(function() {
			$(".menu-desktop").removeClass("menu-top").addClass("menu-bottom").css({"transition" : "ease all 1s"});
			$(".show-home").css({"transition" : "ease all 1s"});
			$(".js-to-load").css({"top":"85vh","transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"1","transition":"ease all .8s"});
		});

		$(".show-menu-mobile").click(function() {
			$(".menu-desktop").toggleClass("menu-down-mobile");
		});

<<<<<<< HEAD
	$(function(loadContent){
		$(".load-home").click(function() {
			$(".menu-desktop").removeClass("menu-top").addClass("menu-bottom").css({"transition" : "ease all 1s"});
			$(".show-home").css({"transition" : "ease all 1s"});
			$(".content-p").css({"top":"85vh","transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"1","transition":"ease all .8s"});
		});
		$(".load-acerca").click(function() {
			$(".content-p").load("acerca.html #acerca-container");
=======
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda.html #tienda-container");
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda.html #tienda-container");
>>>>>>> 9a74f9b49aea5cabf080175e00c9cd9e02a7a1a6
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda.html #tienda-container");
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda.html #tienda-container");
		});
	});
}(jQuery));
