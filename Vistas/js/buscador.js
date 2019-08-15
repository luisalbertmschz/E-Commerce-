

$("#buscador input").change(function(){


var busqueda = $("#buscador input").val();

var expresion = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;













/* 	var busqueda = $("#buscador input").val();

	var expresion = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

	if(!expresion.test(busqueda)){

		$("#buscador input").val("");

	}else{

		var evaluarBusqueda = busqueda.replace(/[áéíóúÁÉÍÓÚ ]/g, "_");

		var rutaBuscador = $("#buscador a").attr("href");

		if($("#buscador input").val() != ""){

			$("#buscador a").attr("href", rutaBuscador+"/"+evaluarBusqueda);

		}else{


			$("#buscador a").attr("href", "inicio");
		}




	} */

})