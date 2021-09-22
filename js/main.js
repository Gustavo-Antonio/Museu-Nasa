$(document).ready(function(){

	$('.open-nav').click(function(){
		$('.menu').toggleClass('active');
		$('.open-nav').toggleClass('open')
	})

});
/* INICIO EFEITO SCROLL */
$('nav button a').click(function(e){
	e.preventDefault();
	var id= $(this).attr('href');
	distancia = $(id).offset().top;
	$('html, body').animate({
		scrollTop: distancia - 150
	}, 1500); 
});
/* FIM EFEITO SCROLL */

/* INICIO ANIMAÇÃO SCROLL */
var target = $('.anime'), auxilar= $(window).height() *3/4;
function animeScroll() {
	var documentoTop = $(document).scrollTop();
	target.each(function(){
		var itemTp = $(this).offset().top;
		if(documentoTop > itemTp-auxilar){
			$(this).addClass('anime-start');
		}
		else{
			$(this).removeClass('anime-start');
		}
	})
}
animeScroll() 
$(document).scroll(function(){
	animeScroll();
	
})
/* FIM ANIMAÇÃO SCROLL */

