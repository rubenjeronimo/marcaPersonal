<?php
    require_once("../conectar.php");

/*
$consulta = "SELECT * FROM `HPTRaw` WHERE empresa DESC LIMIT 1";
$resultado = mysqli_query($conexion,$consulta);
$row=mysqli_fetch_assoc($resultado);
*/

$empresas= "SELECT count(`empresa`) FROM `HPTRaw`";

$consultaEmp="SELECT avg(`empresa`) FROM `HPTRaw`
  WHERE empresa like '%PHP%'";
$resultadoEmp = mysqli_query($conexion,$consultaEmp);
$rowEmp=mysqli_fetch_assoc($resultadoEmp);

$consultaP1V="SELECT avg(`P1V`) FROM `HPTRaw`
  WHERE empresa like '%PHP%'";
$resultadoP1V = mysqli_query($conexion,$consultaP1V);
$rowP1V=mysqli_fetch_assoc($resultadoP1V);

$empresa=$row['empresa'];
$gen=$row['gen'];
$con=$row['con'];
$opt=$row['opt'];
$imp=$row['imp'];
$per=$row['per'];    
              
?>                                


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TNL Resultados equipo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- fuente letra comfortaa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EMDQKV4MSD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EMDQKV4MSD');
</script>
    <!-- End Google Global site tag -->

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
</head>
<body>

    
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
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="OKR4L.html">OKR4L</a></li>
                                    <li><a href="experiencias.html">Experiencias de aprendizaje</a></li>
                                    <li><a href="#">Herramientas</a>
                                        <ul class="submenu">
                                            <li><a href="canvas.html">Canvas de aprendizaje</a></li>
                                            <li><a href="innovacion.html">Perfil de innovación individual</a></li>
                                            <li><a href="equipo.html">Test diagnósis de equipo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt=""> +34 679 068 143</a>
                    <a href="#" class="header-btn2">Registro/Login</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


    <main>
        //sección resumen participación
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="dosColumnas">
                        <div>
                            <h3 class="tituloBungee" style="font-size: 14px">Breve<br><span class="azul" style="font-size: 28px"> Resumen<br></span> de participación</h3>
                            <hr size="5px" style="border-color: green;" class="verde">
                            <p style="font-size: 12px">Un espacio para evaluar cómo está<br>de interesado el equipo en dar su <br>voz para el propio equipo.</p>
                        </div>
                        <!--GRAFICOS-->
                        <div>
                            
                            <div>
                                <canvas id="canvasGR1" width="600" height="250" style="margin: 0 auto 0 auto;display: block;">
                                    <script type="text/javascript">
                                        //Variables necesarias
                                        var convocados=10;
                                        var respuestas=4;
                                        var puntuacionMax=80;
                                        var puntuacionMin=20;
                                        var conteoMax=3;
                                        var conteoMin=1;
                                        var evaluacion=71;
                                        var atmosfera=97.15;
                                        var cohesion=97.14;
                                        var compromiso=99.2;
                                        var comunicacion=82.44;
                                        var conflictos=80.2;
                                        var cooperacion=92.2;
                                        var creatividad=93.5;
                                        var decisiones=77.3;
                                        var feedback=88.3;
                                        var feedbackLider=88.3;
                                        var objetivos=88.3;
                                        var identificacion=51.4;
                                        var liderazgo=84.4;
                                        var respeto=55.4;
                                        var apertura=38.3;
                                        var orgullo=83.3;
                                        var reconocimiento=88.4;
                                        var apoyo=52.5;
                                        var confianza=66.3;
                                        var listadoAtributos=[evaluacion,atmosfera,cohesion,compromiso,comunicacion,conflictos,cooperacion,decisiones,creatividad,feedback,feedbackLider,objetivos,identificacion,liderazgo,respeto,apertura,orgullo,reconocimiento,apoyo,confianza];
                                        var listadoAtributosTexto=['evaluacion','atmosfera','cohesion','compromiso','comunicacion','conflictos','cooperacion','decisiones','creatividad','feedback','feedbackLider','objetivos','identificacion','liderazgo','respeto','apertura','orgullo','reconocimiento','apoyo','confianza'];



                                        var canvasGraficos1 = document.getElementById('canvasGR1');
                                        var ancho=canvasGraficos1.width;
                                        var verde="#6dcf00ff";
                                        var amarillo="#fcc000ff";
                                        var azulon="#09aef2ff";
                                        var gris="#adadad";
                                        var blanco="#ffffff";
                                        var negro="#000000";
                                        var turquesa="#009688";
                                        if (canvasGraficos1.getContext) {
                                            var ctx=canvasGraficos1.getContext('2d');
                                            ctx.strokeStyle=gris;
                                            ctx.fillStyle=gris;
                                            for(var i=0;i<=5;i++){
                                               ctx.beginPath();
                                                ctx.fillText(10-(i*2),20,100+(i*20));
                                                ctx.moveTo(50,100+(i*20));
                                                ctx.lineTo(200,100+(i*20));
                                                ctx.closePath();
                                                ctx.stroke(); 
                                            }
                                            for(i=0;i<=5;i++){
                                               ctx.beginPath();
                                                ctx.fillText(100-(i*20),220,100+(i*20));
                                                ctx.moveTo(250,100+(i*20));
                                                ctx.lineTo(400,100+(i*20));
                                                ctx.closePath();
                                                ctx.stroke(); 
                                            }
                                            for(i=0;i<=5;i++){
                                               ctx.beginPath();
                                                ctx.fillText(100-(i*20)+"%",420,100+(i*20));
                                                ctx.moveTo(450,100+(i*20));
                                                ctx.lineTo(600,100+(i*20));
                                                ctx.closePath();
                                                ctx.stroke(); 
                                            }
                                            //CONVOCADOS
                                            ctx.beginPath();
                                            ctx.font = "10pt comfortaa";
                                            ctx.textAlign="center";
                                            ctx.strokeStyle=verde;
                                            ctx.lineWidth=25;
                                            ctx.moveTo(80,200);
                                            ctx.lineTo(80,200-(convocados*10));
                                            ctx.closePath();
                                            ctx.stroke();  
                                            ctx.strokeStyle=verde;
                                            ctx.lineWidth=25;
                                            ctx.moveTo(155,200);
                                            ctx.lineTo(155,200-(respuestas*10));
                                            ctx.closePath();
                                            ctx.stroke();
                                            ctx.beginPath();                                            
                                            ctx.fillStyle=blanco;
                                            ctx.font = "8pt comfortaa";
                                            ctx.fillText(convocados,80,220-(convocados*10));
                                            ctx.fillText(respuestas,155,220-(respuestas*10));
                                            ctx.fillStyle=gris;
                                            ctx.fillText("Convocados",80,215);
                                            ctx.fillText("Respuestas",155,215);
                                            ctx.fillText("recibidas",155,225);
                                            //CONTEO PUNTUACION
                                            ctx.beginPath();
                                            ctx.font = "10pt comfortaa";
                                            ctx.textAlign="center";
                                            ctx.strokeStyle=azulon;
                                            ctx.fillStyle=azulon;
                                            ctx.lineWidth=25;
                                            ctx.moveTo(280,200);
                                            ctx.lineTo(280,200-(conteoMax*10));
                                            ctx.closePath();
                                            ctx.stroke();
                                            ctx.lineWidth=25;
                                            ctx.moveTo(355,200);
                                            ctx.lineTo(355,200-(conteoMin*10));
                                            ctx.closePath();
                                            ctx.stroke();
                                            ctx.beginPath();                                            
                                            ctx.fillStyle=blanco;
                                            ctx.font = "8pt comfortaa";
                                            ctx.fillText(conteoMax,280,220-(conteoMax*10));
                                            ctx.fillText(conteoMin,355,220-(conteoMin*10));
                                            ctx.fillStyle=gris;
                                            ctx.fillText("Conteo punt.",280,215);
                                            ctx.fillText("máximo",280,225);
                                            ctx.fillText("Conteo punt.",355,215);  
                                            ctx.fillText("mínimo",355,225); 
                                            //RANGO PUNTUACION
                                            ctx.beginPath();
                                            ctx.font = "10pt comfortaa";
                                            ctx.textAlign="center";
                                            ctx.strokeStyle=amarillo;
                                            ctx.fillStyle=amarillo;
                                            ctx.lineWidth=25;
                                            ctx.moveTo(480,200);
                                            ctx.lineTo(480,200-(puntuacionMax));
                                            ctx.closePath();
                                            ctx.stroke();
                                            ctx.lineWidth=25;
                                            ctx.moveTo(555,200);
                                            ctx.lineTo(555,200-(puntuacionMin));
                                            ctx.closePath();
                                            ctx.stroke();
                                            ctx.beginPath();                                            
                                            ctx.fillStyle=blanco;
                                            ctx.font = "8pt comfortaa";
                                            ctx.fillText(puntuacionMax,480,220-(puntuacionMax));
                                            ctx.fillText(puntuacionMin,555,220-(puntuacionMin));
                                            ctx.fillStyle=gris;
                                            ctx.fillText("Puntuación",480,215);
                                            ctx.fillText("máxima",480,225);
                                            ctx.fillText("Puntuación",555,215);  
                                            ctx.fillText("mínima",555,225);  
                                            //ROTULOS SUPERIOR
                                            //respuestas
                                            ctx.beginPath();
                                            ctx.fillStyle=verde;
                                            ctx.moveTo(75,70);
                                            ctx.lineTo(75,20);
                                            ctx.arc(80,20,5,Math.PI/2,3*(Math.PI/2),false);
                                            ctx.lineTo(175,15);
                                            ctx.arc(175,20,5,0,(Math.PI/2),true);
                                            ctx.lineTo(175,70);
                                            ctx.closePath();
                                            ctx.fill();
                                            ctx.fillStyle=blanco;
                                            ctx.font = "10pt comfortaa";
                                            ctx.fillText("Respuestas",125,30);   
                                            ctx.fillText("totales: ",125,45);
                                            ctx.font = "13pt comfortaa";
                                            ctx.fillText((respuestas/convocados)*100+'%',125,65);  
                                            ctx.font = "10pt comfortaa"; 
                                            //conteo
                                            ctx.beginPath();
                                            ctx.fillStyle=azulon;
                                            ctx.moveTo(275,70);
                                            ctx.lineTo(275,20);
                                            ctx.arc(280,20,5,Math.PI/2,3*(Math.PI/2),false);
                                            ctx.lineTo(375,15);
                                            ctx.arc(375,20,5,0,(Math.PI/2),true);
                                            ctx.lineTo(375,70);
                                            ctx.closePath();
                                            ctx.fill();
                                            ctx.fillStyle=blanco;
                                            ctx.font = "10pt comfortaa";
                                            ctx.fillStyle=blanco;
                                            ctx.fillText("Conteo por",325,30);   
                                            ctx.fillText("puntuación: ",325,45);  
                                            //puntuación
                                            ctx.beginPath();
                                            ctx.fillStyle=amarillo;
                                            ctx.moveTo(475,70);
                                            ctx.lineTo(475,20);
                                            ctx.arc(480,20,5,Math.PI/2,3*(Math.PI/2),false);
                                            ctx.lineTo(575,15);
                                            ctx.arc(575,20,5,0,(Math.PI/2),true);
                                            ctx.lineTo(575,70);
                                            ctx.closePath();
                                            ctx.fill();
                                            ctx.fillStyle=blanco;
                                            ctx.font = "10pt comfortaa";
                                            ctx.fillText("Rango de",525,30);   
                                            ctx.fillText("puntuación: ",525,45);  
                                        }
                                    </script>
                                </canvas>
                                <p style="font-size:12px;padding-left: 50px;">La cantidad de respuestas no es representativa del equipo completo con lo que hay que considerar un cierto margen de error en los análisis.</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!--sección resumen participación-->
        <div class="whole-wrap" style="background: black;">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="dosColumnas">
                        <div>
                            <h3 class="tituloBungee gris" style="font-size: 14px">Cuatro<br><span class="azul" style="font-size: 28px"> ANÁLISIS<br></span> sobre tu equipo</h3>
                        </div>
                        <div style="display: grid;grid-template-rows: 1fr 1fr 1fr 1fr;">
                            <div style="vertical-align: middle;width: 200px;height: 40px; padding: 10px;" class="dosColumnas">
                                <p style="border-radius: 100%; border-color: #6aa84f;color:#6aa84f ;border-width: 3px;font-size: 25px; vertical-align: bottom;border-style: solid;width: 40px;height: 40px;text-align: center;">1</p>
                                <p  class="verde">UK ARMY PERFORMANCE</p>
                            </div>
                            <div style="vertical-align: middle;width: 200px;height: 40px; padding: 10px;" class="dosColumnas">
                                <p style="border-radius: 100%; border-color: #6aa84f;color:#6aa84f ;border-width: 3px;font-size: 25px; vertical-align: bottom;border-style: solid;width: 40px;height: 40px;text-align: center;">2</p>
                                <p  class="verde">Análisis Katzenbach & Smith</p>
                            </div>
                            <div style="vertical-align: middle;width: 200px;height: 40px; padding: 10px;" class="dosColumnas">
                                <p style="border-radius: 100%; border-color: #6aa84f;color:#6aa84f ;border-width: 3px;font-size: 25px; vertical-align: bottom;border-style: solid;width: 40px;height: 40px;text-align: center;">3</p>
                                <p  class="verde">Análisis Tuckman</p>
                            </div>
                            <div style="vertical-align: middle;width: 200px;height: 40px; padding: 10px;" class="dosColumnas">
                                <p style="border-radius: 100%; border-color: #6aa84f;color:#6aa84f ;border-width: 3px;font-size: 25px; vertical-align: bottom;border-style: solid;width: 40px;height: 40px;text-align: center;">4</p>
                                <p  class="verde">Mapa de recursos de innovación</p>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>

<!--sección UK army resumen-->
        <div class="whole-wrap" >
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <div>
                            <h3 class="tituloBungee" style="font-size: 14px">UK<br><span class="azul" style="font-size: 28px"> ARMY<br></span> performance</h3>
                            <canvas id="canvasMiniGraficos" width="900" height="700" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvasMG = document.getElementById('canvasMiniGraficos');
                                    var ancho=canvasMG.width;
                                    if (canvasMG.getContext) {
                                        var ctx=canvasMG.getContext('2d');
                                        ctx.strokeStyle=gris;
                                        ctx.fillStyle=gris;

                                        //ciclos de atributos
                                        var contador=0;
                                        ctx.textAlign="center";
                                        for (var i = 0; i <= 3; i++) {
                                            for(var j=0;j<=4;j++){
                                                ctx.fillText(listadoAtributosTexto[contador],100+(150*j),100+(150*i));
                                                ctx.fillText(listadoAtributos[contador]+"%",100+(150*j),180+(150*i));
                                                ctx.beginPath();
                                                ctx.arc(100+(150*j),135+(150*i),20,0,((2*Math.PI)*listadoAtributos[contador])/100,false);
                                                ctx.arc(100+(150*j),135+(150*i),20,((2*Math.PI)*listadoAtributos[contador])/100,0,true);
                                                ctx.closePath();
                                                ctx.lineWidth=10;
                                                ctx.stroke();

                                                ctx.beginPath();
                                                ctx.arc(100+(150*j),135+(150*i),15,((2*Math.PI)*listadoAtributos[contador])/100,0,false);
                                                ctx.arc(100+(150*j),135+(150*i),25,0,((2*Math.PI)*listadoAtributos[contador])/100,true);
                                                ctx.lineWidth=1;
                                                ctx.closePath();
                                                ctx.stroke();
                                                contador++;
                                            }                         
                                        }
                                    }
                                </script>
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--grafico de araña-->
            <div>
                <canvas id="canvasArana" width="500" height="500" style="margin: 0 auto 0 auto;display: block;">
                    <script type="text/javascript">
                        var canvasAra = document.getElementById('canvasArana');
                        var lado=canvasAra.width;

                        if (canvasAra.getContext) {
                            var ctx=canvasAra.getContext('2d');
                            ctx.strokeStyle=amarillo;
                            ctx.fillStyle=gris;
                            ctx.textAlign="center";
                            /*Escala*/
                            ctx.beginPath();
                            ctx.globalAlpha=0.3;
                            ctx.fillStyle="#adadad";
                            ctx.arc(lado/2,lado/2,200,0,2*Math.PI,true);
                            ctx.closePath();
                            ctx.fill();
                            ctx.fillStyle=negro;
                            ctx.fillText("100%",270,lado/2-180);
                            ctx.beginPath();
                            ctx.fillStyle="#b9b9b9";
                            ctx.arc(lado/2,lado/2,150,0,2*Math.PI,true);
                            ctx.closePath();
                            ctx.fill();

                            ctx.fillStyle=negro;
                            ctx.fillText("75%",270,lado/2-130);
                            ctx.beginPath();
                            ctx.fillStyle="#c5c5c5";
                            ctx.arc(lado/2,lado/2,100,0,2*Math.PI,true);
                            ctx.closePath();
                            ctx.fill();

                            ctx.fillStyle=negro;
                            ctx.fillText("50%",270,lado/2-80);
                            ctx.beginPath();
                            ctx.fillStyle="#d1d1d1";
                            ctx.arc(lado/2,lado/2,50,0,2*Math.PI,true);
                            ctx.closePath();
                            ctx.fill();

                            ctx.fillStyle=negro;
                            ctx.fillText("25%",270,lado/2-30);
                            ctx.globalAlpha=1;

                            var coordenadasPuntos=[];

                            function polis(x0,y0,angulo,radio,tex,color){
                                ctx.fillStyle=color;
                                ctx.strokeStyle=color;
                                ctx.beginPath();
                                ctx.moveTo(x0,y0);
                                ctx.lineTo((x0+radio*Math.cos(angulo)),(y0+radio*Math.sin((angulo))));
                                ctx.closePath();
                                ctx.stroke();
                                ctx.fillText(tex,(x0+(radio+20)*Math.cos(angulo)),(y0+(radio+20)*Math.sin((angulo))));
                            }

                            function ponerPunto(x0,y0,angulo,radio,color){
                                ctx.beginPath();
                                ctx.fillStyle=color;
                                ctx.arc((x0+radio*Math.cos(angulo)),(y0+radio*Math.sin((angulo))),3,0,2*Math.PI,true);
                                coordenadasPuntos.push([(x0+radio*Math.cos(angulo)),(y0+radio*Math.sin((angulo)))]);
                                ctx.closePath();
                                ctx.fill();
                            }

                            var xx0,yy0,xx1,yy1;

                            function unirPuntos(xorigen,yorigen,xfin,yfin,color){
                                ctx.strokeStyle=color;
                                ctx.beginPath();
                                ctx.moveTo(xorigen,yorigen);
                                ctx.lineTo(xfin,yfin);
                                ctx.closePath();
                                ctx.stroke();
                            }
                            

                            for(i=0;i<=listadoAtributos.length-1;i++){
                                ctx.strokeStyle=negro;
                                polis(lado/2,lado/2,i*(Math.PI)/10,200,listadoAtributosTexto[i],negro);
                                ponerPunto(lado/2,lado/2,i*(Math.PI)/10,listadoAtributos[i]*2,amarillo);
                                ctx.beginPath();
                                ctx.lineCap='round';
                                ctx.lineJoin='round';



                                if (18>=i&&i>=1) {
                                    ctx.moveTo(coordenadasPuntos[i-1][0],coordenadasPuntos[i-1][1]);
                                    ctx.lineTo(coordenadasPuntos[i][0],coordenadasPuntos[i][1]);
                                    ctx.stroke();
                                }else if(i==19){
                                    ctx.moveTo(coordenadasPuntos[i][0],coordenadasPuntos[i][1]);
                                    ctx.lineTo(coordenadasPuntos[0][0],coordenadasPuntos[0][1]);
                                    ctx.stroke();
                                    ctx.closePath();
                                    ctx.fill();
                                }else{
                                    ctx.closePath();
                                    ctx.fill();
                                }
                            }
                        }
                    </script>
                </canvas>
            </div>
        </div>

        <!--sección UK army desglosado-->
        <div class="whole-wrap" >
            <div class="container box_1170">
                <div class="section-top-border">
                    <h3 class="tituloBungee" style="font-size: 14px">UK<br><span class="azul" style="font-size: 28px"> ARMY<br></span> DESGLOSADO</h3>
                    <div class="dosColumnas">
                        <div></div>
                        <div>
                            <div>
                                <div>
                                </div>
                                <div>
                                    <div class='tablaEquipoResultados'>
                                        <!--SECCIÓN Evaluacion-->
                                        <section id="seccionEvaluacion" class="container">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR1"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR1" style="font-size:28px;text-align: center;">%</p>
                                                </div>
                                                <div class="dosFilasHPT" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR1"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR1"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[0];
                                                        var valor=listadoAtributos[0];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="La sensación de poder crecer individualmente es nula. El equipo se cierra a la mejora ya que no es capaz de poner el foco en si mismo. ";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="La tendencia a observar el rendimiento del equipo, es hacia la obligación. No hace una introspección con animo de mejora sino como un evento singular donde exponer a modo listado, las evidencias relativas a diferentes acciones.<br>El equipo no dispone de estructuras lógicas de evaluación y gestión de la información con lo que el proceso de aprendizaje, aunque se nutre de contenido, no está dotado de un objetivo y por lo tanto, no es productivo desde la evaluación. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El equipo da importancia a la documentación y a la revisión de los materiales. Así mismo, acepta tener una cultura de evaluación continua. Sin embargo, sigue siendo una carga en ciertos aspectos como puedan ser la redacción o cristalización del conocimiento y no existen (o existen de manera lateral) las herramientas propias para que el equipo pueda desarrollar un verdadero crecimiento basado en la mejora continua y el aprendizaje en equipo. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR1').innerHTML=titulo;
                                                        document.getElementById('valorMR1').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR1').innerHTML=texT;
                                                        document.getElementById('ResCualitMR1').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <hr class="verde">
                                <!--SECCIÓN Atmosfera-->
                                <section id="seccionAtmosfera">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR2"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR2" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR2"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR2"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[1];
                                                        var valor=listadoAtributos[1];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="Tu equipo tiene buena relación a nivel personal salvo algunas excepciones y se encuentra unido hasta que hay que tomar alguna decisión importante o bien, cuando tiene algún resultado que ofrecer obligatoriamente. Es cuando el equipo tiene una obligación cuando los comportamientos internos suelen reflejarse en desconfianza y ataques ad-hominem.<br>El equipo conoce las bases de la confianza y el respeto mutuo pero solo las aplica en terminos personales. Es en el ámbito profesional donde el equipo no sabe diseñar ámbitos amables. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="xxxx";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="El respeto y la confianza son básicos en las relaciones entre los miembros del equipo. Las energías suelen ser de carácter positivo y permeables a la mejora. El equipo se estimula desde la actividad y refuerza su sentido de equipo atendiendo a todos y cada uno de los miembros. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR2').innerHTML=titulo;
                                                        document.getElementById('valorMR2').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR2').innerHTML=texT;
                                                        document.getElementById('ResCualitMR2').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Cohesion-->
                                        <section id="seccionCohesion">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR3"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR3" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR3"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR3"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[2];
                                                        var valor=listadoAtributos[2];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="El equipo tiene esperanza en que los miembros superarán una fase de desmotivación conjunta y podrán constituir finalmente un verdadero equipo. SIn embargo carece de confianza entre los miembros y esto, puede ser un motivo por el cual, se evita construir y mejorar para cada uno de los miembros. El trabajo individual es percibido como una lista de tareas independientes de las del resto de los miembros. ";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El sentido de pertenencia es compartido por todos o casi todos los miembros del equipo. La unión entre los miembros se fundamenta en la consecución de los objetivos. Existen lazos fuertes entre miembros debidos a la confianza y los resultados.<br>El ámbito de mejora pasa por desvincular completamente la componente personal en el ambito del equipo. Puede existir una reminiscencia de capas de miedos y egos que pueden provocar una desvinculacion a nivel individual que puede ser aprovechada para generar conversaciones cruciales. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT='Aunque siempre quedan "flecos" que pulir, se puede considerar que el vuestro es un grupo bastante robusto, del que la gente que participa en el, tiene acomodo y acompañamiento continuo.El feedback entre pares aquí es fundamental para terminar de perfilar esa cultura de equipo. ';
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR3').innerHTML=titulo;
                                                        document.getElementById('valorMR3').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR3').innerHTML=texT;
                                                        document.getElementById('ResCualitMR3').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Compromiso-->
                                        <section id="seccionCompromiso">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR4"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR4" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR4"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR4"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[3];
                                                        var valor=listadoAtributos[3];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="La tendencia de los miembros es hacia la constitución de un equipo verdadero pero aún no tiene energía, herramientas y/o retos suficientes como para poder poner a prueba su desarrollo. Los roles están definidos y también los liderazgos. Sin embargo, no hay proactividad ni intraemprendizaje suficiente como para abordar temas de equipo. Los resultados no han reforzado todavía los lazos profesionales pero tienen disponibilidad para ello. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El equipo ha entendido la necesidad del aporte individual para la consecución de objetivos generales. Sin embargo, aún hay una parte del equipo que no ve el beneficio de primar los intereses del equipo por encima de los individuales al no verse reconocidos en dichos objetivos. Esto puede ser síntoma de una falta de comunicación por parte de dichos miembros, que aún no han encontrado su espacio seguro dentro del equipo. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="El grado de implicación de los miembros es elevado y eso impulsa al equipo al completo a alcanzar cotas más altas de conocimiento y optar por objetivos más ambiciosos. La capacidad demostrada y demostrable del equipo para acometer trabajos avala el compromiso individual que los miembros deben realizar ante nuevos proyectos o incluso, tareas ingratas. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR4').innerHTML=titulo;
                                                        document.getElementById('valorMR4').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR4').innerHTML=texT;
                                                        document.getElementById('ResCualitMR4').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN COMUNICACIÓN-->
                                        <section id="seccionComunicacion">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR5"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR5" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR5"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR5"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[4];
                                                        var valor=listadoAtributos[4];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="La comunicación entre los miembros suele ser concreta y directa en momentos concretos que, bien pueden coincidir con el rango de importancia del tema tratado. El equipo pone atención a temas que puede controlar y evita o evade, aquellos que pueden traer una conversación crucial que es donde la comunicación puede entrar en una indeterminación y por lo tanto, en una ambiguedad que hará mella en el equipo. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El equipo es capaz de generar un";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La comunicación es clara entre los miembros, de carácter directo y sin ambigüedades. Los emisores ponen el foco en el tema a tratar sintetizando el objetivo y los resultados esperados y los receptores practican la escucha activa, y el mensaje no contiene importancia en función del emisor. Aún así, hay una parte del equipo que se resiste a mostrarse ante él de forma transparente. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR5').innerHTML=titulo;
                                                        document.getElementById('valorMR5').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR5').innerHTML=texT;
                                                        document.getElementById('ResCualitMR5').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN CONFLICTOS-->
                                        <section id="seccionConflictos">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR6"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR6" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR6"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR6"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[5];
                                                        var valor=listadoAtributos[5];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="En el aspecto mas profesional, el equipo evita que surjan conversaciones cruciales ya qeu no quiere enfrentarse aún a problemas internos que debe resolver. Los miembros se encuentran mas comodos hablando de temas personales que profesionales. Cuando una conversación crucial imposible de evadir, aparece en una reunión de equipo, los miembros no lo saben dejar en el plano profesional y lo bajan todo al plano personal, comenzando así unas disputas en las qeu las argumentaciones quedan en un segundo plano, supeditadas al descredito entre los miembros. ";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="Los miembros siguen percibiendo los temas cruciales como un elemento hostil y producen distorsiones en cuanto a la forma de trabajarlos y el resultado de salida. El equipo no se encuenta en un estado de madurez que le permita explorar las vías de mejora ya que la importancia recae en el plano personal, habilitando la capa de los egos y los miedos  y neutralizando la de las necesidades del mismo equipo. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="No existe un miedo manifiesto al conflicto y de hecho el equipo asume estos momentos como de crecimiento si bien, puede haber cierta parte del equipo que se pueda sentir amenazada por algunas decisiones de equipo pero en ningún caso suponen un bloqueo de esfuerzos o productividad. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="No existe un miedo manifiesto al conflicto y de hecho el equipo asume estos momentos como de crecimiento si bien, puede haber cierta parte del equipo que se pueda sentir amenazada por algunas decisiones de equipo pero en ningún caso suponen un bloqueo de esfuerzos o productividad. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR6').innerHTML=titulo;
                                                        document.getElementById('valorMR6').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR6').innerHTML=texT;
                                                        document.getElementById('ResCualitMR6').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN COOPERACIÓN-->
                                        <section id="seccionCooperacion">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR7"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR7" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR7"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR7"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[6];
                                                        var valor=listadoAtributos[6];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="La disponibilidad de colaboración entre los miembros es evidente y tienen ganas de hacerlo. La indeterminación sobre los siguientes pasos o el mero hecho de no tener una visión estratégica general, evitan poder colaborar en otros términos como la cocreación. La colaboración entre miembros se hace extensible a todo el grupo pero siempre desde el punto de vista de la ayuda: el ayudado es apoyado por otro miembro y ambos lo ven como una cesión de tiempo de uno a otro, pero nunca de generación de nuevo conocimiento por parte de ambos. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="Existe una capa de cooperación y de cocreación con los diferentes miembros del equipo. Los miembros se sienten respaldados por el resto y tienen confianza suficiente entre sí como para centrarse por completo en los objetivos y los resultados. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR7').innerHTML=titulo;
                                                        document.getElementById('valorMR7').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR7').innerHTML=texT;
                                                        document.getElementById('ResCualitMR7').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN decisiones-->
                                        <section id="seccionDecisiones">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR8"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR8" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR8"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR8"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[7];
                                                        var valor=listadoAtributos[7];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Las decisiones son tomadas por una gran parte del equipo que aporta su visión del tema tratado y fundamenta su decisión con datos vinculados a los objetivos. Aún no tiene madurez suficiente como para enfrentarse a temas cruciales que, evitan recurrentemente por miedo a las reacciones entre otros motivos, ralentizando la toma de decisiones. Los decisores suelen ser las mismas voces y no están seguros de que el resto del equipo acompañe adecuadamente la decisión. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La capacidad del equipo para asumir partes de los procesos (o incluso procesos integrales) ha sido fundamental para crear una atmósfera de confianza siendo la toma de decisiones, un hecho compartido por todo el equipo.<br>Los miembros se sienten respaldados por la capa de liderazgo y a la inversa, existe confianza por parte de los líderes para asumir que los miembros tomarán decisiones acorde a la cultura y espíritu de equipo.  ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR8').innerHTML=titulo;
                                                        document.getElementById('valorMR8').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR8').innerHTML=texT;
                                                        document.getElementById('ResCualitMR8').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN creatividad-->
                                        <section id="seccionCreatividad">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR9"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR9" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR9"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR9"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[8];
                                                        var valor=listadoAtributos[8];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="El equipo está concienciado de la necesidad de innovar. Desea poder ofrecer algo distinto a lo qeu encuentra y sus miembros realizan acciones individuales que permiten encontrar soluciones individuales a sus problemas. Aun así, el equipo carece de herramientas bien definidas y la creatividad surge por la necesidad de la dedicación y no por el mero hecho de la creación. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="Los ánimos del equipo  se centran en los resultados y de ahí, surgen las necesidades de mejora, procurando estimular la creación de nuevas ideas y proyectos que permitan mejorar el desempeño del equipo. Los miembros se sienten libres de probar y experimentar sin miedo al fracaso o al error y eso les permite encontrar vías nuevas de propuesta de valor para sus entregables. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR9').innerHTML=titulo;
                                                        document.getElementById('valorMR9').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR9').innerHTML=texT;
                                                        document.getElementById('ResCualitMR9').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN feedback-->
                                        <section id="seccionFeedback">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR10"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR10" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR10"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR10"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[9];
                                                        var valor=listadoAtributos[9];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El equipo conoce herramientas de aporte y crítica constructiva entre pares y también hacia el equipo al completo. Su predisposición es buena y sin embargo, aún se deja llevar por el lado mas emocional y personal a nivel individual. Hecho que se traduce en términos de equipo como, un grupo humano que conoce sus vulnerabilidades pero las evita. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La forma de dar feedback a otros miembros del equipo sucede de forma asertiva y de modo constructivo. La búsqueda de mejora en el otro, sucede de manera habitual y es ofertada desde el respeto y la amabilidad. La crítica constructiva es crucial para el desempeño del equipo y este reacciona con atención a lo que los miembros opinan. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR10').innerHTML=titulo;
                                                        document.getElementById('valorMR10').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR10').innerHTML=texT;
                                                        document.getElementById('ResCualitMR10').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN feedbak lider-->
                                        <section id="seccionFeedbackLider">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR11"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR11" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR11"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR11"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[10];
                                                        var valor=listadoAtributos[10];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Los lideres de sus areas comprenden la importancia de escuchar a su equipo y proponer situaciones diferentes en las que el equipo tienda a superarse a si mismo. La cantidad y calidad de las conversaciones de mejora, son insuficientes y puede deberse a varios motivos entre otros, la falta de objetivos claros, el desalineamiento de los miembros, la falta de confianza, etc.<br>En cuanto a la hora de recibir feedback, bien los lideres parecen escuchar pero no actuan en esa dirección o bien, los miembros del equipo no responden a las propuestas derivadas del feedback que aportan los lideres. En cualquier caso, existe una brecha entre los lideres y los miembros del equipo que siguen viendo a los primeros como una capa directiva y no cooperativa y de gestión. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="Los líderes son, no solo permeables a la crítica del equipo si no que la buscan. Su liderazgo comienza desde la autoexploración y necesitan de las opiniones del equipo para consensuar su liderazgo con este. El liderazgo sucede de manera natural y traza un recorrido hacia la horizontalidad. Los líderes tienden a ser ejemplo para el resto y acompañan a los miembros sin ser directivos y/o jerárquicos. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR11').innerHTML=titulo;
                                                        document.getElementById('valorMR11').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR11').innerHTML=texT;
                                                        document.getElementById('ResCualitMR11').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN objetivos-->
                                        <section id="seccionObjetivos">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR12"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR12" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR12"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR12"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[11];
                                                        var valor=listadoAtributos[11];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="La capacidad de analizar los propósitos como equipo son practicamente nulos, vinculandose a la actividad diaria sin dar importancia a las motivaciones que determinan el impacto real del equipo. No hay visión estratégica mas allá de la construcción de unos siguientes pasos trazados sobre la táctica y las tareas diarias. La inexistencia de responsabilidad con el resultado, impide verbalizarlo y comprometerse con ello. Practicamente ningun miembro del equipo considera que sus objetivos individuales tengan intersección con los de otros miembros del equipo, sintiendo un desalineamiento y una incapacidad de configurar un equipo real. ";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Los objetivos se han vuelto relevantes para el equipo tras un momento de comprensión de la utilidad del mismo. Han comprendido la necesidad de establecer objetivos y sin embargo, aún no saben como cristalizarlos correctamente. Los objetivos, aunque puedan ser considerados de equipo, aún no recogen la sensibilidad y motivación de todos los miembros. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="El equipo se compromete con la dirección y la misión y participa del planeamiento estratégico que acompañará durante un periodo de tiempo. Al hallar acomodo en los objetivos descritos y ser consensuados, la capacidad de alcanzarlos es mayor y el grado de implicación individual y el acompañamiento entre pares se visibiliza como una herramienta diaria. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR12').innerHTML=titulo;
                                                        document.getElementById('valorMR12').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR12').innerHTML=texT;
                                                        document.getElementById('ResCualitMR12').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Identificacion-->
                                        <section id="seccionIdentificacion">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR13"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR13" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR13"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR13"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[12];
                                                        var valor=listadoAtributos[12];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="Los miembros se reconocen entre sí y comparten experiencia y conocimiento aunque no en un grado suficiente. Sus interacciones se apoyan mas en el estado emocional y la afinidad entre pares que en un reconocimiento de habilidades individuales. Este comportamiento que es de alguna manera soportado por todo el equipo y que, en si mismo no debería suponer un bloqueo, puede evitar confrontaciones y conversaciones cruciales. El equipo aun depende de las emociones para aflorar conversaciones y las energías en conversaciones de equipo suelen evolucionar hacia fases negativas. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La sensación de pertenencia al equipo es compartida por todos los miembros y las diferentes voces poseen el mismo rango dentro del equipo, lo que fortalece los canales de comunicación internos y refuerza lazos.";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR13').innerHTML=titulo;
                                                        document.getElementById('valorMR13').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR13').innerHTML=texT;
                                                        document.getElementById('ResCualitMR13').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN liderazgo-->
                                        <section id="seccionLiderazgo">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR14"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR14" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR14"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR14"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[13];
                                                        var valor=listadoAtributos[13];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Los resultados obtenidos por el equipo se encuentran dentro de la zona de viabilidad y son aceptables en términos de equipo. Como responsables, los líderes distribuyen trabajo de una manera firme pero amable y son consecuentes con las decisiones adoptadas. El equipo responde a las decisiones de los líderes aportando trabajo en la consecución del objetivo. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La capa de liderazgo actúa con firmeza y amabilidad y los miembros aceptan los estilos de liderazgo individuales del resto y no solo son capaces de convivir con ellas si no que, aprovechan las características y habilidades de los líderes para alcanzar los objetivos. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR14').innerHTML=titulo;
                                                        document.getElementById('valorMR14').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR14').innerHTML=texT;
                                                        document.getElementById('ResCualitMR14').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN respeto-->
                                        <section id="seccionRespeto">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR15"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR15" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR15"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR15"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[14];
                                                        var valor=listadoAtributos[14];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="No hay ningún elemento ni sistema de reconocimiento entre los miembros. Los resultados se ocultan al resto. Los criterios de alineamiento y visión estatégica son percibidos con hostilidad por los miembros que, se sienten reconfortados dentro de sus relaciones interpersonales con otros miembros pero solo atienden a criterios emocionales y no profesionales. La falta de sensación de pertenencia, haca que ningun miembro se sienta orgullo ante sus resultados ni tenga conexión con el equipo para compartirlos. Puede ser que no haya resultados o qeu en ocasiones anteriores, el equipo se haya mostrado esquivo a la hora de reconocer los logros individuales. ";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Las conversaciones en las que se apoya a otro miembro suceden de manera espontánea. Reconocen sus éxitos y son celebrados aunque no es aún un comportamiento del equipo al completo.";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La atmósfera de compañerismo se aprecia en cada gesto y forma parte de nuestra cultura. Si bien es fácil que los miembros ya tuviesen una tendencia a la empatía y el acercamiento, sin duda fomentar estos comportamientos ha permitido que el sentimiento de gratitud y agradecimiento formen parte de vuestra empresa. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR15').innerHTML=titulo;
                                                        document.getElementById('valorMR15').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR15').innerHTML=texT;
                                                        document.getElementById('ResCualitMR15').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Apertura-->
                                        <section id="seccionApertura">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR16"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR16" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR16"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR16"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[15];
                                                        var valor=listadoAtributos[15];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="El equipo, aún pudiendo confiar entre pares, no es capaz de confiar en su equipo. Esto se puede deber desde la falta realista de resultados hasta el desalineamiento de los miembros o la desconexion de los objetivos. Al faltar confianza, el equipo tiende a la disgregación en pequeñas partículas.";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La capa de transparencia y sinceridad son una característica del equipo. Es uno de sus valores intrínsecos y es capaz de abordar todo tipo de temas entre miembros sin miedo a la respuesta. Así mismo, los miembros no rehuyen del mensaje que puedan recibir y se encuentran casi siempre en el espacio seguro que el equipo ha sabido construir. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR16').innerHTML=titulo;
                                                        document.getElementById('valorMR16').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR16').innerHTML=texT;
                                                        document.getElementById('ResCualitMR16').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Orgullo-->
                                        <section id="seccionOrgullo">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR17"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR17" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR17"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR17"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[16];
                                                        var valor=listadoAtributos[16];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="No hay una sensación de que el grupo humano sea realmente un equipo. Las afinidades personales y la sensacion de propiedad de las actividades de los miembros o grupos dentro del equipo evitan conectar con el resto del equipo, potenciando la dispersión. El equipo en sí mismo no aporta casi nada a los miembros que siguen viendolo como que la suma de los individuos es menor que el equipo al completo. No ha descubierto aun cual es su proposito, sus objetivos y sus acciones concretas. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El espíritu del equipo tiende hacia la pertenencia y cada miembro procura dar lo mejor de sí mismo para contribuir al objetivo común. Falta aún coordinación en la gestión del equipo para que, entorno a los resultados y la cultura de equipo, sean capaces de elevar los estándares establecidos. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="El equipo se compara contra sí mismo encontrando evolución y mejora, lo que permite a cada miembro tener un sentimiento de construcción de algo más grande, lo que permite y estimula a que el equipo busque retos cada vez mayores sin miedo. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR17').innerHTML=titulo;
                                                        document.getElementById('valorMR17').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR17').innerHTML=texT;
                                                        document.getElementById('ResCualitMR17').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Reconocimiento-->
                                        <section id="seccionReconocimiento">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR18"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR18" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR18"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR18"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[17];
                                                        var valor=listadoAtributos[17];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="Cada miembro celebra los éxitos individuales o de equipo y no los detecta como una amenaza para sí mismos o sus proyectos y objetivos si no que, se construyen a través de dichos éxitos.<br>La capacidad de celebración está ligada directamente a la comunicación y es la falta de transparencia la que evita poder celebrar los exitos del equipo al completo. ";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="Los miembros están dispuestos para el éxito. Aún no han tenido resultados relevantes que permitan evaluar los sentimientos del resto pero es una evidencia que los éxitos de otros no se convierten en un elemento hostil y se celebran. Las celebraciones suelen suceder a nivel interpersonal y en alguna ocasión, desde el equipo aunque este no esté familiarizado aún con esta forma de reacción ante un resultado. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="Sois muy conscientes de la difícil situación general y en particular, la que podáis vivir dentro de vuestro equipo,si es que la vivís (eso no lo dice este formulario), y gestionáis la emoción de un trabajo bien hecho con un reconocimiento que evidencia vuestro esfuerzo sin diferenciar, quien realizó dicho esfuerzo. Lo importante en vuestro equipo, es que el equipo consigue los logros. Y eso es muy de agradecer.";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR18').innerHTML=titulo;
                                                        document.getElementById('valorMR18').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR18').innerHTML=texT;
                                                        document.getElementById('ResCualitMR18').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Apoyo-->
                                        <section id="seccionApoyo">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR19"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR19" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR19"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR19"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[18];
                                                        var valor=listadoAtributos[18];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="Cada miembro se siente responsable a nivel individual pero no a nivel equipo. Las interacciones a nivel profesional se basan en el aporte de ayuda pero nunca buscan una construcción común. Los objetivos del ayudado no influyen en los del ayudador con lo que la sensación del primero es de deuda y la del segundo de agente externo de importancia superior. Al no generar conductas de equipo, este tipo de actividades se convierten en algo rutinario que evita el contacto profesional entre todos los miembros del equipo. Sin una orientación clara, los miembros tratan de identificar sus propios rendimientos y beneficios, despreciando los del equipo. ";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="El sentimiento de apoyo entre pares es algo que acontece habitualmente. El contexto del equipo aún se resiste a ser un sustento para sus miembros que, se miran mutuamente desde la distancia y la desconfianza aunque un foco en resultados y una definición clara de objetivos puede contribuir a superar esta situación. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="El equipo empieza a comportarse como un ser vivo que protege a sus miembros. El concepto de ayuda pasa a un segundo plano y entre la componente de la colaboración. Los miembros se sienten seguros entre sí y no existen fisuras en la capa de confianza. Los miembros se pueden mostrar vulnerables sin tener miedo o que el ego les afecte ya que el equipo dota de seguridad al espacio en el que cada miembro se quiere mostrar. La capacidad de cocrear con el otro aún está forjándose, siendo este el siguiente paso natural en el equipo. ";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR19').innerHTML=titulo;
                                                        document.getElementById('valorMR19').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR19').innerHTML=texT;
                                                        document.getElementById('ResCualitMR19').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">
                                        <!--SECCIÓN Confianza-->
                                        <section id="seccionConfianza">
                                            <div class="dosColumnas">
                                                <div>
                                                    <h3 class="tituloBungee" id="tituloMR20"></h3>
                                                    <p>Diagnosis cuantitativa:</p>
                                                    <p id="valorMR20" style="font-size:28px;text-align: center;"></p>
                                                </div>
                                                <div class="dosFilas" style="margin-left: 25px;">
                                                    <p id="textoCuantiMR20"></p>
                                                    <hr class="verde">
                                                    <p id="ResCualitMR20"></p>
                                                    <script type="text/javascript">
                                                        var titulo=listadoAtributosTexto[19];
                                                        var valor=listadoAtributos[19];
                                                        var texT="";
                                                        var texL="";
                                                        if (valor<20) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (21<valor<40) {
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }else if (41<valor<60) {
                                                            texL="111111";
                                                            texT="La confianza reside en los miembros y siempre a un nivel entre pares y dependiente de la afinidad interpersonal. El equipo no encuentra, aunque busca, un espacio de equilibrio entre las exigencias y los aportes. La falta de resultados que avalen la actividad y la productividad de los miembros, fomenta el ambiente de desconfianza y crece la capa de las fobias (falta de transparencia, evitar el conflicto, no tener foco en resultados,...)";
                                                        }else if (61<valor<80) {
                                                            texL="111111";
                                                            texT="La confianza sigue residiendo en los miembros. Aún no se apoya del todo en el equipo aunque tiende hacia basar su comportamiento en este. Existe de manera tácita un equilibrio entre las exigencias y los resultados que puede estar no descrita, pero posibilita la confianza entre los miembros. El establecimiento de objetivos claros y estrategicamente bien ponderados para el equipo y la consecución de estos a nivel individual con el aporte de cada miembro, es el que permitirá construir con mas solidez las bases del equipo que son, la confianza y los resultados. ";
                                                        }else if (81<valor<100) {
                                                            texL="111111";
                                                            texT="La confianza reside por igual entre los miembros y el equipo como si de un miembro más se tratase. El equipo encuentra un espacio de equilibrio entre las exigencias y los aportes. La evidencia de resultados que avalan la actividad y la productividad de los miembros, fomenta el ambiente de confianza y decrece la capa de las fobias (falta de transparencia, evitar el conflicto, no tener foco en resultados,...)";
                                                        }else{
                                                            texL="111111";
                                                            texT="qqqqq";
                                                        }
                                                        valor=valor+"%";
                                                        document.getElementById('tituloMR20').innerHTML=titulo;
                                                        document.getElementById('valorMR20').innerHTML=valor;
                                                        document.getElementById('textoCuantiMR20').innerHTML=texT;
                                                        document.getElementById('ResCualitMR20').innerHTML=texL;
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <hr class="verde">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sección inicio Katzen-->
        <div class="whole-wrap" style="background: black;">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <div style="vertical-align: middle;width: 100px;height: 100px">
                            <p style="border-radius: 100%; border-color: white;color: white;border-width: 3px;font-size: 100px; vertical-align: bottom;border-style: solid;width: 100px;height: 100px;text-align: center;">2</p>
                        </div>
                        <img src="assets/img/gallery/ketzenbach.png">
                        <div>
                            <h3 class="tituloBungee gris" style="font-size: 14px">Análisis<br><span class="azul" style="font-size: 28px"> Katzenbach & Smith<br></span></h3>
                            <p class="blanco">Esquema de equipo básico. <br>Los vértices son los productos derivados de la acción del equipo mientras que los lados y los triángulos internos, son elementos y comportamientos que permiten los entregables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sección curva Katzen-->
        <div class="whole-wrap" style="background: black;">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <div style="vertical-align: middle;width: auto;height: auto;">
                            <p style="border-radius: 100%; border-color: white;color: white;border-width: 3px;font-size: 100px; vertical-align: bottom;border-style: solid;width: 100px;height: 100px;text-align: center;">2</p>
                        </div>
                        <div>
                            <canvas id="canvasKat" width="1000" height="500" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvasKat = document.getElementById('canvasKat');
                                    var lado=canvasKat.width;

                                    if (canvasKat.getContext) {
                                        var ctx=canvasKat.getContext('2d');
                                        ctx.strokeStyle=blanco;
                                        var offsetOrigen=50;
                                        unirPuntos(offsetOrigen,400,800,400,blanco);
                                        unirPuntos(offsetOrigen,400,offsetOrigen,offsetOrigen,blanco);
                                        var xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4;
                                        xb1=0+offsetOrigen;
                                        yb1=400-200;
                                        xb2=70+offsetOrigen;
                                        yb2=400+250;
                                        xb3=675+offsetOrigen;
                                        yb3=400-185;
                                        xb4=750+offsetOrigen;
                                        yb4=400-300;
                                        ctx.beginPath();
                                        ctx.strokeStyle=blanco;

                                        ctx.moveTo(xb1,yb1);
                                        ctx.bezierCurveTo(xb2, yb2, xb3, yb3, xb4, yb4);
                                        ctx.stroke();
                                        /*posición descrita por el equipo*/
                                        var xB=getBezierX(0.8,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        var yB=getBezierY(0.8,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        ctx.beginPath();
                                        ctx.fillStyle='#64b6f5';
                                        ctx.arc(xB,yB,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        /*leyenda*/
                                        ctx.arc(150,100,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Como se percibe el equipo",170,105);
                                        /*posición media europea*/
                                        xB=getBezierX(0.85,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        yB=getBezierY(0.85,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        ctx.beginPath();
                                        ctx.fillStyle='#d12293';
                                        ctx.arc(xB,yB,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        /*leyenda*/
                                        ctx.arc(150,150,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Estimación media europea",170,155);
                                        /*posición real*/
                                        xB=getBezierX(0.65,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        yB=getBezierY(0.65,xb1,yb1,xb2,yb2,xb3,yb3,xb4,yb4);
                                        ctx.beginPath();
                                        ctx.fillStyle='#e69138ff';
                                        ctx.arc(xB,yB,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        /*leyenda*/
                                        ctx.arc(150,200,10,0,2*Math.PI,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Estimación del equipo real",170,205);
                                    }


                                    /*funcion determina longitud curva*/
                                    /*t:tamaño (%) entre 0 y 1, sx,sy: coordendadas de entrada, cp, puntos de control, e: coordendadas salida*/
                                    function getBezierX(t, sx, sy, cp1x, cp1y, cp2x, cp2y, ex, ey) {
                                        var xBez=Math.pow(1-t,3) * sx + 3 * t * Math.pow(1 - t, 2) * cp1x 
                                          + 3 * t * t * (1 - t) * cp2x + t * t * t * ex;
                                      return xBez;
                                    }
                                    function getBezierY(t, sx, sy, cp1x, cp1y, cp2x, cp2y, ex, ey) {
                                          var yBez=Math.pow(1-t,3) * sy + 3 * t * Math.pow(1 - t, 2) * cp1y 
                                          + 3 * t * t * (1 - t) * cp2y + t * t * t * ey;
                                      return yBez;
                                    }

                                </script>
                            </canvas>
                        </div>
                        <div>
                            <h3 class="tituloBungee gris" style="font-size: 14px">Análisis<br><span class="azul" style="font-size: 28px"> Katzenbach & Smith<br></span></h3>
                            <p class="blanco">Una descripción grafica sobre la percepción de tu equipo con respecto al desempeño.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sección explicación Katzen-->
        <div class="whole-wrap" style="background: black;">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <h3 class="tituloBungee gris" style="font-size: 14px">Análisis<br><span class="azul" style="font-size: 28px"> Katzenbach & Smith<br></span>Explicado</h3>
                        <canvas id="copiaCanvasKat" width="500" height="500">
                            <script type="text/javascript">
                                var c1=document.getElementById("canvasKat");
                                var ctx=c1.getContext("2d");
                                var imgData=ctx.getImageData(0,0,1000,500);
                                c=document.getElementById("copiaCanvasKat");
                                ctx=c.getContext("2d");
                                ctx.drawImage(c1, 0,0,1000,500,0,0,500,250);


                                

                        </script>
                        </canvas>
                        <p class="blanco">Los datos arrojan un fuerte componente de equipo, una visión clara hacia el desempeño alto y de gran calidad.<br>El equipo se esfuerza en alcanzar estándares cada vez más elevados y es capaz de habilitar espacios tan amables como aspiracionales para conseguirlos. <br>Vuestra visión de equipo se parece bastante a lo que sois. Y en vuestra situación, es germen del famoso equipo de alto desarrollo que, tenéis muy cerca. <br>Tanto que existe en la realidad pero hay que circunscribirlo más a la cultura del propio equipo que, a pesar de haber calado bien desde el principio, aun es un equipo joven que se debe enfrentar a retos muy importantes. <br>La comparación con otros equipos a nivel europeo os deja en muy buen lugar ya que, generalmente las empresas destinan la mayor parte de sus recursos a la gestión y producción. La vuestra, es una empresa que tiene en el propósito individual de sus miembros, un compromiso que es devuelto del mismo modo.</p>
                        <div style="display: grid;grid-template-rows: 1fr;">
                            <hr class="gris">
                            <p class="blanco">“El equipo real no surge a menos que las personas que forman parte de él asuman riesgos relacionados con el conflicto, la confianza, la interdependencia y el trabajo duro.” J.Katzenbach</p>
                            <hr class="gris">
                        </div>
                        
                        <p class="blanco">Uno de las características más importantes de los equipos de alto rendimiento es, la capacidad de los miembros de sentirse comprometidos con el éxito y el crecimiento personal de los demás.<br>Y os debo felicitar por cómo habéis expresado la sensación de abrazo por parte de los miembros y del equipo para sentiros parte del crecimiento del resto y que gran parte del vuestro, es gracias a este equipo.<br>Evidentemente, tenéis un equipo robusto y tenéis una oportunidad inmejorable para crecer individualmente y como equipo con retos que recojan oportunidades de aprendizaje colectivo.</p>

                    </div>
                </div>
            </div>
        </div>

        <!--sección explicación Katzen-->
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <h3 class="tituloBungee gris" style="font-size: 14px">Análisis<br><span class="azul" style="font-size: 28px"> Tuckman<br></span></h3>
                    </div>
                    <div>
                        <p>La evaluación del Equipo de alto rendimiento que completó tu equipo te proporciona una indicación sobre el tipo de equipo en el que estás trabajando actualmente. También sugiere la etapa de desarrollo en la que está operando tu equipo.</p>
                        <p class="verde" id="estais" style="font-size: 24px;text-align: center;"></p>
                        <script type="text/javascript">
                            var res=81;
                            var texTuck=document.getElementById('estais');

                            if (res>=75) {
                                texTuck.innerHTML="Estáis en fase: <strong>ACTUACIÓN</strong>";
                            }else if (50<=res<75) {
                                texTuck.innerHTML="Estáis en fase: <strong>NORMATIVA</strong>";
                            }else if (25<=res<50) {
                                texTuck.innerHTML="Estáis en fase: <strong>ASALTO</strong>";                                
                            }else{
                                texTuck.innerHTML="Estáis en fase: <strong>FORMATIVA</strong>";
                            }
                        </script>
                        <p>En esta fase del modelo Tuckman existe un mayor acuerdo y consenso en la toma de decisiones. Los roles y las responsabilidades se aclaran y el equipo avanza hacia prácticas de trabajo más armoniosas. El debate se centra en el desarrollo de procesos de trabajo. El equipo es más consciente de la competencia y emerge un mayor espíritu de cooperación.<br>Los conflictos se reducen y el grupo está ahora en la mente de sus miembros. Se forma acuerdo y consenso dentro del equipo, el cual responde bien a la enseñanza del líder. Roles y responsabilidades son claros y aceptados. El equipo lleva a cabo reuniones para discutir y desarrollar sus procesos y su forma de trabajo. El líder es respetado por el equipo y parte del liderazgo es compartido por el equipo. El líder actúa como facilitador.</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <!--sección perfil innovador-->
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <div class="tresColumnas">
                        <h3 class="tituloBungee gris" style="font-size: 14px">Análisis de<br><span class="azul" style="font-size: 28px"> Perfil innovador<br></span>de equipo</h3>
                    </div>
                    <div class="dosColumnas">
                        <p class="gris">El mapa según vuestros perfiles innovadores en equipo, resulta tener cierto equilibrio aunque es muy necesaria la incorporación de perfiles de tipo generador para iniciar procesos de innovación que puedan tener mayor alcance. <br>Actualmente, repartís entre los miembros esta circunstancia pero es algo a tener en cuenta lo antes posible.</p>
                        <!--preparacion del gráfico-->
                        <div style="margin: 0 auto;justify-content: center;">
                            <canvas id="canvas" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvas = document.getElementById('canvas');
                                    var ancho=canvas.width;
                                    if (canvas.getContext) {
                                        var C1=83.23;
                                        var C2=12.45;
                                        var C3=23.43;
                                        var C4=23.76;




                                        var ctx=canvas.getContext('2d');
                                        ctx.strokeStyle='#adadad';
                                        ctx.fillStyle='#adadad';
                                        ctx.beginPath();
                                        ctx.moveTo(40,ancho/2);
                                        ctx.lineTo(ancho-40,ancho/2);
                                        ctx.closePath();
                                        ctx.stroke();
                                        ctx.beginPath();
                                        ctx.moveTo(ancho/2,40);
                                        ctx.lineTo(ancho/2,ancho-40);
                                        ctx.closePath();
                                        ctx.stroke();
                                        ctx.font = "10pt comfortaa";
                                        ctx.save();
                                        ctx.textAlign="center";
                                        ctx.fillText("Experiencia",ancho/2,20);
                                        ctx.fillText("Formación de ideas",ancho-70,20+ancho/2);
                                        ctx.fillText("Pensamiento",ancho/2,ancho-20);
                                        ctx.fillText("Evaluación",50,20+ancho/2);
                                        ctx.restore();
                                        ctx.globalAlpha=0.5;

                                        //sector generadores
                                        ctx.fillStyle='#c9daf8ff';
                                        ctx.beginPath();
                                        ctx.moveTo(ancho/2,ancho/2);
                                        ctx.lineTo(ancho/2,ancho/2-C1);
                                        ctx.quadraticCurveTo(ancho/2+C2,ancho/2-C1,ancho/2+C2,ancho/2);
                                        ctx.lineTo(ancho/2,ancho/2);
                                        ctx.closePath();
                                        ctx.fill();

                                        //arco secundario generadores
                                        var offsetSecundario=3;
                                        offsetSecundario=((offsetSecundario*(2*Math.PI))/360);
                                        ctx.beginPath();
                                        ctx.globalAlpha=1;
                                        ctx.arc(ancho/2,ancho/2,150,(Math.PI*3/2)+offsetSecundario,0-offsetSecundario,false);
                                        //ctx.lineTo(330,191);
                                        ctx.arc(ancho/2,ancho/2,130,0-offsetSecundario,(Math.PI*3/2)+offsetSecundario,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.font = "15pt comfortaa";
                                        ctx.fillText("Generadores",canvas.width/2+canvas.width/15,40);

                                        //sector conceptualizadores
                                        ctx.globalAlpha=0.5;
                                        ctx.fillStyle='#d5a6bdff';
                                        ctx.beginPath();
                                        ctx.moveTo(ancho/2,ancho/2);
                                        ctx.lineTo(ancho/2+C2,ancho/2);
                                        ctx.quadraticCurveTo(ancho/2+C2,ancho/2+C3,ancho/2,ancho/2+C3);
                                        ctx.lineTo(ancho/2,ancho/2);
                                        ctx.closePath();
                                        ctx.fill();

                                        //arco secundario conceptualizadores
                                        ctx.beginPath();
                                        ctx.globalAlpha=1;
                                        ctx.arc(ancho/2,ancho/2,150,0+offsetSecundario,(Math.PI/2)-offsetSecundario,false);
                                        //ctx.lineTo(330,191);
                                        ctx.arc(ancho/2,ancho/2,130,(Math.PI/2)-offsetSecundario,0+offsetSecundario,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Conceptualizadores",canvas.width/2+canvas.width/15,500);

                                        //sector optimizadores
                                        ctx.globalAlpha=0.5;
                                        ctx.fillStyle='#e06666ff';
                                        ctx.beginPath();
                                        ctx.moveTo(ancho/2,ancho/2);
                                        ctx.lineTo(ancho/2,ancho/2+C3);
                                        ctx.quadraticCurveTo(ancho/2-C4,ancho/2+C3,ancho/2-C4,ancho/2);
                                        ctx.lineTo(ancho/2,ancho/2);
                                        ctx.closePath();
                                        ctx.fill();

                                        //arco secundario optimizadores
                                        ctx.beginPath();
                                        ctx.globalAlpha=1;
                                        ctx.arc(ancho/2,ancho/2,150,(Math.PI/2)+offsetSecundario,(Math.PI)-offsetSecundario,false);
                                        //ctx.lineTo(330,191);
                                        ctx.arc(ancho/2,ancho/2,130,(Math.PI)-offsetSecundario,(Math.PI/2)+offsetSecundario,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Optimizadores",canvas.width/10,500);

                                        //sector implementadores
                                        ctx.globalAlpha=0.5;
                                        ctx.fillStyle='#f9cb9cff';
                                        ctx.beginPath();
                                        ctx.moveTo(ancho/2,ancho/2);
                                        ctx.lineTo(ancho/2-C4,ancho/2);
                                        ctx.quadraticCurveTo(ancho/2-C4,ancho/2-C1,ancho/2,ancho/2-C1);
                                        ctx.lineTo(ancho/2,ancho/2);
                                        ctx.closePath();
                                        ctx.fill();

                                        //arco secundario implementadores
                                        ctx.beginPath();
                                        ctx.globalAlpha=1;
                                        ctx.arc(ancho/2,ancho/2,150,(Math.PI)+offsetSecundario,(Math.PI*(3/2))-offsetSecundario,false);
                                        //ctx.lineTo(330,191);
                                        ctx.arc(ancho/2,ancho/2,130,(Math.PI*(3/2))-offsetSecundario,(Math.PI)+offsetSecundario,true);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillText("Implementadores",canvas.width/10,40);
                                    }
                                </script>
                            </canvas>
                        </div>
                    </div>
                    
                </div>
            </div>
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