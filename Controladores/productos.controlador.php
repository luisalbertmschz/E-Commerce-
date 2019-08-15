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

    static public function ctrMostrarProductos($ordenar, $item, $valor, $base, $tope){

    $tabla = "productos";

    $respuesta =  ModeloProductos::mdlMostrarProductos($tabla, $ordenar , $item, $valor, $base, $tope );

    return $respuesta;





    }

    /* METODO para MOSTRAR INFORMACIÓN DE  PRODUCTOS traidos desde la base de datos */
    
    static public function ctrMostrarInfoProducto($item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarInfoProducto($tabla, $item, $valor);

		return $respuesta;

    }


     /* METODO para LISTAR DE  PRODUCTOS traidos desde la base de datos */

    static public function ctrListarProductos($ordenar, $item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlListarProductos($tabla, $ordenar, $item, $valor);

		return $respuesta;

	}
    










}