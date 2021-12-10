<?php

namespace DataBase;

use PDO;
use PDOException;

require_once(__DIR__.'/../System/config.php');

class Model{

    protected $connection = null;
    private $table = null;
    private $sql = null;

    public function __construct()
    {
        if($this->connection == null){
            try{
                $this->connection = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS,[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_PERSISTENT => TRUE
                ]);
            }
            catch(PDOException $errors){
                echo('<h2>Error , Connect To DataBase : </h2>'.$errors->getMessage());
            }
        }
    }

    public function table($name){
        $this->table = $name;
        return $this;
    }

    public function select(){
        $table = $this->table;
        $this->sql = 'SELECT * FROM `'.$table.'` ';
        return $this;
    }

    public function orderby($orderBy,$orderType){
        $this->sql.=' `'.$orderBy.'` '.$orderType.' ';
        return $this;
    }

    public function where($condition,$value){
        $this->sql.=' WHERE `'.$condition.'` = "'.$value.'" ';
        return $this;
    }

    public function counts(){
        $table = $this->table;
        $this->sql = 'SELECT COUNT(*) FROM `'.$table.'` ';
        return $this;
    }
    
    public function get(){
        try{
            $result = $this->connection->query($this->sql);
            return $result;
        }
        catch(PDOException $errors){
            echo('<h2>Error , GET Query : </h2>'.$errors->getMessage());
        }
    }

    public function update($fields,$values,$id){
        try{
            $table = $this->table;
            $this->sql = 'UPDATE `'.$table.'` SET ';
            foreach($fields as $field){
                $this->sql.= ' `'.$field.'` = ? , ';
            }
            $this->sql.= ' `updated_at` = now() WHERE `id` = '.$id.' ';
            $stmt = $this->connection->prepare($this->sql);
            $stmt->execute($values);
        }
        catch(PDOException $errors){
            echo('<h2>Error , UPDATE Query : </h2>'.$errors->getMessage());
        }
    }

    public function insert($fields,$values){
        try{
            $table = $this->table;
            $this->sql = 'INSERT INTO `'.$table.'` (';
            foreach($fields as $field){
                $this->sql.=' `'.$field.'` , ';
            }
            $this->sql.= ' `created_at` ) VALUES (';
            foreach($fields as $field){
                $this->sql.= ' ? , ';
            }
            $this->sql.= ' now() );';
            $stmt = $this->connection->prepare($this->sql);
            $stmt->execute($values);
        }
        catch(PDOException $errors){
            echo('<h2>Error , INSERT Query : </h2>'.$errors->getMessage());
        }
    }

    public function delete($id){
        try{
            $table = $this->table;
            $sql = 'DELETE FROM `'.$table.'` WHERE `id` = '.$id;
            $this->connection->exec($sql);
        }
        catch(PDOException $errors){
            echo('<h2>Error , DELETE Query : </h2>'.$errors->getMessage());
        }
    }

    public function query($sql){
        try{
            $result = $this->connection->query($sql);
            return $result;
        }
        catch(PDOException $errors){
            echo('<h2>Error : </h2>'.$errors->getMessage());
        }
    }

    public function execute($sql,$value){
        try{
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($value);
        }
        catch(PDOException $errors){
            echo('<h2>Execute Error : </h2>'.$errors->getMessage());
        }
    }

    public function __destruct()
    {
        $this->connection = null;
        $this->table = null;
        $this->sql = null;
    }

}

