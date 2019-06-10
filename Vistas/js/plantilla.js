/* PLANTILLA */

$.ajax({

	url:"Ajax/plantilla.ajax.php",
	success:function(respuesta){



		/* console.log(respuesta); */
		/* console.log(JSON.parse(respuesta).colorFondo ); */
        
		var colorFondo =  JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior  = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
		
		$(".backColor, .backColor a").css({"background": colorFondo,
											"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior,
		"color": textoSuperior}) 
		                                        

	}


})