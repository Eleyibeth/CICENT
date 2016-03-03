$(document).ready(function(){
	var altura = $('.th').offset().top;


	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ) {
			$('.th').addClass('cabecera-fixed');

		} else{
			$('.th').removeClass('cabecera-fixed');
		}
	});
});