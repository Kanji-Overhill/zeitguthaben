$(document).ready(function(){
    $('.slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	});
	var containerEl = document.querySelector('.container-mix');
    var mixer = mixitup(containerEl);
});