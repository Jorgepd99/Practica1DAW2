<link rel="stylesheet" href="./estilo.css">
<?php

    $usuario = $_POST["user"];
    $contraseña = $_POST["passwd"];

    if (comprobar($usuario, $contraseña)){
        echo '<h2>usuario ya registrado</h2> <a href="index.php">Volver al inicio</a>';
    } else {
        insertarUsuario($usuario,$contraseña);
        echo '<h2>usuario registrado con éxito</h2> <a href="index.php">Volver al inicio</a>';
    }
    function comprobar ($user, $contraseña){
        $conexion = new PDO("sqlite:./usuario.db");
        foreach ($conexion->query("SELECT * FROM usuarios") as $registro){
            if($registro[0] == $user && $registro[1] == $contraseña){
                return true;
            }
        }
        return false;
    }
    
    function insertarUsuario($usuario,$contraseña){
        $conexion = new PDO("sqlite:./usuario.db");
        $in = $conexion->prepare("INSERT INTO usuarios (nombre, contraseña) VALUES (?,?)");
        $in->execute(array($usuario, $contraseña));
    }
    
    