<?php

class coche {

 // Definición de Propiedades privadas:
    
    private $marca;
    private $modelo;
    private $año;
    private $color;

 // Constructor para inicializar valores de las propiedades:

    public function __construct($marca, $modelo, $año, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->color = $color;
    }

// Métodos públicos Get y Set:

    public function getMarca() {
        return $this->marca;
    }
    
    public function setMarca($marca) {
        $this->marca =$marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo=$modelo;
    }

    public function getAño() {
        return $this->año;
    }
    
    public function setAño($año) {
        $this->año=$año;
    }

    public function getcolor() {
        return $this->color;
    }
    
    public function setcolor($color) {
        $this->color=$color;
    }

// Método público "Imprimir" para mostrar todas las propiedades del Objeto:

    public function Imprimir () {
        echo "Marca: $this->marca <br>";
        echo "Modelo: $this->modelo <br>";
        echo "Año: $this->año <br>";
        echo "Color: $this->color <br>";
    }
}

// Creación de instancias:

    $coche_1 = new coche('Toyota','Corolla','2015','Rojo');
    $coche_2 = new coche('Ford','Fiesta','2018','Azul');


// Cambiar color del coche "Toyota" a negro:

    $coche_1->setcolor('Negro');
    $coche_1->Imprimir();

?>