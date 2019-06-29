/*==========VARIABLES============================== */




var item = 0;
var itemPaginacion = $("#paginacion li");
var interrumpirCiclo = false;
/*============= PAGINACIÓN========================*/


$("#paginacion li").click(function(){


    item = $(this).attr("item")-1;
    /* console.log("item", item); */
    movimientoSlide(item);

})

/*=================== FLECHA AVANZAR SLIDE DERECHA============== */
   
$("#slide #avanzar").click(function(){

    if(item == 3){

        item = 0;

    }else{
        item ++
    }

    movimientoSlide(item);


    
})

/* 
FUNCION AVANZAR-
 */

function avanzar(){

    if(item == 3){

        item = 0;

    }else{
        item ++
    }

    movimientoSlide(item);


    
}

/*=================== FLECHA AVANZAR SLIDE DERECHA============== */
   
$("#slide #retroceder").click(function(){

    if (item == 0){
        item = 3;

    }else{
        item --
    }

    movimientoSlide(item);

    
})


 

/*=================== MOVIMIENTO SLIDE============== */

function movimientoSlide(item){

    $("#slide ul").animate({"left": item * -100 + "%"}, 1000);

    $("#paginacion li").css({"opacity":.5})

    $(itemPaginacion[item]).css({"opacity":1})

    interrumpirCiclo = true

}


/* MOVIMIENTO AUTONOMO DEL SLIDE */

setInterval(function(){

    if(interrumpirCiclo == true){

        interrumpirCiclo = false;

     
    }else{

        avanzar();

    }


},3000)
