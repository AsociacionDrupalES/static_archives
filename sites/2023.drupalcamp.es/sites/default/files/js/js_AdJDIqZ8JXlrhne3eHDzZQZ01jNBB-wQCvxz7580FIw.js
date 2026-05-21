/**
 * @file
 * Da Vinci Custom Code of the javascript behaviour.
 */

(function ($, Drupal, once) {
  Drupal.behaviors.dvBehavior = {
    attach: function (context, settings) {

			$('.plat-group').each(function() {
				var $thisGroup = $(this);
				var $pElements = $thisGroup.find('p');

				$pElements.sort(function() {
					return Math.random() - 0.5;
				});
        $pElements.detach().appendTo($thisGroup);
				// Quitar opacidad después de reorganizar con una animación
				$thisGroup.animate({ opacity: 1 }, 500); // 1000ms es la duración de la animación
		  });


		  $('.accordion-list > li > .answer').hide();
				
			$('.accordion-list h2').click(function() {
				if ($(this).parent().hasClass("active")) {
					$(this).parent().removeClass("active").find(".answer").slideUp();
				} else {
					$(".accordion-list > li.active .answer").slideUp();
					$(".accordion-list > li.active").removeClass("active");
					$(this).parent().addClass("active").find(".answer").slideDown();
				}
				return false;
		  });

      once('dvBehavior', 'html', context).forEach(function (element) {
        // Apply the myCustomBehaviour effect to the elements only once.
      });

      $(window).on('resize.rwdElements orientationchange', function () {
        if (window.matchMedia('(min-width: 1170px)').matches) {
          $('.menu-camp .bg-faq').after($('.language-switcher-language-url'));
        }else if(window.matchMedia('(max-width: 1169px)').matches){
          $('.menu-camp .bg-ticket').after($('.language-switcher-language-url'));
          $(".burger-menu").removeClass('active');
          $(".menu-camp").removeClass('mobile');
          $("body").removeClass('freeze');
        }
      });

      // Trigger the check for the windows width.
      $(window).trigger('resize.rwdElements');



    }
  };
})(jQuery, Drupal, once);
;
/**
 * @file
 * JS file for status messages block.
 */

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.statusMessages = {
    attach: function (context, settings) {
      var time = 10000;
      $(document).ready(function () {
        // Close status message after some seconds.
        if (time === null) {
          time = '5000';
        }
        setTimeout(function () {
          $('.simple-status-messages').fadeOut('slow');
        }, time);

        // When a close button is clicked hide this message.
        $('.simple-status-messages .status-messages .status-message-close').click(function () {
          $(this).parent().fadeOut('slow');
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);

;
/**
 * @file
 * Your custom code into javascript behaviour.
 */

(function ($, Drupal, once) {


setTimeout(function() {
$(".burger-menu").on( "click", function( event ) {
	$(this).toggleClass('active');
  $(".menu-camp").toggleClass('mobile');
  $("body").toggleClass('freeze');
});
$(".disable-sub").on( "click", function( event ) {
  event.preventDefault();
});

$('#slider-scroller').slick({
	infinite: true,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 0,
	cssEase: "linear",
	pauseOnHover: true,
  speed: 7000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
				infinite: true,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 0,
				cssEase: "linear",
				pauseOnHover: true,
				speed: 7000,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
    		arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 7000,
        cssEase: "linear",
        pauseOnHover: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

}, 650);


})(jQuery, Drupal, once);

;
