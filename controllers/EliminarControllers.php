<?php

require_once "../models/Vehiculos_model.php"; // Asegúrate de que la ruta sea correcta


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    // Realizar la eliminación del vehículo utilizando tu modelo (Vehiculos_model)
    $vehiculosModel = new Vehiculos_model();
    $vehiculosModel->eliminar($id);

    // Redirigir de nuevo a la página principal después de eliminar
    header("Location: ../views/index_mvc.php"); // Ajusta la ruta según tu estructura de archivos
    exit;
}
