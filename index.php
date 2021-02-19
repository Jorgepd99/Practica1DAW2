<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./estilo.css">
        <title></title>
    </head>
    <body>
        <?php
            echo '
        <form method="POST" action="formulario.php">
            <table>
                <tr>        
                    <td colspan="2">Rellene el siguiente cuestionario</td>
                </tr>
                <tr>
                    <td>
                        <label>Usuario: </label>
                    </td>
                    <td>
                        <input name="user" type="text" placeholder="Introduzca su usuario" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contraseña: </label>
                    </td>
                    <td>
                        <input name="passwd" type="password" placeholder="Introduzca su contraseña" required>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Iniciar sesión"></td>
                    <td><a href="registro.php">Registrarse</a></td>
                </tr>
            </table>
        </form>';
        ?>
    </body>
</html>
