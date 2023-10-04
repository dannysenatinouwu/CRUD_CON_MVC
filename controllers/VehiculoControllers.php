<?php
require_once "../models/Vehiculos_model.php";

//listar nuestra tabla de vehiculs

$vehiculosModel = new Vehiculos_model();
$data["vehiculos"] = $vehiculosModel->get_vehiculos();
include '../views/vehiculos/vehiculos.php';

