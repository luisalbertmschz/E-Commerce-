<!--=====================================
SLIDESHOW  
======================================-->

<div class="container-fluid" id="slide">


        <div class="row">


           <!-- SLIDES O DIAPOSITIVAS -->


            <ul>


               <?php

                $slide = ControladorSlide::ctrMostrarSlide();

                foreach($slide as $key => $value) {

                    $estiloImgProducto = json_decode($value["estiloImgProducto"], true);
                    $estiloTextoSlide = json_decode($value["estiloTextoSlide"], true);

                    $titulo1 = json_decode($value["titulo1"], true);
                    $titulo2 = json_decode($value["titulo2"], true);
                    $titulo3 = json_decode($value["titulo3"], true);




                    /* var_dump($slide); */

                    /* var_dump($estiloImgProducto); */

                        echo '<li>

                        <img src="http://localhost/E-commerce-Backend/'.$value["imgFondo"].'">

                        <div class="slideOpciones '.$value["tipoSlide"].'">

                            <img class="imgProducto"src="http://localhost/E-commerce-Backend/'.$value["imgProducto"].'"style="top:'.$estiloImgProducto["top"].'; right: '.$estiloImgProducto["right"].'; width: '.$estiloImgProducto["width"].'; left: '.$estiloImgProducto["left"].';">

                            <div class="textosSlide"style="top:'.$estiloTextoSlide["top"].' ;left:'.$estiloTextoSlide["left"].'; width:'.$estiloTextoSlide["width"].'; right: '.$estiloTextoSlide["right"].';">

                                <h1 style="color:'.$titulo1["color"].'">'.$titulo1["texto"].'</h1>
                                <h2 style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'</h2>
                                <h3 style="color:'.$titulo3["color"].'">'.$titulo3["texto"].'</h3>
                                
                                

                                    <a href="'.$value["url"].'">

                                    <!--  Fue elimnada la clase btn default que aplica el color global del site, para poder entonces establecer colores predefinidos si así se requiere -->

                                    '.$value["botonSlide"].'
                                    
                                    
                                    </a>
                            
                            
                            
                            </div>
                        
                        
                        </div>

                    </li>'; 

               }


               ?>
            
               <!-- SLIDE NUMERO 1 -->
                
<!--                 <li>

                     <img src="http://localhost/E-commerce-Backend/Vistas/img/slide/default/back_default.jpg">

                     <div class="slideOpciones slideOpcion1">

                       <img class="imgProducto"src="http://localhost/E-commerce-Backend/Vistas/img/slide/slide1/HPJET8035PRO.png"style="top: 15%; right: 10%; width: 35%;">

                        <div class="textosSlide"style="top:30% ;left:10%; width:40%;">

                            <h1 style="color:">HP OfficeJet Pro 8035</h1>
                            <h2 style="">Diseñada para ahorrarte tiempo</h2>
                            <h2 style=" color:#BB002F; font-weight:bold;">Desde $149.99 Dólares</h2>
                            

                                <a href=""> -->

                               <!--  Fue elimnada la clase btn default que aplica el color global del site, para poder entonces establecer colores predefinidos si así se requiere -->

<!--                                 <button class="btn btn-default backColor  text-uppercase">
                                Comprar ahora <span class="fa fa-chevron-right"></span>
                                </button>
                                
                                
                                </a>
                        
                        
                        
                        </div>
                     
                     
                     </div>

                </li>
 -->


               <!--  SLIDE NUMERO 2 -->

                <!-- <li>

                     <img src="http://localhost/E-commerce-Backend/Vistas/img/slide/default/back_default.jpg">

                     <div class="slideOpciones slideOpcion2">
                                                            
                       <img class="imgProducto"src="http://localhost/E-commerce-Backend/Vistas/img/slide/slide2/Glaptop.png"style=" top:30%; left:2%; width: 45%;">

                        <div class="textosSlide" style="top:30% ;right:10%;">
 
                            <h1 style="">¡Mejora tu experiencia Gaming!</h1>
                            <h2 style="">Conoce ya nuesto catálogo de portátiles gaming</h2>

                            <h3 style="right:50px; color:#BB002F; font-weight:bold;">Equipos desdes $589.65 Dólares en adelante</h3> 

                                <a href="">

                                <button class="btn btn-default backColor text-uppercase">
                                Conocer más<span class="fa fa-chevron-right"></span>
                                </button>
                                
                                </a>
                        
                        </div>
                     
                     
                     </div>

                </li>
 -->
                <!-- SLIDE NUMERO 3 -->
                
                <!-- <li>

                     <img src="http://localhost/E-commerce-Backend/Vistas/img/slide/default/back_default.jpg">

                     <div class="slideOpciones slideOpcion2">

                       <img class="imgProducto"src="http://localhost/E-commerce-Backend/Vistas/img/slide/slide3/RN7PRO1.png" style="top: 30%; left: 2%; width: 45%; opacity: 1;" > -->
                       <!--TODO:POSTCION  RIGHT  de imagenes -->
                      
                       <!--  <div class="textosSlide" style="top:15% ;right:5%;" >

                            <h1 style="">Xiaomi Redmi Note 7 Pro</h1>
                            <h2 style="">Cámara dual de 48 + 5 MP con IA</h2>
                            <h2 style="">Una nueva experiencia a nivel de un flagship</h2>
                            <h3 style=" color:#BB002F; font-weight:bold;">Desde $ 201.74 Dólares</h3>

                                <a href="">

                                <button class="btn btn-default backColor text-uppercase">
                                Ver producto <span class="fa fa-chevron-right"></span>
                                </button>
                                
                                
                                </a>
                        
                        
                        
                        </div>
                     
                     
                     </div>

                </li> -->


                <!-- SLIDE NUMERO 4 -->
                
               <!--  <li>

                     <img src="http://localhost/E-commerce-Backend/Vistas/img/slide/default/back_default.jpg">

                     <div class="slideOpciones slideOpcion2">

                       <img class="imgProducto"src="http://localhost/E-commerce-Backend/Vistas/img/slide/slide4/SURFB4PRO.png" style="top: 30%; left: 2%; width: 45%; opacity: 1;">

                        <div class="textosSlide" style="top:30% ;right:10%;">

                            <h1 style="">Conoce la Surface Book 2 Pro</h1>
                            <h2 style="">Liviana, versatil y potente</h2>
                            <h3 style=" color:#BB002F; font-weight:bold;">Desde $ 2,479 Dólares</h3>
            
                                <a href="">
                                <button class="btn btn-default backColor text-uppercase">
                                Comprar ahora <span class="fa fa-chevron-right"></span>
                                </button>
                                
                                </a>
 
                        </div>

                     </div>

                </li> -->

            
            </ul>

            <!-- PEQUEÑOS CIRCULOS QUE CONSTITUYEN LA PAGINACIÓN DEL SLIDE -->
		    <ol id="paginacion">

                <li item="1"><span class="fa fa-circle"></span></li>
                <li item="2"><span class="fa fa-circle"></span></li>
                <li item="3"><span class="fa fa-circle"></span></li>
                <li item="4"><span class="fa fa-circle"></span></li>

		    </ol>	

           <!--  FLECHAS DE INTERACIÓN CON EL SLIDE  -->
           <div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		   <div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>




  
        
        </div>   


</div>

<center>
	
	<button id="btnSlide" class="backColor">
		
			<i class="fa fa-angle-up"></i>

	</button>

</center>
		
