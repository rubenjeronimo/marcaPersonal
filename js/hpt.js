var contador=1;
let valorPregunta = 0;
let respuestaPregunta = "";
let boton=document.getElementById("botonSiguiente");

function siguientePregunta()
	{
		
		document.getElementById('numeroPregunta').innerHTML='#'+contador;
//		numeroPregunta.innerHTML=contador;
		
		if (contador<21) {
		switch(contador){
			case 1:
				document.getElementById('textoPregunta').innerHTML="¿Revisáis que y como estamos haciendo las cosas regularmente?";
				respuestaPregunta=document.getElementById('respuestaPregunta');
				testEstrellas();
				break;
			case 2:
				document.getElementById('textoPregunta').innerHTML="¿Hay una atmósfera positiva en tu equipo?";
				break;
			case 3:
				document.getElementById('textoPregunta').innerHTML="¿Nos vemos como un equipo o como un grupo?";
				break;
			case 4:
				document.getElementById('textoPregunta').innerHTML="¿En qué nivel estamos TODXS dedicados al equipo y cada uno al rol que asume?";
				break;
			case 5:
				document.getElementById('textoPregunta').innerHTML="¿Nos comunicamos de una forma clara, directa, inteligible y escuchamos a lxs otrxs?";
				break;
			case 6:
				document.getElementById('textoPregunta').innerHTML="¿Cómo somos de objetivos cuando surge un desacuerdo?¿nos lo llevamos al plano personal?";
				break;
			case 7:
				document.getElementById('textoPregunta').innerHTML="¿Trabajamos bien TODXS juntxs y haríamos cualquier cosa para ayudar a otrxs a hacer el trabajo?";
				break;
			case 8:
				document.getElementById('textoPregunta').innerHTML="¿Fomentamos la innovación y la creatividad dentro de nuestro equipo?";
				break;
			case 9:
				document.getElementById('textoPregunta').innerHTML="¿Tomamos las decisiones que debemos tomar?¿hay una participación adecuada?";
				break;
			case 10:
				document.getElementById('textoPregunta').innerHTML="¿Damos feedback de manera abierta, estructurada y constructiva?¿Cómo lo recibimos?";
				break;
			case 11:
				document.getElementById('textoPregunta').innerHTML="Cómo líderes ¿aceptamos abiertamente el feedback a propósito de nuestro desempeño?";
				break;
			case 12:
				document.getElementById('textoPregunta').innerHTML="¿Discutimos los objetivos relevantes para el equipo y lo fijamos colectivamente?";
				break;
			case 13:
				document.getElementById('textoPregunta').innerHTML="¿somos tratados como miembros de pleno derecho del equipo y no somos excluidxs?";
				break;
			case 14:
				document.getElementById('textoPregunta').innerHTML="¿Nuestros liderazgos son efectivos en el funcionamiento general del equipo y sus responsabilidades?";
				break;
			case 15:
				document.getElementById('textoPregunta').innerHTML="¿Apreciamos el esfuerzo que ponen los miembros en su trabajo y lo hacemos visible para todo el equipo?";
				break;
			case 16:
				document.getElementById('textoPregunta').innerHTML="¿Somos abiertxs y honestxs con lxs otrxs?";
				break;
			case 17:
				document.getElementById('textoPregunta').innerHTML="¿Sentimos orgullo de pertenecer a este equipo?";
				break;
			case 18:
				document.getElementById('textoPregunta').innerHTML="¿Reconocemos y celebramos los logros?";
				break;
			case 19:
				document.getElementById('textoPregunta').innerHTML="¿Somos un soporte para todxs en cualquier momento?";
				break;
			case 20:
				document.getElementById('textoPregunta').innerHTML="¿Confiamos completamente en todxs y cada unx dentro del equipo?";
				break;
			default:
				document.getElementById('textoPregunta').innerHTML="";
				break;
		}
		console.log("pregunta: "+contador);
		console.log("valor: "+valorPregunta);
		console.log("respuesta: "+respuestaPregunta);
		}
		else{
			console.log("ya");
			location.href="Test.html";
		}
		contador=contador+1;
	}

function testEstrellas() {
	if (document.getElementById('rc1').onClick) {
		valorPregunta=1;
	}
}

boton.addEventListener('click',siguientePregunta,true);