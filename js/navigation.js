/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function( $ ) {

	// $(document).ready(function(){
	// 	$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").removeClass("toggle-on");
	// 	$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").siblings(".sub-menu").removeClass("toggled-on");
	// });
	
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );

	function initMainNavigation( container ) {
		// Add dropdown toggle that display child menu items.
		container.find( '.menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

		// Toggle buttons and submenu items with active children menu items.
		// container.find( '.current-menu-ancestor > button' ).addClass( 'toggle-on' );
		// container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

		container.find( '.dropdown-toggle' ).click( function( e ) {
			// $("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").removeClass("toggle-on");
			// $("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").siblings(".sub-menu").removeClass("toggled-on");
			var _this = $( this );
			e.preventDefault();
			_this.toggleClass( 'toggle-on' );
			_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
		} );
	}
	$(window).click(function(event) {
		var otherFirstLevelSubmenus = $("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").siblings(".sub-menu.toggled-on");
		var target = $( event.target );

		if(!target.is(".dropdown-toggle") && ($(".menu-toggle").css("display") == "none")) {
			$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").removeClass("toggle-on");
			$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").siblings(".sub-menu").removeClass("toggled-on");
		};
		if (target.is(".dropdown-toggle") && (otherFirstLevelSubmenus.length > 1)) {
			$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").removeClass("toggle-on");
			$("ul.nav-menu").children(".menu-item-has-children").children(".dropdown-toggle").siblings(".sub-menu").removeClass("toggled-on");
			$(event.target).addClass("toggle-on");
			$(event.target).siblings(".sub-menu").addClass("toggled-on");
		}
	});
	initMainNavigation( $( '.main-navigation' ) );

	// Re-initialize the main navigation when it is updated, persisting any existing submenu expanded states.
	// $( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {
	// 	if ( 'primary' === params.wpNavMenuArgs.theme_location ) {
	// 		initMainNavigation( params.newContainer );
	//
	// 		// Re-sync expanded states from oldContainer.
	// 		params.oldContainer.find( '.dropdown-toggle.toggle-on' ).each(function() {
	// 			var containerId = $( this ).parent().prop( 'id' );
	// 			$( params.newContainer ).find( '#' + containerId + ' > .dropdown-toggle' ).triggerHandler( 'click' );
	// 		});
	// 	}
	// });
	// Hide or show toggle button on scroll
	var position, direction, previous;
	$(window).scroll(function() {
		if ($(this).scrollTop() >= position) {
			direction = "down";
			if (direction !==previous) {
				$(".menu-toggle").addClass('ishidden');
				previous = direction;
			}
		} else {
			direction = "up";
			if (direction !== previous) {
				$(".menu-toggle").removeClass("ishidden");
				previous = direction;
			}
		}
		position = $(this).scrollTop();
	});

	// make images with class ".extra-wide-img" appear full-screen
	$(document).ready(function(){
		$(".full-width-img").wrap("<figure class='extra-wide-img'></figure>");
		$("figure.extra-wide-img").each(function(){
			if ($(this).children("img").attr("width") > $(this).children("img").width()){
				var containerMargins = $(".container").css("marginRight").replace(/[^-\d\.]/g, '');
				var containerPadding = $(".container").css("paddingRight").replace(/[^-\d\.]/g, '');
				var calc = $(".container").width() + (Number(containerMargins) + Number(containerPadding))*2;
				$(this).css({"maxWidth": `${calc}px`, "margin": `1em -${Number(containerMargins) + Number(containerPadding)}px`});
			}
		});
	});

} )(jQuery);
