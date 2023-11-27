<?php
include("config/db_connect.php");
$cleanPost = $_POST;

if (!empty($conn)) {
    foreach($cleanPost as $param => $value) {
        if (empty($value)) {
            unset($cleanPost[$param]);
        }
        if (!empty($cleanPost)) {
            $cleanPost[$param] = mysqli_real_escape_string($conn, $value);
        }
    }
    
    if (!empty($cleanPost)) {
        # Storing the values we received from the user in the Db
        $valuesToInsert = join("','", array_values($cleanPost));
        $insertQuery = "INSERT INTO reporte(autor, ciudad, departamento, email, titulo, descripcion) VALUES('{$valuesToInsert}')";
        if(mysqli_query($conn, $insertQuery)) {
            header("Location: ../reportes.php");
        }  else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "No hay conexión con MySQL.";
}







