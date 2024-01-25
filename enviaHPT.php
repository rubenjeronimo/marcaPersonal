<?php   

//print_r($_POST["arrayPerfil"]);

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
$listaPerfil = $_POST["arrayPer"];

$nombre = $listaPerfil[0];  
$email = $listaPerfil[1];    
$empresa = $listaPerfil[2];  
$P1V=$listaPerfil[3];
$P1T=$listaPerfil[4];
$P2V=$listaPerfil[5]; 
$P2T=$listaPerfil[6]; 
$P3V=$listaPerfil[7]; 
$P3T=$listaPerfil[8]; 
$P4V=$listaPerfil[9]; 
$P4T=$listaPerfil[10]; 
$P5V=$listaPerfil[11];
$P5T=$listaPerfil[12];
$P6V=$listaPerfil[13];
$P6T=$listaPerfil[14]; 
$P7V=$listaPerfil[15];
$P7T=$listaPerfil[16];
$P8V=$listaPerfil[17];
$P8T=$listaPerfil[18];
$P9V=$listaPerfil[19];
$P9T=$listaPerfil[20];
$P10V=$listaPerfil[21];
$P10T=$listaPerfil[22];
$P11V=$listaPerfil[23];
$P11T=$listaPerfil[24]; 
$P12V=$listaPerfil[25];
$P12T=$listaPerfil[26];
$P13V=$listaPerfil[27];
$P13T=$listaPerfil[28];
$P14V=$listaPerfil[29];
$P14T=$listaPerfil[30];
$P15V=$listaPerfil[31];
$P15T=$listaPerfil[32];
$P16V=$listaPerfil[33];
$P16T=$listaPerfil[34];
$P17V=$listaPerfil[35];
$P17T=$listaPerfil[36];
$P18V=$listaPerfil[37];
$P18T=$listaPerfil[38];
$P19V=$listaPerfil[39];
$P19T=$listaPerfil[40];
$P20V=$listaPerfil[41];
$P20T=$listaPerfil[42];
 

$sql="INSERT INTO `HPTRaw`(`nombre`, `mail`, `empresa`, `P1V`,`P1T`,`P2V`,`P2T`,`P3V`,`P3T`,`P4V`,`P4T`,`P5V`,`P5T`,`P6V`,`P6T`,`P7V`,`P7T`,`P8V`,`P8T`,`P9V`,`P9T`,`P10V`,`P10T`,`P11V`,`P11T`,`P12V`,`P12T`,`P13V`,`P13T`,`P14V`,`P14T`,`P15V`,`P15T`,`P16V`,`P16T`,`P17V`,`P17T`,`P18V`,`P18T`,`P19V`,`P19T`,`P20V`,`P20T`) VALUES ('$nombre','$email','$empresa','$P1V','$P1T','$P2V','$P2T','$P3V','$P3T','$P4V','$P4T','$P5V','$P5T','$P6V','$P6T','$P7V','$P7T','$P8V','$P8T','$P9V','$P9T','$P10V','$P10T','$P11V','$P11T','$P12V','$P12T','$P13V','$P13T','$P14V','$P14T','$P15V','$P15T','$P16V','$P16T','$P17V','$P17T','$P18V','$P18T','$P19V','$P19T','$P20V','$P20T')";
$resultado=mysqli_query($conexion,$sql);

$nombreFichero="https://www.equiposqueaprenden.es/ResultadosTestEquipo/".$nombre."_".$empresa.".php";
mail("hola@equiposqueaprenden.es","Nuevo archivo de equipo",$nombreFichero);

//cerrar la conexión
mysqli_close( $conexion );
?>



