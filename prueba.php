<?php

/* Navegaor http://localhost/LearningPHP/prueba.php?nombre=RichardS -> Como obtener la variable*/
//$nombre = $_GET['nombre'];
//echo $nombre;

/** Llamar a un archivo */


$archivo = 'texto.txt';
file_put_contents('texto.txt', $_GET['texto']); //-> Modifico donde va el texto por un Get, así se modifica desde una solicitud
//put_contents muestra la variable en esté textaerea
$texto = file_get_contents($archivo);
//echo $texto;

//Modificamos el texto

?>

<h1> Editar Archivo de Texto </h1>

<form action="">
    <textarea name="texto" id="" cols="30" rows="10">
<?= $texto ?>
</textarea>
    <br />
    <input type="submit" value="Guardar">
</form>