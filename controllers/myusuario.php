<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 17/10/2014
 * Time: 06:23 PM
 */

    $usuario = new Usuario();

    $titulo = 'Bienvenido usuario';
    $contendio = 'Estes es el contenido';

    $variables = array('titulo'=>$titulo,
        'contenido'=>$contendio,
        'nombre'=>$usuario->setUsuario());

    view('myusuario',$variables);