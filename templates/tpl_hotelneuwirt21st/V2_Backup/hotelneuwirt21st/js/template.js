/*! Joe Troppmair Joomla! Templates (C) 2020 */

/*! Sidebar MENÜ mit Bootstrap mobiles Menue */
	jQuery(document).ready(function($) {

		$("[data-trigger]").on("click", function(e){
			e.preventDefault();
			e.stopPropagation();
			var offcanvas_id =  $(this).attr('data-trigger');
			$(offcanvas_id).toggleClass("show");
			$('body').toggleClass("offcanvas-active");
			$(".screen-overlay").toggleClass("show");
		}); 

		// Close menu when pressing ESC
		$(document).on('keydown', function(event) {
			if(event.keyCode === 27) {
			   $(".offcanvas").removeClass("show");
			   $("body").removeClass("overlay-active");
			}
		});

		$(".btn-close, .screen-overlay").click(function(e){
			$(".screen-overlay").removeClass("show");
			$(".offcanvas").removeClass("show");
			$("body").removeClass("offcanvas-active");
		}); 
		
	});

/*! Text aus/einschalten */
	jQuery(document).ready(function($){
		$('.text_off_link').click(function(){
	    	$('#text_off').toggle('200');
	    });
	});

/*! Bild tauschen */
	jQuery(document).ready(function($){
		$('#bildwechsel').click(function(){
			var tpl = 'hotelneuwirt21st';
			var pfadoff = "/templates/" + tpl + "/images/text_off.png";
			var pfad =	  "/templates/" + tpl + "/images/text_on.png";
				$(this).attr("src",$(this).attr('src') == pfad ? pfadoff : pfad);
		});
	});
	
/*! OFF-CANVAS 1 MENÜ ohne Bootstrap */
	function openNav() {
	  document.getElementById("myNav").style.height = "100%";
	}
	function closeNav() {
	  document.getElementById("myNav").style.height = "0%";
	}
	



/*! Multi Slider BS5 */
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 3
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
