(function($) {
    "use strict";	
	$(window).on("load", function() {
        /* ----------------------------------------------------------- */
		/*  Preloader Animation
		/* ----------------------------------------------------------- */
	
		var pageTransitionAnimationDuration = 500
		var preloader = $(".preloader");
		pageTransition({
			target: document.querySelector('.page'),
			delay: 0,
			duration: pageTransitionAnimationDuration,
			classActive: 'animated',
			conditions: function (event, link) {
				return
				!/(\#|callto:|tel:|mailto:|:\/\/)/.test(link)
				&& !event.currentTarget.hasAttribute('data-lightgallery')
				&& event.currentTarget.getAttribute('href') !== 'javascript:void(0);';
			},
			onTransitionStart: function (options) {
				setTimeout(function () {
					preloader.removeClass('loaded');
				}, options.duration * .75);
			},
			onReady: function () {
				preloader.addClass('loaded');
			}
		});
		
		/* ----------------------------------------------------------- */
        /*  Text Typed Rotator Animation
        /* ----------------------------------------------------------- */
		if ($("#selector").length) {
			$("#selector").animatedHeadline({
				 animationType: "clip"
			});
		}
		
	});

    jQuery(document).ready(function($) {
		
		/* ----------------------------------------------------------- */
        /*  Stretchy Nav
        /* ----------------------------------------------------------- */
		
		if ($(".vfx-navigation").length > 0) {
			var n = $(".vfx-navigation");
			n.each(function() {
				var n = $(this),
					t = n.find(".vfx-navigation-trigger");
				t.on("click", function(t) {
					t.preventDefault(), n.toggleClass("nav-is-visible")
				})
			}), $(document).on("click", function(t) {
				!$(t.target).is(".vfx-navigation-trigger") && !$(t.target).is(".vfx-navigation-trigger span") && n.removeClass("nav-is-visible");
			})
		}
		$("body.light.dark-header .vfx-navigation ul li a").on('click', function() {
			if ($(this).hasClass("home")) {
				$(".vfx-navigation").addClass('lighter');
			}
			else
			{
				$(".vfx-navigation").removeClass('lighter');
			}
		});
		
		$("body.light.dark-header .link-portfolio-one, body.light.dark-header .link-portfolio-two").on('click', function() {
			$(".vfx-navigation").removeClass('lighter');
		});
		$("body.light #portfolio-items li a").on('click', function() {
			$(".vfx-navigation").addClass('lighter-in-portfolio');
		});
		/* ----------------------------------------------------------- */
        /*  Portfolio Link Section One
        /* ----------------------------------------------------------- */
 
		$(".link-portfolio-one").on("click", function(e) {
			var tabNum = $(this).index();
			var nthChild = tabNum + 3;
			$("#main > section.active").removeClass("active");
			$("#main > section:nth-child(" + nthChild + ")").addClass("active");
			$(".stretchy-nav li:first-child").removeClass("active");
			$(".stretchy-nav li:nth-child(2)").addClass("active");
			 e.preventDefault();
        });
		
		/* ----------------------------------------------------------- */
        /*  Portfolio Link Section Two
        /* ----------------------------------------------------------- */
		
		$(".link-portfolio-two").on("click", function(e) {
			var tabNum = $(this).index();
			var nthChild = tabNum + 3;
			$("#main > section.active").removeClass("active");
			$("#main > section:nth-child(" + nthChild + ")").addClass("active");
			$(".stretchy-nav li:nth-child(1)").removeClass("active");
			$(".stretchy-nav li:nth-child(3)").addClass("active");
			 e.preventDefault();
        });
		
        /* ----------------------------------------------------------- */
        /*  Ajax Contact Form
        /* ----------------------------------------------------------- */

        $(".btn_submit").on('click',function () {	  
			var name=$('#name').val();
			var email=$('#email').val();
			var subject=$('#subject').val();
			var phone=$('#phone').val();
			var message=$('#message').val();
			if(name!="" && email!="" && subject!="" && phone!="" && message!="")
			{
			$.ajax({
				url:'sendmail.php',
				method: "POST",
				data: {
					name:name,
					email:email,
					subject:subject,
					phone:phone,
					message:message,
					btn_submit:'submit'
				},
				success: function (result) {
					$('#success_message').addClass('active');
				}
			});                
			}
		});

		/*----------------------------------------------
		 Counter
		----------------------------------------------*/

		$('.count').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});

        /* ----------------------------------------------------------- */
        /*  Page Animation
        /* ----------------------------------------------------------- */

        checkScreenSize();

        function checkScreenSize() {
            var newWindowWidth = $(window).width();
            if (newWindowWidth < 1025) {
                $('#nav > li').on('click', function(e) {
                    e.preventDefault();
                    $('#main').addClass('open');
                });
            } else {}
        }
        var resizeTimer;
        $(window).on('resize', function(e) {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                checkScreenSize();
            }, 250);
        });
		
		/* ----------------------------------------------------------- */
        /*  Video Click Links
        /* ----------------------------------------------------------- */

		function stop_videos() {
			var video = document.getElementById("video");
			if (video.paused !== true && video.ended !== true) {
				video.pause();
			}
			$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		}
		
		/* ----------------------------------------------------------- */
        /*  Main Navigation Menu
        /* ----------------------------------------------------------- */
 
        $(".navigation > li, .stretchy-nav > li").on("click", function(e) {
            if (!$(this).hasClass("active")) {
                var tabNum = $(this).index();
                var nthChild = tabNum + 2;
                $(".navigation > li.active, .stretchy-nav > li.active").removeClass("active");
                $(this).addClass("active");
                $("#main > section.active").removeClass("active");
                $("#main > section:nth-child(" + nthChild + ")").addClass("active");
				stop_videos();
				$(".vfx-navigation").removeClass('lighter-in-portfolio');
            }
			e.preventDefault();
			if (($('.vfx-project-info').hasClass('slide-in')) && ($(window).width() > 1024)){
				setTimeout(function(){ 
					$('.vfx-project-info').removeClass('slide-in');
				$('.close-project').removeClass('is-visible');
				if( is_firefox ) {
					$('.vfx-portfolio-container').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						$('.vfx-portfolio-container').removeClass('overflow-hidden');
					});
				} else {
					$('.vfx-portfolio-container').removeClass('slide-out');
					$('.vfx-portfolio-container').removeClass('overflow-hidden');
				}
				}, 600);
				
			}
        });
		
		/* ----------------------------------------------------------- */
        /*  Show - Hide Section
        /* ----------------------------------------------------------- */
		
        if (window.location.hash && $('#link-' + window.location.hash.replace(/^#/, '')).length) {
            $('#link-' + window.location.hash.replace(/^#/, '')).trigger('click');
        }
        window.userInteractionTimeout = null;
        window.userInteractionInHTMLArea = false;
        window.onBrowserHistoryButtonClicked = null;
        $(document).ready(function() {
            $(document).mousedown(function() {
                clearTimeout(window.userInteractionTimeout);
                window.userInteractionInHTMLArea = true;
                window.userInteractionTimeout = setTimeout(function() {
                    window.userInteractionInHTMLArea = false;
                }, 500);
            });
            $(document).keydown(function() {
                clearTimeout(window.userInteractionTimeout);
                window.userInteractionInHTMLArea = true;
                window.userInteractionTimeout = setTimeout(function() {
                    window.userInteractionInHTMLArea = false;
                }, 500);
            });
            if (window.history && window.history.pushState) {
                $(window).on('popstate', function() {
                    if (!window.userInteractionInHTMLArea) {
                        if (window.location.hash && $('#link-' + window.location.hash.replace(/^#/, '')).length) {
                            $('#link-' + window.location.hash.replace(/^#/, '')).trigger('click');
                        }
                        if (!window.location.hash) {
                            $('#link-work').trigger('click');
                        }
                    }
                    if (window.onBrowserHistoryButtonClicked) {
                        window.onBrowserHistoryButtonClicked();
                    }
                });
            }
        });
		
		/* ----------------------------------------------------------- */
        /*  Back Mobile
        /* ----------------------------------------------------------- */

        $('#vfx-back-mobile').on('click', function(e) {
            $('#main').removeClass('open');
			stop_videos();
        });	
		
		
		/* ----------------------------------------------------------- */
        /*  Portfolio Show Slide
        /* ----------------------------------------------------------- */

		var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

		$('.vfx-portfolio-section').find('ul a').on('click', function(event){
			event.preventDefault();
			var selected_member = $(this).data('type');
			$('.vfx-project-info.'+selected_member+'').addClass('slide-in');
			$('.close-project').addClass('is-visible');
			
			if( is_firefox ) {
				$('.vfx-portfolio-container').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('.vfx-portfolio-container').addClass('overflow-hidden');
				});
			} else {
				$('.vfx-portfolio-container').addClass('slide-out');
				$('.vfx-portfolio-container').addClass('overflow-hidden');
			}
			
			if ($(window).width() < 1025) {
				$('#vfx-back-mobile').css('pointer-events','none');
			}
			

		});

		/* ----------------------------------------------------------- */
        /*  Portfolio Hide Slide
        /* ----------------------------------------------------------- */

		$(document).on('click', '.close-project, .portfolio-overlay', function(event){
			event.preventDefault();
			$('.vfx-project-info').removeClass('slide-in');
			$('.close-project').removeClass('is-visible');
			stop_videos();
			$(".vfx-navigation").removeClass('lighter-in-portfolio');
			if( is_firefox ) {
				$('.vfx-portfolio-container').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('.vfx-portfolio-container').removeClass('overflow-hidden');
				});
			} else {
				$('.vfx-portfolio-container').removeClass('slide-out');
				$('.vfx-portfolio-container').removeClass('overflow-hidden');
			}
			
			if ($(window).width() < 1025) {
				$('#vfx-back-mobile').css('pointer-events','auto');
			}
		});
		
		/* ----------------------------------------------------------- */
        /*  Slide In Portfolio
        /* ----------------------------------------------------------- */
		$('.portfolio-slider').carousel({
			pause: true,
			interval: false
		});		
	});
	
})(jQuery);