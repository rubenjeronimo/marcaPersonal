<?php
//variables de conexion a bbdd
$usuario = "equipo6085";
$contrasena = "N1SSpII4";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "testtnl";



// Comprobar la conexion   
$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos"); 

// seleccion BBDD
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

// Recibimos por POST los datos procedentes del formulario   
$listaPerfil = $_POST["arrayPerfil"];

$nombre = $listaPerfil[0];   
$email = $listaPerfil[1];  
$empresa = $listaPerfil[2];   

$experiencia=$listaPerfil[11]+$listaPerfil[15]+$listaPerfil[23]+$listaPerfil[27]+$listaPerfil[31]+$listaPerfil[35]+$listaPerfil[43]+$listaPerfil[47]+$listaPerfil[51]+$listaPerfil[59]+$listaPerfil[63]+$listaPerfil[71];
$ideacion=$listaPerfil[12]+$listaPerfil[16]+$listaPerfil[24]+$listaPerfil[28]+$listaPerfil[32]+$listaPerfil[36]+$listaPerfil[44]+$listaPerfil[48]+$listaPerfil[52]+$listaPerfil[60]+$listaPerfil[64]+$listaPerfil[72];
$pensamiento=$listaPerfil[13]+$listaPerfil[17]+$listaPerfil[25]+$listaPerfil[29]+$listaPerfil[33]+$listaPerfil[37]+$listaPerfil[45]+$listaPerfil[49]+$listaPerfil[53]+$listaPerfil[61]+$listaPerfil[65]+$listaPerfil[73];
$evaluacion=$listaPerfil[14]+$listaPerfil[18]+$listaPerfil[26]+$listaPerfil[30]+$listaPerfil[34]+$listaPerfil[38]+$listaPerfil[46]+$listaPerfil[50]+$listaPerfil[54]+$listaPerfil[62]+$listaPerfil[66]+$listaPerfil[74];

$generador=($experiencia*$ideacion)/2;
$conceptualizador=($ideacion*$pensamiento)/2;
$optimizador=($pensamiento*$evaluacion)/2; 
$implementador=($experiencia*$evaluacion)/2;
$sumaPerfiles=$generador+$conceptualizador+$optimizador+$implementador;
$generador=($generador/$sumaPerfiles)*100;
$conceptualizador=($conceptualizador/$sumaPerfiles)*100;
$optimizador=($optimizador/$sumaPerfiles)*100;
$implementador=($implementador/$sumaPerfiles)*100;

$perfilCalculado = array($generador,$conceptualizador,$optimizador,$implementador);
$maxPerfil=max($perfilCalculado);
$textoPerfil;
$textoComparativa;
for($i=0;$i<count($perfilCalculado);$i++){
	if($perfilCalculado[$i]==$maxPerfil){
		if ($i==0) {
			$perfil="generador";
			//$textoPerfil="";
			//$textoComparativa="companrando generador";
		}elseif ($i==1) {
			$perfil="conceptualizador";
			//$textoPerfil="Como Conceptualizador, formas parte del segundo grupo más pequeño de gente que realiza el perfil de Innovación. Nuestros datos indican que los conceptualizadores a menudo están trabajando en roles estratégicos dentro de las empresas o responsabilidades donde la comprensión forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Implementador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los implementadores, ya que tenéis estilos opuestos.<br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas<br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando";
			//$textoComparativa="<p>Como Conceptualizador, formas parte del segundo grupo más pequeño de gente que realiza el perfil de Innovación. Nuestros datos indican que los conceptualizadores a menudo están trabajando en roles estratégicos dentro de las empresas o responsabilidades donde la comprensión forma parte de su trabajo.<br>Todos somos una mezcla de estilos y el perfil de innovación mide el estado de pensamiento al que tiende una persona en lugar de analizar un rasgo de personalidad.<br>El estilo opuesto es el Implementador. Los conflictos potenciales que puedas tener en un entorno de trabajo o de equipo, pueden darse con los implementadores, ya que tenéis estilos opuestos.<br>Los Conceptualizadores suelen percibir a los Implementadores como personas:<br>• Poco confiables, ya que son poco trabajadores<br>• Impulsivas, no parece que piensen antes de actuar<br>• Testarudas<br><br>Los implementadores suelen ver a los Conceptualizadores como personas que:<br>• No se les debe pagar<br>• Nunca se los ve hacer nada<br>• Siempre los ves pensando<br></p>";
		}elseif ($i==2) {
			$perfil="optimizador";
			//$textoPerfil="companrando optimizador";
			//$textoComparativa="";
		}elseif ($i==3) {
			$perfil="implementador";
			//$textoPerfil="";
			//$textoComparativa="companrando implementador";
		}else{
		}
	}
}

$sql="INSERT INTO `innoRaw`(`nombre`, `mail`, `empresa`, `gen`, `con`, `opt`, `imp`, `per`, `experiencia`, `ideacion`, `pensamiento`, `evaluacion`)VALUES ('$nombre','$email','$empresa','$generador','$conceptualizador','$optimizador','$implementador','$perfil','$experiencia','$ideacion','$pensamiento','$evaluacion')";

$resultado=mysqli_query($conexion,$sql);


$ficheroNuevo=copy("innoRes.php", "resultadosTestInnovacion/".$nombre."_".$empresa.".php");
$ficheroNuevo=fopen($ficheroNuevo);
fclose($ficheroNuevo);

$nombreFichero="https://www.equiposqueaprenden.es/resultadosTestInnovacion/".$nombre."_".$empresa.".php";

mail("hola@equiposqueaprenden.es","Nuevo archivo de innovación",$nombreFichero);



//cerrar la conexión
mysqli_close( $conexion );
?>