(function($) {

	var $body = $('body');

	// Menu
	var $siteHeaderMenu = $('#site-header-menu');
	var $menuToggle = $('#menu-toggle');

	// Add dropdown toggle
	$('.primary-menu .menu-item-has-children > a').after('<button class="dropdown-toggle"><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="6 9 12 15 18 9"></polyline></svg></button>');

	// Toggle nav on burger click
	$(document).on('click', '#menu-toggle', function() {
		$(this).toggleClass('toggled-on');
		$body.toggleClass('menu-toggled-on');
		$siteHeaderMenu.toggleClass('toggled-on');
	});

	// Close nav when clicking outside of header
	$(document).on('click', function(event) {
		if (!$(event.target).closest('.site-header').length) {
			$body.removeClass('menu-toggled-on');
			$menuToggle.removeClass('toggled-on');
			$siteHeaderMenu.removeClass('toggled-on');
		}
	});
	
	// Toggle sub menus
	$(document).on('click', '.dropdown-toggle', function() {
		var $parent = $(this).parent();

		if ($parent.hasClass('toggled-on')) {
			$parent.removeClass('toggled-on');
		} else {
			$parent.siblings('li').removeClass('toggled-on');
			$parent.addClass('toggled-on');
		}

	});

	jQuery(document).ready(function() {

		// World and London map
		var mapContainer = document.getElementById('mapContainer');
		var $map_popup_active = $('.map-popup-active');


		if ($body.hasClass('page-template-map-london') || $body.hasClass('page-template-map-london-sub')) {
			var map_width = 600;
		} else {
			var map_width = 800;
		}

		if (mapContainer) {

			if ($map_popup_active.length > 0) {
				var mapScroll = ((parseInt($map_popup_active[0].style['left']) / 100) * map_width) - (mapContainer.offsetWidth / 2);
			} else {
				var mapScroll = (map_width - mapContainer.offsetWidth) / 2;
			}
		
			mapContainer.scrollLeft = mapScroll;
		}

		//

		function resizeSidebar() {

			$('.menu-sidebar-menu-container').css({
				'min-height' : 0
			});

			// Automatically size sidebar menu
			var sidebar_menu_min_height = 0;
			$('#menu-sidebar-menu > li > .sub-menu').each(function() {
				//console.log(this.scrollHeight);
				if (this.scrollHeight > sidebar_menu_min_height) {
					sidebar_menu_min_height = this.scrollHeight;
				}
			});
			sidebar_menu_min_height += 40;

			$('.menu-sidebar-menu-container').css({
				'min-height' : sidebar_menu_min_height + 'px'
			});

			// Automatically show/hide sidebar form

			var $sidebar = document.querySelector('.sidebar');
			if (document.querySelector('.main-content .entry-content') && $sidebar) {
				if (document.querySelector('.main-content .entry-content').offsetHeight > (sidebar_menu_min_height + 320)) {
					$sidebar.classList.add('show-form');
				} else {
					$sidebar.classList.remove('show-form');
				}
			}

		}

		resizeSidebar();

		var resizeSidebarTimer;
		$(window).on('resize', function(e) {
			clearTimeout(resizeSidebarTimer);
			resizeSidebarTimer = setTimeout(resizeSidebar, 100);
		});

		// Infield labels

		function activateLabel(el) {
			var $this = $(el);
			var label = $this.closest('.form-group, li').find('label.infield, label.gfield_label'); 

			if($this.val()) {
				label.addClass('active');
			} else {
				label.removeClass('active');
			}
		}

		$(document).on('focus', '.form-control, input', function() {

			var label = $(this).closest('.form-group, li').find('label.infield, label.gfield_label');
			label.addClass('active');

		});

		$(document).on('blur', '.form-control, input', function() {
			activateLabel(this);
		});

		$('.form-control, input')/*.focus(function() {
			var label = $(this).closest('.form-group, li').find('label.infield, label.gfield_label');
			label.addClass('active');

			console.log(label);
		}).blur(function() {
			activateLabel(this);
		})*/.each(function() {
			activateLabel(this);
		});

		// Create sidebar menu

		var sideNavHTML = "";
		var $headings = $('.entry-content h2');
		var useSubs = true;
		var wordpress_menu_mode = $('.menu-sidebar-menu-container').length > 0;

		var sidebar_first = $('.menu-sidebar-menu-container > ul > li:first-child > a').text();
		var n_sidebar_first_heading = 0;

		var $pageSidebar = $('.sidebar'); 
		var $sidebarNav = $('.sidebar-nav');

		var sidebar_nav_longest = 0;

		if (!$headings.length) {
			$headings = $('.entry-content h3');
			useSubs = false;
		}

		if ($headings.length) {
			sideNavHTML = ''; //<h3 class="heading-jump">Jump To</h3>';
			sideNavHTML += "<ul>";

			$headings.each(function(i) {

				var $this = jQuery(this);
				var inner = $this.text();			
				var id = $this.attr('id');

				if (inner == sidebar_first) {
					n_sidebar_first_heading = i;
				}

				if (inner.length > sidebar_nav_longest) {
					sidebar_nav_longest = inner.length;
				}

				if (!id) {
					id = 'heading' + i;
					$this.attr('id', id);
				}
				
				sideNavHTML += '<li><a href="#' + id + '">' + inner + '</a>';					

				if (useSubs == true) {
					var subs = $this.nextUntil('h2', 'h3');

					if (subs.length) {
						sideNavHTML += '<ul>';
					}

					subs.each(function(j) {

						var $sub = jQuery(this);
						var subinner = $sub.text();

						var subid = $sub.attr('id');

						if (subinner.length > sidebar_nav_longest) {
							sidebar_nav_longest = inner.length;
						}

						if (!subid) {
							var subid = 'subheading' + i + j;
							$sub.attr('id', subid);
						}

						sideNavHTML += '<li><a href="#' + subid + '">' + subinner + '</a>';

					});

					if (subs.length) { 
						sideNavHTML += '</ul>';
					}

				}

				sideNavHTML += '</li>'; 

			});		

			sideNavHTML += "</ul>";	

			//$sidebarNav.before('<h3 class="heading-jump">Jump To</h3>');
			$sidebarNav.append(sideNavHTML);

			if ($('.sidebar-nav li').length > 15) {
				$sidebarNav.addClass('sidebar-nav-small');
			}

			if (sidebar_nav_longest > 60) {
				$sidebarNav.addClass('sidebar-nav-smaller');
			}

		}

		// Setup scrollspy

		$pageSidebar.find('ul.menu > li > a').each(function() {
			var $this = $(this);
			$this.parent().attr('data-title', $this.text());
		});

		var titles = [];

		$pageSidebar.closest('.container').find('.entry-content').find('h2').each(function(i) { 

			var $this = $(this);
			
			if (wordpress_menu_mode) {
				var id = $this.text();

				var $anchor = $pageSidebar.find('li[data-title="' + id + '"]');
				var $prevAnchors = $anchor.prevAll();

			} else {
				var id = $this.attr('id');

				var $anchor = $('.sidebar-nav [href="#'+id+'"]');
				var $prevAnchors = $anchor.parent().prev().find('a');

			}		

			titles[i] = {
				id: id,
				element: $this,
				anchor: $anchor,
				prevAnchors: $prevAnchors
			}
		});

		// Do things on scroll

		var scroll = 0;
		var oldScroll = 0;

		var draw_interactive_sidebar = titles.length && $pageSidebar.length && $pageSidebar[0].offsetParent !== null;

		if (wordpress_menu_mode) {
			var active_class = 'current-menu-item';
		} else {
			var active_class = 'active';
		}

		var $contact_cta_1 = $('.contact-cta-1');
		if ($contact_cta_1.length) {
			var contact_cta_1_offset_top = $contact_cta_1.offset().top - window.innerHeight + 50;
			var contact_cta_1_offset_bottom = contact_cta_1_offset_top + (window.innerHeight / 2);// $contact_cta_1[0].offsetHeight;
		}

		//console.log(titles);
		//console.log(n_sidebar_first_heading);

		var last_timestamp = 0;
		var time_since_last_draw = 0;

		var fps = 30;
		var frame_length = 1000 / fps; 

	 	function draw(timestamp) {

	 		time_since_last_draw = time_since_last_draw + timestamp - last_timestamp;
	 		last_timestamp = timestamp;

	 		if (time_since_last_draw > frame_length) {

	 			time_since_last_draw = 0;

				oldScroll = scroll;
				scroll = window.pageYOffset; //window.scrollY; // IE Fix

				if (scroll < oldScroll) {
					$body[0].classList.add('scrolled-up');
				} else if (scroll > oldScroll) {
					$body[0].classList.remove('scrolled-up');
				}

				if ($contact_cta_1.length) {
					if (scroll > contact_cta_1_offset_top && scroll < contact_cta_1_offset_bottom) {
						$body[0].classList.add('animate-floating-btn');
					} else {
						$body[0].classList.remove('animate-floating-btn');
					}
				}

				if (scroll > 40) {
					$body[0].classList.add('header-fixed');
				} else {
					$body[0].classList.remove('header-fixed');
				}

				if (draw_interactive_sidebar) {

					for (var i=0; i < titles.length; i++) {
						var offset = titles[i].element.offset().top - 200;

						if (i==n_sidebar_first_heading && wordpress_menu_mode) {
							offset = -100;
						}

						if (scroll > offset) {

					    	if (titles[i].anchor.length) {
					    		titles[i].anchor[0].classList.add(active_class);
					    	}

					    	titles[i].prevAnchors.removeClass(active_class);

					    } else {

					    	if (titles[i].anchor.length) {
					    		titles[i].anchor[0].classList.remove(active_class);
					    	}

					    }
					}
				}

			}

			requestAnimationFrame(draw);
	  	}
		requestAnimationFrame(draw);




		// Zooming image carousel

		var $ro_items_img = document.querySelectorAll('.image-rotator .item');
		//var $ro_items = document.querySelectorAll('.rotator .item');

		var ro_n_last = $ro_items_img.length - 1;
		
		var ro_n = 1;
		var ro_n_prev = 0;

		//

		var ro_frame_length = 10000; //1000 / fps; 
		var ro_last_timestamp = 0;
		var ro_time_since_last_draw = 0;

	 	function draw2(timestamp) {

	 		ro_time_since_last_draw = ro_time_since_last_draw + timestamp - ro_last_timestamp;
			ro_last_timestamp = timestamp;

			if (ro_time_since_last_draw > ro_frame_length) {
				ro_time_since_last_draw = 0;

				/*document.querySelectorAll('.rotator .rotator-active').forEach(function(element) {
					element.classList.remove('rotator-active');
				});*/
			
				document.querySelectorAll('.item[data-rotator-id="' + ro_n + '"]').forEach(function(element) {
					element.classList.add('rotator-active');
				});

				document.querySelectorAll('.image-rotator .item').forEach(function(element) {

					if (element.dataset.rotatorId != ro_n && element.dataset.rotatorId != ro_n_prev) {
						element.classList.remove('rotator-active');
					}

				});

				if (ro_n == ro_n_last) {

					document.querySelectorAll('.image-rotator').forEach(function(element) {
						element.classList.add('animation-restart');
					});

					setTimeout(function() {
						document.querySelectorAll('.image-rotator .item:last-child').forEach(function(element) {
							element.classList.remove('rotator-active');
						});

						document.querySelectorAll('.image-rotator').forEach(function(element) {
							element.classList.remove('animation-restart');
						});
					}, 10800);

				}

				ro_n++;

				if (ro_n > ro_n_last) {
					ro_n = 0;
				}

				ro_n_prev = ro_n - 1;
				if (ro_n_prev < 0) {
					ro_n_prev = ro_n_last;
				}

			}

	 		requestAnimationFrame(draw2);

		}

		//requestAnimationFrame(draw2);

		$(document).ready(function() {
			setTimeout(function() {
				requestAnimationFrame(draw2);
			}, 4000);
		});


		/* Scroll anchor links */

		document.addEventListener('click', function(event) {
		    for (var target = event.target; target && target != this; target = target.parentNode) {
		        if (target.matches('a:not([data-modal])')) {
		            var href = target.getAttribute('href');
		            if (href.substring(0,1) == '#') {
						event.preventDefault();

						document.querySelector(href).scrollIntoView({
							behavior: 'smooth'
						});


					}
		            break;
		        }
		    }
		}, false);

		/* Animation */

		/*let animationObserver = new IntersectionObserver(
		(entries, observer) => { 
			entries.forEach(entry => {
			    if (entry.isIntersecting) {
			    	observer.unobserve(entry.target);
			    	entry.target.classList.remove('animate-hidden')
			    }
			});
		}, 
		{
			root: null,
			rootMargin: "0px 0px -10% 0px"
		});

		document.querySelectorAll('.animate').forEach(element => { 
			animationObserver.observe(element);
		});*/

		/* Lazyload Images */

		try {

			let lazyloadObserver = new IntersectionObserver(function(entries, observer) { 

				entries.forEach(function(entry) {

				    if (entry.isIntersecting) {

				    	observer.unobserve(entry.target);

				    	//console.log(entry.target.nodeName);

				    	if (entry.target.nodeName == 'IMG' || entry.target.nodeName == 'IFRAME') {
				    		entry.target.src = entry.target.dataset.src;
				    	} else {

				    		//if ($window.width() >= 1024) {			    		
					    		var $this = $(entry.target);
								$this.css('background-image', "url(" + $this.data('src') + ")");
					    	//}

				    	}

				    }

				});

			}, 
			{
				root: null,
				rootMargin: "0px 0px 50% 0px"
			});

			document.querySelectorAll('[data-src]').forEach(function(img) {
				lazyloadObserver.observe(img);
			});

		} catch (error) {

			console.log('intersection observer not supported');

			$('*[data-src]').each(function() {

				var $this = $(this);

				if ($this[0].nodeName == 'IMG' || $this[0].nodeName == 'IFRAME') {
					$this.attr('src', $this.data('src'));
				} else {
					$this.css('background-image', "url(" + $this.data('src') + ")");
				}

			});

		}

		// Slick sliders

		$('.section-consultation .items').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: true,
			infinite: true,
			//fade: true,
			pauseOnHover: true,
			//swipe: false,
			adaptiveHeight: false,
			autoplay: false, //true,

			responsive: [{
                    breakpoint: 568,
                    settings: {
                    	dots: false,
                    	arrows: false
                    }
                }
            ]
		});

		//

		$('.post-grid-slider .row').slick({
            slidesToShow: 1,
            swipe: true,
            infinite: false,
            dots: false,
            autoplay: false,
            adaptiveHeight: false,
            arrows: false,
            mobileFirst: true,
            touchThreshold: 20,
            responsive: [{
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 2,
                        dots: true,
                        arrows: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        dots: true,
                        arrows: true
                    }
                }
            ]
        });

        //

        if (window.innerWidth < 768) {

        	$('.reviews-grid-slider .item-video').detach().appendTo('.mobile-videos');

        	if ($('.reviews-grid-slider .item-scenario').length > 1) {

		        $('.reviews-grid-slider').slick({
		            slidesToShow: 1,
		            swipe: true,
		            infinite: true,
		            dots: true, //false,
		            arrows: true, //false,
		            autoplay: false,
		            adaptiveHeight: true,
		            
		            mobileFirst: true,
		            touchThreshold: 20,

		            //variableWidth: true,

		            responsive: [{
		                    breakpoint: 768,
		                    settings: "unslick"
		                }
		            ]
		        });

		    }

	    }

		//

		$('.team-slider .row').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: true,
            //swipeToSlide: true,
            infinite: false,
            dots: false,
            autoplay: false,
            adaptiveHeight: false,
            arrows: false,
            mobileFirst: true,
            touchThreshold: 20,
            responsive: [
            	{
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: true
                    }
                },
                {
                	breakpoint: 1200,
                	settings: {
                		slidesToShow: 4,
                		slidesToScroll: 2,
                		dots: true,
                        arrows: true
                	}
                },
                {
                	breakpoint: 1700,
                	settings: {
                		slidesToShow: 5,
                		slidesToScroll: 2,
                		dots: true,
                        arrows: true
                	}
                }
            ]
        });

        //

        /*$('.accreds-items').slick({
            slidesToShow: 2,
            swipe: true,
            infinite: false,
            dots: false,
            autoplay: false,
            adaptiveHeight: false,
            arrows: false,
            mobileFirst: true,
            touchThreshold: 20,
            responsive: [
            	{
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });*/

        //

        $('.faq-slider').slick({
            slidesToShow: 1,
            swipe: true,
            infinite: false,
            dots: true,
            autoplay: false,
            adaptiveHeight: true,
            arrows: true,
            mobileFirst: true,
            touchThreshold: 20,
            responsive: [{
                    breakpoint: 568,
                    settings: {
                    	//slidesToShow: 2
                    	adaptiveHeight: false
                    }
                }
            ]
        });

		//

		/*$('.section-cta .cta-items .row').slick({
            slidesToShow: 1,
            swipe: true,
            infinite: false,
            dots: true,
            autoplay: false,
            adaptiveHeight: false,
            arrows: false,
            mobileFirst: true,
            touchThreshold: 20,
            responsive: [{
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1600,
                    settings: "unslick"
                }
            ]
        });*/

		// Simple accordion

		/*$('.accordion-title').click(function() {

			var $self = $(this);
			var $accordion = $self.closest('.accordion');

			if ($self.hasClass('active')) {
				$self.next('.accordion-content').slideUp();
				$self.removeClass('active'); 
			} else {	
				$accordion.find('.accordion-content').slideUp();
				$accordion.find('.accordion-title').removeClass('active');

				$self.next('.accordion-content').slideDown();
				$self.addClass('active');
			}
			
		});*/

		/* Modals */

		var $modalContainer = $('.modal-container');

		$(document).on('click', '.modal-close', function() {			
			$modalContainer.removeClass('modal-active');
		});

		function modalContainerPadding($el) {

			var modalHeight = $el.find('.modal').outerHeight();
			var paddingTopOffset = (window.innerHeight - modalHeight) / 2;

			if (paddingTopOffset < 0) {
				paddingTopOffset = 0;
			}

			// Ensure modal cannot go beyond bottom of the screen
			if (window.pageYOffset + paddingTopOffset + modalHeight > document.documentElement.offsetHeight) {
				paddingTopOffset = document.documentElement.offsetHeight - window.pageYOffset - modalHeight;
			}

			$el.css({
				'padding-top' : window.pageYOffset + paddingTopOffset + 'px',
			});

			setTimeout(function() {

				document.querySelector('.modal-active .modal').scrollIntoView({ 
					behavior: "smooth"
				});

			}, 1000);

			/**/

		}

		$(document).bind('gform_post_render', function(e, form_id){
			setTimeout(function() {
				modalContainerPadding($('.modal-container.modal-active'));

				if (form_id == 14 && $body.hasClass('home')) {
					window.scrollTo({
						top: 0,
						behavior: 'smooth'
					});
				}

			}, 150);
				
			//console.log('form id: ' + form_id);
			//console.log(e);
			//console.log('gravity form submitted');
			
		});

		$(document).on('click', '[data-modal]', function(event) {

			event.preventDefault();

			var $this = $(this);
			var href = $this.attr('href');

			if (href) {
				var id = href;
			} else {
				var id = $this.data('modal');
			}			

			var $id = $(id);

			$modalContainer.removeClass('modal-active');
			
			modalContainerPadding($id);

			$id.addClass('modal-active'); 

			var $iframe = $id.find('iframe');
			var src = $iframe.data('src');
			$iframe.attr('src', src);

			//

			if ($this.closest('.section-team .post').length > 0 || $this.closest('.section-team-slider').length > 0) {
				var modalSendTo = $this.closest('.post').find('.post-title').text();

				$('*[data-modal-recipient]').text('to ' + modalSendTo);
				$('input[name="enquiry-lawyer"]').val(modalSendTo);

				$('.chosenlawyer input').val(modalSendTo);

			} else {
				$('*[data-modal-recipient]').text('');
				$('input[name="enquiry-lawyer"]').val('');

				$('.chosenlawyer input').val('');
			}

		});


		$(document).on('click', '.modal-container:not(.modal-form-container)', function(event) {
			if (!$(event.target).closest('.modal').length) {
				$modalContainer.removeClass('modal-active');
			}
		});

		$(document).keyup(function(e) {
			if (e.keyCode == 27) { // escape key maps to keycode 27
			    $modalContainer.removeClass('modal-active');
			}
		});	


		/* Expanding form */

		$(document).on('focus', '.expanding-form input, .expanding-form textarea', function() {
			$('.expanding-form').addClass('active');
		});

		$(document).on('click', '.expanding-form button[type="button"]', function() {
			jQuery('.expanding-form').addClass('active');
		});

		jQuery('.expanding-form .close').click(function() {
			$('.expanding-form').removeClass('active');
			//jQuery('.expanding-form .expander').slideUp(200);
		});

	});

})(jQuery);