<?php 

namespace App\Model;

use Exception;

class Connect{

    public function __construct()
    {
        $childClass = get_class($this);
        
        echo (new $childClass)->tableName();        
    }

    // private $pdo;
    // private $table;
    // private $where;
    // private $orderBy;
    // private $limit;

    // private $tableColumnsName = [];


    // public function conn()
    // {
    //     try {
    //         $pdo = new \PDO("mysql:host=".env("host").";dbname=".env("dbname"), env("root"), env("password"));
    //         $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    //         $this->pdo = $pdo;
    //     } catch (\PDOException $th) {
    //         echo $th->getMessage();
    //     }
    //     return $this;
    // }

    
    // public function table($table)
    // {
    //     $this->table = $table;
    //     return $this;
    // }
    
    // public function where($where)
    // {
    //     $this->where = $where;
    //     return $this;
    // }

    // public function orderBy($orderBy)
    // {
    //     $this->orderBy = $orderBy;
    //     return $this;
    // }

    // public function limit($limit)
    // {
    //     $this->limit = $limit;
    //     return $this;
    // }

    // public function save(...$save)
    // {


    //     $isHaveSql = "SELECT * FROM " . $this->table;
    //     $isHaveQry = $this->conn()->pdo->query($isHaveSql);
    //     $isHaveQry->execute();
    //     $isHave = $isHaveQry->fetch(\PDO::FETCH_OBJ);


    //     try {
    //         if($isHave != false){
    //             $tableColumnSql = "SHOW COLUMNS FROM " . $this->table;
    //             $tableColumnQry = $this->conn()->pdo->query($tableColumnSql);
    //             $tableColumnQry->execute();
    //             foreach ($tableColumnQry->fetchAll(\PDO::FETCH_OBJ) as $value) {
    //                 array_push($this->tableColumnsName, $value->Field);
    //             }
    //             $insertName = implode(",", $this->tableColumnsName);
    //             $insertValue = implode(",:", $this->tableColumnsName);
        
    //             $insertName = str_replace("id,", "", $insertName);
    //             $insertValue = str_replace("id,", "", $insertValue);
                    
            
    //             $insertSql = "INSERT INTO " . $this->table . " (".$insertName.") VALUES (".$insertValue.") ";
    //             $insertQry = $this->conn()->pdo->prepare($insertSql);
        
        
    //             $key = array_search("id", $this->tableColumnsName);
        
    //             unset($this->tableColumnsName[$key]);
        
    //             $tableColName = array_values($this->tableColumnsName);
             
    //             for ($i=0; $i < count($tableColName); $i++) {     
    //                 $insertQry->bindParam(":".$tableColName[$i], $save[$i]);
    //             }
    //             $insertQry->execute();
    //         }
    //         else{
    //             throw new Exception("Bu Kullanıcı Zaten Var");
    //         }
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }


        
    // }

    // public function get()
    // {  
    //     $isWhere = is_null($this->where) ? null : " WHERE " . $this->where;
    //     $isOrderBy = is_null($this->orderBy) ? null : " ORDER BY " . $this->orderBy;
    //     $isLimit = is_null($this->limit) ? null : " LIMIT " .$this->limit;
        
    //     $db = $this->conn()->pdo;
    //     $sql = "SELECT * FROM " . $this->table . $isWhere . $isOrderBy . $isLimit;
    //     $qry = $db->query($sql);
    //     $qry->execute();
    //     return $qry->fetchAll(\PDO::FETCH_OBJ);
    // }

    

}