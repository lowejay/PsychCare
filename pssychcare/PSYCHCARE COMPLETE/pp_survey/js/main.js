;(function () {
	'use strict';
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
	var fullHeight = function() {

		if ( !isMobile.any() ) {
			$('.js-fullheight').css('height', $(window).height());
			$(window).resize(function(){
				$('.js-fullheight').css('height', $(window).height());
			});
		}
	};
	// Animations
	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {
			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				i++;
				$(this.element).addClass('item-animate');
				setTimeout(function(){
					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated');
							} else {
								el.addClass('fadeInUp animated');
							}
							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
				}, 100);
			}
		} , { offset: '85%' } );
	};
	var burgerMenu = function() {
		$('.js-colorlib-nav-toggle').on('click', function(event){
			event.preventDefault();
			var $this = $(this);
			if ($('body').hasClass('offcanvas')) {
				$this.removeClass('active');
				$('body').removeClass('offcanvas');	
			} else {
				$this.addClass('active');
				$('body').addClass('offcanvas');	
			}
		});
	};
	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {
		$(document).click(function (e) {
		    var container = $("#colorlib-aside, .js-colorlib-nav-toggle");
		    if (!container.is(e.target) && container.has(e.target).length === 0) {
		    	if ( $('body').hasClass('offcanvas') ) {
	    			$('body').removeClass('offcanvas');
	    			$('.js-colorlib-nav-toggle').removeClass('active');
		    	}
		    }
		});
		$(window).scroll(function(){
			if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-colorlib-nav-toggle').removeClass('active');
	    	}
		});
	};
	var sliderMain = function() {
	  	$('#colorlib-hero .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000,
			directionNav: true,
			start: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			},
			before: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			}
	  	});
	};
	var stickyFunction = function() {
		var h = $('.image-content').outerHeight();
		if ($(window).width() <= 992 ) {
			$("#sticky_item").trigger("sticky_kit:detach");
		} else {
			$('.sticky-parent').removeClass('stick-detach');
			$("#sticky_item").trigger("sticky_kit:detach");
			$("#sticky_item").trigger("sticky_kit:unstick");
		}
		$(window).resize(function(){
			var h = $('.image-content').outerHeight();
			$('.sticky-parent').css('height', h);
			if ($(window).width() <= 992 ) {
				$("#sticky_item").trigger("sticky_kit:detach");
			} else {
				$('.sticky-parent').removeClass('stick-detach');
				$("#sticky_item").trigger("sticky_kit:detach");
				$("#sticky_item").trigger("sticky_kit:unstick");

				$("#sticky_item").stick_in_parent();
			}
		});
		$('.sticky-parent').css('height', h);
		$("#sticky_item").stick_in_parent();
	};
	// Document on load.
	$(function(){
		fullHeight();
		contentWayPoint();
		burgerMenu();
		mobileMenuOutsideClick();
		sliderMain();
		stickyFunction();
	});
}());
$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname){
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      	if (target.length) {
        	event.preventDefault();
        	$('html, body').animate({
        		scrollTop: target.offset().top
        	},500,function() {
	          	var $target = $(target);
	          	$target.focus();
	          	if ($target.is(":focus")) {
	            	return false;
	          	}else{
			        $target.attr('tabindex','-1');
			        $target.focus(); 
		    	};
	        });
      	}
    }
});
$(document).ready(function() {//mixed custom DOM jQueries
	$("html, body").animate({ scrollTop: 0 }, 900);
	$('#ln2').hide();
	$('#ln3').hide();
	var count = 0;
	$('form.f1, form.f2').submit(function(){
		var fo = $(this),
			url = fo.attr('action'),
			type = fo.attr('method'),
			data = {};

		fo.find("input.learners, input:checked").each(function(index, value){
			var fn = $(this),
			 	checked = fn.attr('name'),
				value = fn.val();
			data[checked] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response){
				count = count + 1;
				console.log(response);
			}
		});
			if(count === 1){
				$("html, body").animate({ scrollTop: 0 }, 900);
				$('#ln2').hide();
				$('#ln3').show();
			}else{
				$("html, body").animate({ scrollTop: 0 }, 900);
				$('#ln1').hide();
				$('#ln2').show();
			}
		return false;
	});
	//Learner Form control AJAX
	$('.edit_sched').click(function(){
        var class_ID = $(this).attr('id');
        $.ajax({
            url: "../controllers/teacher_controller.php",
            method: "POST",
            data: {class_ID:class_ID},
            success: function(d){
                $('#edit_fetch_result').html(d);
                $('#modalEditSchedule').modal('show');
            }
        });
    });
    $("#learnerNote").modal('show');
});