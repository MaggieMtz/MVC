<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 16/10/2014
 * Time: 05:20 PM
 */
require ('helpers.php');
require ('bd/DB.php');
require('/template/header.php');
require('clases/Usuario.php');

if (empty($_GET['url']))
        $_GET['url']='home';

    controller($_GET['url']);

require('template/footer.php');