<div class="section-top-border">
                    <h3 class="tituloBungee">Perfil Creativo de Solución de Problemas</h3>
                    <div class="tablaInnoResultados">
                         <div class="col-md-12">
                            <p><em class="azul" id="nombrePerfil"> </em></p>
                            <p><em class="azul" id="perfilPerfil" style="text-transform: uppercase; font-size: 18px;"></em></p>
                            
                            <script type="text/javascript">
                                var nom= '<?php echo $nombre ?>';
                                var per='<?php echo $perfil ?>';
                                var C1='<?php echo $generador ?>';
                                var C2='<?php echo $conceptualizador ?>';
                                var C3='<?php echo $optimizador ?>';
                                var C4='<?php echo $implementador ?>';
                            
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
                     </div>
