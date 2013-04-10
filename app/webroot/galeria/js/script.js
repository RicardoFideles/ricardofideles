jQuery(document).ready(function ($){

// main slider
   $('.slider').cycle({
    fx: 'turnLeft',
    easing: 'easeInOutBounce',
    speed: 300,
     timeout:5000,
            pause: 1,
	                cleartype: true,
            cleartypeNoBg: true,
            pager: 'ul.slider_nav',
	    after: feature_after,
	    before: onbefore,
            pagerAnchorBuilder: function(idx, slide) {
                return 'ul.slider_nav li:eq(' + (idx) + ')';
            }
        });
  $('ul.slider_nav li').hover(function() { 
            $('.slider').cycle('pause'); 
        }, function () {
            $('.slider').cycle('resume'); 
	  });


  function feature_after() {
$('.slider_items .slider_caption').stop().animate({opacity:1, bottom:0},{queue:false,duration:300 });
$('.feature_video_icon, .feature_slide_icon, .feature_article_icon').stop().animate({top:0},{queue:true,duration:300});  
       }
   
  function onbefore() {
   $('.slider_items .slider_caption').stop().animate({opacity:1, bottom:'-120px'},{queue:false,duration:300});
   $('.feature_video_icon, .feature_slide_icon, .feature_article_icon').animate({top:'-40px'},{queue:true,duration:300});  
    }  
  
//slider nav
jQuery('.slider_nav li:not(.activeSlide) a').click( 
		function () {
			jQuery('.slider_nav li a').css('opacity', 0.7);
			jQuery(this).css('opacity', 1);
		}
	);
	

jQuery('.slider_nav li:not(.activeSlide) a').hover( 
		function () {
			jQuery(this).stop(true, true).animate({opacity: 1}, 300);
		}, function () {
			jQuery(this).stop(true, true).animate({opacity: 0.7}, 300);
		}
	);

  });