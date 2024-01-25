<?php
//var_dump($_SERVER); // Agrega el punto y coma aquí
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Verificar que la solicitud sea GET a este script
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode(["message" => "Acceso no autorizado"]);
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Access-Control-Max-Age: 86400");
    exit;
}

$carpeta = 'blog';
$archivos = [];

if (is_dir($carpeta)) {
  if ($handle = opendir($carpeta)) {
    while (false !== ($archivo = readdir($handle))) {
      if ($archivo !== '.' && $archivo !== '..') {
        $rutaArchivo = $carpeta . '/' . $archivo;

        // Omitir archivos de la carpeta "imagenes"
        if ($archivo === 'imagenes' || is_dir($rutaArchivo)) {
          continue;
        }

        $fechaCreacion = date("d M, Y", filemtime($rutaArchivo));
        $contenido = file_get_contents($rutaArchivo);

        // Extraer datos de la entrada del blog
        $titulo = 'Título no encontrado';
        $autor = 'Autor no encontrado';
        $categoria = 'Categoría no encontrada';
        $imagen = '';

        // Buscar título utilizando expresiones regulares
        preg_match('/<h1 class="display-4 text-white animated zoomIn" id="tituloPost">(.*?)<\/h1>/', $contenido, $tituloMatch);
        $titulo = isset($tituloMatch[1]) ? $tituloMatch[1] : 'Título no encontrado';

        // Buscar descripción utilizando expresiones regulares
        preg_match('/<p id="descripcionPost">(.*?)<\/p>/', $contenido, $descripcionMatch);
        $descripcion = isset($descripcionMatch[1]) ? $descripcionMatch[1] : 'Descripción no encontrada';

        if (strlen($descripcion) > 197) {
          $descripcion = substr($descripcion, 0, 197) . "...";
        }

        // Buscar categoría utilizando expresiones regulares
        preg_match('/<category id="categoriaPost">(.*?)<\/category>/', $contenido, $categoriaMatch);
        $categoria = isset($categoriaMatch[1]) ? $categoriaMatch[1] : 'Categoría no encontrada';

        // Buscar autor utilizando expresiones regulares
        preg_match('/<author id="autorPost">(.*?)<\/author>/', $contenido, $autorMatch);
        if (isset($autorMatch[1])) {
          $autor = $autorMatch[1];
        }

        // Buscar imagen utilizando expresiones regulares
        preg_match('/<img id="imagenPost" src="(.*?)"/', $contenido, $imagenMatch);
        $imagen = isset($imagenMatch[1]) ? $imagenMatch[1] : '';

        $archivos[] = array(
          "nombre" => $archivo,
          "ruta" => $rutaArchivo,
          "fecha" => $fechaCreacion,
          "titulo" => $titulo,
          "categoria" => $categoria,
          "autor" => $autor,
          "descripcion" => $descripcion,
          "imagen" => $imagen
        );
      }
    }
    closedir($handle);
  }
}

echo json_encode($archivos);
?>
