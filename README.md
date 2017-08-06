/**
 * File navigation.js.
 */
( function( $ ) {

	// ...other code

	// make images with class ".extra-wide-img" appear full-screen
	$(document).ready(function(){
		$("img").wrap("<figure class='extra-wide-img'></figure>");
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
