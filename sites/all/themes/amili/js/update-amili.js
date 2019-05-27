	$(document).ready(function() {



		if($('#filter-container-all').length){

			var container = $('#filter-container-all');	

						container.isotope({

							animationEngine : 'best-available',

							animationOptions: {

								duration: 200,

								queue: false

							},

							layoutMode: 'fitRows',

							itemSelector : '.element'

						});	

						// filter items when filter link is clicked

					  var $optionSets = $('#options .option-set'),

						  $optionLinks = $optionSets.find('a');



					  $optionLinks.click(function(){

						var $this = $(this);

						// don't proceed if already selected

						if ( $this.hasClass('selected') ) {

						  return false;

						}

						var $optionSet = $this.parents('.option-set');

						$optionSet.find('.selected').removeClass('selected');

						$this.addClass('selected');

				  

						// make option object dynamically, i.e. { filter: '.my-filter-class' }

						var options = {},

							key = $optionSet.attr('data-option-key'),

							value = $this.attr('data-option-value');

						// parse 'false' as false boolean

						value = value === 'false' ? false : value;

						options[ key ] = value;

						if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

						  // changes in layout modes need extra logic

						  changeLayoutMode( $this, options )

						} else {

						  // otherwise, apply new options

						  container.isotope( options );

						}

						

						return false;

					  });

						

						function splitColumns() { 

						var winWidth = $(window).width(), 

							columnNumb = 1;

						if (winWidth > 1200) {

							columnNumb = 5;

						} else if (winWidth > 900) {

							columnNumb = 4;

						} else if (winWidth > 600) {

							columnNumb = 2;

						} else if (winWidth > 300) {

							columnNumb = 1;

						}

						return columnNumb;

						}		

						

						function setColumns() { 

						var winWidth = $(window).width(), 

							columnNumb = splitColumns(), 

							postWidth = Math.floor(winWidth / columnNumb);

						container.find('.element').each(function () { 

							$(this).css( { 

								width : postWidth + 'px' 

							});

						});

						}		

						function setProjects() { 

						setColumns();

						container.isotope('reLayout');

						}			

						

						function loadIsotope(){

						container.imagesLoaded(function () {setProjects();});

						setProjects();

						}

							

						/* RESIZE */

						function resizedw(){

							setProjects();

						}

						

						var doit;

						$(window).bind('resize', function () { 

							clearTimeout(doit);

							doit = setTimeout(resizedw, 500);

						});		



						loadIsotope();	

		}
	//PORTFOLIO FILTER ISOTOPE----------------------------------------------------------------

				// if($('#filter-container').length){

				// 	$(function(){ 	

				// 	  var $container = $('#filter-container');



				// 	  $container.isotope({

				// 		itemSelector : '.element'

				// 	  });


				// 	  var $optionSets = $('#options .option-set'),

				// 		  $optionLinks = $optionSets.find('a');

				// 	  $optionLinks.click(function(){

				// 		var $this = $(this);

				// 		// don't proceed if already selected

				// 		if ( $this.hasClass('selected') ) {

				// 		  return false;

				// 		}

				// 		var $optionSet = $this.parents('.option-set');

				// 		$optionSet.find('.selected').removeClass('selected');

				// 		$this.addClass('selected');

				  

				// 		// make option object dynamically, i.e. { filter: '.my-filter-class' }

				// 		var options = {},

				// 			key = $optionSet.attr('data-option-key'),

				// 			value = $this.attr('data-option-value');

				// 		// parse 'false' as false boolean

				// 		value = value === 'false' ? false : value;

				// 		options[ key ] = value;

				// 		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

				// 		  // changes in layout modes need extra logic

				// 		  changeLayoutMode( $this, options )

				// 		} else {

				// 		  // otherwise, apply new options

				// 		  $container.isotope( options );

				// 		}

						

				// 		return false;

				// 	  });	  

				// 	});	

				// 	}	
				if($('#filter-container').length){
				  var $container = $('#filter-container').imagesLoaded( function() {
					  $container.isotope({
						itemSelector : '.element'
					  });
				  });
					  
					  
					  var $optionSets = $('#options .option-set'),
						  $optionLinks = $optionSets.find('a');

					  $optionLinks.click(function(){
						var $this = $(this);
						// don't proceed if already selected
						if ( $this.hasClass('selected') ) {
						  return false;
						}
						var $optionSet = $this.parents('.option-set');
						$optionSet.find('.selected').removeClass('selected');
						$this.addClass('selected');
				  
						// make option object dynamically, i.e. { filter: '.my-filter-class' }
						var options = {},
							key = $optionSet.attr('data-option-key'),
							value = $this.attr('data-option-value');
						// parse 'false' as false boolean
						value = value === 'false' ? false : value;
						options[ key ] = value;
						if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
						  // changes in layout modes need extra logic
						  changeLayoutMode( $this, options )
						} else {
						  // otherwise, apply new options
						  $container.isotope( options );
						}
						
						return false;
					  });
				}
			// Carousel Blog Items---------------------------------------------	

				if ($('#owl-blog').length){			 

				  $("#owl-blog").owlCarousel({				 

					  //Set AutoPlay to 3 seconds



					  items : 4,

					  itemsDesktop : [1000,4], //5 items between 1000px and 901px

					  itemsDesktopSmall : [900,2], // betweem 900px and 601px

					  itemsTablet: [470,1], //2 items between 600 and 0

					  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

					 // itemsDesktop : [1199,4],

					 // itemsDesktopSmall : [991,1],

					 // itemsTablet: [991,1],

					 // itemsMobile : false,

					  

					  //Pagination

						pagination : false,

						paginationNumbers: false,

				  });

				}

				if ($('.owl-carousel.3item').length){			 

				  $(".owl-carousel.3item").owlCarousel({				 

					  //Set AutoPlay to 3 seconds



					  items : 3,

					  itemsDesktop : [1000,4], //5 items between 1000px and 901px

					  itemsDesktopSmall : [900,2], // betweem 900px and 601px

					  itemsTablet: [470,1], //2 items between 600 and 0

					  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

					 // itemsDesktop : [1199,4],

					 // itemsDesktopSmall : [991,1],

					 // itemsTablet: [991,1],

					 // itemsMobile : false,

					  

					  //Pagination

						pagination : false,

						paginationNumbers: false,

				  });

				}

			// Carousel Blog Items Controls------------------------------------

				if ($('.owl-carousel.3item').length){

					var owlbl = $(".owl-carousel.3item");

					  owlbl.owlCarousel();

					  // Custom Navigation Events

					  $(".next-blog").click(function(){

						$(".owl-carousel.3item").trigger('owl.next');

					  })

					  $(".prev-blog").click(function(){

						$(".owl-carousel.3item").trigger('owl.prev');

					  })

					}

				if ($('#owl-blog').length){

					var owlbl = $("#owl-blog");

					  owlbl.owlCarousel();

					  // Custom Navigation Events

					  $(".next-blog").click(function(){

						$("#owl-blog").trigger('owl.next');

					  })

					  $(".prev-blog").click(function(){

						$("#owl-blog").trigger('owl.prev');

					  })

					  $(".play").click(function(){

						owl.trigger('owl.play',1000);

					  })

					  $(".stop").click(function(){

						owl.trigger('owl.stop');

					  })

					}

			// Carousel Portfolio Items Controls------------------------------------	

				if($('#owl-portfolio').length){			  

					  var owl2 = $("#owl-portfolio");



					 

					  // Custom Navigation Events

					  $(".next-portfolio").click(function(){

						owl2.trigger('owl.next');

					  });

					  $(".prev-portfolio").click(function(){

						owl2.trigger('owl.prev');

					  });

					  $(".play").click(function(){

						owl2.trigger('owl.play',1000);

					  });

					  $(".stop").click(function(){

						owl2.trigger('owl.stop');

					  });	

					  }				  

			// Carousel PORTFOLIO Items---------------------------------------------

				if($("#owl-portfolio").length){

					$("#owl-portfolio").owlCarousel({

		 

					  //Set AutoPlay to 3 seconds

				 

					  items : 3,

					  itemsDesktop : [1000,3], //5 items between 1000px and 901px

					  itemsDesktopSmall : [900,2], // betweem 900px and 601px

					  itemsTablet: [470,1], //2 items between 600 and 0

					  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

					 // itemsDesktop : [1199,4],

					 // itemsDesktopSmall : [991,1],

					 // itemsTablet: [991,1],

					 // itemsMobile : false,

					  

					  //Pagination

						pagination : false,

						paginationNumbers: false,

				 

				  });

				}

			// Carousel TESTIMONIALS-SMALL Items-----------------------------------------

					if(('#owl-tls-small').length){

					  $("#owl-tls-small").owlCarousel({

					 

						  //Set AutoPlay to 3 seconds

						//autoPlay : 5000,

						  items : 1,

						  itemsDesktop : [1000,1], //5 items between 1000px and 901px

						  itemsDesktopSmall : [900,1], // betweem 900px and 601px

						  itemsTablet: [470,1], //2 items between 600 and 0

						  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

						 // itemsDesktop : [1199,4],

						 // itemsDesktopSmall : [991,1],

						 // itemsTablet: [991,1],

						 // itemsMobile : false,

						  

						  //Pagination

							pagination : true,

							paginationNumbers: false,

					 

					  });}				

			// Carousel BLOG-SMALL Items---------------------------------------------

			  	if($("#owl-blog-small").length){

			  	$("#owl-blog-small").owlCarousel({

			 

				  //Set AutoPlay to 3 seconds

				//autoPlay : 5000,

				  items : 2,

				  itemsDesktop : [1000,2], //5 items between 1000px and 901px

				  itemsDesktopSmall : [900,2], // betweem 900px and 601px

				  itemsTablet: [470,1], //2 items between 600 and 0

				  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

				 // itemsDesktop : [1199,4],

				 // itemsDesktopSmall : [991,1],

				 // itemsTablet: [991,1],

				 // itemsMobile : false,

				  

				  //Pagination

					pagination : true,

					paginationNumbers: false,

			 

			  });		

			  }			  

			// SKILL BAR ANIMATION	---------------------------------------------

				if($('.skillbar')){

				$('.skillbar').bind('inview', function (event, visible) {

					  if (visible == true) {

					  

							$('.skillbar').each(function(){

							$(this).find('.skillbar-bar').animate({

								width:$(this).attr('data-percent')

							},2000);

						});

					  } else {

						// element has gone out of viewport

					  }

				});

			}

			// COUNTER	---------------------------------------------------

				function loadInview() {

					"use strict";

					function count($this){

					var current = parseInt($this.html(), 10);

					current = current + 1; /* Where 50 is increment */    

					$this.html(++current);

						if(current > $this.data('count')){

							$this.html($this.data('count'));

						} else {    

							setTimeout(function(){count($this)}, 50);

						}

					}  			

					$(".stat-count").each(function() {

					  $(this).data('count', parseInt($(this).html(), 10));

					  $(this).html('0'); 

					});

					$('.stat').bind('inview', function (event, visible) {

									if (visible === true) {			

							

									$(".stat-count").each(function() {

									count($(this));

											});

							} else {

									// element has gone out of viewport

									}

								});		

			   }

			   loadInview();

			//FLEX SLIDER CAROUSEL INITIALIZE ---------------------------------------------

			  	function carFlex() {

					$('.carousel-post-style1').flexslider({ });

				};

				carFlex();



			//GOOGLE MAP CONTACT	

				if($("#big-map-contact").length){

				$(function(){

					var path_To_Theme = Drupal.settings.pathToTheme;

				$("#big-map-contact").gmap3(

				  { 

					marker:{

							//address: "385 Bourke St., Melbourne Victoria 3000 Australia", 

							latLng:latlng,

							data:"<h4>Office</h4>Your description is here.", 

							options:{icon: '' +path_To_Theme+ '/images/loc-marker.png'},

							

							events:{

							  click: function(marker, event, context){

								var map = $(this).gmap3("get"),

								  infowindow = $(this).gmap3({get:{name:"infowindow"}});

								if (infowindow){

								  infowindow.open(map, marker);

								  infowindow.setContent(context.data);

								} else {

								  $(this).gmap3({

									infowindow:{

									  anchor:marker, 

									  options:{content: context.data}

									}

								  });

								}

							  },

							}

							

						  },

							map:{

								

							  options:{

								//center: latlng,

								scrollwheel: false,

								zoom:18,

								

								mapTypeId: "style2",

								mapTypeControlOptions: {

								mapTypeIds: [google.maps.MapTypeId.ROADMAP]

								}

							  },



							},

							styledmaptype:{

							  id: "style2",

							  options:{

								name: "Style 2"

							  },

							  styles: [

								{

								  stylers: [

									{ saturation: -80},

									{  hue: "#ffee00"}

								  ]

								}

							  ]

							},

							

						  }

						);

				});

				}

			//TOOLOTIPS INITIALIZE---------------------------------------------

				if($('[data-toggle="tooltip"]').length){

				$(function () {

						  $('[data-toggle="tooltip"]').tooltip()

						});	

						}		

			//POPOVER INITIALIZE---------------------------------------------	

				if($('[data-toggle="popover"]').length){

				$(function () {

						  $('[data-toggle="popover"]').popover()

						});		

				}

			//SIDEBAR STICKY---------------------------------------------	 

				if($('#footer-offset').length){ 

				var //offsetSb = $('.page-title-bg').height(),

					offsetFooter = $('#footer-offset').height()+30;

					// DM Menu

				jQuery('#sidebar-stiky').affix({

								offset: { top: 158, //top offset for header 1 for others headers it will have other value

										  bottom: offsetFooter		

								}

							});

				}

			

			//GOOLE MAP---------------------------------------------------------------------------

			// CHART CIRCULAR------------------------------------------------------

					if($('#chart1-on').length){

						$('#chart1-on').one('inview', function (event, visible) {

						  if (visible == true) {

						  

								$('.chart-circle').circliful();

								

							} else {

							// element has gone out of viewport

						  }

						});	

						}

					if($('#chart2-on').length){

					$('#chart2-on').one('inview', function (event, visible) {

					  if (visible == true) {

					  

							$('.chart-circle2').circliful();

							

						} else {

						// element has gone out of viewport

					  }

					});	

					}				

			// Carousel ONE ITEM INLINE, NO CONTROLS, NO AUTOSCROLL, WITH PAGINATION-----------------------------------------

					if($("#owl-1-pag").length){

					  $("#owl-1-pag").owlCarousel({

					 

						  //Set AutoPlay to 3 seconds

						//autoPlay : 5000,

						  items : 1,

						  itemsDesktop : [1000,1], //5 items between 1000px and 901px

						  itemsDesktopSmall : [900,1], // betweem 900px and 601px

						  itemsTablet: [470,1], //2 items between 600 and 0

						  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

						 // itemsDesktop : [1199,4],

						 // itemsDesktopSmall : [991,1],

						 // itemsTablet: [991,1],

						 // itemsMobile : false,

						  

						  //Pagination

							pagination : true,

							paginationNumbers: false,

					 

					  });

					 }	

			// Carousel CLIENTS Items---------------------------------------------

					if( $("#owl-clients").length){

				  $("#owl-clients").owlCarousel({

				 

					  //Set AutoPlay to 3 seconds

					autoPlay : 5000,

					  items : 5,

					  itemsDesktop : [1000,4], //5 items between 1000px and 901px

					  itemsDesktopSmall : [900,3], // betweem 900px and 601px

					  itemsTablet: [470,1], //2 items between 600 and 0

					  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

					 // itemsDesktop : [1199,4],

					 // itemsDesktopSmall : [991,1],

					 // itemsTablet: [991,1],

					 // itemsMobile : false,

					  

					  //Pagination

						pagination : false,

						paginationNumbers: false,

				 

				  	});

					}

			// Carousel ONE ITEM INLINE, NO CONTROLS, AUTO PLAY, WITH PAGINATION-----------------------------------------	  

				if($("#owl-1-pag-auto").length){

				  $("#owl-1-pag-auto").owlCarousel({

				 

					  //Set AutoPlay to 3 seconds

					  autoPlay : 5000,

					  items : 1,

					  itemsDesktop : [1000,1], //5 items between 1000px and 901px

					  itemsDesktopSmall : [900,1], // betweem 900px and 601px

					  itemsTablet: [470,1], //2 items between 600 and 0

					  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option

					 // itemsDesktop : [1199,4],

					 // itemsDesktopSmall : [991,1],

					 // itemsTablet: [991,1],

					 // itemsMobile : false,

					  

					  //Pagination

						pagination : true,

						paginationNumbers: false,

				 

				  });	

				  }		  

			// Carousel (owl-1-pag-auto) Items Controls------------------------------------

				if($("#owl-1-pag-auto").length){

				  var owl = $("#owl-1-pag-auto");



				  owl.owlCarousel();



				  // Custom Navigation Events

				  $(".next-carousel-default").click(function(){

					owl.trigger('owl.next');

				  })

				  $(".prev-carousel-default").click(function(){

					owl.trigger('owl.prev');

				  });

				  }				  

});

	//GOOLE MAP FOR HEADER MENU------------------------------------------------------------

			var latlng = new google.maps.LatLng(-37.814199, 144.961734); 

			//var latLng = [48.8620722, 2.352047];

	//GOOLE MAP FOR HEADER MENU

		if($("#big-map").length){

		$(function(){

			var path_To_Theme = Drupal.settings.pathToTheme;

			$("#big-map").gmap3(

		 	 { 

				marker:{

					//address: "385 Bourke St., Melbourne Victoria 3000 Australia", 

					latLng:latlng,

					data:"<h4>Office</h4>Your description is here.", 

					options:{icon: '' +path_To_Theme+ '/images/loc-marker.png'},

					

					events:{

					  click: function(marker, event, context){

						var map = $(this).gmap3("get"),

						  infowindow = $(this).gmap3({get:{name:"infowindow"}});

						if (infowindow){

						  infowindow.open(map, marker);

						  infowindow.setContent(context.data);

						} else {

						  $(this).gmap3({

							infowindow:{

							  anchor:marker, 

							  options:{content: context.data}

							}

						  });

						}

					  },

					}

					

				  },

					map:{

						

					  options:{

						//center: latlng,

						zoom:18,

						scrollwheel: true,

						mapTypeId: "style1",

						mapTypeControlOptions: {

						mapTypeIds: [google.maps.MapTypeId.ROADMAP]

						}

					  },



					},

					styledmaptype:{

					  id: "style1",

					  options:{

						name: "Style 1"

					  },

					  styles: [

						{

						  stylers: [

							{ hue: "#ffee00" }

						  ]

						}

					  ]

					},

					

				  }

				);

			});

		}



	//GOOGLE MAP FOOTER	.

		if($("#big-map-footer").length){

		$(function(){

			var path_To_Theme = Drupal.settings.pathToTheme;

			$("#big-map-footer").gmap3(

		  	{ 

				marker:{

					//address: "385 Bourke St., Melbourne Victoria 3000 Australia", 

					latLng:latlng,

					data:"<h4>Office</h4>Your description is here.",

					options:{icon: '' +path_To_Theme+ '/images/loc-marker.png'},

					

					events:{

					  click: function(marker, event, context){

						var map = $(this).gmap3("get"),

						  infowindow = $(this).gmap3({get:{name:"infowindow"}});

						if (infowindow){

						  infowindow.open(map, marker);

						  infowindow.setContent(context.data);

						} else {

						  $(this).gmap3({

							infowindow:{

							  anchor:marker, 

							  options:{content: context.data}

							}

						  });

						}

					  },

					}

					

				  },

					map:{

						

					  options:{

						//center: latlng,

						scrollwheel: false,

						zoom:18,

						

						mapTypeId: "style2",

						mapTypeControlOptions: {

						mapTypeIds: [google.maps.MapTypeId.ROADMAP]

						}

					  },



					},

					styledmaptype:{

					  id: "style2",

					  options:{

						name: "Style 2"

					  },

					  styles: [

						{

						  stylers: [

							{ saturation: -80},

							{  hue: "#ffee00"}

						  ]

						}

					  ]

					},

					

				  }

				);

		});

		}



		if($('.filter-portfolio-full-width').length){

					var container = $('.filter-portfolio-full-width');	

					container.isotope({

						animationEngine : 'best-available',

						animationOptions: {

							duration: 200,

							queue: false

						},

						layoutMode: 'fitRows',

						itemSelector : '.element'

					});	

				

					function splitColumns() { 

					var winWidth = $(window).width(), 

						columnNumb = 1;

					if (winWidth > 1200) {

						columnNumb = 5;

					} else if (winWidth > 900) {

						columnNumb = 4;

					} else if (winWidth > 600) {

						columnNumb = 2;

					} else if (winWidth > 300) {

						columnNumb = 1;

					}

					return columnNumb;

					}		

					

					function setColumns() { 

					var winWidth = $(window).width(), 

						columnNumb = splitColumns(), 

						postWidth = Math.floor(winWidth / columnNumb);

					container.find('.element').each(function () { 

						$(this).css( { 

							width : postWidth + 'px' 

						});

					});

					}		

					function setProjects() { 

					setColumns();

					container.isotope('reLayout');

					}			

					

					function loadIsotope(){

					container.imagesLoaded(function () {setProjects();});

					setProjects();

					}

						

					/* RESIZE */

					function resizedw(){

						setProjects();

					}

					

					var doit;

					$(window).bind('resize', function () { 

						clearTimeout(doit);

						doit = setTimeout(resizedw, 500);

					});		



					loadIsotope();

				}



	new WOW().init();

	<!-- Pre LOADER -->

		// document.body.removeChild(document.getElementById('preloader'));

	// $('body').removeClass('preloader-overflow');
	window.onload = function() {



	}





	$(document).ready(function(){

	  //ISOTOPE MASONRY---------------------------------------------------------------

	  if($('#blog-masonry').length){

	  var $container = $('#blog-masonry');



	   $container.imagesLoaded(function(){

			$container.isotope({

				itemSelector : '.element',

			  });

		});

	}

	});

$(document).ready(function() {

	if($('#nav-onepage').length){

	var top_offset = $('header').height() - 1;  // get height of fixed navbar

	$('#nav-onepage').onePageNav({

		currentClass: 'current',

		changeHash: false,

		scrollSpeed: 700,

		scrollOffset: top_offset,

		scrollThreshold: 0.5,

		filter: '',

		easing: 'swing',

		begin: function() {

			//I get fired when the animation is starting

		},

		end: function() {

			//I get fired when the animation is ending

		},

		scrollChange: function($currentListItem) {

			//I get fired when you enter a section and I pass the list item of the section

		}

	}); 

	}

});

var latlng = new google.maps.LatLng(-37.814199, 144.961734); 



//var latLng = [48.8620722, 2.352047];



//GOOLE MAP FOR HEADER MENU

$(function(){

	var path_To_Theme = Drupal.settings.pathToTheme;

$("#big-map").gmap3(

  { 

	marker:{

			//address: "385 Bourke St., Melbourne Victoria 3000 Australia", 

			latLng:latlng,

			data:"<h4>Office</h4>Your description is here.", 

			options:{icon: '' +path_To_Theme+ '/images/loc-marker.png'},

			

			events:{

			  click: function(marker, event, context){

				var map = $(this).gmap3("get"),

				  infowindow = $(this).gmap3({get:{name:"infowindow"}});

				if (infowindow){

				  infowindow.open(map, marker);

				  infowindow.setContent(context.data);

				} else {

				  $(this).gmap3({

					infowindow:{

					  anchor:marker, 

					  options:{content: context.data}

					}

				  });

				}

			  },

			}

			

		  },

			map:{

				

			  options:{

				//center: latlng,

				zoom:18,

				scrollwheel: true,

				mapTypeId: "style1",

				mapTypeControlOptions: {

				mapTypeIds: [google.maps.MapTypeId.ROADMAP]

				}

			  },



			},

			styledmaptype:{

			  id: "style1",

			  options:{

				name: "Style 1"

			  },

			  styles: [

				{

				  stylers: [

					{ hue: "#ffee00" }

				  ]

				}

			  ]

			},

			

		  }

		);

// RESIZE GOOGLE MAP HEADER				

//	$('#big-map').gmap3();		

$('#menu-contact-info-big').mouseover(function (){

  $('#big-map').gmap3(

						{

						trigger:{

								  eventName:"resize"

								},

						map:{

							  options:{

								center: latlng,

							  },

							},		

						}

					 );

					

	});



});