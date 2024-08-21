<?php

// Primera clase llamada: "Estudiantes"

class Estudiantes {
    
    private $nombre;
    private $apellido;
    private $edad;
    private $cursos;
    
// Constructor para inicializar los valores
    
public function __construct($nombre, $apellido, $edad, $cursos = []) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->cursos = is_array($cursos) ? $cursos : [$cursos];
    
    }
    
// Métodos para la clase "Estudiante"

public function getNombre() {
        return $this->nombre;
    }
    
public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

public function getApellido() {
        return $this->apellido;
    }
    
public function setApellido($apellido) {
        $this->apellido= $apellido;
    }

public function getEdad() {
        return $this->edad;
    }
    
public function setEdad($edad) {
        $this->edad= $edad;
    }

// Métodos de Agregación y Eliminado para los cursos

public function setCursos($cursos) {
        $this->cursos = is_array($cursos) ? $cursos : [$cursos];
    }
    
public function agregarCurso($nuevo_Curso) {
        $this->cursos[] = $nuevo_Curso;
    }
    
public function eliminarCurso($eliminar_curso) {
    
    $clave = array_search($eliminar_curso, $this->cursos);
     
    if ($clave !== false) {
        unset($this->cursos[$clave]);
    } else {
        echo "El curso '$eliminar_curso' no se encontró en la lista.";
        }
    }

// Método público para imprimir los datos de forma legible
    
    public function Imprimir() {
        echo "Nombre: $this->nombre";
        echo "Apellido: $this->apellido";
        echo "Edad: $this->edad";
        echo "Cursos: " . implode(", ", $this->cursos);
    }

}

class Escuela {
    
    private $estudiantes;
    
    public function __construct($estudiantes = []) {
    $this->estudiantes = is_array($estudiantes) ? $estudiantes : [$estudiantes];
    
    }
    
// Métodos de Agregación y Listado para la clase "Escuela"
    
    public function setEstudiante($estudiantes) {
        $this->estudiantes = is_array($estudiantes) ? $estudiantes : [$estudiantes];
    }
    
    public function agregarEstudiante($nuevo_Estudiante) {
        $this->estudiantes[] = $nuevo_Estudiante;
    }
    
    public function ListarEstudiantes() {
        echo "Los Estudiantes de la escuela son: " . implode(", ", $this->estudiantes);;
    }
    
}


// Creación de Instancias para la clase "Estudiantes"

$Estudiante_1 = new Estudiantes('Samuel ,', ' Hernández ,', ' 21 ,', ['1 ASIR']);
$Estudiante_2 = new Estudiantes('Manolo ,', ' Hernández ,', ' 22 ,', ['2 ASIR']);

// Creación de Instancia para la clase "Escuela"

$Escuela = new Escuela(['Javier', 'Felipe', 'Alejandro','Samuel', 'Manolo']);

// Agregar un nuevo curso

$Agregar_Curso = '2 ASIR';
$Estudiante_1->agregarCurso($Agregar_Curso);

// Eliminar el curso agregado

$Eliminar_Curso = '1 ASIR';
$Estudiante_1->eliminarCurso($Eliminar_Curso);

$Estudiante_1->Imprimir();
$Estudiante_2->Imprimir();

$Escuela->ListarEstudiantes();


?>