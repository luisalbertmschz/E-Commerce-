<!-- 
//
// ─── TOP  ───────────────────────────────────────────────────────────────────
// 
-->
  

   <div class="container-fluid  barraSuperior" id="top">
       <div class="container">
           <div class="row">
           
                <!--     
                //
                // ─── ENLANCES A REDES SOCIALES ───────────────────────────────────
                //
                -->
              

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                
                    <ul>
                        <!-- Se le solicita al controlador las caracteristicas de redes sociales, iconos de font-awesome de las redes, estilos(color) y url de las mismas,
                        todo esto es traido via el controlador desde la base de datos "ecommerce" tabla "plantilla"  -->
                        <?php
                        $social = ControladorPlantilla::ctrEstiloPlantilla();
                        /* var_dump(json_decode($social["redesSociales"],true)); */

                        $jsonRedesSociales = json_decode($social["redesSociales"],true);
                       /*  var_dump($jsonRedesSociales); */

                        foreach ($jsonRedesSociales as $key => $value ){
                           /*  var_dump($value["url"]); */

                           echo'
                                 <li>
                                   <a href="'.$value["url"].'" target="_blank">
                                    <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
                                   </a>
                                 </li>
                               ';



                        }

                        ?>


                        <!-- 
                        <li>
                            <a href="http://facebook.com/" target="_blank">
                                <i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="http://youtube.com/" target="_blank">
                                <i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="http://twitter.com/" target="_blank">
                                <i class="fa fa-twitter redSocial twitterBlanco" aria-hidden="true"></i>
                            </a>
                        </li> -->

                     <!--    <li>
                            <a href="http://google.com/" target="_blank">
                                <i class="fa fa-google-plus redSocial googleBlanco" aria-hidden="true"></i>
                            </a>
                        </li> -->

                       <!--  <li>
                            <a href="http://instagram.com/" target="_blank">
                                <i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
                            </a>
                        </li> -->

                    </ul>
                
                </div>

              <!--
               //
              // ─── SECCION DE REGISTRO DE LA CABEZERA SUPERIOR ─────────────────
              //
             -->

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
                
                    <ul>
                                
                        <li><i class="fa fa-user" style="width:10%;"></i>           <a href="#modalIngreso" data-toggle="modal">Identificate, inicia sesión</a></li>
                        <li>|</li>
                        <li><a href="#modalRegistro" data-toggle="modal">Registrate</a></li>
                    
                    </ul>
                
                
                
                </div>          
           </div>
       </div>
   </div>

<!-- 
//
// ─── HEADER O CABEZERA ──────────────────────────────────────────────────────────
// 
-->


<header class="container-fluid">
  <div class="container">
     <div class="row" id="Cabezote">
        	
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="http://localhost/E-commerce-/">
                    <!-- Traer el logo sin usar la base de datos  -->
						
					<!-- <img src="http://localhost/E-commerce-Backend/Vistas/plantilla/large_techtoot_0.png" class="img-responsive"> -->

                   <!--  Trae el logo desde la base de datos -->
                    <img src="http://localhost/E-commerce-Backend/<?php echo $social["logo"]; ?>" class="img-responsive">

				</a>
                
                 <!--  
                 //
                // LOGOS ALTERNATIVOS
                //
                -->
                


                <!--     
                <a href="#">
						
					<img src="http://localhost/E-commerce-Backend/Vistas/plantilla/large_techstream.png" class="img-responsive">

				</a>


                <a href="#">
						
					<img src="http://localhost/E-commerce-Backend/Vistas/plantilla/large_TechTray_s.png" class="img-responsive">

				</a>



                <a href="#">
						
                        <img src="http://localhost/E-commerce-Backend/Vistas/plantilla/large_usabilitech_0.png" class="img-responsive">
    
                    </a>
                -->

             
				
			</div>

            <!-- 
            //
            // ─── CATEGORIAS Y BUSCADOR DE LA TIENDA ──────────────────────────
            //
            -->

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

                    <!-- 
                    //
                    // ─── BOTON DE ACCESO A LAS CATEGORIAS ─────────────────────────────
                    //
                    -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                            
                            <p>Categorías
                            
                                <span class="pull-right">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </span>
                            
                            </p>

                    </div> 

                    <!--    
                    //
                    //─── BOTON DE BUSQUEDA O SEARCH BAR ─────────────────────────────
                    //
                    -->

                    <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
                        <input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

                        <span class="input-group-btn">
                            
                            <a href="#">

                            <!-- ELIMINE CLASE btn-default -->

                                <button class="btn  backColor" type="submit">
                                    
                                    <i class="fa fa-search"></i>

                                </button>

                            </a>

                        </span>

				     </div>

            </div> 

            <!--             
            //
            // ─── SECCION DEL CARRITO DE COMPAS CON PRECIO Y CANTIDAD DE PRODUCTOS ──────── 
            //
            -->


            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				
				<a href="#">
                    
                     <!-- ELIMINE CLASE btn-default -->

					<button class="btn  pull-left backColor"> 
						
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					
					</button>
				
				</a>	

				<p> Carrito <span class="cantidadCesta"> 3 </span> <br> USD $ <span class="sumaCesta"> 20 </span></p>	

			</div>

        </div>

       <!--      
       //
        // ─── CATEGORIAS Y SUB CATEGORIAS DE BUSQUEDA ─────────────────────
        // 
       -->


       <div class="col-xs-12 backColor" id="categorias">

            <?php

            $item=null;
            $valor=null;

            $categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

            foreach($categorias as $key => $value){

                /* var_dump($value["categoria"]); */

                echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				       <h4>
					   <a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
				       </h4>
				
				       <hr>

                       <ul>';

                       $item = "id_categoria";

                       $valor = $value["id"];


                       $subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

                       /* var_dump($subcategorias); */

                       foreach($subcategorias as $key => $value){
                           echo'<li><a href="'.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';

                       }
                       
                       echo'
                                    
				       </ul>

                    </div>	';



            }

            ?>


			
			<!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

            
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>
            
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>
            
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div> -->

		</div>

            





    </div>
</header>