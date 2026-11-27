<?php
    $neim = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';

    $destiny = $_POST['destinos'] ?? [];
    $act = $_POST['actividades'] ?? [];
    $serv = $_POST['servicios'] ?? [];

    echo "Datos del cliente: <br>";
    echo "Nombre: " . $neim . "<br>";
    echo "Correo: " . $correo . "<br><br>";

    echo "Destinos elegidos: <br>";
    foreach($destiny as $des){
        echo $des . "<br>";
    }

    echo "<br>Actividades elegidas: <br>";
    foreach($act as $a){
        echo $a . "<br>";
    }

    echo "<br>Servicios elegidos: <br>";
    foreach($serv as $s){
        echo $s . "<br>";
    }
?>
