<?php
class Persona{

    //*Atributos *//
    public $nombre;
    public $apellido;


    //*Constructor *//
    public function __construct()
    {
        $this->nombre = "Hola";
    }


    //*Metodos *//
    public function saludar($nombre)
    {
        echo "Hola, como estas del virus? ".$nombre;
    }

}










?>