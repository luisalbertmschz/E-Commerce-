<?php

/* Controladores */
include_once "Controladores/plantilla.controlador.php";
include_once "Controladores/productos.controlador.php";





/* Modelos*/
include_once "Modelos/plantilla.modelo.php";
include_once "Modelos/productos.modelos.php";
include_once "Modelos/ruta.php";



$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();