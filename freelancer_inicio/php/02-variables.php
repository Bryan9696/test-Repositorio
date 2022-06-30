<?php include 'includes/header.php';

$nombre="Juan";

//solo imprime un valor
echo $nombre;

//imprime mas informacion sobre una variable como el tipo de variable que es
var_dump($nombre);

//esta propiedad que crea un identificador constante 
define('constante',"Este es el valor de la constante");
//guthub

echo constante;
include 'includes/footer.php';