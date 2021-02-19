<link rel="stylesheet" href="./estilo.css">

<?php

    $id = $_GET["id"];
    $respuesta1 = $_GET["respuesta1"];
    $respuesta2 = $_GET["respuesta2"];
    $respuesta3 = $_GET["respuesta3"];
    $respuesta4 = $_GET["respuesta4"];
    $respuesta5 = $_GET["respuesta5"];
    
    $conexion = new PDO("sqlite:./usuario.db");
    $in = $conexion->prepare("INSERT INTO formularios (id_usuario, respuesta1, respuesta2, respuesta3, respuesta4, respuesta5) VALUES (?,?,?,?,?,?)");
    $in->execute(array($id, $respuesta1, $respuesta2, $respuesta3, $respuesta4, $respuesta5));
    echo "<h2>Sus respuestas han sido guardadas correctamente</h2><a href='index.php'>Volver al inicio</a>";
    
?>