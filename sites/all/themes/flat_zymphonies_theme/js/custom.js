/* --------------------------------------------- 

* Filename:     custom.js
* Version:      1.0.0 (2015-11-07)
* Website:      http://www.zymphonies.com
                http://www.freebiezz.com
* Description:  System JS
* Author:       Zymphonies Dev Team
                info@zymphonies.com

-----------------------------------------------*/

jQuery(document).ready(function($) {

  //Accordion
  $( "#accordion" ).accordion({ heightStyle: 'content' });

  //Tab
  $( "#tabs" ).tabs();
  
  $('.social-icons li').each(function(){
    var url = $(this).find('a').attr('href');
    if(url == ''){
     $(this).hide();
    }
  });

  $('.nav-toggle').click(function() {
    $('#main-menu div ul:first-child').slideToggle(250);
    return false;
  });
  
  if( ($(window).width() > 640) || ($(document).width() > 640) ) {
      $('#main-menu li').mouseenter(function() {
        $(this).children('ul').css('display', 'none').stop(true, true).slideToggle(250).css('display', 'block').children('ul').css('display', 'none');
      });
      $('#main-menu li').mouseleave(function() {
        $(this).children('ul').stop(true, true).fadeOut(250).css('display', 'block');
      })
        } else {
    $('#main-menu li').each(function() {
      if($(this).children('ul').length)
        $(this).append('<span class="drop-down-toggle"><span class="drop-down-arrow"></span></span>');
    });
    $('.drop-down-toggle').click(function() {
      $(this).parent().children('ul').slideToggle(250);
    });
  }

  $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
              $('html,body').animate({
                  scrollTop: target.offset().top
              }, 1000);
              return false;
          }
      }
  });
 
});
/*
(function ($, Drupal) {

  "use strict";
	try {
  Drupal.behaviors.openlayers = {
      attach: function (context, settings) {
        Drupal.openlayers.pluginManager.attach(context, settings);

        $('.openlayers-map:not(.asynchronous)', context).once('openlayers-map', function () {
          var map_id = $(this).attr('id');
          if (Drupal.settings.openlayers.maps[map_id] !== undefined) {
            Drupal.openlayers.processMap(map_id, context);
          }
        });

        // Create dynamic callback functions for asynchronous maps.
        $('.openlayers-map.asynchronous', context).once('openlayers-map.asynchronous', function () {
          var map_id = $(this).attr('id');
          if (Drupal.settings.openlayers.maps[map_id] !== undefined) {
            Drupal.openlayers.asyncIsReadyCallbacks[map_id.replace(/[^0-9a-z]/gi, '_')] = function () {
              Drupal.openlayers.asyncIsReady(map_id);
            };
          }
        });
      },
      detach: function (context, settings) {
        Drupal.openlayers.pluginManager.detach(context, settings);
      }
  };
   } catch (e) {}
}(jQuery, Drupal));*/