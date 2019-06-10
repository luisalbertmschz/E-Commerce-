<?php

require_once"../Controladores/plantilla.controlador.php";
require_once"../Modelos/plantilla.modelo.php";


class AjaxPlantilla{

    public function AjaxEstiloPlantilla(){

        
       $respuesta = ControladorPlantilla::ctrEstiloPlantilla();
    
       /* var_dump($respuesta); */
       echo json_encode($respuesta); 

       /* echo json_encode($respuesta); */
        
      
 
    }

}

$objeto = new AjaxPlantilla();
$objeto -> AjaxEstiloPlantilla();