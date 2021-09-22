var target = $('.anime'), auxilar= $(window).height() *3/4;


function animeScroll() {
	var documentoTop = $(document).scrollTop();
	target.each(function(){
		var itemTp = $(this).offset().top;
		if(documentoTop > auxilar){
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