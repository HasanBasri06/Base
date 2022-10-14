<?php 

namespace App\Model;

class Connect{

    private $pdo;
    private $table;

    public function conn()
    {
        try {
            $pdo = new \PDO("mysql:host=".env("host").";dbname=".env("dbname"), env("root"), env("password"));
            $this->pdo = $pdo;
        } catch (\PDOException $th) {
            echo $th->getMessage();
        }
        return $this;
    }

    public function table($table)
    {
        $this->table = $table;
        return $this;
    }

    public function get()
    {  
        $sql = "SELECT * FROM " . $this->table;
        $qry = $this->pdo->query($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}