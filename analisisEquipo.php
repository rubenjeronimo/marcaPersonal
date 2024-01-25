<?php
    //require_once("conectar.php");
$conn = new mysqli('localhost', 'equipo6085', 'N1SSpII4','testtnl') or die ('Cannot connect to db'); 
$result = $conn->query("select empresa from HPTRaw");
?>        


<!doctype html>
<html class="no-js" lang="zxx">
  <head>

  </head>
  <body>
    <select name="empresas">
      <?php 

        while ($row = $result->fetch_assoc()) {
          unset($empresa);
                  $empresa = $row['empresa'];
                  echo '<option value="'.$empresa.'">'.$empresa.'</option>';
            
        }

      ?>
</select>
<input type="submit" name="" value="Consultar empresa" >
  </body>
</html>