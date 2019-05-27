$(document).ready(function() {
	$('.main-menu ul.nav.navbar-nav li.parent.def ul').attr('class', 'sub');
	$('.main-menu ul.nav.navbar-nav li.parent.default > ul').attr('class', 'sub megamenu-3');
	$('.nav .main-menu-title-potion').each(function(index, el) {
		var str = $( this).text();
		$(this).html('<div class="main-menu-title ' +str+ '">' +str+ '</div>');	
	});
	$('ul.megamenu-3 ul.nav').attr('class', '');
	$('input.submit-search.form-submit').attr('value', 'SEARCH');
	$('.box.col-md-3.closed>ul.sub').attr('class', '');
	$('#sb-search>form').append('<span class="sb-icon-search"><span aria-hidden="true" class="icon_search main-menu-icon"></span></span>');

	$('.header-1 .main-menu-title.home').append('<span aria-hidden="true" class="icon_house_alt main-menu-icon"></span>');
	$('.header-1 .main-menu-title.features').append('<span aria-hidden="true" class="icon_lightbulb_alt main-menu-icon"></span>');
	$('.header-1 .main-menu-title.portfolio').append('<span aria-hidden="true" class="icon_toolbox_alt main-menu-icon"></span>');
	$('.header-1 .main-menu-title.blog').append('<span aria-hidden="true" class="icon_pens main-menu-icon"></span>');
	$('.header-1 .main-menu-title.contact').append('<span aria-hidden="true" class="icon_mail_alt main-menu-icon"></span>');
	$('.header-1 .main-menu-title.services').append('<span aria-hidden="true" class="icon_lightbulb_alt main-menu-icon"></span>');
	$('.header-1 .main-menu-title.about.us').append('<span aria-hidden="true" class="icon_group main-menu-icon"></span>');

});
$(document).ready(function() {
	$('li.sidebar-blog>a').append('<span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>');
	$('.comment-form .form-item-name input').attr('placeholder', 'NAME');
	$('.comment-form .field-name-field-email input').attr('placeholder', 'EMAIL');
	$('.comment-form .field-name-comment-body textarea').attr('placeholder', 'MESSAGE');
	$('.blog-categories li.sidebar-blog:first-child').addClass('current');
});
$(document).ready(function(){
	var vita_shop = $(".wapall-3col .col-md-4");
	for(var i = 0; i < vita_shop.length; i+=3) {
	  vita_shop.slice(i, i+3).wrapAll('<div class="row"></div>');
	}
});
