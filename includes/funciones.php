<?php 

function obtenerServicios() : array{
    try {
        // Importar una conexión
        require 'database.php';
        
        //Escribir el código SQL
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql);

        //Arreglo vacío
        $servicios = [];
        $i = 0;

        //Obtener los resultados
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        // echo "<pre>";
        // var_dump($servicios);
        // echo "</pre>";
        return $servicios;

    } catch (\Throwable $e) {
        var_dump($e);
    }
}

obtenerServicios();