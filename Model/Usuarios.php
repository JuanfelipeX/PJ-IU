<?php
class Conexion
{
      private $con;

      function __construct()
      {
            $this->con = new mysqli("localhost", "pagina_carros", "root", "1234");
      } //cierra constructor

      function getCon()
      {
            return $this->con;
      } //cierra getCon


}//cierra class

    public function getUsuarios($usuario, $clave, $nombre)
    {
        $query = $this->con->getCon()->query("SELECT * FROM usuario");
        $usuarios = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $usuarios[$cont] = $fila;
            $cont++;
        }
        return $usuarios;
    }
    public function newUsuario($id, $clave, $nombre)
    {
        //$sql = "INSERT INTO USUARIOS (usuario,clave,nombre)
        //VALUES($usuario,$nombre,$clave)";

        $sql = "INSERT INTO USUARIO 
        VALUES('$id','$clave','$nombre')";

        if ($this->con->getCon()->query($sql)) {
            // echo "Inserción exitosa.";
        } else {
            echo "Error ejecutando consulta de inserción.";
            echo "SQL: " . $sql;
        }
    }
    public function deleteUsuario($usuario)
    {
        $sql = "DELETE FROM USUARIO WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
    public function updateUsuario($usuario, $clave, $nombre)
    {
        $sql = "UPDATE USUARIO SET nombre='$nombre', clave='$clave'
        WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}
