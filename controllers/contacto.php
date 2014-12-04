<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 16/10/2014
 * Time: 06:04 PM
 */

//Esta información se puede sacar de una consulta
$titulo = 'Bienvenidos a contacto';
$contendio = 'MVC contacto';

//Se coloca la información en variables en un array
$variables = array ('titulo'=>$titulo, 'contenido'=>$contendio);

//Vista donde ducae el home y envia las variables
view('contacto', $variables);