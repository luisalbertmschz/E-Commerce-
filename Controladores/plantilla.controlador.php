<?php

class ControladorPlantilla{


    /*  Hacemos el llamado a la plantilla  */

    public function plantilla(){

    include "Vistas/plantilla.php";

    }


    /*  Traemos los estilos dinámicos para la plantilla desde la DB "ecommerce", tabla "plantilla"
    */


    public function ctrEstiloPlantilla(){


        $tabla = "plantilla";

        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;


    }


}




