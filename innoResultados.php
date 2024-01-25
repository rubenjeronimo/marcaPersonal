<?php
//require_once 'conectaDB.php';
     $nom= $_POST['$_nombre'];
 //    $per=$_POST['$_$perfil'];
 //    $C1=$_POST['$_generador'];
//     $C2=$_POST['$_conceptualizador'];
//     $C3=$_POST['$_optimizador'];
 //    $C4=$_POST['$_implementador'];
                               
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
    <!-- <script type="text/javascript" src="assets/js/innoTest.js"></script>-->
        <!-- fuente letra comfortaa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="OKR4L.html">OKR4L</a></li>
                                    <li><a href="experiencias.html">Experiencias de aprendizaje</a></li>
                                    <li class="active"><a href="#">Herramientas</a>
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
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <h3 class="tituloBungee">Perfil Creativo de Solución de Problemas</h3>
                    <div class="tablaInnoResultados">
                         <div class="col-md-12">
                            <p><em class="azul" id="nombrePerfil"> </em></p>
                            <p><em class="azul" id="perfilPerfil" style="text-transform: uppercase; font-size: 18px;"></em></p>
                            
                            <script type="text/javascript">
                                var nom=<?php $_POST['nom'] ?>;
                                var per=$perfil;
                                var C1=$generador;
                                var C2=$conceptualizador;
                                var C3=$optimizador;
                                var C4=$implementador;
                            
                                /*
                                var mail;
                                var C1=27*3;
                                var C2=34*3;
                                var C3=38*3;
                                var C4=21*3;
                                var per="Conceptualizador";
                                */
                                document.getElementById('nombrePerfil').innerHTML=nom+"<p>, tu orientación más fuerte es hacia un perfil: <br></p>";
                                document.getElementById('perfilPerfil').innerHTML=" "+per;

                            </script>

                            <p style="font-size: 14px;"><em class="purpura">• Este punto</em> te muestra tu tendencia en la generación y ejecución de ideas:</p>
                            <p style="font-size: 14px;">Algunos aspectos típicos de un perfil como el tuyo son:</p>
                            <p id='textoPerfilInnovador' style="font-size:14px"></p>
                            <script type="text/javascript">
                                var per="Conceptualizador";
                                var texto=document.getElementById('textoPerfilInnovador');
                                /*var significadoText=document.getElementById('significadoTexto');*/
                                switch(per){
                                    case "Conceptualizador":
                                        texto.innerHTML="Como Conceptualizador, formas parte del segundo grupo más pequeño de gente que realiza el perfil de Innovación. Nuestros datos indican que los conceptualizadores a menudo están trabajando en roles estratégicos dentro de las empresas o responsabilidades donde la comprensión forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Implementador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los implementadores, ya que tenéis estilos opuestos.<br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas<br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando";
                                       /* significadoText.innerHTML="Como un Conceptualizador, eres un desarrollador de ideas y un pensador paciente. (Pasos 3 y 4 en la rueda de innovación más abajo). Eres capaz de juntar las piezas para formar el "gran lienzo" y desarrollar su comprensión. La definición del problema es fundamental para ti. Esto es muy importante, pero recuerda que hay algo más a parte de la innovación. Para aumentar tu rendimiento innovador, asegúrate de avanzar en línea a tu pensamiento. Tal vez asociarte con alguien que sea diferente de ti, digamos un implementador, podrá ayudarte a hacer progresos a través de la rueda de la innovación y a realizar alguna acción valiosa en tus ideas."; */
                                        break;
                                    case "Generador":
                                        texto.innerHTML="soy genenennenene";
                                        break;
                                    case "Optimizador":
                                        texto.innerHTML="soy opttititit";
                                        break;
                                    case "Implementador":
                                        texto.innerHTML="soy imlelele";
                                        break;
                                    default:
                                    texto.innerHTML="nnonooononono";
                                        break;  
                                }
                            </script>
                            
                         </div>

                        <div>
                            <!--preparacion del gráfico-->
                            <div style="margin: 0 auto;justify-content: center;">
                                <canvas id="canvas" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvas = document.getElementById('canvas');
                                    var ancho=canvas.width;
                                    if (canvas.getContext) {
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
                       
                        <div class="col-md-12 mt-sm-20">
                            <script type="text/javascript">
                                var nom;
                                var mail;
                                var C1=27*3;
                                var C2=34*3;
                                var C3=38*3;
                                var C4=21*3;
                                var per;
                                var canvas=document.getElementById('canvas');
                                var ancho=canvas.width;
                                if (canvas.getContext) {
                                        var ctx=canvas.getContext('2d');
                                        

                                        //punto
                                        ctx.beginPath();
                                        ctx.strokeStyle='#d12293';
                                        ctx.fillStyle='#d12293';
                                        ctx.arc(ancho/2+C2-C4,ancho/2+C1-C3,5,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                }        
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whole-wrap">
            <div class="container box_1170" style="background: 'black;'">
                <div class="section-top-border">
                    <h3 class="tituloBungee">¿Cómo obtienes y utilizas tus conocimientos?</h3>
                    <div class="tablaInnoResultados">
                        <div>
                            <p>La creatividad requiere un equilibrio de conocimiento, imaginación y buen juicio. La ciencia ha identificado dos maneras opuestas en cómo aprende la gente, es decir, como adquiere su conocimiento. Una forma es experimentando: sumergiéndose y "ensuciándose las manos". De repente, exclaman: "¡Ya, lo entiendo!" La manera opuesta es pensar: no involucrarse, retroceder, y calcularlo analíticamente ("poniendo los puntos sobre las íes"). La ciencia también ha identificado dos maneras opuestas en las cuales las personas utilizan su  conocimiento. Una forma es crear opciones o ideas. La otra manera es evaluar opciones o ideas.</p>
                            <p><em class="naranja">• Aquí </em>se muestra cómo prefieres adquirir tus conocimientos mientras que </p>
                            <p><em class="azul">• aquí </em>se muestra como usas esos conocimientos. </p>
                        </div>
                        <canvas id="canvasCono" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvas = document.getElementById('canvasCono');
                                    var ancho=canvas.width;
                                    if (canvas.getContext) {
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
                                        //ctx.rotate(Math.PI/2);
                                        ctx.textAlign="center";
                                        ctx.fillText("Experiencia",ancho/2,20);
                                        ctx.fillText("Formación de ideas",ancho-70,20+ancho/2);
                                        ctx.fillText("Pensamiento",ancho/2,ancho-20);
                                        ctx.fillText("Evaluación",50,20+ancho/2);
                                        ctx.restore();
                                        //punto
                                        ctx.beginPath();
                                        ctx.fillStyle='#e69138ff';
                                        ctx.arc(ancho/2,ancho/2+C1-C3,10,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.beginPath();
                                        ctx.fillStyle='#64b6f5';
                                        ctx.arc(ancho/2+C2-C4,ancho/2,10,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                    }
                                </script>
                            </canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="whole-wrap">
            <div class="container box_1170" style="background: 'black;'">
                <div class="section-top-border">
                    <h3 class="tituloBungee">Profundizando en tu estilo preferido:<br> ¿Hasta dónde puedes llegar?</h3>
                    <div class="tablaInnoResultados">
                        <div>
                            <p>"La distancia que guarda el origen de tu perfil hacia el "centro de gravedad", aporta más información sobre tu tendencia a decantarte hacia tu propio estilo y no hacia los otros. Por ejemplo, encontrarse en el anillo interior de los tres círculos, indicaría un perfil más equilibrado (teniendo preferencias secundarias sustanciales para los otros estilos), mientras que encontrarse en el círculo medio o más externo indicaría estar más "inclinado" o "especializado" en tu estilo de perfil preferido y más alejado de los demás.<br>Lo principal es ser consciente de tu centro de gravedad y lo que significa, para tu propia resolución eficiente de problemas y el éxito de la innovación. Innovar requiere un alto rendimiento en cada una de las cuatro etapas del proceso. Es posible que debas prestar atención adicional en ciertas etapas, para ampliar tu rendimiento o en ocasiones tener en cuenta otras para complementar tu propio perfil. Con respecto a las interacciones con otros, puede haber veces que sientas que debes contribuir con tu estilo de forma más enérgica, al equipo. En otras ocasiones podrías ""declinar” y dejar que otros asuman el control."</p>
                        </div>
                        <canvas id="canvasProf" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvas = document.getElementById('canvasProf');
                                    var ancho=canvas.width;
                                    if (canvas.getContext) {
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
                                        //ctx.rotate(Math.PI/2);
                                        ctx.textAlign="center";
                                        ctx.fillText("Experiencia",ancho/2,20);
                                        ctx.fillText("Formación de ideas",ancho-70,20+ancho/2);
                                        ctx.fillText("Pensamiento",ancho/2,ancho-20);
                                        ctx.fillText("Evaluación",50,20+ancho/2);
                                        ctx.restore();
                                        
                                        //circulos offset
                                        ctx.globalAlpha=0.5;
                                        ctx.fillStyle='#4a49499a';
                                        ctx.arc(ancho/2,ancho/2,25,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.fillStyle='#adadad9a';
                                        ctx.arc(ancho/2,ancho/2,50,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                        //punto
                                         ctx.globalAlpha=1;
                                        ctx.beginPath();
                                        ctx.fillStyle='#d12293';
                                        ctx.arc(ancho/2+C2-C4,ancho/2+C1-C3,5,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                        //leyenda
                                        ctx.beginPath();
                                        ctx.arc(50,ancho-100,5,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.strokeStyle='#000000';
                                        ctx.fillStyle='#000000';
                                        ctx.stroke();
                                        ctx.beginPath();
                                        ctx.textAlign='left';
                                        ctx.fillStyle='#000000';
                                        ctx.fillText('Equilibrio',60,ancho-95);
                                        ctx.closePath();
                                        ctx.beginPath();
                                        ctx.arc(50,ancho-70,5,0,2*Math.PI,false);
                                        ctx.fillStyle='#4a49499a';
                                        ctx.closePath();
                                        ctx.stroke();
                                        ctx.fill();
                                        ctx.beginPath();
                                        ctx.fillStyle='#000000';
                                        ctx.fillText('Tendencia',60,ancho-65);
                                        ctx.closePath();
                                        ctx.beginPath();
                                        ctx.arc(50,ancho-40,5,0,2*Math.PI,false);
                                        ctx.fillStyle='#adadad9a';
                                        ctx.closePath();
                                        ctx.stroke();
                                        ctx.fill();
                                        ctx.beginPath();
                                        ctx.fillStyle='#000000';
                                        ctx.fillText('Especialización',60,ancho-35);
                                        ctx.closePath();
                                        
                                    }
                                </script>
                            </canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="whole-wrap">
            <div class="container box_1170" style="background: 'black;'">
                <div class="section-top-border">
                    <h3 class="tituloBungee">Cómo te comparas con los demás</h3>
                    <div class="tablaInnoResultados">
                        <div>
                            <p id="comparativaTexto"></p>
                            <script type="text/javascript">
                                var textoComp=document.getElementById('comparativaTexto');
                                switch(per){
                                    case "Conceptualizador":
                                        textoComp.innerHTML="<p>Como Conceptualizador, formas parte del segundo grupo más pequeño de gente que realiza el perfil de Innovación. Nuestros datos indican que los conceptualizadores a menudo están trabajando en roles estratégicos dentro de las empresas o responsabilidades donde la comprensión forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Implementador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los implementadores, ya que tenéis estilos opuestos.<br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas<br><br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando<br></p>";
                                        break;
                                    case "Generador":
                                        texto.innerHTML="soy genenennenene";
                                        break;
                                    case "Optimizador":
                                        texto.innerHTML="soy opttititit";
                                        break;
                                    case "Implementador":
                                        texto.innerHTML="soy imlelele";
                                        break;
                                    default:
                                    texto.innerHTML="nnonooononono";
                                        break;  
                                }
                            </script>
                        </div>
                        <canvas id="canvasComp" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    var canvas = document.getElementById('canvasComp');
                                    var ancho=canvas.width;
                                    if (canvas.getContext) {
                                        var ctx=canvas.getContext('2d');
                                        //imagen de fondo
                                        var imagenFondoComp=new Image();
                                        imagenFondoComp.width=ancho;
                                            ctx.globalAlpha=0.1;  
                                        imagenFondoComp.src='assets/img/TEST_INNOVACION/RESULTADOS_FONDO_COMP.png';
                                        imagenFondoComp.onload=function(){
                                            ctx.drawImage(imagenFondoComp,0,0);
                                        }

                                        ctx.strokeStyle='#adadad';
                                        ctx.fillStyle='#adadad';
                                        ctx.globalAlpha=1; 
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
                                        //ctx.rotate(Math.PI/2);
                                        ctx.textAlign="center";
                                        ctx.fillText("Experiencia",ancho/2,20);
                                        ctx.fillText("Formación de ideas",ancho-70,20+ancho/2);
                                        ctx.fillText("Pensamiento",ancho/2,ancho-20);
                                        ctx.fillText("Evaluación",50,20+ancho/2);
                                        ctx.restore();
                                        //punto
                                        ctx.beginPath();
                                        ctx.fillStyle='#d12293';
                                        ctx.arc(ancho/2+C2-C4,ancho/2+C1-C3,5,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();

                                    }
                                </script>
                            </canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="whole-wrap">
            <div class="container box_1170" style="background: 'black;'">
                <div class="section-top-border">
                    <h3 class="tituloBungee">Que significa esto</h3>
                    <div class="tablaInnoResultados">
                        <div>
                            <p style="font-size:14px;margin: 20px;">En primer lugar, trata de permanecer "en el momento". Tu (y todos los demás) estáis continuamente pensando y solucionando problemas desde el momento en que os despertáis. Esta es la naturaleza de la vida. Para ser un pensador innovador y solucionador de problemas, trata de ser consciente en todo momento de tu estilo preferido y tu ajuste con la rueda de la innovación (proceso de resolución de problemas creativo de ocho pasos, véase más adelante). Puedes estar seguro de que tienes un escudo a prueba de balas para protegerte, no importa cuál sea el problema al que debes enfrentarte. Recuerda que mientras tengas un estilo favorito, también tienes el proceso completo de ocho pasos para dirigir tu camino a través de la confusión.</p>
                            <p id="significadoTexto" style="font-size:14px;margin: 20px;"></p>
                            <script type="text/javascript">
                                var significadoText=document.getElementById('significadoTexto');
                                switch(per){
                                    case'Conceptualizador':
                                        significadoText.innerHTML="Como un Conceptualizador, eres un desarrollador de ideas y un pensador paciente. (Pasos 3 y 4 en la rueda de innovación más abajo). Eres capaz de juntar las piezas para formar el gran lienzo y desarrollar su comprensión. La definición del problema es fundamental para ti. Esto es muy importante, pero recuerda que hay algo más a parte de la innovación. Para aumentar tu rendimiento innovador, asegúrate de avanzar en línea a tu pensamiento. Tal vez asociarte con alguien que sea diferente de ti, digamos un implementador, podrá ayudarte a hacer progresos a través de la rueda de la innovación y a realizar alguna acción valiosa en tus ideas.";
                                    break;
                                    case 'Optimizador':
                                        significadoText.innerHTML="";
                                    break;
                                    case 'Generador':
                                        significadoText.innerHTML="";
                                    break;
                                    case 'Implementador':
                                        significadoText.innerHTML="";
                                    break;
                                    default:
                                    break;    
                                }
                                
                            </script>
                        </div>
                        <div>
                            <p style="font-size:14px;margin: 20px;">No importa qué estilo de perfil prefiera un miembro del equipo, deben aprender a utilizar sus diferencias de estilo con otros, de manera complementaria, para ayudar a su equipo a ser innovador. Es importante que cada persona aprecie el valor del estilo de cada uno, generando, conceptualizando, optimizando e implementando, y apoyar el trabajo a través del proceso de innovación completo y de esta forma alcanzar soluciones de alto impacto y disfrutar haciéndolo. Los miembros del equipo pueden aprender a pensar en cualquiera de los cuatro estilos de perfil para complementar el pensamiento de otros. De hecho, la orientación preferida de un individuo es menos importante que su capacidad de cambiar entre las diferentes orientaciones según sea necesario. Es vital no tener personas que operan en diferentes estilos simultáneamente sin darse cuenta y "anulándose mutuamente". Los cuatro estilos contribuyen única y exclusivamente al proceso de innovación.</p>
                            <p id="equipoTexto" style="font-size:14px;margin: 20px;"></p>
                            <script type="text/javascript">
                                var equipoText=document.getElementById('equipoTexto');
                                switch(per){
                                    case 'Conceptualizador':
                                        equipoText.innerHTML="Como Conceptualizador, tu contribución al equipo es la de crear las opciones sobre las alternativas de entender y definir un problema u oportunidad. Puedes ayudar a tu equipo a evitar lanzarse a unas soluciones prematuras y en su lugar invertir el tiempo para desarrollar una imagen clara de lo que debería ser el objetivo real. El equipo se sorprenderá de que ideas muy interesantes, comiencen a fluir casi de inmediato.";
                                    break;
                                    case 'Optimizador':
                                        equipoText.innerHTML="";
                                    break;
                                    case 'Generador':
                                        equipoText.innerHTML="";
                                    break;
                                    case 'Implementador':
                                        equipoText.innerHTML="";
                                    break;
                                    default:
                                    break;  
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whole-wrap">
            <div class="container box_1170" style="background: 'black;'">
                <div class="section-top-border">
                    <h3 class="tituloBungee">Los 4 estilos en las organizaciones</h3>
                    
                        <div>
                            <p>En las organizaciones, los individuos tienen diferentes preferencias a la hora de adquirir y utilizar el conocimiento y también en cada una de las etapas del proceso de innovación. Generar ideas para nuevos productos, servicios y métodos debe comenzar en alguna parte. Los individuos que tienden hacia la generación, están adquiriendo experiencia y analizando el entorno continuamente, recolectando datos y señales de clientes, proveedores y otros, y sugiriendo posibles oportunidades de cambio y mejora.<br>Por lo tanto, la etapa de generación es donde se plantean nuevas informaciones y posibilidades, generalmente no totalmente desarrolladas, sino en forma de puntos de partida para nuevos proyectos. Las personas con estilo conceptualizador dominante, lideran la recopilación de hechos y fragmentos de ideas, desde la etapa de generación hasta su definición. Para ellos, los problemas y desafíos intuitivos e ideas y proyectos más claramente desarrollados, merecen una evaluación más profunda. Los conceptualizadores habilidosos dan una estructura sólida a ideas y oportunidades incipientes. Las personas con tendencia hacia la optimización, por lo general lideran esta habilidad de recoger las ideas bien definidas y encuentran la mejor solución práctica para desarrollar planes eficientes detallados. Por último, los responsables de la implementación llevan adelante las soluciones y planes prácticos, además de convencer, a colegas o clientes, del valor de los cambios adaptando las soluciones y planes para adecuarlos a situaciones y condiciones de la vida real.<br>Cada cuadrante de la Rueda de Innovación, corresponde a una etapa específica del proceso de innovación. Los dos primeros cuadrantes representan la generación de problemas (encontrar el problema y los hechos) y la conceptualización de problemas (definición de los problemas y encontrar ideas) ya que forman las dos primeras etapas del proceso de innovación y el tercer y cuarto cuadrantes representan la optimización de soluciones (evaluación y selección y planificación) y la implementación de la solución (obtención de la aceptación y acción) como las dos etapas finales del proceso de innovación.</p>
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