<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Datos recibidos</h1>


<?php

 $nombre  = $_POST['nombre'];
 echo "Nombre: $nombre";
 $apellido  = $_POST['apellido'];
 echo "Apellido: $apellido"; 
 $dni = $_POST['dni'];
 echo "DNI: $dni"; 
 $sexo  = $_POST['sexo'];
 echo "SEXO: $sexo";
 $mail = $_POST['mail'];
 if (str_contains('mail', '@')){
     echo "El Email Es Valido : $mail";
 }else{
     echo "El Mail Es Invalido : $mail";
 }
?>

</body>
</html>