<link rel="stylesheet" href="./estilo.css">
<?php
    $usuario = $_POST["user"];
    $contraseña = $_POST["passwd"];
    if (comprobar($usuario, $contraseña)){
        mostrarFormulario(getID($usuario, $contraseña));
    } else {
        echo '<h2>usuario no registrado</h2> <a href="registro.php">Registrarse</a>';
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
    
    function mostrarFormulario($id){
        echo "
        <form class='fondo-formulario' method='GET' action='registrarEncuesta.php'>
            <div>
                <div>
                    <label for='title'>¿Qué le ha parecido la presentación de la asignatura?</label>
                    <input name='respuesta1' type='text' size='100' placeholder='Máximo 100 caracteres'>
                </div>
                <br>
                <div>
                    <label>Expectativas de la asignatura</label>
                    <select name='respuesta2'>
                        <option value=''>...</option>
                        <option>Altas</option>
                        <option>Medias</option>
                        <option>Bajas</option>
                    </select>
                </div>
                <br>
                <div>
                    <label>Conociminientos previos</label>
                    <input name='respuesta3' type='text' size='100' placeholder='¿Alguna experiencia previa a la asignatura?'> 
                </div>
                <br>
                <div>
                    <label>¿Le gustaría dedicarse a algo relacionado con el desarrollo web?</label>
                    <select name='respuesta4'>
                        <option value=''>...</option>
                        <option>Sí</option>
                        <option>No</option>
                        <option>No sé todavía</option>
                    </select>
                    <input name='respuesta5' type='text' size='100' placeholder='¿Por qué?'> 
                </div>
                <br>
            </div>
            <div>
                <input type='hidden' name='id' value='{$id}'>
                <input class='submit' type='submit' value='Enviar'>
            </div>
        </form>";
    }
    
    function getID($usuario,$contraseña){
        $conexion = new PDO("sqlite:./usuario.db");
        foreach ($conexion->query("SELECT * FROM usuarios") as $registro){
            if($registro[0] == $usuario && $registro[1] == $contraseña){
                return $registro[2];
            }
        }
        return null;
    }