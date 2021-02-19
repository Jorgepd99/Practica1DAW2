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
        <form method="POST" action="registrarse.php">
            <table>
                <tr>        
                    <td colspan="2">Formulario Registro</td>
                </tr>
                <tr>
                    <td>
                        <label>Usuario: </label>
                    </td>
                    <td>
                        <input name="user" type="text" placeholder="Introduzca su usuario">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contraseña: </label>
                    </td>
                    <td>
                        <input name="passwd" type="password" placeholder="Introduzca su contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Registrarse"></td>
                </tr>
            </table>
        </form>';
        ?>
    </body>
</html>
