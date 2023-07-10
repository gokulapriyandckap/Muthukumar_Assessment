<?php
require 'model/userModel.php';

class userController{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index(){
        $allDatabase =  $this->userModel->fetch();
        require 'view/home.php';
    }
    public function dropDatabase($data){
        $this->userModel->dropDatabase($data['delete']);
    }

    public function create($dbName){
       $allDatabase =  $this->userModel->create($dbName['db_name']);
    }

    public function addColumns($dbName){
       $dbNameColumn = $dbName['addColumnsDb'];
        require 'view/addColumns.php';
    }
    public function addColumnsToDb($data){
        $this->userModel->addColumnsToDb($data['columnName'],$data['dataType'],$data['dbnameForColumn']);
    }
    public function addTable($dbName){
        $dbNameTable = $dbName['addTableDb'];
        require 'view/addTable.php';
    }
    public function addTablesToDb($data){
        $this->userModel-> $data['tableName'],$data['dbnameForTable'];
    }

}