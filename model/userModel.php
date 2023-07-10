<?php
require 'connection.php';

class userModel extends database {
    public $dbName;

    public function fetch(){
        $database = $this->db->query("SHOW DATABASES");
        $allDatabases = $database->fetchAll(PDO::FETCH_OBJ);
        return $allDatabases;
    }
    public function dropDatabase($databasename){
        $this->db->query("DROP DATABASE $databasename");
        header('location:/');
    }
 public function addColumnsToDb($columnNames,$dataTypes,$dbName){
    }
    public function addTablesToDb($tableName,$dbName){
        $this->db->query("USE $dbName");
        $this->db->query("CREATE TABLE $tableName");
    }

    public function create($db_name)
    {
        $this->dbName = $db_name;
        try {
            $dbh = new PDO('mysql:host=127.0.0.1;',
                'admin',
                'welcome');
        }
        catch (Exception $e){
            die($e->getMessage());
        }
        try {

            $dbh->query("CREATE DATABASE IF NOT EXISTS  $this->dbName");
            header('location:/');
        }
        catch (Exception $e){
            die($e->getMessage().'db already exists');
        }

    }
}

