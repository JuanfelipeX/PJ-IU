<?php
require("../Model/Conexion.php");
class Usuarios
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function getUsuarios()
    {
        $query = $this->con->getCon()->query("SELECT * FROM usuarios");
        $usuarios = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $usuarios[$cont] = $fila;
            $cont++;
        }
        return $usuarios;
    }
    public function newUsuario($usuario, $clave, $nombre)
    {
        //$sql = "INSERT INTO USUARIOS (usuario,clave,nombre)
        //VALUES($usuario,$nombre,$clave)";

        $sql = "INSERT INTO USUARIOS 
        VALUES('$usuario','$clave','$nombre')";

        if ($this->con->getCon()->query($sql)) {
            // echo "Inserción exitosa.";
        } else {
            echo "Error ejecutando consulta de inserción.";
            echo "SQL: " . $sql;
        }
    }
    public function deleteUsuario($usuario)
    {
        $sql = "DELETE FROM USUARIOS WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
    public function updateUsuario($usuario, $clave, $nombre)
    {
        $sql = "UPDATE USUARIOS SET nombre='$nombre', clave='$clave'
        WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}
