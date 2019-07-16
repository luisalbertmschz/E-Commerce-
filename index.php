<?php

/* Controladores */
include_once "Controladores/plantilla.controlador.php";
include_once "Controladores/productos.controlador.php";
include_once "Controladores/slide.controlador.php";





/* Modelos*/
include_once "Modelos/plantilla.modelo.php";
include_once "Modelos/productos.modelos.php";
include_once "Modelos/ruta.php";
include_once "Modelos/slide.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();