<?php

require_once "conexion.php";
class ModeloProductos{


    
   /*  MOSTRAR CATEGORIAS  */

    static public function mdlMostrarCategorias($tabla, $item, $valor){

        if ($item !=null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

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






	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $ordenar, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item ORDER BY $ordenar DESC LIMIT 4");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla ORDER BY $ordenar DESC LIMIT 4");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function mdlMostrarInfoProducto($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}


}