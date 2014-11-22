(function( $ ) {
    "use strict";
	$(function(){
		$(".menu").on('click', function(e) {
			e.preventDefault();
			$(".menu-desktop").removeClass("menu-bottom").addClass("menu-top");
			$(".menu-mobile").css({"top":"0","transition":"ease all 1s"});
			$(".js-to-load").addClass('up').css({"transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"0","transition":"ease all 1s"});
		});

		$(".show-home").on('click', function(e) {
			e.preventDefault();
			$(".menu-desktop").removeClass("menu-top").addClass("menu-bottom").css({"transition" : "ease all 1s"});
			$(".show-home").css({"transition" : "ease all 1s"});
			$(".js-to-load").removeClass('up').css({"transition":"ease all 1s"});
			$(".carousel-fade").css({"opacity":"1","transition":"ease all .8s"});
		});

		$(".show-menu-mobile").on('click', function(e) {
			e.preventDefault();
			$(".menu-desktop").toggleClass("menu-down-mobile");
		});

		$(".load-acerca").on('click', function(e) {
			e.preventDefault();
			$(".js-to-load").load(site_url+"page-acerca.php #loaded-container");
		});
		$("body").on('click', '.load-shopping-cart',  function(e) {
			e.preventDefault();
			console.log('load-contacto');
			$(".js-to-load").load("shopping-cart.html #loaded-container");
		});
		$(".load-tienda").on('click', function(e) {
			e.preventDefault();
			$(".js-to-load").load("tienda_2.html #loaded-container");
		});
		$(".load-contacto").on('click', function(e) {
			e.preventDefault();
			$(".js-to-load").load("contacto.html #loaded-container");
		});
		$("body").on('click', '.load-checkout',  function(e) {
			e.preventDefault();
			console.log('load-checkout');
			$(".js-to-load").load("checkout.html #loaded-container");
		});
		$("body").on('click', '.load-metodo-pago',  function(e) {
			e.preventDefault();
			console.log('load-metodo-pago');
			$(".js-to-load").load("metodo-pago.html #loaded-container");
		});
		$("body").on('click', '.load-confirmacion',  function(e) {
			e.preventDefault();
			console.log('load-confirmacion');
			$(".js-to-load").load("compra-confirmada.html #loaded-container");
		});
		$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
	});
}(jQuery));