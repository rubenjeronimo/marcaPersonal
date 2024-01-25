<?php
  $mysqli = new mysqli('localhost', 'equipo6085', 'N1SSpII4','testtnl') or die ('Cannot connect to db'); 

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    list($nom,$empri)  = preg_split("/_/", $curPageName);
    $empresa=trim($empri,'.php');
    echo $nom." ".$empresa."<br>";
    $nom=strval($nom);
    $empresa=strval($empresa);
    echo $empresa;

    $sql="SELECT * FROM `innoRaw` WHERE nombre= '$nom' AND empresa = '$empresa'";

echo $sql;

$query = $mysqli->query($sql) or die($mysqli->error);
while ($valores = $query->fetch_assoc()) {
              $mail = $valores['mail'];
              $gen= $valores['gen'];
              $con=$valores['con'];
                $opt=$valores['opt'];
                $imp=$valores['imp'];
                $per=$valores['per'];    
                $C1=floatval($valores['experiencia']);
                $C2=floatval($valores['ideacion']);
                $C3=floatval($valores['pensamiento']);
                $C4=floatval($valores['evaluacion']); 
}
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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <!-- <script type="text/javascript" src="../assets/js/innoTest.js"></script>-->
        <!-- fuente letra comfortaa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
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
                        <a href="index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
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
                    <a href="#" class="header-btn1"><img src="../assets/img/icon/call.png" alt=""> +34 679 068 143</a>
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
                            <?php echo "<p><em class='azul' id='nombrePerfil'> $nom </em>, tu orientación más fuerte es hacia un perfil: </p>" ?>
                            
                            <?php 
                                $texto="";
                                switch($per){
                                    case "conceptualizador":
                                        $texto='• Le gusta visualizar la "imagen ampliada".<br>• Reacio a seguir adelante hasta que el problema no esté bien definido.<br>• Conecta observaciones, aparentemente no relacionadas, en una explicación integrada.<br>• Alta sensibilidad y apreciación de ideas, menos preocupación por pasar a la acción.<br>• No le gusta continuar hasta que se entienda completamente la situación.<br>• No le gusta que le digan "cómo hacerlo".<br>• Quiere que la teoría sea clara y precisa.<br>• Prefiere no tener que dar prioridad a alternativas menos favorables o no totalmente comprendidas.';
                                        break;
                                    case "generador":
                                        $texto='• Empieza enseguida a involucrarse, a recopilar información y cuestionarlo todo.<br>• Imagina muchas posibilidades y detecta todo tipo de nuevos problemas y oportunidades.<br>• Fácilmente ve todas las facetas de casi cualquier hecho, idea o situación.<br>• Visualiza situaciones desde diferentes perspectivas.<br>• Prefiere generador opciones y divergencias que la evaluación o convergencia.<br>• Ve relevancia en casi todo.<br>• Cómodo con la ambigüedad.<br>• Interesado en los problemas de las personas.<br>• Cada nueva solución sugiere varios problemas nuevos.<br>• Está dispuesto a dejar que otros se ocupen de los detalles, pero no le gusta delegar el problema completo.<br>• Interés en la búsqueda de problemas y de los hechos.';
                                        break;
                                    case "optimizador":
                                        $texto='• Convierte ideas abstractas en soluciones y planes prácticos.<br>• Le gustan las situaciones en las que haya una única respuesta correcta o una solución óptima a un problema.<br>• Puede clasificar grandes cantidades de datos, y localizar "lo que está mal" en una situación dada.<br>• Confiablemente realiza una buena evaluación de la soluciones y selecciona la mejor a un problema.<br>• Carece de paciencia con la ambigüedad.<br>• Le gusta centrarse en algunos problemas específicos.<br>• Tiende a ser relativamente impasible y exhaustivo.<br>• Prefiere no pasar mucho tiempo pensando en otras ideas y puntos de vista, o en cómo se relacionan los diferentes problemas entre sí.<br>• Intereses en la evaluación de ideas, selección y planificación de acciones.';
                                        break;
                                    case "implementador":
                                        $texto='• Disfruta haciendo cosas y participando en nuevas experiencias.<br>• Sobresale en adaptarse a las circunstancias específicas y hacer que las cosas funcionen.<br>• Cuando la teoría no se ajusta a los hechos, descartará la teoría.<br>• Le gusta probar cosas de verdad en lugar de hacer pruebas mentales.<br>• No me gusta la apatía y la gente desmotivada.<br>• Tomadores de riesgos: no es necesario entender completamente algo antes de tomar acción.<br>• Dispuesto a probar tantos enfoques como sea necesario hasta encontrar uno que funcione para todo el mundo.<br>• Entusiasta y a gusto con otros, pero puede parecer impaciente o incluso agobiante cuando se mueve a la acción.';
                                        break;
                                    default:
                                        $texto="Algo raro ha sucedido. Por favor, ponte en contacto con nosotros y te ayudaremos a continuar";
                                        break;  
                                }
                            ?>
                            <?php echo "<p><em class='azul' id='perfilPerfil' style='text-transform: uppercase; font-size: 18px;'>$per </em></p>" ?>

                            <p style="font-size: 14px;"><em class="purpura">• Este punto</em> te muestra tu tendencia en la generación y ejecución de ideas:</p>


                            <p style="font-size: 14px;">Algunos aspectos típicos de un perfil como el tuyo son:</p>
                            <?php echo "<p id='textoPerfilInnovador' style='font-size:14px'>$texto</p>" ?>
                         </div>

                        <div>
                            <!--preparacion del gráfico-->
                            <div style="margin: 0 auto;justify-content: center;">
                                <canvas id="canvas" width="600" height="600" style="margin: 0 auto 0 auto;display: block;">
                                <script type="text/javascript">
                                    <?php

                                        echo "var C1 ='$C1';";
                                        echo "var C2 ='$C2';";
                                        echo "var C3 ='$C3';";
                                        echo "var C4 ='$C4';";
                                    ?>
                                    C1=C1*3;
                                    C2=C2*3;
                                    C3=C3*3;
                                    C4=C4*3;

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
                       
                        <<div class="col-md-12 mt-sm-20">
                            <script type="text/javascript">
                                var canvas=document.getElementById('canvas');
                                var ancho=canvas.width;
                                if (canvas.getContext) {
                                        var ctx=canvas.getContext('2d');
                                        

                                        //punto
                                        ctx.beginPath();
                                        ctx.strokeStyle='#d12293';
                                        ctx.fillStyle='#d12293';
                                        ctx.arc(ancho/2+(C2-C4),ancho/2-(C1-C3),5,0,2*Math.PI,false);
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
                                        ctx.arc(ancho/2,ancho/2-(C1-C3),10,0,2*Math.PI,false);
                                        ctx.closePath();
                                        ctx.fill();
                                        ctx.beginPath();
                                        ctx.fillStyle='#64b6f5';
                                        ctx.arc(ancho/2+(C2-C4),ancho/2,10,0,2*Math.PI,false);
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
                                        ctx.arc(ancho/2+(C2-C4),ancho/2-(C1-C3),5,0,2*Math.PI,false);
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
                            <?php 
                                $textoCompa="";
                                switch($per){
                                    case "conceptualizador":
                                        $textoCompa="Como Conceptualizador, formas parte del segundo grupo más pequeño de gente que realiza el perfil de Innovación. Nuestros datos indican que los conceptualizadores a menudo están trabajando en roles estratégicos dentro de las empresas o responsabilidades donde la comprensión forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Implementador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los implementadores, ya que tenéis estilos opuestos.<br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas<br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando";
                                        break;
                                    case "generador":
                                        $textoCompa='Como Generador formas parte del grupo más pequeño de personas, que realizan el perfil de innovación. Nuestros datos indican que hay pocos generadores dentro de cualquier tipo de organización. Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Optimizador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los optimizadores, ya que tenéis estilos opuestos.<br>Los generadores suelen ver a los optimizadores como personas:<br>• Demasiado limitadas<br>• Son incapaces de ver el panorama general<br>• Creen que saben la respuesta correcta, pero podría ser porque el problema estuviera equivocado<br>• "Gente corta de miras" o "tiene problemas para ver el árbol entre el bosque"<br>Los optimizadores suelen ver a los Generadores como personas:<br>• Que no pueden concentrarse en el problema "real"<br>• Que empienzan a trabajar en 5 nuevos problemas antes de que resuelva el principal<br>• Son difíciles de "que se postulen en una idea"';
                                        break;
                                    case "optimizador":
                                        $textoCompa='Como optimizador, formas parte del grupo más grande de personas que realizan el perfil de innovación. Nuestros datos indican que los Optimizadores están a menudo en roles analíticos y orientados a la eficiencia. Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>Su estilo opuesto es el Generador. Los conflictos potenciales que pueda tener en un entorno de trabajo o equipo están con los Generadores ya que tienen estilos opuestos.<br>Los optimizadores suelen ver Generadores como personas:<br>• Que no pueden concentrarse en el problema "real"<br>• Que comienzan a trabajar en 5 nuevos problemas antes de que resuelva el principal<br>• Son difíciles de "que se postulen en una idea"<br>Los generadores suelen ver a los optimizadores como personas:<br>• Demasiado limitadas<br>• Son incapaces de ver el panorama general<br>• Creen que saben la respuesta correcta, pero podría ser porque el problema está equivocado<br>• "Gente corta de miras" o "tiene problemas para ver el árbol entre el bosque';
                                        break;
                                    case "implementador":
                                        $textoCompa='Como Implementador, formas parte del segundo grupo más grande de gente que realiza el perfil de Innovación. Nuestros datos indican que los implementadores a menudo trabajan en roles operativos dentro de las empresas o responsabilidades donde la acción forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el conceptualizador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los conceptualizadores, ya que tenéis estilos opuestos.<br><br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando<br><br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas';
                                        break;
                                    default:
                                        $textoCompa="Algo raro ha sucedido. Por favor, ponte en contacto con nosotros y te ayudaremos a continuar";
                                        break;  
                                }

                                ?>
                                <?php echo "<p> $textoCompa </p>" ?>
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
                                        imagenFondoComp.src='../assets/img/TEST_INNOVACION/RESULTADOS_FONDO_COMP.png';
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
                                        ctx.arc(ancho/2+(C2-C4),ancho/2-(C1-C3),5,0,2*Math.PI,false);
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
                           
                            <?php 
                                $textoSign="";
                                switch($per){
                                    case "conceptualizador":
                                        $textoSign='Como un Conceptualizador, eres un desarrollador de ideas y un pensador paciente. (Pasos 3 y 4 en la rueda de innovación más abajo). Eres capaz de juntar las piezas para formar el "gran lienzo" y desarrollar su comprensión. La definición del problema es fundamental para ti. Esto es muy importante, pero recuerda que hay algo más a parte de la innovación. Para aumentar tu rendimiento innovador, asegúrate de avanzar en línea a tu pensamiento. Tal vez asociarte con alguien que sea diferente de ti, digamos un implementador, podrá ayudarte a hacer progresos a través de la rueda de la innovación y a realizar alguna acción valiosa en tus ideas.';
                                        break;
                                    case "generador":
                                        $textoSign='Como generador, eres un iniciador de nuevos problemas y oportunidades. Te sientes cómodo con la ambigüedad, sientes pasión por los nuevos hechos y disfrutas al hacer preguntas (Pasos 1 y 2 en la rueda de innovación más adelante). Ves muchas posibilidades a cualquier situación y eres muy sensible al ambiente circundante.<br>Encuentras la relevancia en casi todo y empezar proyectos es crítico para ti. Esto es muy importante, pero para aumentar tu rendimiento innovador, asegúrate de mover tu pensamiento hacia adelante. <br>Tal vez asociarte con alguien que sea diferente de ti, digamos un optimizador, podría ayudarte a avanzar a través de la rueda de innovación, y realizar algunas acciones valiosas.';
                                        break;
                                    case "optimizador":
                                        $textoSign='Como optimizador, te gusta probar y experimentar con un análisis y una evaluación exhaustivos. Necesitas confirmar ideas y elementos para crear un plan paso a paso. Las soluciones prácticas son fundamentales para ti (pasos 5 y 6 en la rueda de innovación). Esto es muy importante, pero recuerda que hay algo más que la innovación. Para aumentar tu rendimiento innovador, asegúrate de ampliar tu pensamiento hacia adelante. Tal vez asociarte con alguien que sea diferente de tí, digamos un generador, que puede ayudarte a hacer progresos a través de toda la rueda de la innovación, ayudándote a pensar en nuevos problemas y oportunidades, que puedan surgir a lo largo en tu vida o un ejecutor que pueda ayudarte en la realización de una acción valiosa para llegar a una solución.';
                                        break;
                                    case "implementador":
                                        $textoSign='Como implementador, tu principal interés suele estar en hacer que las cosas se lleven a cabo. Crees fervientemente en el “ensayo-error”, ya que no necesitas la comprensión completa del problema para seguir adelante. Haces que las cosas “funcionen de algún modo”. Mayor interés en ganar aceptación e implementación. Tal vez asociarte con alguien que sea diferente de ti, digamos un conceptualizador, podrá ayudarte a hacer progresos a través de la rueda de la innovación y a realizar alguna acción valiosa en tus ideas.';
                                        break;
                                    default:
                                        $textoSign="Algo raro ha sucedido. Por favor, ponte en contacto con nosotros y te ayudaremos a continuar";
                                        break;  
                                }

                                ?>
                                <?php echo "<p style= 'font-size:14px;margin: 20px;'> $textoSign </p>" ?>
                            
                        </div>
                        <div>
                            <p style="font-size:14px;margin: 20px;">No importa qué estilo de perfil prefiera un miembro del equipo, deben aprender a utilizar sus diferencias de estilo con otros, de manera complementaria, para ayudar a su equipo a ser innovador. Es importante que cada persona aprecie el valor del estilo de cada uno, generando, conceptualizando, optimizando e implementando, y apoyar el trabajo a través del proceso de innovación completo y de esta forma alcanzar soluciones de alto impacto y disfrutar haciéndolo. Los miembros del equipo pueden aprender a pensar en cualquiera de los cuatro estilos de perfil para complementar el pensamiento de otros. De hecho, la orientación preferida de un individuo es menos importante que su capacidad de cambiar entre las diferentes orientaciones según sea necesario. Es vital no tener personas que operan en diferentes estilos simultáneamente sin darse cuenta y "anulándose mutuamente". Los cuatro estilos contribuyen única y exclusivamente al proceso de innovación.</p>
                            <?php 
                                $textoEq="";
                                switch($per){
                                    case "conceptualizador":
                                        $textoEq='Como Conceptualizador, tu contribución al equipo es la de crear las opciones sobre las alternativas de entender y definir un problema u oportunidad.<br>Puedes ayudar a tu equipo a evitar lanzarse a unas soluciones prematuras y en su lugar invertir el tiempo para desarrollar una imagen clara de lo que debería ser el objetivo real.<br>El equipo se sorprenderá de que ideas muy interesantes, comiencen a fluir casi de inmediato.';
                                        break;
                                    case "generador":
                                        $textoEq='Como Generador, tu contribución al equipo, es la de crear opciones en forma de nuevas posibilidades-nuevos problemas que podrían ser resueltos en forma de nuevas oportunidades que podrían suponer una ventaja. <br>Mantén al equipo actualizado, de modo que a medida que los problemas se resuelvan, vayan surgiendo otros nuevos en el horizonte para un innovar más.';
                                        break;
                                    case "optimizador":
                                        $textoEq='Como Optimizador, tu contribución al equipo es crear opciones en forma de soluciones prácticas a un problema bien definido y comprendido, evaluarlas a fondo y luego descubrir todos los factores posibles que entrarán en un plan de implementación exitoso.';
                                        break;
                                    case "implementador":
                                        $textoEq='Como Implementador, tu contribución al equipo es planificar y ejecutar, creando estructuras de consecución de objetivos. <br>Recoges bien los insights importantes del proyecto y los distribuyes convenientemente en tareas, con responsabilidades y fechas límite. <br>Tu campo de juego está en la operativa y en que sucedan las cosas y no tanto en las estrategias a seguir.';
                                        break;
                                    default:
                                        $textoEq="Algo raro ha sucedido. Por favor, ponte en contacto con nosotros y te ayudaremos a continuar";
                                        break;  
                                }

                                ?>
                                <?php echo "<p style= 'font-size:14px;margin: 20px;'> $textoEq </p>" ?>
                            
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
                            <a href="index.html"><img src="../assets/img/logo/logo2_footer.png" alt=""></a>
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
<div class="footer-bottom-area section-bg2" data-background="../assets/img/gallery/footer-bg.png">
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

<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="../assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="../assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>