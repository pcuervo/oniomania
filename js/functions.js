(function( $ ) {
    "use strict";
	$(function(){
		$(".menu").click(function() {
			$(".menu-desktop").removeClass("menu-bottom").addClass("menu-top");
			$(".menu-mobile").css({"top":"0","transition":"ease all 1s"});
			$(".js-to-load").css({"top":"0","transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"0","transition":"ease all 1s"});
		});

		$(".show-home").click(function() {
			$(".menu-desktop").removeClass("menu-top").addClass("menu-bottom").css({"transition" : "ease all 1s"});
			$(".show-home").css({"transition" : "ease all 1s"});
			$(".js-to-load").css({"top":"90vh","transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"1","transition":"ease all .8s"});
		});

		$(".show-menu-mobile").click(function() {
			$(".menu-desktop").toggleClass("menu-down-mobile");
		});


		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda_2.html #tienda-container");
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda_2.html #tienda-container");
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda_2.html #tienda-container");
		});
		$(".load-tienda").click(function() {
			$(".js-to-load").load("tienda_2.html #tienda-container");
		});
	});
}(jQuery));
