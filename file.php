<?php

/* Navegaor http://localhost/LearningPHP/prueba.php?nombre=RichardS -> Como obtener la variable*/
//$nombre = $_GET['nombre'];
//echo $nombre;

/** Llamar a un archivo */

$archivo = 'texto.txt';

if (isset($_GET['archivo'])) { //isset es validar si existe una variable
    $archivo = $_GET['archivo'];
    if ($_GET['accion'] == 'Guardar') {
        file_put_contents($archivo, $_GET['texto']); //-> Modifico donde va el texto por un Get, así se modifica desde una solicitud
        /**La función file_put_contents () en PHP es una función incorporada que se usa para escribir una cadena en un archivo. 
         * La función file_put_contents () busca el archivo en el que el usuario quiere escribir y si el archivo no existe, crea un nuevo archivo. */
        //put_contents muestra la variable en esté textaerea
    }
}

$texto = file_get_contents($archivo);
//echo $texto;
//Modificamos el texto

?>

<h1> Editar Archivo de Texto </h1>

<form action="">
    <label for="">Nombre del Archivo: </label>
    <input type="text" name="archivo" value="<?= $archivo ?>"> <br>
    <textarea name="texto"><?= $texto ?></textarea>
    <br />
    <input type="submit" value="Guardar" name="accion">
    <input type="submit" value="Cargar" name="accion">
</form>

<style>
    textarea {margin: 0px; height: 489px; width: 895px;
    }
</style>