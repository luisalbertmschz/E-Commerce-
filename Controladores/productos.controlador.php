<?php

class ControladorProductos{

    /* METODO para MOSRTAR CATEGORIAS desde la BASE DE DATOS */

    public function ctrMostrarCategorias(){

        $tabla="categorias";
        $respuesta=ModeloProductos::mdlMostrarCategorias($tabla);
        return $respuesta;

    }



   /*  METODO para MOSTRAR SUBCATEGORIAS traidas desde la BASE DE DATOS */

    static public function ctrMostrarSubCategorias($id){

        $tabla="subcategorias";
        $respuesta=ModeloProductos::mdlMostrarSubCategorias($tabla, $id);
        return $respuesta;

    }


}