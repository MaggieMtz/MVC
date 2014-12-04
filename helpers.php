<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 16/10/2014
 * Time: 05:25 PM
 */

function view ($plantilla, $variables = array())
{

    extract($variables);
    require('views/'. $plantilla .'.tpl.php');

}

function controller ($nombre){

    if (empty($nombre))
        $nombre = 'home';

    $archivo = "controllers/$nombre.php";

    if (file_exists($archivo))
            require($archivo);

    else
            echo "Error archivo no encontrado";

}