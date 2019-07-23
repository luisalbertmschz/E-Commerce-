<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        

        <title>Techtoot.com:Compra online de eléctrónica</title>
        <?php

            $servidor = Ruta::ctrRutaServidor();
            $icono = ControladorPlantilla::ctrEstiloPlantilla();
            echo'<link rel="icon" href="'.$servidor.$icono["icono"].'">';
            

            /* Mantener ruta fija del proyecto ara evitar colapso de los estilos dado el trabajo de htaccess con las rutas amigables;
            Esto permite establecer de manera fija la ruta  maestra del proyecto y sus archivos por ende siempre los recursos, mediante 
            esta ruta, estrán bien referenciados. <i class="fab fa-instagram"></i>
            */


            /*   Instaciamos a la clase ruta y ejecutamos el método que contiene que se llama ctrRuta  */

            $url = Ruta::ctrRuta();

            /* var_dump($url); */


        ?>
        

        <meta name="description" content="Tienda en linea de venta de dispositivos eléctrónicos en general ">
        <meta name="keywords" content="Computadoras de escritorio, Laptops, Piezas PC, tech, toot">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

        <!-- 
         //
        // ─── HOJAS DE ESTILO PERSONALIZADAS O PERSONALES ─────────────────
        // 
        -->

            
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/cabezote.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plantilla.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/productos.css">



        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plugins/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/slide.css">
        
        
      
       


         <!--   
         //
        // ─── FUENTE TRAIDA DESDE GOOGLE FONT UBUNTU Y UBUNTU CONDENSED ───
        //
        -->
            


        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
        
    

         <!-- 
         // 
         // ─── SCRIPTS DE BOOTSTRAP Y JQUERY ───────────────────────────────
        //
       -->
        <script src="<?php echo $url;?>Vistas/js/plugins/jquery.min.js"></script>
        <script src="<?php echo $url;?>Vistas/js/plugins/bootstrap.min.js"></script>
        <script src="<?php echo $url;?>Vistas/js/plugins/jquery.easing.js"></script>
    

            

            
    </head>
    <body>

        <!-- 
        //
        // ─── BARRA SUPERIOR DEL COMEINZO DE PAGINA o CABEZOTE───────────────────────
        //
        -->

        <?php

        include "Modulos/cabezote.php";




        /*--------- CONTENIDO DINAMICO-----------------  */


         /*   CREAMOS y hacemos USO de un array para separara los parámetros que recibimos en indices para así tener un mejor control
        en ese sentido si la ruta o las rutas */
          $rutas = array();
          $ruta = null;
          


          /* ANALIZAMOS y verificamos  qu[e se est[a enviado en la variable GET <ruta> que definimos en Modelos/ruta.php para manejar mejor las url amigables de la pagina */
          if(isset($_GET["ruta"]))
            {

                /* Separamos los indices del array gracias a explode y delimitamos cada indidce con un separador, a eleccion fue un bash slash [/] */


                $rutas = explode("/", $_GET["ruta"]);



                
                $item ="ruta";

                $valor = $rutas[0];


                /*---------------URL´S AMIGABLES DE LAS CATEGORIAS */

                $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item,$valor);

                /*  var_dump($rutaCategorias["ruta"]); */ 

                if($rutas[0] == $rutaCategorias["ruta"])
                {

                $ruta = $rutas[0]; 

                };   

             



        /* LISTA BLANCA DE URLS PARA SUBCATEGORIAS AMIGABLES */

        $rutasubCategorias = ControladorProductos::ctrMostrarSubCategorias($item,$valor);


        foreach ($rutasubCategorias  as $key  => $value){

            if($rutas[0] == $value["ruta"])
            {

            $ruta = $rutas[0]; 

            }  


        }




           
           /* LISTA BLANCA DE URL´S AMIGABLES  DE CATEGORIAS*/

             if($ruta  != null)
                {


                    include "Modulos/productos.php";



                }else
                {

                    include "Modulos/error404.php";

                }

    }else{

        include "Modulos/slide.php";
        include "modulos/destacados.php";
        include "modulos/footer.php";

    }

            


        ?>

        <!-- ENLACES A  LA INTERACCIÓN DE SECCIONES ESPECIFICAS CON LA AYUDA DE JavaScript -->

        <script src="<?php echo $url;?>Vistas/js/slide.js"></script>   
        <script src="<?php echo $url;?>Vistas/js/cabezote.js"></script>
        <script src="<?php echo $url;?>Vistas/js/plantilla.js"></script>

    </body>
</html>