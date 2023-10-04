<?php
require_once "config.php";
class Conectar
{
    public $conexion;

    public static function conexion(){
        $conexion = new mysqli(DB_SERVIDOR,DB_USER,"",DB_NAME);

        if(!$conexion){
            die("Conexión fallida ". mysqli_connect_error());
        }

        return $conexion;
    }

}