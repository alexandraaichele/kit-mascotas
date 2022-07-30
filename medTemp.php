<?php
include("conexion.php");
$consulta = "SELECT * FROM temperaturas";
$consulta2 = "Select MAX(temperatura) From temperaturas";
$consulta3 = "Select MIN(temperatura) From temperaturas";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mediciones de temperaturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="assets/img/cat.png" />
                    </div>
                    <div class="home-container">
                        <p class="home">
                            Kit Mascota Protegida
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="index.php">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-house-chimney"></i>
                                </div>
                                <div class="col-10">
                                    Home
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item active">
                        <a class="navigation-link" href="medTemp.php">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-temperature-full"></i>
                                </div>
                                <div class="col-10">
                                    Temperatura
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item active">
                        <a class="navigation-link" href="eventDetect.php">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-calendar"></i>
                                </div>
                                <div class="col-10">
                                    Distancias
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item active">
                        <a class="navigation-link" href="pets.php">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <div class="col-10">
                                    Mascotas
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item active">
                        <a class="navigation-link" href="formAddPets.html">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa-solid fa-list-ul"></i>
                                </div>
                                <div class="col-10">
                                    Ingresar Mascotas
                                </div>
                            </div>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="navigationBar">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h3 class="home">
                    Kit Mascota Protegida
                </h3>
            </div>
            <div>
                <h2 class="title2">Temperaturas</h2>
                <hr>
                <div class="temp">
                    <?php
                    "<div class=d-flex>";
                    $result = mysqli_query($conn, $consulta2);
                    $result = $result->fetch_array();
                    $quantity = intval($result[0]);
                    echo "<p> La temperatura máxima: ", $quantity,  " </p>";

                    $result2 = mysqli_query($conn, $consulta3);
                    $result2 = $result2->fetch_array();
                    $quantity2 = intval($result2[0]);
                    echo "<p> La temperatura mínima: ", $quantity2,  " </p>";

                    $data = mysqli_query($conn, $consulta);
                    echo "<table class=tables>";
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Hora</th>";
                    echo "<th>Temperatura</th>";
                    echo "</tr>";
                    while ($fila = mysqli_fetch_array($data)) {
                        echo "<tr>";
                        echo "<td>" . $fila["id_medicion"], "</td>";
                        echo "<td>" . $fila["fecha"], "</td>";
                        echo "<td>" . $fila["hora"], "</td>";
                        echo "<td>" . $fila["temperatura"], "</td>";
                        echo "</tr>";
                    };
                    echo "</table>";
                    "</div>"
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>