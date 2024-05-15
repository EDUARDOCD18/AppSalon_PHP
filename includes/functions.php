<?php

declare(strict_types=1);
function obtenerServicios()
{
    try {
        // Credenciales
        require 'database.php';

        // SQL
        $sql = "SELECT * FROM servicios;";

        // Realizar consulta
        $query = mysqli_query($db, $sql);

        return $query;

        // Resultados 
        /* echo "<pre>";
        var_dump(mysqli_fetch_all($query));
        echo "</pre>"; */


        // Cerrar BD
        mysqli_close($db);

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerServicios();
