$(window).bind('scroll',function(e){
  parallaxScroll();
});

function parallaxScroll(){
  var scrolled = $(window).scrollTop();
  $('#bg01').css('top',(0-(scrolled*.25))+'px');
  $('#bg02').css('top',(0-(scrolled*.75))+'px');
  $('#bg03').css('top',(0-(scrolled*.5))+'px');
}
