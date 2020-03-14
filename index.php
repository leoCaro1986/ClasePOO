<?php
include('Persona.php');

//*creacion de un objeto o instancia de una clase*//
$esperanzaGomez = new Persona();

echo($esperanzaGomez->nombre);

$esperanzaGomez ->nombre="Esperancita";
echo "<br>";
echo($esperanzaGomez->nombre);

echo "<br>";
$nombres = array("juan","Ana");
echo$nombres[0];

echo "<br>";
$esperanzaGomez ->saludar($nombres[0]);








?>