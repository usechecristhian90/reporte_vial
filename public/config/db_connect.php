<?php
# Connecting to mySQL
$conn = mysqli_connect("localhost", "rangel", "RamRoot23", "reporte_vial");

if (empty($conn)) {
    echo "No se pudo hacer conexión con la base de datos, por favor, intente mas tarde";
}