<?php

include_once("../configuraciones/conexionBD.php");
include_once("../utilidades/funciones.php");

class Libro {
    private $id;
    private $titulo;
    private $autor;
    private $genero;
    private $precio;
    private $conexion;

    function __construct(){
        global $nomHost, $puerto, $usuario, $pss, $nomBD;
        $this -> conexion = new mysqli($nomHost, $usuario, $pss, $nomBD, $puerto);
    }

    function __destruct(){
        $this -> conexion -> close();
    }

    function asignarValores($id, $titulo, $autor, $genero, $precio){
        $this -> id = $id;
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> genero = $genero;
        $this -> precio = $precio;
    }

    function obtenerLibros(){
        $sentencia = "SELECT * FROM libros";
        $resultado = $this -> conexion -> query($sentencia);
        $arr = [];
        if ($resultado -> num_rows > 0 ){
            while ($fila = $resultado -> fetch_assoc()) {
                $arr[] = $fila;
            }
        }
        return $arr;
    }
    
    function insertarLibro() {
        try {
            $sentencia = "INSERT INTO `libros`(`titulo`, `autor`, `genero`, `precio`) VALUES ('{$this->titulo}','{$this->autor}','{$this->genero}', '{$this->precio}')";
            $resultado = $this -> conexion -> query($sentencia);
            return $resultado;
        } catch (Exception $err) {
            generateLog($err -> getMessage());
            return false;
        }
    }
}
?>