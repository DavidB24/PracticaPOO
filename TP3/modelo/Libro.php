<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/TP3/configuracion/DataBase.php';
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/TP3/modelo/Autor.php';
class Libro
{
        private $id;
        private $titulo;
        private $idautor;
        private $autor;

    /**
     * @return mixed
     */
    public function getAutor()
    {
       if($this->idautor!=null)
       {
            $this->autor = Autor::BuscarAutor($this->idautor);
       }
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getIdautor()
    {
        return $this->idautor;
    }

    /**
     * @param mixed $idautor
     */
    public function setIdautor($idautor)
    {
        $this->idautor = $idautor;
    }

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

    public static function BuscarListLibros()
    {
        $con  = Database::getInstance();
        $sql = "SELECT * FROM libro";
        $listLibros = $con->db->prepare($sql);
        $listLibros->execute();
        $listLibros->setFetchMode(PDO::FETCH_CLASS, 'Libro');
        return $listLibros;
    }
    public static function BuscarLibro($id)
    {
        $con  = Database::getInstance();
        $sql = "SELECT * FROM libro where id=:p1";
        $listLibros = $con->db->prepare($sql);
        $params = array("p1" => $id);
        $listLibros->execute($params);
        $listLibros->setFetchMode(PDO::FETCH_CLASS, 'Libro');
        foreach ($listLibros as $l)
        {
            return $l;
        }

    }
    public function Agregar()
    {
        $con  = Database::getInstance();
        $sql = "INSERT INTO libro (titulo,idautor) values(:p1,:p2)";
        $autor = $con->db->prepare($sql);
        $params = array("p1" => $this->titulo,"p2" => $this->idautor);
        $autor->execute($params);
    }
  
}