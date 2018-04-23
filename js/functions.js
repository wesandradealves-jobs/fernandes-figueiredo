jQuery(document).ready(function(){
	$("#menu li").addClass("flex33");  
	if ($(window).width() > 1024) {
		servicos = $('.servicos').bxSlider({
			minSlides: 3,
			maxSlides: 3,
			slideWidth: 290,
			pager:false,
			controls:true,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});	
		associados = $('.associados').bxSlider({
			minSlides: 3,
			maxSlides: 3,
			slideWidth: 290,
			pager:false,
			controls:true,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});		
		clientes = $('.clientes').bxSlider({
			minSlides: 3,
			maxSlides: 3,
			slideWidth: 290,
			pager:false,
			controls:true,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});	
	} else if ($(window).width() <= 1024 && $(window).width() >= 520) {
		servicos = $('.servicos').bxSlider({
			minSlides: 2,
			maxSlides: 2,
			slideWidth: 495,
			pager:true,
			controls:false,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});
		associados = $('.associados').bxSlider({
			minSlides: 2,
			maxSlides: 2,
			slideWidth: 495,
			pager:true,
			controls:false,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});
		clientes = $('.clientes').bxSlider({
			minSlides: 2,
			maxSlides: 2,
			slideWidth: 495,
			pager:true,
			controls:false,
			prevText:"",
			nextText:"",
			slideMargin: 25
		});
	}  else if ($(window).width() < 520) {
		clientes.destroySlider();
		associados.destroySlider();
		servicos.destroySlider();
	}
});
