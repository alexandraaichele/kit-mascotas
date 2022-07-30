<?php
include("conexion.php");
?>

<?php
$f_name = utf8_decode($_POST['nombre']);
$f_fecha_nac = utf8_decode($_POST['fecha_nac']);
$f_especie = utf8_decode($_POST['especie']);

$sql = "INSERT INTO mascotas (`id`, `nombre`, `fecha_nac`, `especie`) 
        VALUES (null, '$f_name','$f_fecha_nac', '$f_especie' )";

if (mysqli_query($conn, $sql)) {
   echo "El registro se ingresó correctamente !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<a href="pets.php">Volver</a>