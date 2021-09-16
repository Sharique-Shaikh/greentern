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



	/* $(function() {
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
	}); */


	$(document).ready(function() {
		$('a[href*=\\#]:not([href=\\#])').bind('click', function(e) {
			e.preventDefault(); // prevent hard jump, the default behavior
	
			var target = $(this).attr("href"); // Set the target as variable
	
			// perform animated scrolling by getting top-position of target-element and set it as scroll target
			$('html, body').stop().animate({
				scrollTop: $(target).offset().top
			}, 600, function() {
				location.hash = target; //attach the hash (#jumptarget) to the pageurl
			});
	
			return false;
		});
	});
	
	$(window).scroll(function() {
	  var $window = $(window);
		var scrollDistance = $window.scrollTop() + ($window.height() / 2);
	
		// Show/hide menu on scroll
		//if (scrollDistance >= 850) {
		//		$('nav').fadeIn("fast");
		//} else {
		//		$('nav').fadeOut("fast");
		//}
	  
		// Assign active class to nav links while scolling
		$('.page-section').each(function(i) {
			if ($(this).position().top <= scrollDistance) {
				$('.menulist ul li a.active').removeClass('active');
				$('.menulist ul li a').eq(i).addClass('active');
			}
		});
	}).scroll();


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

		
		
		