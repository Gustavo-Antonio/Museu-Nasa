var target2 = $('.aparece'), auxilar= $(window).height() *3/4;


function animeScroll2() {
	var documentoTop = $(document).scrollTop();
	target2.each(function(){
		var itemTp = $(this).offset().top;
		if(documentoTop > itemTp - auxilar){
			$(this).addClass('aparece-start');
		}
		else{
			$(this).removeClass('aparece-start');
		}
	})
}

animeScroll2() 

$(document).scroll(function(){
	animeScroll2();
	
})



    function escrita(elemento) {
      const texto = elemento.innerHTML.split('');
      elemento.innerHTML =''; 
      texto.forEach((letra, i) => {
        setTimeout(()=> elemento.innerHTML +=letra,75*i);
      });
    }
    const titulo = document.querySelector('h1');
    escrita(titulo);
