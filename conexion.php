<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "kit_mascotas";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Fallo la conexión: ");
}
