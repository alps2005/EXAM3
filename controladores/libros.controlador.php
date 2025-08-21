<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once("../utilidades/funciones.php");
include_once("../modelos/libros.clase.php");

class LibroControlador {

    public $objLibro;

    function __construct(){
        $this -> objLibro = new Libro();
    }

    function obtenerLibros(){
        header("content-type:application/json");
        echo json_encode($this->objLibro->obtenerLibros());
    }

    function insertarLibro($titulo, $autor, $genero, $precio){
        $this -> objLibro -> asignarValores("", $titulo, $autor, $genero, $precio);
        $this -> objLibro -> insertarLibro();
    }
}

$objLibroControlador = new LibroControlador();
switch ($_POST['opcion']) {
    case 'obtenerLibros':
        $objLibroControlador -> obtenerLibros();
        break;
    case 'insertarLibro':
        $objLibroControlador -> insertarLibro($_POST["titulo"], $_POST["autor"], $_POST["genero"], $_POST["precio"]);
        break;
    default:
        break;
}
?>