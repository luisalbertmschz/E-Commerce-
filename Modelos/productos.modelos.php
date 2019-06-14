<?php

require_once "conexion.php";
class ModeloProductos{


    
   /*  MOSTRAR CATEGORIAS  */

    static public function mdlMostrarCategorias($tabla, $item, $valor){

        if ($item !=null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            /* Pasamos de fetchAll() a solo fetch( para así obtener la categoria padre sin otros parametros que vienen en el string */

            return $stmt -> fetch();

        }else{


            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();
    
            return $stmt -> fetchAll();

        }

        $stmt -> close();
            
        $stmt = null;


    }



   /*  MOSTRAR SUB CATEGORIAS  */


   static public function mdlMostrarSubCategorias($tabla, $item, $valor){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

    $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt -> close();
    
    $stmt = null;

}




}