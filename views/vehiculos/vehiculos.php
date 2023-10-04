<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehiculos</title>
    <link rel="icon" href="../assets\img\Volvo-Iron-Mark-Black.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ityped/1.7.1/ityped.min.js"></script>

</head>

<body>
    <div class="context">
        <h1><span class="ityped"></span></h1>
        <script src="https://unpkg.com/ityped@1.0.2"></script>
        <script type="text/JavaScript">
            window.ityped.init(document.querySelector('.ityped'),{
                strings :['Bienvenidos','A Volvo' ,'El futuro de la carroseria'],
                loop : true
            })
    </script>
        <br>
        <div class="container">
            <div>
                <div class="col-lg-9">

                    <form method="POST" action="../controllers/ActualizarController.php" id="formularioActualizacion">
                        <input type="hidden" name="vehiculoId" id="vehiculoId">
                        <input type="hidden" name="accion" id="accion">
                        <div class="form-group">
                            <label for="placa">Placa:</label>
                            <input type="text" class="form-control" id="placa" name="placa"
                                placeholder="Ingrese la placa del vehículo">
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="marca"
                                placeholder="Ingrese la marca del vehículo">
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo:</label>
                            <input type="text" class="form-control" id="modelo" name="modelo"
                                placeholder="Ingrese el modelo del vehículo">
                        </div>
                        <div class="form-group">
                            <label for="anio">Año:</label>
                            <input type="text" class="form-control" id="anio" name="anio"
                                placeholder="Ingrese el año del vehículo">
                        </div>
                        <div class="form-group">
                            <label for="color">Color:</label>
                            <input type="text" class="form-control" id="color" name="color"
                                placeholder="Ingrese el color del vehículo">
                        </div>
                        <button type="button" class="btn btn-primary"
                            onclick="cambiarAccion('agregar')">Agregar</button>
                        <button type="button" class="btn btn-success"
                            onclick="cambiarAccion('actualizar')">Actualizar</button>
                    </form>
                </div>
            </div>

            <div>
                <br>
                <br>
                <div class="table-responsive">
                    <table border="1" width="100%" class="table table-rounded">
                        <thead>
                            <tr class="table-primary">
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Año</th>
                                <th>Color</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Código PHP para cargar datos de vehículos desde la base de datos
                            foreach ($data["vehiculos"] as $dato) {
                                echo "<tr class='table table-bordered'>";
                                echo "<td>" . $dato["placa"] . "</td>";
                                echo "<td>" . $dato["marca"] . "</td>";
                                echo "<td>" . $dato["modelo"] . "</td>";
                                echo "<td>" . $dato["anio"] . "</td>";
                                echo "<td>" . $dato["color"] . "</td>";
                                echo "<td><button class='btn btn-warning' onclick='rellenarFormulario(" . json_encode($dato) . ")'>Actualizar</button></td>";
                                echo "<td> 
                                    <form method='POST' action='../controllers/EliminarControllers.php'>
                                        <input type='hidden' name='id' value='{$dato['id']}'>
                                        <button type='submit' class='btn btn-danger' onclick=\"return confirm('¿Estás seguro de eliminar este vehículo?')\">Eliminar</button>
                                    </form>  
                                  </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="http://localhost/mvc-cicloV/assets/CRUD_CON_MVC.rar" download>Descargar archivo ZIP CRUD con MVC</a>

                    

                </div>
            </div>
        </div>
    </div>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script>
        function rellenarFormulario(datos) {
            document.getElementById("vehiculoId").value = datos.id;
            document.getElementById("placa").value = datos.placa;
            document.getElementById("marca").value = datos.marca;
            document.getElementById("modelo").value = datos.modelo;
            document.getElementById("anio").value = datos.anio;
            document.getElementById("color").value = datos.color;
        }

        function cambiarAccion(accion) {
            document.getElementById("accion").value = accion;
            document.getElementById("formularioActualizacion").submit();
        }
    </script>
</body>

</html>