<?php
require_once "../models/Vehiculos_model.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["accion"])) {
    $accion = $_POST["accion"];

    if ($accion === "actualizar") {
        // Recupera datos
        $vehiculoId = $_POST["vehiculoId"];
        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $anio = $_POST["anio"];
        $color = $_POST["color"];

        // Crea una instancia del modelo de vehículos y actualiza el registro
        $vehiculosModel = new Vehiculos_model();
        $vehiculosModel->modificar($vehiculoId, $placa, $marca, $modelo, $anio, $color);

        // Redirige
        header("Location: ../views/index_mvc.php");
        exit;
    }elseif ($accion === "agregar") {
        // Recupera datos 
        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $anio = $_POST["anio"];
        $color = $_POST["color"];
    
        // Crea una instancia del modelo de vehículos y agrega un nuevo registro
        $vehiculosModel = new Vehiculos_model();
        $vehiculosModel->insertar($placa, $marca, $modelo, $anio, $color);
    
        // Redirige
        header("Location: ../views/index_mvc.php");
        exit;
    }
} else {
    echo "Solicitud no válida.";
}
?>
