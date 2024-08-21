<?php

class Libro {

    private $titulo;
    private $autor;
    private $añoPublicacion;
    private $categorias;

    // Constructor para inicializar los valores
    
    public function __construct($titulo, $autor, $añoPublicacion, $categorias = []) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->añoPublicacion = (int)$añoPublicacion;
        $this->categorias = is_array($categorias) ? $categorias : [$categorias];
    }

    // Métodos Get y Set 
    
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    
    public function getAñoPublicacion() {
        return $this->añoPublicacion;
    }
    
    public function setAñoPublicacion($añoPublicacion) {
        $this->añoPublicacion = (int)$añoPublicacion;
    }

    public function getCategorias() {
        return $this->categorias;
    }
    
    public function setCategorias($categorias) {
        $this->categorias = is_array($categorias) ? $categorias : [$categorias];
    }

    // Método público para imprimir los datos de forma legible
    
    public function Imprimir() {
        echo "Título: $this->titulo";
        echo "Autor: $this->autor";
        echo "Año de Publicación: $this->añoPublicacion";
        echo "Categorías: " . implode(", ", $this->categorias);
    }

    // Método estático para calcular la cantidad de años
    
    public static function calcularEdad($añoPublicacion) {
        $añoActual = date("Y");
        return $añoActual - (int)$añoPublicacion;
    }

    // Método para agregar una nueva categoría al array de categorías
    public function agregarCategoria($nuevaCategoria) {
        $this->categorias[] = $nuevaCategoria;
    }
}

// Creación de instancias

$libro_1 = new Libro('100 años de soledad', 'Gabriel García Márquez', 1967, ['ficción literaria']);
$libro_2 = new Libro('Así habló Zaratustra', 'Friedrich Nietzsche', 1883, ['ficción filosófica']);

// Agregar una nueva categoría

$Nueva_Categoria = 'Novela ';
$libro_2->agregarCategoria($Nueva_Categoria);

// Imprimir los datos

$libro_2->Imprimir();

// Llamada a la función que calcula los años desde que se publicó

$añoDePublicacion = 1967;
$edadDelLibro = Libro::calcularEdad($añoDePublicacion);
echo "El libro tiene $edadDelLibro años.";

?>