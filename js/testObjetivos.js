



//var botn=document.getElementById("botonSiguiente");
var botonRespuesta1=document.getElementById("respuesta1");
var botonRespuesta2=document.getElementById("respuesta2");
var textoNumeroPregunta=document.getElementById('numeroPregunta');
var textoPregunta=document.getElementById('txt1');
var contador=2;
var registro=[];
var perfilResul=0;
var perfilContex =0;
var perfilCompe =0;
var perfilMoti =0;
var perfilOpor =0;
var perfil=[perfilResul,perfilContex,perfilCompe,perfilMoti,perfilOpor];
var pre1=[1,'Pasado el tiempo...¿el resultado de mi inversión en aprendizaje es positivo?','SI','¿Has mejorado algo o has incorporado habilidades nuevas?','','','','NO','¿el objetivo tenía posibilidad de aplicación?','Si el aprendizaje es un ejercicio de transformación, y el objetivo no contribuye a ello, redacta nuevamente ese objetivo teniendo en cuenta tus propósitos.','','','MOTIVACIONAL'];
var pre2=[2,'¿el resultado de mi inversión en aprendizaje es positivo?','SI: si observo mi progreso en cuanto a la inversión tiempo o dinero invertido frente al resultado, este es positivo','¿Has mejorado algo o has incorporado habilidades nuevas?','','','','NO: si observo mi progreso en cuanto a la inversión tiempo o dinero invertido frente al resultado, este es negativo','¿el objetivo tenía relación directa con alguno de mis propósitos?','Alerta:Si el aprendizaje es un ejercicio de transformación, y el objetivo no contribuye a ello, redacta nuevamente ese objetivo teniendo en cuenta tus propósitos.','','','MOTIVACIONAL'];
var pre3=[3,'¿soy capaz de hacer más cosas?','SI: antes no sabía nada del tema','¿has pensado en otros objetivos de mayor nivel?','','','','NO: hago lo mismo','¿el objetivo tenía relación directa con alguno de mis propósitos?','','','Solución:Vuelve al canvas de aprendizaje y reconsidera el campo "propósito" y como se ajusta a tu realidad. Redacta nuevamente un objetivo','COMPETENCIAL'];
var pre4=[4,'¿he mejorado lo que ya hacía?','SI: he mejorado mis habilidades','¿consideras suficiente ese aprendizaje?','','','','NO: me da la sensación de seguir igual','¿el objetivo tenía relación directa con alguno de mis propósitos?','','','','RESULTADOS'];
var pre5=[5,'¿el objetivo tenía relación directa con alguno de mis propósitos?','SI: necesito estas habilidades en mi trabajo','¿el objetivo se ajustaba a mi contexto (horas, familia, trabajo,...)?','','','','NO: no necesito habitualmente estas habilidades con lo que no impacta en mi vida diaria','CIERRE','','Ejercicio propuesto:Búsqueda de propósito profundo (árbol de propósitos,...)','','MOTIVACIONAL'];
var pre6=[6,'¿has pensado en otros objetivos de mayor nivel?','SI: ahora puedo pensar en otro tipo de escenarios donde poder aplicar estas habilidades','¿tienes oportunidad de aplicarlos?','','','','NO: considero que ya hago un buen nivel','¿quieres probar con otro tipo de objetivo?','','','','COMPETENCIAL'];
var pre7=[7,'¿consideras suficiente ese aprendizaje?','SI: para la inversión de tiempo y dinero','¿has pensado en otros objetivos de mayor nivel?','','','','NO: aunque he mejorado, creo que me falta mucho camino','¿sabes en que medida el objetivo se orientaba hacia la consecución del aprendizaje?','','','','RESULTADOS'];
var pre8=[8,'¿el objetivo se ajustaba a mi contexto (horas, familia, trabajo,...)?','SI: tuve en cuenta el tiempo que podía emplear al día sin restar horas a cosas importantes','¿el objetivo tenía posibilidad de aplicación?','','','','NO: creo que me excedí en la ambición o mejor dicho, no contemplé mi propia realidad','CIERRE','Alerta:Si no tenemos el control del proceso es fácil que no seamos capaces de gestionar las energías necesarias para que fluya correctamente. Es un buen momento para recalibrar las expectativas.','Ejercicio propuesto:Gestión del tiempo (GTD, Timeblocking, análisis de biorritmos,...)','','CONTEXTO'];
var pre9=[9,'¿tienes oportunidad de aplicarlos?','SI: habitualmente necesito aplicar estas habilidades','¿has identificado indicadores transversales a este objetivo?','','','','NO: hasta que no llegan los momentos de necesidad no tengo ningún contexto real','¿conoces el factor de dependencia que bloquea la oportunidad?','','','','OPORTUNIDAD'];
var pre10=[10,'¿conoces el factor de dependencia que bloquea la oportunidad?','SI: con certeza','¿tienes opciones de hacer algo para desbloquearlo?','','','','NO: desconozco de que depende','NO HAY','','','','COMPETENCIAL'];
var pre11=[11,'¿tienes opciones de hacer algo para desbloquearlo?','SI: se con quien debo hablar y que debo decir','CIERRE','','Ejercicio propuesto:Planificación (canvas de aprendizaje, sistema de rúbricas,...)','','¿los resultados clave se identifican con momentos concretos en una lineal temporal?','¿los resultados clave se identifican con momentos concretos en una lineal temporal?','','Ejercicio propuesto:Planificación de aprendizaje (canvas de aprendizaje, timeline,...)','Solución:Considera establecer esto como un resultado clave (no necesariamente de aprendizaje) para tu siguiente objetivo','COMPETENCIAL'];
var pre12=[12,'¿sabes en que medida el objetivo se orientaba hacia la consecución del aprendizaje?','SI: hice a mi entender un buen planteamiento del reto','¿el objetivo se ajustaba a mi contexto (horas, familia, trabajo,...)?','','','','NO: no dí importancia a diseñar un buen plan','CIERRE','','Ejercicio propuesto:Planificación de aprendizaje (canvas de aprendizaje, timeline,...)','','MOTIVACIONAL'];
var pre13=[13,'¿el objetivo tenía posibilidad de aplicación?','SI: más o menos frecuentemente','¿has identificado indicadores transversales a este objetivo?','','','','NO: no he sido capaz de encontrar un entorno de práctica hasta esos momentos de necesidad','¿el objetivo tiene en el futuro alguna posibilidad de aplicación?','Alerta:Al no tener un contexto de aplicación, podemos adquirir el conocimiento pero nunca pasa por el tamiz de nuestra realidad. Sugerencia: motivar y activar un contexto propicio o postergar este aprendizaje para un momento más propicio.','','','OPORTUNIDAD'];
var pre14=[14,'¿el objetivo tiene en el futuro alguna posibilidad de aplicación?','SI: tienen que suceder algunos cambios pero en el futuro si','¿has pensado en qué factores determinan la consecución del éxito?','','','','NO: ni en el entorno laboral ni en el personal','CIERRE','','Ejercicio propuesto:Búsqueda de propósito profundo (árbol de propósitos,...)','','OPORTUNIDAD'];
var pre15=[15,'¿has pensado en qué factores determinan la consecución del éxito?','SI: creo saber cúal es el criterio del "éxito"','CIERRE','','Ejercicio propuesto:Definición de la experiencia de aprendizaje (canvas, timeline...)','','NO: nunca lo había pensado','CIERRE','','Ejercicio propuesto:Construcción de la ruta (escalador, artículo positivo...)','','MOTIVACIONAL'];
var pre16=[16,'¿quieres probar con otro tipo de objetivo?','SI: ahora quiero otro tipo de retos','¿ya sabes en que dirección mira tu siguiente objetivo?','','','','NO: considero que ya hago un buen nivel','CIERRE','Alerta:Problema serio de desalineamiento y desmotivación. Nadie en la sala está capacitado para ayudar aquí.','','','MOTIVACIONAL'];
var pre17=[17,'¿has identificado indicadores transversales a este objetivo?','SI: desde intangibles hasta contables','¿alguno de los resultados clave consideraba los indicadores anteriores?','','','','NO: no veo conexión entre los resultados y las actividades','¿has pensado en qué factores determinan la consecución del éxito?','','','','COMPETENCIAL'];
var pre18=[18,'¿alguno de los resultados clave consideraba los indicadores anteriores?','SI: contemplaba criterios de éxito','¿los resultados clave se identifican con momentos concretos en una lineal temporal?','','','','NO: eran tan importantes que siempre han estado presentes','CIERRE','','Ejercicio propuesto:Definición de la experiencia de aprendizaje (canvas, timeline...)','','RESULTADOS'];
var pre19=[19,'¿los resultados clave se identifican con momentos concretos en una lineal temporal?','SI: intenté hacer un planeamiento adecuado en cuanto el tiempo','¿los resultados clave se pueden rubricar (establecimiento de niveles?','','','','NO: se cumplían todos al cumplir el objetivo','CIERRE','','Ejercicio propuesto:Interiorización de la importancia de la temporalidad (canvas, timeline...)','','OPORTUNIDAD'];
var pre20=[20,'¿los resultados clave se pueden rubricar (establecimiento de niveles?','SI: pude describir distintas acciones para cada uno de los niveles','¿ajustaste tu nivel objetivo con el sistema rubricado?','','','','NO: no creo que haya nada entre hoy y el objetivo','CIERRE','','Ejercicio propuesto:Determinación de las habilidades intrínsecas (rúbricas, timeline...)','','COMPETENCIAL'];
var pre21=[21,'¿ajustaste tu nivel objetivo con el sistema rubricado?','SI: fui coherente y no demasiado ambicioso','¿elaboraste un listado de tareas asociadas a la consecución del objetivo?','','','','NO: no tuve en cuenta desde donde partía, solo donde quería estar','¿Era poco ambicioso?','','','','CONTEXTO'];
var pre22=[22,'¿elaboraste un listado de tareas asociadas a la consecución del objetivo?','SI: intenté hacer un "backlog" con todas las tareas que creí necesarias','¿consideraste el impacto de cada una de las tareas con respecto del objetivo?','','','','NO: tenía en mente todas las cosas que quería hacer','¿tenías algún modo neutral de estimar el éxito del objetivo?','','','','CONTEXTO'];
var pre23=[23,'¿Era poco ambicioso?','SI: a penas mejoraba nada','CIERRE','','Ejercicio propuesto:Construcción de la ruta (escalador, artículo positivo...)','Solución:Tu objetivo no era precisamente aspirador. Prácticamente, la consecución no te permite hacer más cosas o hacer mejor las que ya hacías. Quizá deberías echar un paso hacia el árbol de propósitos y reconsiderar la dirección de tu aprendizaje.','NO: todo lo contrario. me pasé.','CIERRE','','Ejercicio propuesto:Determinación de las habilidades intrínsecas (rúbricas, timeline...)','','RESULTADOS'];
var pre24=[24,'¿crees que hiciste un buen curado de contenidos?','SI: tenía muy claros cuales eran los contenidos de mayor calidad','CIERRE','','','Solución:Tenemos que hablar. Si has llegado hasta aquí y aún tienes una sensación de no haber aprendido, tenemos un reto por delante tan motivador como dificultoso y debemos trabajarlo aparte.','NO: no necesité investigar ya que un contenido me llevaba al siguiente.','CIERRE','Alerta:Planificar el aprendizaje significa dar sentido también a los contenidos para evitar que fluyan en otras direcciones. Evitar esta situación permite poner foco sin prescindir de encuentros fortuitos con otras áreas de conocimiento.','Ejercicio propuesto:Diseño de mapa de objetivo (curación de contenido, ...)','','COMPETENCIAL'];
var pre25=[25,'¿consideras que tu constancia ha sido adecuada?','SI: incluso algún día hice más','¿crees que hiciste un buen curado de contenidos?','','','','NO: no he sido constante ni planteé bien los pasos a seguir','CIERRE','','Ejercicio propuesto:Búsqueda de propósito profundo (árbol de propósitos,...)','Solución:Si has llegado hasta aquí, significa que te emociona más el final que el proceso con lo que seguramente tenga poca o nula relación con tus propósitos ya que esto se puede adquirir de otra manera que no implique una inversión en tiempo y dinero por tu parte.','MOTIVACIONAL'];
var pre26=[26,'¿había asociadas marcas temporales a cada una de las iniciativas o tareas?','SI: calendaricé para evitar "sustos" en la ejecución','¿consideras que tu constancia ha sido adecuada?','','','','NO: el dead line era para el objetivo completo','CIERRE','','Ejercicio propuesto:Interiorización de la importancia de la temporalidad (canvas, timeline...)','','OPORTUNIDAD'];
var pre27=[27,'¿consideraste el impacto de cada una de las tareas con respecto del objetivo?','SI: no todas las acciones contribuyen igual al objetivo','¿había asociadas marcas temporales a cada una de las iniciativas o tareas?','','','','NO: se que tengo que hacer todo para que el objetivo ocurra','CIERRE','','Ejercicio propuesto:Estimación del impacto (backlog product,...)','','RESULTADOS'];
var pre28=[28,'¿tenías algún modo neutral de estimar el éxito del objetivo?','SI: podría enunciar los resultados que demuestran el nivel de consecución del objetivo.','¿consideraste el impacto de cada una de las tareas con respecto del objetivo?','','','','NO: al ser un intangible, no soy capaz de estimar el éxito','CIERRE','','Ejercicio propuesto:Auditoría de competencias futuras (rúbricas, artículo futuro,...)','','OPORTUNIDAD'];
var pre29=[29,'¿ya sabes en que dirección mira tu siguiente objetivo?','SI: Se que viene ahora','CIERRE','','Ejercicio propuesto:Planificación (canvas de aprendizaje, sistema de rúbricas,...)','','NO: no se que hacer ahora.','CIERRE','','Ejercicio propuesto:Iteración (árbol de propósitos, canvas de aprendizaje,...)','','COMPETENCIAL'];
var pre30=[30,'¿Querías mejorar algo o  incorporar habilidades nuevas?','Mejorar','¿he mejorado lo que ya hacía?','','','','Mas habilidades','¿soy capaz de hacer más cosas?','','','','RESULTADOS'];


var preguntas=[pre1,pre2,pre3,pre4,pre5,pre6,pre7,pre8,pre9,pre10,pre11,pre12,pre13,pre14,pre15,pre16,pre17,pre18,pre19,pre20,pre21,pre22,pre23,pre24,pre25,pre26,pre27,pre28,pre29,pre30];

var rel1=[1,'',''];
var rel2=[2,'He conseguido progresar.','No he logrado mejorar.'];
var rel3=[3,'Ahora soy capaz de hacer más cosas. ','Pero no he conseguido hacer nada nuevo. '];
var rel4=[4,'He mejorado mis habilidades.','Aprendí algo nuevo.'];
var rel5=[5,'Los objetivos salían de mi propósito.','Los objetivos no salían de mi propósito.'];
var rel6=[6,'Ahora creo que debo subir el nivel.','Creo haber alcanzado el nivel adecuado.'];
var rel7=[7,'Estoy conforme con el aprendizaje.','El resultado de aprendizaje no ha sido adecuado.'];
var rel8=[8,'Logré encajar el proceso de aprendizaje con mi contexto.','El contexto me desbordó.'];
var rel9=[9,'Puedo aplicarlo.','No puedo aplicarlo.'];
var rel10=[10,'Logré averiguar por que se bloqueaba el aprendizaje.','No se por que el proceso se paralizó.'];
var rel11=[11,'Pero se como desbloquearlo.','No encuentro la manera de eliminar el bloqueo.'];
var rel12=[12,'El objetivo se orientaba bien.','El objetivo no estaba bien orientado.'];
var rel13=[13,'El objetivo tenía posibilidad de aplicación.','El objetivo no tenía posibilidad de aplicación.'];
var rel14=[14,'En el futuro se puede aplicar.','En el futuro no se puede aplicar.'];
var rel15=[15,'Conozco los factores de éxito.','No conozco los factores de éxito'];
var rel16=[16,'Ahora quiero nuevos retos.','Creo que me quedo aquí.'];
var rel17=[17,'Se cuáles son los indicadores.','No se cuáles son los indicadores'];
var rel18=[18,'Los KR contenían los indicadores.','Los KR no contenían los indicadores.'];
var rel19=[19,'Había calendario coherente.','No había calendario coherente.'];
var rel20=[20,'Los KR eran rubricables.','Los KR no eran rubricables.'];
var rel21=[21,'El objetivo se ajustaba a mi nivel.','El objetivo no se ajustaba a mi nivel.'];
var rel22=[22,'Había planificación de tareas.','No había planificación de tareas.'];
var rel23=[23,'Apenas era un plan ambicioso.','Era un plan ambicioso.'];
var rel24=[24,'Hubo un buen curado de contenidos.','No hubo un buen curado de contenidos.'];
var rel25=[25,'He sido constante.','No he sido constante.'];
var rel26=[26,'Había marcas temporales.','No había marcas temporales.'];
var rel27=[27,'Consideré el impacto de cada paso.','No consideré el impacto de cada paso.'];
var rel28=[28,'El éxito era un criterio objetivo.','El éxito era un criterio subjetivo.'];
var rel29=[29,'No tengo siguiente objetivo.','Veo claro el siguiente objetivo.'];
var rel30=[30,'',''];
var relato =[rel1,rel2,rel3,rel4,rel5,rel6,rel7,rel8,rel9,rel10,rel11,rel12,rel13,rel14,rel15,rel16,rel17,rel18,rel19,rel20,rel21,rel21,rel22,rel23,rel24,rel25,rel26,rel27,rel28,rel29,rel30];
var anteriorPregunta=1;

function registraPregunta(respuesta){
	var resp=[];
	var textoResp=respuesta.id;
	
	do{
		var nuevaRespuesta=segunRespuesta(respuesta,contador,anteriorPregunta);
		if(nuevaRespuesta[3]=='CIERRE'||nuevaRespuesta[8]=='CIERRE'){
			//creaAlerta('Aquí acaba la escalera','Espero que te haya sido de ayuda');
		}
		else{

			if (nuevaRespuesta[4]!=""){
				creaAlerta(nuevaRespuesta[4],nuevaRespuesta[4]);
			}else if (nuevaRespuesta[9]!=""){
				creaAlerta(nuevaRespuesta[9],nuevaRespuesta[9]);
			}else if (nuevaRespuesta[5]!=""){
				creaAlerta(nuevaRespuesta[5],nuevaRespuesta[5]);
			}else if (nuevaRespuesta[10]!=""){
				creaAlerta(nuevaRespuesta[10],nuevaRespuesta[10]);
			}

			
		}
		textoPregunta.innerHTML=nuevaRespuesta[1];
		textoPregunta.style.backgroundColor
			textoNumeroPregunta.innerHTML=nuevaRespuesta[0];
			botonRespuesta1.innerHTML=nuevaRespuesta[2];
			botonRespuesta2.innerHTML=nuevaRespuesta[7];	
			textoResp=nuevaRespuesta[0];
				
			break;
	}while(nuevaRespuesta[3]!='CIERRE'||nuevaRespuesta[8]!='CIERRE');
	
}

function creaAlerta(title, content) {
	
	//title=content.split(":");
	//title=title[0];
	var nuevoElemento = document.createElement('div');
	nuevoElemento.textContent =title;
	nuevoElemento.style.backgroundColor = '#52CA55';
	document.getElementById('mapa').appendChild(nuevoElemento);

}


function segunRespuesta(respon,pregun,pregunAnt) {
	var resp=[];
	var textoResp=respon.id;
	var numeroPregunta=parseInt(document.getElementById('numeroPregunta').innerHTML.split(':')[0].trim());

	
	if(numeroPregunta==1||numeroPregunta==30){

		}
		else{
			var nuevoElemento = document.createElement('div');
	      	// Establecer el contenido del nuevo div como la respuesta
	      	if (textoResp==="respuesta1") {
	      		//nuevoElemento.textContent = registro[registro.length-1][1][2];
	      		nuevoElemento.textContent = relato[numeroPregunta-1][1];
	      	}
	      	else if (textoResp==="respuesta2") {
	      		//nuevoElemento.textContent = registro[registro.length-1][1][7];
	      		nuevoElemento.textContent = relato[numeroPregunta-1][2];
	      	}
	      	
	      	// Obtener el color de fondo del elemento 'txt1'
			var colorFondo = window.getComputedStyle(document.getElementById('txt1')).backgroundColor;
			// Establecer el color de fondo del nuevo elemento
			nuevoElemento.style.backgroundColor = colorFondo;
			nuevoElemento.style.color='white';
			nuevoElemento.style.borderRadius = '5px';
			document.getElementById('mapa').appendChild(nuevoElemento);
		}

	var resp=[];
	var resultado;
	var ques=respon.id;
	var colorFondo="";
	colorFondo=preguntas[pregun-2][12];
	switch(colorFondo){
		case ('RESULTADOS'):
		colorFondo='#0CA789';
		break;
		case ('COMPETENCIAL'):
		colorFondo='#414BB2';
		break;
		case ('CONTEXTO'):
		colorFondo='#9F8212';
		break;
		case ('MOTIVACIONAL'):
		colorFondo='#DA0063';
		break;
		case ('OPORTUNIDAD'):
		colorFondo='#2D9BF0';
		break;

		default:
	}
	textoPregunta.style.backgroundColor=colorFondo;
	if(pregun==1){
		textoPregunta.style.color='black';
	}else if(pregun!=1){
		textoPregunta.style.color='white';
	}
	switch(pregun){
		case 2:
			if(respon.id=="respuesta1"){
				resultado=pre30;
			}else if(respon.id=="respuesta2"){
				resultado=pre5;
				//colorFondo="#DA0063";

			}
			break;
		case 3:
			if(respon.id=="respuesta1"){
				resultado=pre6;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				resultado=pre5;
				//colorFondo="#DA0063";
			}
			break;
		case 4:
			if(respon.id=="respuesta1"){
				resultado=pre7;
				//colorFondo="#0CA789";
			}else if(respon.id=="respuesta2"){
				resultado=pre5;
				//colorFondo="#DA0063";
			}
			break;
		case 5:
			if(respon.id=="respuesta1"){
				resultado=pre8;
				//colorFondo="#9F8212";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 6:
			if(respon.id=="respuesta1"){
				resultado=pre9;
			}else if(respon.id=="respuesta2"){
				resultado=pre16;
				//colorFondo="#DA0063";
			}
			break;
		case 7:
			if(respon.id=="respuesta1"){
				resultado=pre6;
			}else if(respon.id=="respuesta2"){
				resultado=pre12;
				//colorFondo="#DA0063";
			}
			break;
		case 8:
			if(respon.id=="respuesta1"){
				resultado=pre13;
				//colorFondo="#2D9BF0";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][9]);
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 9:
			if(respon.id=="respuesta1"){
				resultado=pre17;
			}else if(respon.id=="respuesta2"){
				resultado=pre10;
				//colorFondo="#414BB2";
			}
			break;
		case 10:
			if(respon.id=="respuesta1"){
				resultado=pre11;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				resultado='CIERRE';
			}break;
		case 11:
			if(respon.id=="respuesta1"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				alert(preguntas[pregun-1][11]);
				resultado='CIERRE';
			}break;
		case 12:
			if(respon.id=="respuesta1"){
				resultado=pre8;
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}break;
		case 13:
			if(respon.id=="respuesta1"){
				resultado=pre17;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado=pre14;
				//colorFondo="#2D9BF0";
			}break;
		case 14:
			if(respon.id=="respuesta1"){
				resultado=pre15;
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}break;
		case 15:
			if(respon.id=="respuesta1"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 16:
			if(respon.id=="respuesta1"){
				resultado=pre29;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][9]);
				resultado='CIERRE';
			}
			break;
		case 17:
			if(respon.id=="respuesta1"){
				resultado=pre18;
				//colorFondo="#0CA789";
			}else if(respon.id=="respuesta2"){
				resultado=pre15;
				//colorFondo="#DA0063";
			}
			break;
		case 18:
			if(respon.id=="respuesta1"){
				resultado=pre19;
				//colorFondo="#2D9BF0";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 19:
			if(respon.id=="respuesta1"){
				resultado=pre20;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 20:
			if(respon.id=="respuesta1"){
				resultado=pre21;
				//colorFondo="#9F8212";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 21:
			if(respon.id=="respuesta1"){
				resultado=pre22;
			}else if(respon.id=="respuesta2"){
				resultado=pre23;
				//colorFondo="#0CA789";
			}
			break;
		case 22:
			if(respon.id=="respuesta1"){
				resultado=pre27;
				//colorFondo="#0CA789";
			}else if(respon.id=="respuesta2"){
				resultado=pre28;
				//colorFondo="#2D9BF0";
			}
			break;
		case 23:
			if(respon.id=="respuesta1"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				alert(preguntas[pregun-1][11]);
				resultado='CIERRE';
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 24:
			if(respon.id=="respuesta1"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				alert(preguntas[pregun-1][11]);
				resultado='CIERRE';
			}
			break;
		case 25:
			if(respon.id=="respuesta1"){
				resultado=pre24;
				//colorFondo="#414BB2";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}

		case 26:
			if(respon.id=="respuesta1"){
				resultado=pre25;
				//colorFondo="#DA0063";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 27:
			if(respon.id=="respuesta1"){
				resultado=pre26;
				//colorFondo="#2D9BF0";
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 28:
			if(respon.id=="respuesta1"){
				resultado=pre27;
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 29:
			if(respon.id=="respuesta1"){
				alert(preguntas[pregun-1][5]);
				resultado='CIERRE';
			}else if(respon.id=="respuesta2"){
				alert(preguntas[pregun-1][10]);
				creaAlerta(preguntas[pregun-1][10],'');
				resultado='CIERRE';
			}
			break;
		case 30:
			if(respon.id=="respuesta1"){
				resultado=pre4;
				//colorFondo="#0CA789";
			}else if(respon.id=="respuesta2"){
				resultado=pre3;
				//colorFondo="#414BB2";
			}
			break;
		default:
	}
	resp.push(pregun,resultado);
	registro.push(resp);
	anteriorPregunta=contador;
	contador=resultado[0];
	return resultado;
}
	


