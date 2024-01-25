<?php
?>
    <!doctype html>
    <html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TeamNaturalLearning</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K8LG6DG');</script>
        <!-- End Google Tag Manager -->

        <!--para hacer cajas de alerta chulas -->
       <!-- <script src="sweetalert2.min.js"></script>-->
       <!-- <link rel="stylesheet" href="sweetalert2.min.css">-->

        
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/alertasTestObjetivos.css">
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8LG6DG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header header-sticky">
                    <!-- Logo -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="menu-wrapper  d-flex align-items-center">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">                                                                                          
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="OKR4L.html">OKR4L</a></li>
                                        <li><a href="experiencias.html">Experiencias de aprendizaje</a></li>
                                        <li class="active"><a href="#">Herramientas</a>
                                            <ul class="submenu">
                                                <li><a href="canvas.html">Canvas de aprendizaje</a></li>
                                                <li><a href="innovacion.html">Perfil de innovación individual</a></li>
                                                <li><a href="equipo.html">Test diagnósis de equipo</a></li>
                                                <li><a href="testObjetivos.html">Test de objetivos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> 
                    <!--<div class="header-right d-none d-lg-block">
                        <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt=""> +34 679 068 143</a>
                        <a href="#" class="header-btn2">Registro/Login</a>
                    </div>-->
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>


        <main>
            <div id="seccionInnovacion">
                <div id="seccionInnovacion">
                    <section>
                        <form id="textoObjetivos">
                            <div class="cuadro_pregunta">
                                <div>Pregunta #<span class='m_1' id="numeroPregunta">1:</span></div>
                                <div class="tituloPregunta" id="txt1" style="font-size: 20px;"> Pasado el tiempo...¿el resultado de mi inversión en aprendizaje es positivo?</div>
                                
                                <div class="marcoPreguntaObje">    
                                    <div class="col-xl-4">
                                        <div onclick="registraPregunta(this)" id="respuesta1" class="textoRespuesta">Si</div>
                                    </div>
                                
                                    <div class="col-xl-4">
                                        <div onclick="registraPregunta(this)" id="respuesta2" class="textoRespuesta">No</div>
                                    </div>

                                </div>
                            </div>
                            <div class="leyendaMapa">
                                <div class="leyenda"><b>LEYENDA</b>
                                    <div class="elementoLeyenda" style="background-color: #0CA789">RESULTADOS</div>
                                    <div class="elementoLeyenda" style="background-color: #414BB2">COMPETENCIAL</div>
                                    <div class="elementoLeyenda" style="background-color: #9F8212">CONTEXTO</div>
                                    <div class="elementoLeyenda" style="background-color: #DA0063">MOTIVACIONAL</div>
                                    <div class="elementoLeyenda" style="background-color: #2D9BF0">OPORTUNIDAD</div>
                                </div>
                                    
                                <div id="mapa" class="mapa"><b>MAPA DE UN RELATO</b></div>
                            </div>
                            
                        </form>
                        <!--<a href="#seccionPreguntas" class="genric-btn info" id="botonSiguiente">Siguiente</a>-->
                        <script type="text/javascript" src="assets/js/testObjetivos.js"></script>
                    </section>
                </div>


        </main>
        <footer>
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                         <div class="single-footer-caption mb-50">
                           <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo mb-35">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Si tienes alguna duda o quieres mas información no dudes en ponerte en contacto.</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Vuelve a: </h4>
                            <ul>
                                <li><a href="OKR4L.html">- OKR4L</a></li>
                                <li><a href="experiencias.html">- Diseño de experiencias de aprendizaje</a></li>
                                <li><a href="canvas.html">- Canvas de aprendizaje</a></li>
                                <li><a href="innovacion.html">- Perfil de innovación individual</a></li>
                                <li><a href="equipos.html">- Test diagnosis de equipo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Dame un toque</h4>
                            <ul>
                                <li class="number"><a href="#">(+34) 679 068 143</a></li>
                                <li><a href="#">hola@equiposqueaprenden.es</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
        <div class="container">
            <div class="footer-border">
               <div class="row d-flex align-items-center">
                   <div class="col-xl-12 ">
                       <div class="footer-copy-right text-center">
                           <p>
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</p>
                            <a class="politicaFooter"  href="legal.html">Aviso legal</a>
                            <a class="politicaFooter"  href="privacidad.html">Politica de privacidad</a>
                            <a class="politicaFooter"  href="cookies.html">Política de cookies</a>
                            <a class="politicaFooter"  href="terminos.html">Términos y condiciones</a>
                            <a class="politicaFooter"  href="compras.html">Política de compras</a>


                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






                           <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                        </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
    </html>
