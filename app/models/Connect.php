<?php 

namespace App\Model;

class Connect{

    private $pdo;
    private $table;
    private $where;
    private $orderBy;
    private $limit;

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
    
    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    public function orderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function get()
    {  
        $isWhere = is_null($this->where) ? null : " WHERE " . $this->where;
        $isOrderBy = is_null($this->orderBy) ? null : " ORDER BY " . $this->orderBy;
        $isLimit = is_null($this->limit) ? null : " LIMIT " .$this->limit;
        
        $db = $this->conn()->pdo;
        $sql = "SELECT * FROM " . $this->table . $isWhere . $isOrderBy . $isLimit;
        $qry = $db->query($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    

}