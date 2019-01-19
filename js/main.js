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

	//------------------    menu scroll 1    -------------------------------

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

	//------------------   scroll animate   -------------------------------
	
	var ln = $('.blocks').children('.block').length;
	var ob = $('.blocks').children('.block');
	for (var i = ln; i >= 0; i--) {
		$(ob[i]).addClass('animated blockhiden delayed'+i);
		$('.delayed'+i).css({
			'-webkit-animation-delay':  i*2/10+'s',
			'-moz-animation-delay':  i*2/10+'s',
			'animation-delay':  i*2/10+'s'
		});
	};
	$('.blocks').waypoint(function  (dir) {
		var bll = $(this.element).children();
		if(dir == 'down')
			bll.addClass('bounceIn blockvisible').removeClass('bounceOut');
		else
			bll.removeClass('bounceIn').addClass('bounceOut');
	},{offset: '60%'});
	$('.blocks').waypoint(function  (dir) {
		var bll = $(this.element).children();
		if(dir == 'down')
			bll.addClass('bounceOut').removeClass('bounceIn');
		else
			bll.removeClass('bounceOut').addClass('bounceIn');
	},{offset: '1%'});
});