(function ($) {

  Drupal.leaflet_widget = Drupal.leaflet_widget || {};

  Drupal.behaviors.geofield_widget = {
    attach: function (context, settings) {
      // Ensure we've set the default icon path to the leaflet library.
      L.Icon.Default.imagePath = settings.leaflet_widget.defaultIconPath;
	  
	  
	  $(document).ready(function() {
        if (context == document) {
          // If there are vertical tabs the widget should refresh when swapping between them.
          if ($('.multipage-panes').length > 0 && $('.multipage-pane').length > 0) {
            var refresh = function() {
              $('.multipage-panes').find('.multipage-pane').each(function(key, pane){
                // Check pane is visible and refresh widget if it is.
                if ($(pane).is(':visible')) {
                  $(pane).find('.leaflet-widget').each(function(key, map) {
					  
                    var map_widget = Drupal.leaflet_widget[$(map).attr('id')];
                    if(map_widget != undefined) {
                      map_widget.invalidateSize();
                      map_widget.fitBounds(map_widget.widget.vectors.getBounds());
                    }
                  });
                }
              });
            };

            // Refresh current vertical tab.
            refresh();

            // Refresh when changing to a different vertical tab.
            $('.multipage-panes').find('.multipage-link-next').each(function(key, tab){
              $(tab).bind('click', refresh);
            });
          }
        }
      });



      $('.leaflet-widget').once().each(function (i, item) {
        var id = $(item).attr('id'),
          options = settings.leaflet_widget_widget[id];

        L.Util.extend(options.map, {
          layers: [L.tileLayer(options.map.base_url)]
        });

        var map = L.map(id, options.map);
        map.widget.enable();

        // Serialize data and set input value on submit.
        $(item).parents('form').bind('submit', $.proxy(map.widget.write, map.widget));

        Drupal.leaflet_widget[id] = map;

        // Geocoder handling.
        $('.field-widget-leaflet-widget-widget a.geocoder-submit', context).bind('click.leaflet_widget_geocoder', function (event) {
          event.preventDefault();
          Drupal.behaviors.geofield_widget.geocoder(id);
          return false;
        });
        $('.field-widget-leaflet-widget-widget :input.geocoder', context).bind('keydown.leaflet_widget_geocoder', function (event) {
          // React to Tab, Enter, Esc.
          if ($.inArray(event.keyCode, [9, 13, 27]) > -1) {
            event.preventDefault();
            event.stopPropagation();
            event.stopImmediatePropagation();
            Drupal.behaviors.geofield_widget.geocoder(id);
          }
        });
      });
    },

    geocoder: function (id) {
      var elem = $(':input.geocoder', $('#' + id ).parent());
      var handler = Drupal.settings.leaflet_widget_widget[id].geocoder.handler;
      var map = Drupal.leaflet_widget[id];
      var url = location.protocol + '//' + location.host + Drupal.settings.basePath + 'geocoder/service/' + handler+ '?output=json&data=' + Drupal.encodePath(elem.val());

      var throbber = $('<div class="ajax-progress ajax-progress-throbber"><div class="throbber">&nbsp;</div></div>');
      elem.after(throbber);

      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data, textStatus, jqXHR) {
          if (textStatus == 'success') {
            var latlng = [data.coordinates[1], data.coordinates[0]];
            var add = !map.widget._full;
            if (!add) {
              if((add = confirm(Drupal.t('The maximum cardinality is reached.\nDo you want to replace last item by the new one?')))) {
                map.removeLayer(map.widget.vectors.getLayers()[0]);
                add = !map.widget._full;
              }
            }
            if (add) {
              map.fire(
                'draw:marker-created',
                { marker: new L.Marker(latlng, { icon: map.drawControl.handlers.marker.options.icon }) }
              );
              map.fitBounds(map.widget.vectors.getBounds());
            }
          }
          else {
            alert(Drupal.t('No valid geo reference found.'));
          }
        },
        complete: function() {
          // Remove the progress element.
          if (throbber) {
            $(throbber).remove();
          }
        }
      });
    }
  }

}(jQuery));
