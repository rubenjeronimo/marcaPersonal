var botn=document.getElementById("botonSiguiente");
var btnInicio=document.getElementById("btnStart");
var contador = 1;
var imagen1=document.getElementById('img1');
var imagen2=document.getElementById('img2');
var imagen3=document.getElementById('img3');
var imagen4=document.getElementById('img4');
var imagenCelda=document.getElementsByClassName('imagen_rejilla');
var seccion=document.getElementById('seccionInnovacion');
seccion.style.display='none';
populatePregunta(contador);

var valorPalabra = 5;
var listaValores = [];
var valoresPerfil=[];

let nombrePerfil;
let mailPerfil;

//GUARDA NOMBRE, MAIL E INICIA EL TEST
function iniciarPerfil(){
	
	valoresPerfil=[];
	nombrePerfil=document.getElementById("nombreInput").value;
	mailPerfil=document.getElementById("mailInput").value;
	empresa=document.getElementById("empresa").value;
	
	if (nombrePerfil=="") {
		confirm('Debes introducir tu nombre para continuar');
	}else if(mailPerfil==""){
		confirm('Debes introducir tu mail para continuar');
	}else if(empresa==""){
		confirm('Debes introducir tu empresa para continuar');
	}
	else{
		valoresPerfil.push(nombrePerfil,mailPerfil,empresa);
		
		seccion.style.display='block';

		return valoresPerfil;
	}
	valoresPerfil.push(nombrePerfil,mailPerfil,empresa);
		return valoresPerfil;
		seccion.style.display='';
	
}


//EVITAR PALABRAS CON EL MISMO VALOR
function evaluaPalabra(pregunta){
	if (valorPalabra<2) {
		valorPalabra=4;
	}
	else{
		valorPalabra=valorPalabra-1;	
	}
	var valorTexto = pregunta.id;
	valorTexto=valorTexto.toString();
	var pChildVal=valorTexto.replace("img","valorResp");
	document.getElementById(pChildVal).innerHTML=valorPalabra;
	var numeroPalabra = valorTexto.replace("img","");
	numeroPalabra = parseInt(numeroPalabra);
	let nuevoValor = [numeroPalabra,valorPalabra];
	if (listaValores[numeroPalabra-1]!=0) 
	{
		listaValores[numeroPalabra-1]=nuevoValor;
	}
	else
	{
		listaValores.splice(numeroPalabra-1,0,nuevoValor);
	}
	return(listaValores);
}


//SECUENCIA PARA PASAR DATOS A VARIABLE ARRAY
function siguientePreg(){
	if (contador<18) {
		if (listaValores.length<=3) {
			confirm('Todas las palabras deben estar puntuadas.');
			return 0;
		}
		else{
			var valorReferencia;
			var preguntaReferencia;
			var valorTestado;
			var preguntaTestada;
			for (var k = 0; k <= 3; k++) {
				preguntaReferencia=listaValores[k][0];
				valorReferencia=listaValores[k][1];
				for (var j = 1; j <= 4; j++) {
					preguntaTestada=j;
					valorTestado=listaValores[j-1][1];
					if (preguntaReferencia==preguntaTestada) {
						
					}else{
						if(valorReferencia==valorTestado){
							confirm('Debes puntuar cada palabra con un valor diferente. No puede haber dos palabras con el mismo valor');
							return 0;
						}else{
						}
					}
				}
				for (var n = 0; n <= 3; n++) {
					valoresPerfil.push(listaValores[n][1]);
				}
				contador++;
							document.getElementsByClassName('valorRespuesta').innerHTML="";
							document.getElementById('valorResp1').innerHTML="";
							document.getElementById('valorResp2').innerHTML="";
							document.getElementById('valorResp3').innerHTML="";
							document.getElementById('valorResp4').innerHTML="";
							
							listaValores=[];
							document.getElementById('numeroPregunta').innerHTML=contador;
							populatePregunta(contador);
							return valoresPerfil;
				}
			}

		
	}else{
		for (n = 0; n <= 3; n++) {
					valoresPerfil.push(listaValores[n][1]);
				}

		enviaDatosBBDDCompleto(valoresPerfil);

		if (window.confirm("¡Gracias! Has completado el test y pronto te haremos llegar los resultados.")) {
			window.open("index.html","_self");
		}
		
		/*window.confirm("¡Gracias! Has completado el test y pronto te haremos llegar los resultados.");*/
		return valoresPerfil;
	}
}


function enviaDatosBBDDCompleto(arrayPerfil){
	var nom=arrayPerfil[0];
	var email=arrayPerfil[1];
	var empresa=arrayPerfil[2];
	var q1w1=arrayPerfil[3];
	var q1w2=arrayPerfil[4];
	var q1w3=arrayPerfil[5];
	var q1w4=arrayPerfil[6];

	$.ajax({
				async: false,
            //type:'POST',
            method:'POST',
             cache:false,
             url:"conectaDB.php",
            data:{arrayPerfil: arrayPerfil},
        		dataType:'json',
            success:function(data){
            	alert(data);
            	console.log(data);
               }
     });
}


//ACTIVADORES DE BOTONES
botn.addEventListener('click',siguientePreg,true);
btnInicio.addEventListener('click',iniciarPerfil,true);




//POBLACIÓN DE TEXTOS E IMÁGENES EN LAS PREGUNTAS
function populatePregunta(contadores){
	switch (contadores){
							case 1:
								document.getElementById('txt1').innerHTML="Alerta";
								document.getElementById('txt2').innerHTML="Equilibrio";
								document.getElementById('txt3').innerHTML="Listo/a";
								document.getElementById('txt4').innerHTML="Ansia";
								imagen1.src='img/TEST_INNOVACION/P1-ALERTA.jpg';
								imagen2.src='img/TEST_INNOVACION/P1-EQUILIBRIO.jpg';
								imagen3.src='img/TEST_INNOVACION/P1-LISTO.jpg';
								imagen4.src='img/TEST_INNOVACION/P1-ANSIOSO.jpg';
							break;
							case 2:
								document.getElementById('txt1').innerHTML="Paciente";
								document.getElementById('txt2').innerHTML="Diligente";
								document.getElementById('txt3').innerHTML="Contundente";
								document.getElementById('txt4').innerHTML="Preparado/a";
								imagen1.src='img/TEST_INNOVACION/P2-PACIENTE.jpg';
								imagen2.src='img/TEST_INNOVACION/P2-DILIGENTE.jpg';
								imagen3.src='img/TEST_INNOVACION/P2-CONTUNDENTE.jpg';
								imagen4.src='img/TEST_INNOVACION/P2-PREPARADO.jpg';
								break;
							case 3:
								document.getElementById('txt1').innerHTML="Hacer";
								document.getElementById('txt2').innerHTML="Infantil";
								document.getElementById('txt3').innerHTML="Observar";
								document.getElementById('txt4').innerHTML="Realista";
								imagen1.src='img/TEST_INNOVACION/P3-HACER.jpg';
								imagen2.src='img/TEST_INNOVACION/P3-INFANTIL.jpg';
								imagen3.src='img/TEST_INNOVACION/P3-OBSERVAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P3-REALISTA.jpg';
								break;
							case 4:
								document.getElementById('txt1').innerHTML="Experimentar";
								document.getElementById('txt2').innerHTML="Diversificar";
								document.getElementById('txt3').innerHTML="Esperar";
								document.getElementById('txt4').innerHTML="Consolidar";
								imagen1.src='img/TEST_INNOVACION/P4-EXPERIMENTAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P4-DIVERSIFICAR.jpg';
								imagen3.src='img/TEST_INNOVACION/P4-ESPERAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P4-CONSOLIDAR.jpg';
								break;
							case 5:
								document.getElementById('txt1').innerHTML="Reservado/a";
								document.getElementById('txt2').innerHTML="Serio/a";
								document.getElementById('txt3').innerHTML="Gozador/a";
								document.getElementById('txt4').innerHTML="Jugueton/a";
								imagen1.src='img/TEST_INNOVACION/P5-RESERVADO.jpg';
								imagen2.src='img/TEST_INNOVACION/P5-SERIO.jpg';
								imagen3.src='img/TEST_INNOVACION/P5-GOZADOR.jpg';
								imagen4.src='img/TEST_INNOVACION/P5-JUGUETON.jpg';
								break;
							case 6:
								document.getElementById('txt1').innerHTML="Ensayo y error";
								document.getElementById('txt2').innerHTML="Alternativas";
								document.getElementById('txt3').innerHTML="Sopesar";
								document.getElementById('txt4').innerHTML="Evaluar";
								imagen1.src='img/TEST_INNOVACION/P6-ENSAYO Y ERROR.jpg';
								imagen2.src='img/TEST_INNOVACION/P6-ALTERNATIVAS.jpg';
								imagen3.src='img/TEST_INNOVACION/P6-SOPESAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P6-EVALUAR.jpg';
								break;
							case 7:
								document.getElementById('txt1').innerHTML="Actuar";
								document.getElementById('txt2').innerHTML="Divergir";
								document.getElementById('txt3').innerHTML="Abstraer";
								document.getElementById('txt4').innerHTML="Converger";
								imagen1.src='img/TEST_INNOVACION/P7-ACTUAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P7-DIVERGIR.jpg';
								imagen3.src='img/TEST_INNOVACION/P7-ABSTRAER.jpg';
								imagen4.src='img/TEST_INNOVACION/P7-CONVERGER.jpg';
								break;
							case 8:
								document.getElementById('txt1').innerHTML="Directo/a";
								document.getElementById('txt2').innerHTML="Posibilidades";
								document.getElementById('txt3').innerHTML="Conceptual";
								document.getElementById('txt4').innerHTML="Realidades";
								imagen1.src='img/TEST_INNOVACION/P8-DIRECTO.jpg';
								imagen2.src='img/TEST_INNOVACION/P8-POSIBILIDADES.jpg';
								imagen3.src='img/TEST_INNOVACION/P8-CONCEPTUAL.jpg';
								imagen4.src='img/TEST_INNOVACION/P8-REALIDAD.jpg';
								break;
							case 9:
								document.getElementById('txt1').innerHTML="Implicado/a";
								document.getElementById('txt2').innerHTML="Cambiar perspectivas";
								document.getElementById('txt3').innerHTML="Teórica";
								document.getElementById('txt4').innerHTML="Enfocar";
								imagen1.src='img/TEST_INNOVACION/P9-IMPLICADO.jpg';
								imagen2.src='img/TEST_INNOVACION/P9-CAMBIAR PERSPECTIVA.jpg';
								imagen3.src='img/TEST_INNOVACION/P9-TEORICO.jpg';
								imagen4.src='img/TEST_INNOVACION/P9-ENFOCAR.jpg';
								break;
							case 10:
								document.getElementById('txt1').innerHTML="Silencioso/a";
								document.getElementById('txt2').innerHTML="Confiable";
								document.getElementById('txt3').innerHTML="Responsable";
								document.getElementById('txt4').innerHTML="Imaginativo/a";
								imagen1.src='img/TEST_INNOVACION/P10-SILENCIOSO.jpg';
								imagen2.src='img/TEST_INNOVACION/P10-CONFIANZA.jpg';
								imagen3.src='img/TEST_INNOVACION/P10-RESPONSABLE.jpg';
								imagen4.src='img/TEST_INNOVACION/P10-IMAGINATIVO.jpg';	
								break;
							case 11:
								document.getElementById('txt1').innerHTML="Implementar";
								document.getElementById('txt2').innerHTML="Visualizar";
								document.getElementById('txt3').innerHTML="Describir";
								document.getElementById('txt4').innerHTML="Seleccionar";
								imagen1.src='img/TEST_INNOVACION/P11-IMPLEMENTAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P11-VISUALIZAR.jpg';
								imagen3.src='img/TEST_INNOVACION/P11-DESCRIBIR.jpg';
								imagen4.src='img/TEST_INNOVACION/P11-SELECCIONAR.jpg';
								break;
							case 12:
								document.getElementById('txt1').innerHTML="Ejecutar";
								document.getElementById('txt2').innerHTML="Orientado hacia el futuro";
								document.getElementById('txt3').innerHTML="Leer";
								document.getElementById('txt4').innerHTML="Detallista";
								imagen1.src='img/TEST_INNOVACION/P12-EJECUTAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P12-ORIENTADO AL FUTURO.jpg';
								imagen3.src='img/TEST_INNOVACION/P12-LEER.jpg';
								imagen4.src='img/TEST_INNOVACION/P12-DETALLISTA.jpg';
								break;
							case 13:
								document.getElementById('txt1').innerHTML="Físico";
								document.getElementById('txt2').innerHTML="Crear opciones";
								document.getElementById('txt3').innerHTML="Mental";
								document.getElementById('txt4').innerHTML="Decidir";
								imagen1.src='img/TEST_INNOVACION/P13-FISICO.jpg';
								imagen2.src='img/TEST_INNOVACION/P13-CREAR OPCIONES.jpg';
								imagen3.src='img/TEST_INNOVACION/P13-MENTAL.jpg';
								imagen4.src='img/TEST_INNOVACION/P13-DECIDIR.jpg';
								break;
							case 14:
								document.getElementById('txt1').innerHTML="Impersonal";
								document.getElementById('txt2').innerHTML="Orgulloso/a";
								document.getElementById('txt3').innerHTML="Esperanzado/a";
								document.getElementById('txt4').innerHTML="Temeroso/a";
								imagen1.src='img/TEST_INNOVACION/P14-IMPERSONAL.jpg';
								imagen2.src='img/TEST_INNOVACION/P14-ORGULLOSO.jpg';
								imagen3.src='img/TEST_INNOVACION/P14-ESPERANZADO.jpg';
								imagen4.src='img/TEST_INNOVACION/P14-TEMEROSO.jpg';
								break;
							case 15:
								document.getElementById('txt1').innerHTML="Practicar";
								document.getElementById('txt2').innerHTML="Transformar";
								document.getElementById('txt3').innerHTML="Pensar";
								document.getElementById('txt4').innerHTML="Elegir";
								imagen1.src='img/TEST_INNOVACION/P15-PRACTICAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P15-TRANSFORMAR.jpg';
								imagen3.src='img/TEST_INNOVACION/P15-PENSAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P15-ELEGIR.jpg';
								break;
							case 16:
								document.getElementById('txt1').innerHTML="Manejar";
								document.getElementById('txt2').innerHTML="Especular";
								document.getElementById('txt3').innerHTML="Contemplar";
								document.getElementById('txt4').innerHTML="Juzgar";
								imagen1.src='img/TEST_INNOVACION/P16-MANEJAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P16-ESPECULAR.jpg';
								imagen3.src='img/TEST_INNOVACION/P16-CONTEMPLAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P16-JUZGAR.jpg';
								break;
							case 17:
								document.getElementById('txt1').innerHTML="Simpatizar";
								document.getElementById('txt2').innerHTML="Práctico";
								document.getElementById('txt3').innerHTML="Emotivo";
								document.getElementById('txt4').innerHTML="Demorar";
								imagen1.src='img/TEST_INNOVACION/P17-SIMPATIZAR.jpg';
								imagen2.src='img/TEST_INNOVACION/P17-PRACTICO.jpg';
								imagen3.src='img/TEST_INNOVACION/P17-EMOTIVO.jpg';
								imagen4.src='img/TEST_INNOVACION/P17-DEMORAR.jpg';
								break;
							case 18:
								document.getElementById('txt1').innerHTML="Tomar contacto";
								document.getElementById('txt2').innerHTML="Diferenciar";
								document.getElementById('txt3').innerHTML="Reflexionar";
								document.getElementById('txt4').innerHTML="Asegurar";
								imagen1.src='img/TEST_INNOVACION/P18-TOMAR CONTACTO.jpg';
								imagen2.src='img/TEST_INNOVACION/P18-DIFERENCIAR.jpg';
								imagen3.src='img/TEST_INNOVACION/P18-REFLEXIONAR.jpg';
								imagen4.src='img/TEST_INNOVACION/P18-ASEGURAR.jpg';
								break;
							default:
								document.getElementById('txt1').innerHTML="";
								document.getElementById('txt2').innerHTML="";
								document.getElementById('txt3').innerHTML="";
								document.getElementById('txt4').innerHTML="";
								break;
						}
}