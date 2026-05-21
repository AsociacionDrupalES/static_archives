/**
 * @file
 * Custom Code of the javascript behaviour.
 */

(function ($, Drupal, once) {
  Drupal.behaviors.PromBehavior = {
    attach: function (context, settings) {

      once('PromBehavior', 'html', context).forEach(function (element) {
        // Apply the myCustomBehaviour effect to the elements only once.
      });
      // Manejar el evento click del botón de pestaña
      $(".tab-button").on("click", function () {
        var tabId = $(this).data("tab");

        // Ocultar todos los contenidos de pestañas
        $(".tabs-content .tab-content").removeClass("active");

        // Mostrar el contenido de la pestaña seleccionada
        $("#" + tabId).addClass("active");

        // Cambiar la clase activa del botón de pestaña
        $(".tab-button").removeClass("active");
        $(this).addClass("active");
      });
      
      /*** Modal ***/
      var titles = $('table tbody td .speech .title');
      
      titles.each(function () {
          var title = $(this);
          var fatherTitle = title.parent('.speech');
          var hasSiblingModal = fatherTitle.siblings('.content-modal').length > 0;

          if (!hasSiblingModal) {
            // If you don't have a sibling with class "modal", we disable click on title
            title.css("pointer-events", "none");
          }
        });
      
      $("table tbody td .speech .title").click(function () {
        $(this).parents(".speech").siblings(".content-modal").addClass("active");
        $("body").addClass("body-frozen");
      });

      $(".close").click(function () {
        $(".content-modal").removeClass("active");
        $("body").removeClass("body-frozen");
      });

      $("body").keyup(function (e) {
        if (e.keyCode == 27) {
          $(".content-modal").removeClass("active");
          $("body").removeClass("body-frozen");
        }
      });

			$(document).click(function (event) {
				if (
					!$(event.target).closest(".content-modal, table tbody td .speech .title")
						.length
				) {
					$(".content-modal").removeClass("active");
					$("body").removeClass("body-frozen");
				}
			});


    }
  };
})(jQuery, Drupal, once);

;
