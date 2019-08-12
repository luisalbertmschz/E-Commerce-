<?php

class ControladorProductos{ 

    /* METODO para MOSRTAR CATEGORIAS desde la BASE DE DATOS */

    static public function ctrMostrarCategorias($item, $valor){

        $tabla="categorias";
        $respuesta=ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;

    }



   /*  METODO para MOSTRAR SUBCATEGORIAS traidas desde la BASE DE DATOS */

    static public function ctrMostrarSubCategorias($item, $valor){

        $tabla="subcategorias";
        $respuesta=ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);
        return $respuesta;

    }


       /* METODO para MOSTRAR PRODUCTOS traidos desde la base de datos */

    static public function ctrMostrarProductos($ordenar, $item, $valor){

    $tabla = "productos";

    $respuesta =  ModeloProductos::mdlMostrarProductos($tabla, $ordenar , $item, $valor );

    return $respuesta;





    }


}