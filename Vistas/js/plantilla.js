/* PLANTILLA */

                        /*
_________________________________________________
HERRAMIENTA TOOLTIP
_________________________________________________
					 */

$('[data-toggle="tooltip"]').tooltip();				 

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


                        /*
_________________________________________________
CAMBIAR ENTRE VISTA LISTA O CUADRICULA
_________________________________________________
					 */
var btnList = $(".btnList");

var btnList = $(".btnList");

for(var i = 0; i < btnList.length; i++){

	$("#btnGrid"+i).click(function(){

		var numero = $(this).attr("id").substr(-1);

		$(".list"+numero).hide();
		$(".grid"+numero).show();

		$("#btnGrid"+numero).addClass("backColor");
		$("#btnList"+numero).removeClass("backColor");

	})

	$("#btnList"+i).click(function(){

		var numero = $(this).attr("id").substr(-1);

		$(".list"+numero).show();
		$(".grid"+numero).hide();

		$("#btnGrid"+numero).removeClass("backColor");
		$("#btnList"+numero).addClass("backColor");

	})

}


$(window).scroll(function(){

	var scrollY = window.pageYOffset;

	if(window.matchMedia("(min-width:768px)").matches){

		if(scrollY < ($(".banner").offset().top)-150){

			$(".banner img").css({"margin-top":-scrollY/3+"px"})

		}else{

			scrollY = 0;
		}

	}	
	
})


$.scrollUp({

	scrollText:"",
	scrollSpeed: 2000,
	easingType: "easeOutQuint"

});


/*=============================================
MIGAS DE PAN
=============================================*/

var pagActiva = $(".pagActiva").html();

if(pagActiva != null){

	var regPagActiva = pagActiva.replace(/-/g, " ");

	$(".pagActiva").html(regPagActiva);

}


/*=============================================
ENLACES PAGINACIÓN
=============================================*/

var url = window.location.href;

var indice = url.split("/");

console.log("indice", indice);

var pagActual = indice[5];
console.log("pagActual", pagActual);

if(isNaN(pagActual)){

	$("#item1").addClass("active");

}else{
	
	$("#item"+pagActual).addClass("active");	
}