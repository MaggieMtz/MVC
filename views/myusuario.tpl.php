<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
* Date: 17/10/2014
* Time: 06:29 PM
*/

    $usuario = new Usuario();
?>
<html>
    <head>
        <body>

            <h1><?=$titulo ?></h1>
            <p><?=$contenido ?></p>
            <p><?=$nombre ?></p>
            <p><?php
                $usuario->setUsuario();
                $usuario->getUsuario();
                $usuario->readGeneral();
                ?>
            </p>

        </body>
    </head>
</html>