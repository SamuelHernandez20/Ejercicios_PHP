<?php

class persona {

 // Definición de Propiedades privadas:
    
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;

 // Constructor para inicializar valores de las propiedades:

    public function __construct($nombre, $apellido1, $apellido2, $edad) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->edad = $edad;
    }

     
// Método para obtener el nombre:
    
    public function getNombre() {
        return $this->nombre;
    }
    
// Método para establecer el nombre:
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

// Métodos para obtener y establecer los apellidos:
    
    public function getApellido1() {
        return $this->apellido1;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }
    
    public function getApellido2() {
        return $this->apellido2;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    
// Método para obtener la edad:
    
    public function getEdad() {
        return $this->edad;
    }
    
// Método para establecer la edad:

     public function setEdad($edad) {
        $this->edad = $edad;
    }
    
// Método público "Imprimir" para mostrar todas las propiedades del Objeto:

    public function Imprimir () {
        echo "Nombre: $this->nombre <br>";
        echo "Apellido1: $this->apellido1 <br>";
        echo "Apellido2: $this->apellido2 <br>";
        echo "Edad: $this->edad <br>";
    }
 
}

// Creación de 2 instancias:

    $persona1 = new persona('Samuel','Hernández','Santisteban',21);
    $persona2 = new persona('Manolo','Jimenez','García',25);

// Acceder a los datos de las instancias:

    echo "Datos de Persona 1:<br>";
    $persona1->Imprimir();

    echo "Datos de Persona 2:<br>";
    $persona2->Imprimir();

?>