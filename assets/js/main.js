$('.productSlider').owlCarousel({
	loop:true,
	dots:true,
	nav:false,
	margin:10,
	animateOut: 'fadeOut',
	autoplay:true,
autoplayTimeout:6000,
autoplayHoverPause:true,
	responsiveClass:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
});

$('.clientSlider').owlCarousel({
loop:true,
margin:10,
dots:false,
nav:false,
autoplay:true,
autoplayTimeout:1000,
autoplayHoverPause:true,
responsive:{
0:{
   items:1,
   mouseDrag:false,
   touchDrag:false,
   freeDrag:false,
   autoplayHoverPause:false,
},
400:{
	items:2,
	mouseDrag:false,
   touchDrag:false,
   freeDrag:false,
   autoplayHoverPause:false,
 },

600:{
   items:3,
   
},
1000:{
   items:5
}
}
});

/*////////////////// tab code ////////////////*/


/* $('.btn-box').click(function(){
	
if($(this).hasClass('click-bg')){
	
	$('#video').attr('src',$(this).attr('data-src'));
	
}else{
	$(this).addClass('click-bg');
	$(this).siblings().removeClass('click-bg');
}



}); */


$('.btn-box').click(function(){
	
	if($(this).hasClass('click-bg')){
		
		
		
	}else{
		$(this).addClass('click-bg');
		$(this).siblings().removeClass('click-bg');
	}
	$('#video').attr('path',$(".click-bg").attr('data-src'));
	
	
	});
	
	/*////////////////// tab code ////////////////*/


/* /////////////////// active effect menu /////////////////////// */
$(".menulist ul li a ").click(function(){
	
	$('.menulist ul li').siblings().children().removeClass('active');
	$(this).addClass('active');
	
});

/* /////////////////// active effect menu /////////////////////// */





	/*////////////////// smooth scroll  code ////////////////*/



	$(function() {
		$('a[href*=\\#]:not([href=\\#])').on('click', function() {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 500);
				return false;
			}
		});
	});
		/*////////////////// smooth scroll  code ////////////////*/



		$(".hide-menu-link").click(function(){
			$(".menulist").toggleClass("mobile-right");
		});




		/*/////////////// Aos slider///////////// */
		AOS.init({
			
		})
		/*/////////////// Aos slider///////////// */


	/*	$(".form-pop").click(function(){
			if($('.hide-form').css('display').toLowerCase()=='block'){
			$('.hide-on-pop').css('display', 'block');
			

			}else{
				$('.hide-on-pop').css('display', 'none');
				
			}
		});
*/
$(document).ready(function(){
setTimeout(() => {
    $('.video-section').css('height','auto');
}, 5000);
});

		
		
		