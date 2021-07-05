/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
jQuery(document).on('ready', function() {
	"use strict";
	jQuery('.tg-themetabnav > li > a').hover(function() {
		jQuery(this).tab('show');
	});
	/*--------------------------------------
			SCROLL TO TOP					
	--------------------------------------*/
	var _tg_btnscrolltop = jQuery("#tg-btnbacktotop");
	_tg_btnscrolltop.on('click', function(){
		var _scrollUp = jQuery('html, body');
		_scrollUp.animate({ scrollTop: 0 }, 'slow');
	})
	/* -------------------------------------
			COLLAPSE MENU SMALL DEVICES
	-------------------------------------- */
	function collapseMenu(){
		jQuery('.menu-item-has-children, .menu-item-has-mega-menu').prepend('<span class="tg-dropdowarrow"><i class="fa  fa-angle-right"></i></span>');
		jQuery('.menu-item-has-children span, .menu-item-has-mega-menu span').on('click', function() {
			jQuery(this).next().next().slideToggle(300);
			jQuery(this).parent('.menu-item-has-children, .menu-item-has-mega-menu').toggleClass('tg-open');
		});
	}
	collapseMenu();
	/*--------------------------------------
			HOME SLIDER						
	--------------------------------------*/
	var _tg_homeslider = jQuery('#tg-homeslider');
	_tg_homeslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay:true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev slide-ba',
					'owl-next tg-btnround tg-btnnext slide-ba'
				],
	});
	$(document).ready(function() {
 
		$("#123tg-homeslider").owlCarousel({
	   
			navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true
	   
			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false
	   
		});
	   
	  });
	/*--------------------------------------
			BEST BOOK SLIDER				
	--------------------------------------*/
	var _tg_bestsellingbooksslider = jQuery('.slider-product-home');
	_tg_bestsellingbooksslider.owlCarousel({
		loop: true,
		margin: 30,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:2 },
			480: { items:3 },
			600: { items:3 },
			1000: { items:5 },
			1200: { items:6 },
		}
	});
	/*--------------------------------------
			RELATED PRODUCT SLIDER			
	--------------------------------------*/
	var _tg_relatedproductslider = jQuery('#tg-relatedproductslider');
	_tg_relatedproductslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:2 },
			568: { items:2 },
			768: { items:2 },
			992: { items:3 },
			1200: { items:5 },
		}
	});
	/* -------------------------------------
			COLLECTION COUNTER
	-------------------------------------- */
	try {
		var _tg_collectioncounters = jQuery('#tg-collectioncounters');
		_tg_collectioncounters.appear(function () {
			
			var _tg_collectioncounter = jQuery('.tg-collectioncounter h3');
			_tg_collectioncounter.countTo({
				formatter: function (value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});
		});
	} catch (err) {}
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	var _tg_pickedbyauthorslider = jQuery('#tg-pickedbyauthorslider');
	_tg_pickedbyauthorslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			768: { items:2 },
			992: { items:3 },
		}
	});
	/*--------------------------------------
			TESTIMONIALS SLIDER				
	--------------------------------------*/
	var _tg_testimonialsslider = jQuery('#tg-testimonialsslider');
	_tg_testimonialsslider.owlCarousel({
		items:1,
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
	});
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	
	/*--------------------------------------
			TEAMS SLIDER					
	--------------------------------------*/
	var _tg_teamsslider = jQuery('#tg-teamsslider');
	_tg_teamsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			600: { items:3 },
			1000: { items:4 },
		}
	});
	/*--------------------------------------
			NEWS AND ARTICLE SLIDER			
	--------------------------------------*/
	var _tg_postslider = jQuery('#tg-postslider');
	_tg_postslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:2 },
			600: { items:2 },
			992: { items:3 },
			1200: { items:5 },
		}
	});
	/*--------------------------------------
			HOME SLIDER						
	--------------------------------------*/
	var _tg_successslider = jQuery('#tg-successslider');
	_tg_successslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay:false,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
	});
	/* -------------------------------------
			Google Map
	-------------------------------------- */
	jQuery("#tg-locationmap").gmap3({
		marker: {
			address: "1600 Elizabeth St, Melbourne, Victoria, Australia",
			options: {
				title: "Books Library",
			}
		},
		map: {
			options: {
				zoom: 16,
				scrollwheel: false,
				disableDoubleClickZoom: true,
			}
		}
	});
	/*------------------------------------------
			PRODUCT INCREASE
	------------------------------------------*/
	jQuery('em.minus').on('click', function () {
		let quantity = jQuery('#quantity').val();
		if(quantity > 1){
			jQuery('#quantity').val(parseInt(jQuery('#quantity').val(), 10) - 1);
		}
	});
	jQuery('em.plus').on('click', function () {
		jQuery('#quantity').val(parseInt(jQuery('#quantity').val(), 10) + 1);
	});

	

});

document.addEventListener("DOMContentLoaded",function(){
	let search = document.getElementsByClassName('mobile-search');
	for(let i=0; i<search.length; i++){
		search[i].onclick = function(){
			let show = document.querySelector('.book-search');
			show.classList.toggle('display-block');
		}
	}
},false)