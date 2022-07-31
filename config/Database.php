<?php
class Database
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'fisioterapialaboral';
    private $conn;

    function __construct(){
        $this->conexion = $this->connectToDatabase(); /* Asignamos la funcion de conexion */
        return $this -> conn; /* Me activa la conexion */
    }

    function connectToDatabase(){
        $conn= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if(mysqli_connect_error()){ /* Si hay un error que me lo muestre */
            echo "Tenemos un error de conexion " . mysqli_connect_error();
        }
        return $conn; /* Me activa la conexion */
    }
}
?>