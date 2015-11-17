$(function(){
	//------------------    fancybox    -------------------------------
	$('.fancybox').fancybox({
		padding: 0,
		openEffect: 'fade',
		closeEffect: 'fade',
		openSpeed: 400,
		closeSpeed: 400,
		helpers: {
			overlay: {
				locked: false
			}
		},

	});

	//------------------    menu scroll    -------------------------------

	$('.top_menu li a.subNavBtn').on('click',function(){
		$('html,body').animate({scrollTop:$($(this).attr('href')).offset().top-30},800);
		return false;
	});

	function setNavCurrentSection(){
		var s_top=$(document).scrollTop();
		var w_hgh=window.innerHeight;
		var b_hgh=$('body').outerHeight();
		var cur_sect=$('.top_menu li a.subNavBtn').eq(0);
		$('.top_menu li a.subNavBtn').each(function(){if((w_hgh/3+s_top)>$($(this).attr('href')).offset().top){cur_sect=$(this);}});
		if((s_top+w_hgh+500)>b_hgh){cur_sect=$('.top_menu li a.subNavBtn').last();}
		if(!cur_sect.hasClass('active')){$('.top_menu li a.subNavBtn.active').removeClass('active');cur_sect.addClass('active');}
		if(s_top>$('header').innerHeight()) {$('.top_menu').addClass('fixed');$('body').css('padding-top', '48px');}
		else{$('.top_menu').removeClass('fixed');$('body').css('padding-top', 0);}
	}

	setNavCurrentSection();
	$(window).on('load',function(){
		setNavCurrentSection();
	});
	$(window).resize(function(){
		setNavCurrentSection();
	});
	$(document).on('scroll',function(){
		setNavCurrentSection();
	});

	//------------------    popup   -------------------------------

	p = $('.popup__overlay');
	$('.ico').click(function() {
		p.css('display', 'block')
	});
	p.click(function(event) {
		e = event || window.event
		if (e.target == this) {
			$(p).css('display', 'none')
		}
	});
	$('.popup__close').click(function() {
		p.css('display', 'none');
	});
});