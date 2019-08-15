
 
<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>



<!-- 
// -----------------------------------------------------------------------------
// BANNER
// ----------------------------------------------------------------------------- -->

<figure class = "banner">
    
        <img src="http://localhost/E-commerce-Backend/Vistas/img/banner/LaptopsBFadeAzuloscuro2.jpg" class="img-responsive" width="100%" style="margin:0 auto; margin-top:2px; cursor:pointer;" alt="">
        

        <div class="textoBanner textoDerecha">

            <h1 style="color:#fff"> OFERTAS ESPECIALES DE VERANO</h1>

            <h2 style="color:#fff"><strong>-20% OFF</strong></h2>

            <h3 style="color:#fff">Terminan el 31 de Agosto</h3>

        </div>

        

</figure>





<!--=====================================
BARRA PRODUCTOS
======================================-->

<div class="container-fluid well well-sm barraProductos">

	<div class="container">
		
		<div class="row">

			<div class="col-sm-6 col-xs-12">
				
				<div class="btn-group">
					
					 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

					  Ordenar Productos <span class="caret"></span></button>

					  <ul class="dropdown-menu" role="menu">

					  <?php
					  	
						echo '<li><a href="'.$url.$rutas[0].'/1/recientes">Más reciente</a></li>
							  <li><a href="'.$url.$rutas[0].'/1/antiguos">Más antiguo</a></li>';

						?>

					  </ul>

				</div>

			</div>
			
			<div class="col-sm-6 col-xs-12 organizarProductos">

				<div class="btn-group pull-right">

					 <button type="button" class="btn btn-default btnGrid" id="btnGrid0">
					 	
						<i class="fa fa-th" aria-hidden="true"></i>  

						<span class="col-xs-0 pull-right"> GRID</span>

					 </button>

					 <button type="button" class="btn btn-default btnList" id="btnList0">
					 	
						<i class="fa fa-list" aria-hidden="true"></i> 

						<span class="col-xs-0 pull-right"> LIST</span>

					 </button>
					
				</div>		

			</div>

		</div>

	</div>

</div>






<!--=====================================
LISTAR PRODUCTOS
======================================-->





<div class="container-fluid productos">


    <div class="container">

		
		<div class="row">


          	<!--=====================================
			BREADCRUMB O MIGAS DE PAN
			======================================-->

			<ul class="breadcrumb lead fondoBreadcrumb text-uppercase">
				
				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>



            <?php

            /* LLAMADO DE PRODUCTOS DE PAGINACION*/

            if(isset($rutas[1])){

                $base = ($rutas[1] - 1 ) * 12;
                $tope = 12;


            }else{

                $rutas[1] = 1;
                $base = 0;
                $tope = 12;
            }





			/* LLAMADO DE PRODUCTOS DE CATEGORIAS, SUBCATEGORIAS  Y DESTACADOS */


            if($rutas[0] == "articulos-destacados"){

                $item2 = "vistas";

                $valor2 = 5;

                $ordernar = "id";


            

            }else if($rutas[0] == "lo-mas-vendido"){

                $item2 = null;

                $valor2 = null;

                $ordernar = "ventas";



            }else if($rutas[0] == "lo-mas-visto"){

                $item2 = null;

                $valor2 = null;

                $ordernar = "vistas";



            }else{
                    $ordernar = "id";

                    $item1 = "ruta";
                    $valor1 = $rutas[0]; 

                    

                    $categoria = ControladorProductos::ctrMostrarCategorias($item1,$valor1);


                    if(!$categoria){

                        $subCategoria = ControladorProductos::ctrMostrarSubCategorias($item1,$valor1);
                        
                        $item2 = "id_subcategoria";

                        $valor2 = $subCategoria[0]["id"];



                    }else{

                        $item2 ="id_categoria";

                        $valor2 = $categoria["id"];



                    }


            }





            $base = 0;
            $tope = 12;

            $productos = ControladorProductos::ctrMostrarProductos( $ordernar,$item2, $valor2, $base, $tope);

            $listaProductos = ControladorProductos::ctrListarProductos( $ordernar,$item2, $valor2);
            



            /* var_dump(count($productos)); */

            if(!$productos){
                echo'   <div class="col-xs-12 error404 text-center">

                           <h1><small>¡Oops!</small></h1>

                           <h2>Aún no hay productos en esta sección</h2>

                        </div>';




            }else{

				echo '<ul class="grid0">';

					foreach ($productos as $key => $value) {
					
                    echo '<li class="col-md-3 col-sm-6 col-xs-12">
                    
                            <center>

                                <figure>
                                    
                                    <a href="'.$value["ruta"].'" class="pixelProducto">
                                        
                                        <img src="'.$servidor.$value["portada"].'" class="img-responsive" style="width:70px; ";>

                                    </a>

                                </figure>
                                
                            </center>


							'.$value["id"].'

							<h4>
					
								<small>
									
									<a href="'.$value["ruta"].'" class="pixelProducto">
										
										'.$value["titulo"].'<br>

										<span style="color:rgba(0,0,0,0)">-</span>';

										if($value["nuevo"] != 0){

											echo '<span class="label label-warning fontSize">Nuevo</span> ';

										}

										if($value["oferta"] != 0){

											echo '<span class="label label-warning fontSize">'.$value["descuentoOferta"].'% off</span>';

										}

									echo '</a>	

								</small>			

							</h4>

							<div class="col-xs-6 precio">';

							if($value["precio"] == 0){

								echo '<h2><small>GRATIS</small></h2>';

							}else{

								if($value["oferta"] != 0){

									echo '<h2>

											<small>
						
												<strong class="oferta">USD $'.$value["precio"].'</strong>

											</small>

											<small>$'.$value["PrecioOferta"].'</small>
										
										</h2>';

								}else{

									echo '<h2><small>USD $'.$value["precio"].'</small></h2>';

								}
								
							}
											
							echo '</div>

							<div class="col-xs-6 enlaces">
								
								<div class="btn-group pull-right">
									
									<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos">
										
										<i class="fa fa-heart" aria-hidden="true"></i>

									</button>';

									if($value["tipo"] == "digital" && $value["precio"] != 0){

										if($value["oferta"] != 0){

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["PrecioOferta"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}else{

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precio"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}

									}

									echo '<a href="'.$value["ruta"].'" class="pixelProducto">
									
										<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
											
											<i class="fa fa-eye" aria-hidden="true"></i>

										</button>	
									
									</a>

								</div>

							</div>

						</li>';
				}

				echo '</ul>

				<ul class="list0" style="display:none">';

				foreach ($productos as $key => $value) {

					echo '<li class="col-xs-12">
					  
				  		<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							   
							<figure>
						
								<a href="'.$value["ruta"].'" class="pixelProducto">
									
									<img src="'.$servidor.$value["portada"].'" class="img-responsive">

								</a>

							</figure>

					  	</div>  	
							  
						<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
							
							<h1>

								<small>

									<a href="'.$value["ruta"].'" class="pixelProducto">

										<a href="'.$value["ruta"].'" class="pixelProducto">
										
										'.$value["titulo"].'<br>';

										if($value["nuevo"] != 0){

											echo '<span class="label label-warning">Nuevo</span> ';

										}

										if($value["oferta"] != 0){

											echo '<span class="label label-warning">'.$value["descuentoOferta"].'% off</span>';

										}		

									echo '</a>

								</small>

							</h1>

							<p class="text-muted">'.$value["titular"].'</p>';

							if($value["precio"] == 0){

								echo '<h2><small>GRATIS</small></h2>';

							}else{

								if($value["oferta"] != 0){

									echo '<h2>

											<small>
						
												<strong class="oferta">USD $'.$value["precio"].'</strong>

											</small>

											<small>$'.$value["PrecioOferta"].'</small>
										
										</h2>';

								}else{

									echo '<h2><small>USD $'.$value["precio"].'</small></h2>';

								}
								
							}

							echo '<div class="btn-group pull-left enlaces">
						  	
						  		<button type="button" class="btn btn-default btn-xs deseos"  idProducto="'.$value["id"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos">

						  			<i class="fa fa-heart" aria-hidden="true"></i>

						  		</button>';

						  		if($value["tipo"] == "digital" && $value["precio"] != 0){

										if($value["oferta"] != 0){

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["PrecioOferta"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}else{

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precio"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}

									}

						  		echo '<a href="'.$value["ruta"].'" class="pixelProducto">

							  		<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">

							  		<i class="fa fa-eye" aria-hidden="true"></i>

							  		</button>

						  		</a>
							
							</div>

						</div>

						<div class="col-xs-12"><hr></div>

					</li>';

				}

				echo '</ul>';
            }
            /* TODO REVISAR VARDUMP DE ListaProductos */
           /*  var_dump(count($listaProductos)); */

            ?>
            <div class="clearfix"></div>
            <center>
             
           <!--  PAGINACION -->


            <?php

                if(count($listaProductos) !=0){

                    $pagProductos = ceil(count($listaProductos)/12);

                     /* TODO REVISAR VARDUMP DE pagProductos  */

                    /* var_dump($pagProductos); */


                    if($pagProductos > 4){


                        /*   LOS PRIMEROS 4 BOTONES DE LAS PRIMERAS 4 PAGINAS Y LA ÚLTIMA PAGINA*/

                        if($rutas[1] == 1){


                        echo'<ul class="pagination">';


                        for($i = 1; $i <= 4; $i ++){


                            echo'<li><a href="'.$url .$rutas[0].'/'.$i.'">'.$i.'</a></li>';




                        }


                   
                         echo '
                            <li class="disabled"><a>...</a></li>
                            <li><a href="'.$ur.$rutas[0].'/'.$pagProductos.'">'.$pagProductos.'</a></li>
                            <li><a href="'.$url.$rutas[0].'/2"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            
                         </ul>';
                        }

                        /*   LOS PRIMEROS 4 BOTONES DE LAS  ULTIMA 44 PAGINAS Y LA PRIMERA PAGINA*/

                        else if($rutas[1] == $pagProductos){



                            echo'<ul class="pagination">
                            <li><a href="'.$url .$rutas[0].'/'.($pagProductos-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                            <li><a href="'.$url .$rutas[0].'/1">1</a></li>
                            <li class="disabled"><a>...</a></li>
                            ';


                            for($i = ($pagProductos-3); $i <= $pagProductos; $i ++){
    
    
                                echo'<li><a href="'.$url.$rutas[0].'/'.$i.'">'.$i.'</a></li>';
    
    
    
    
                            }
    
    
                       
                             echo '
                                
                             </ul>';




                        }
                         /*   LOS  BOTONES DE LA MITAD DE PAGINAS HACIA ABAJO*/

                         else if($rutas[1] != $pagProductos && 
                                 $rutas[1] != 1 &&
                                 $rutas[1] <  ($pagProductos/2) &&
                                 $rutas[1] < ($pagProductos-3)
                         
                         ){

                            $numPagActual = $rutas[1];


                            echo '<ul class="pagination">
								   <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
								   <li id="item1"><a href="'.$url.$rutas[0].'/1">1</a></li>
								   <li class="disabled"><a>...</a></li>
								';
							
								for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

									echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'">'.$i.'</a></li>';

								}


								echo '  <li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>';


                         }


                          /*   LOS  BOTONES DE LA MITAD DE PAGINAS HACIA ARRIBA*/

                          else if(
                            $rutas[1] != $pagProductos && 
                            $rutas[1] != 1 &&
                            $rutas[1] >=  ($pagProductos/2) &&
                            $rutas[1] < ($pagProductos-3)
                          ){
                            $numPagActual = $rutas[1];

                            echo '<ul class="pagination">
                            <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
                            <li id="item1"><a href="'.$url.$rutas[0].'/1">1</a></li>
                            <li class="disabled"><a>...</a></li>
                           ';
                     
                         for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

                             echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'">'.$i.'</a></li>';

                         }


                         echo '  <li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                             </ul>';



                          }
                          

                           /*   LOS  BOTONES DE LAS ULTIMA 4 PAGINAS*/



                           else{

							$numPagActual = $rutas[1];

							echo '<ul class="pagination">
								   <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
								   <li id="item1"><a href="'.$url.$rutas[0].'/1">1</a></li>
								   <li class="disabled"><a>...</a></li>
								';
							
							for($i = ($pagProductos-3); $i <= $pagProductos; $i ++){

								echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'">'.$i.'</a></li>';

							}

							echo ' </ul>';

						}








                    }else{


                        echo'<ul class="pagination">';


                             for($i = 1; $i <= $pagProductos; $i ++){


                                 echo'<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'">'.$i.'</a></li>';


                             }


                        
                        echo'</ul>';



                    }


                }

            ?>


             </center>

        </div>
    </div>
</div>