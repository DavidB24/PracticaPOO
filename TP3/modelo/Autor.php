<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/TP3/configuracion/DataBase.php';
class Autor
{
   private $id;
   private  $nombre;
   private  $direccion;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function __construct()
    {

    }

    public static function BuscarAutor($id)
    {
       $con  = Database::getInstance();
        $sql = "SELECT * FROM autor WHERE id= :p1";
        $autor = $con->db->prepare($sql);
        $params = array("p1" => $id);
        $autor->execute($params);
        $autor->setFetchMode(PDO::FETCH_CLASS, 'Autor');
        foreach ($autor as $a)
        {
            return $a;
        }
    }

    public static function  BuscarListAutores()
    {
        $con  = Database::getInstance();
        $sql = "SELECT * FROM autor";
        $listAutor = $con->db->prepare($sql);
        $listAutor->execute();
        $listAutor->setFetchMode(PDO::FETCH_CLASS, 'Autor');
        return $listAutor;
    }

    public function Agregar()
    {
        $con  = Database::getInstance();
        $sql = "INSERT INTO autor (nombre,direccion) values(:p1,:p2)";
        $autor = $con->db->prepare($sql);
        $params = array("p1" => $this->nombre,"p2" => $this->direccion);
        $autor->execute($params);
    }
    
}