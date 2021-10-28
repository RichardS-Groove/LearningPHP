<?php

class Auto { // class Auto
    private $marca;// property marca
    private $precio;
    private $modelo;


    function __construct($marca, $precio, $modelo) { // constructor
        $this->marca = $marca;
        $this->precio = $precio;
        $this->modelo = $modelo;
    }

    function __get($marca) { // getter
        return $this->$marca;
    }

    function __set($marca) { // setter
        $this->$marca = $marca;
    }

}

?>
