<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 17/10/2014
 * Time: 06:15 PM
 */

class Usuario
{

    private $name;

    public function getUsuario()
    {

        echo "<br>Mostrar: " . $this->name;
    }

    public function setUsuario()
    {

        $this->name = 'Maggie';
        return $this->name;
    }

    public function readGeneral()
    {
        echo "<center><b>Resultados de consulta </b></center>";
        $sqlReadGeneral = "select * from usuario ORDER BY apellido_paterno asc ";
        $resultReadGeneral = mysql_query($sqlReadGeneral) or die ("Error en $sqlReadGeneral");

        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='5' ><strong><center>Lista de usuarios</center></strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido paterno</th><th>Apellido materno</th> <th>Nivel</th></tr>";
        while ($field = mysql_fetch_array($resultReadGeneral)) {
            $this->id = $field['id'];
            $this->nombre = $field['nombre'];
            $this->apellidoPaterno = $field ['apellido_paterno'];
            $this->apellidoMaterno = $field ['apellido_materno'];
            $this->nivel = $field ['nivel'];
            if ($field ['nivel'] == 1) {

                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Administrador</td></tr>";
            } else {
                echo "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>Usuario</td></tr>";
            }


        }

    }
}