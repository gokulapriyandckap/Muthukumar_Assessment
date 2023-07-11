<?php
// Require for extend the database class to another class for Data Manipulation.
require 'connection.php';

// Creating a class userModel to write and execute the sql queries and extends with database class.
class userModel extends database {
    //Declared Public Variable to connect the sql server.
    public $dbName;

    // This Function is used to connect and create Databases.
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

        // This try catch is to create database.
        try {
            $dbh->query("CREATE DATABASE IF NOT EXISTS  $this->dbName");
            header('location:/');
        }
        catch (Exception $e){
            die($e->getMessage().'db already exists');
        }
    }

    // This Function is used to fetch the all Databases from the Server and redirect to the Homepage.
    public function fetch(){
        $database = $this->db->query("SHOW DATABASES");
        $allDatabases = $database->fetchAll(PDO::FETCH_OBJ);
        return $allDatabases;
    }

    // This Function is used to drop the Database respectively.
    public function dropDatabase($databasename){
        $this->db->query("DROP DATABASE $databasename");
        header('location:/');
    }

    // This Function is used to create the Table and Column with respectively Datatype according to the Database
 public function addColumnsToDb($tableName,$columnName,$dataType,$dbName){
        echo $tableName,$columnName[0],$dbName,$dataType[0];
        $this->db->query("USE $dbName");
        $this->db->query("CREATE TABLE $tableName(
        $columnName[0] $dataType[0])");
        header('location:/');
}

    // This Function is used to get the table name from respectively Database.
public function getTables($dbName){
    $this->db->query("USE $dbName");
    $table = $this->db->query("SHOW TABLES");
    $tables = $table->fetchAll();
    $tableForColumn = ($tables[0][0]);
    return $tableForColumn;
}

    // This Function is used to get the column Name from respectively Database and Table Name.
public function getTablesColumn($dbName){
    $this->db->query("USE $dbName");
    $table = $this->db->query("SHOW TABLES");
    $tables = $table->fetchAll();
    $tableForColumn = $tables[0][0];

    $column = $this->db->query("SHOW COLUMNS FROM $dbName.$tableForColumn");
    $columns = $column->fetchAll(PDO::FETCH_OBJ);
    $columnName = ($columns[0]->Field);
    return $columnName;
}

// This Function is used to Insert the Values to respectively Columns and Tables with according to the Database
public function addValuesToDb($dbName,$tableName,$columnName,$value){
        $this->db->query("USE $dbName");
        $this->db->query("INSERT INTO $tableName($columnName) VALUES('$value')");
        header('location:/');
}

// This Function is used to Search the Databases fetch the according input to the output from the server.
public function searchDb($dbName){
       $database =  $this->db->query("SHOW DATABASES LIKE '%$dbName%'");
       $databases = $database->fetchAll();
        return $databases;
}
}

