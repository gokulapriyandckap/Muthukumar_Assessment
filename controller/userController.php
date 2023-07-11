<?php
// Require is used to create the object of the userModel class from the userModel.php file.
require 'model/userModel.php';


class userController{
    // This Public Variable was used to create the object of the userModel class.
    public $userModel;

    // This Public Function was used to create the object of the userModel class.
    public function __construct()
    {
        $this->userModel = new userModel();
    }

    // This Function was used to Fetch the all databases from Server using Fetch function in userModel class and render it to the home.php File.
    public function index(){
        $allDatabase =  $this->userModel->fetch();
        require 'view/home.php';
    }

    // This Function was used to get the input from the user and send the input to the DropDatabase function in userModel class to Drop the Database.
    public function dropDatabase($data){
        $this->userModel->dropDatabase($data['delete']);
    }

    // This Function was used to get the input from the user and send the input to the CreateDatabase function in userModel class to Create the New Database.
    public function create($dbName){
       $allDatabase =  $this->userModel->create($dbName['db_name']);
    }

    // This Function was used to get DB Name from the user and fetch the Column to add Column in the According Database.
    public function addColumns($dbName){
       $dbNameColumn = $dbName['addColumnsDb'];
        require 'view/addColumns.php';
    }

    // This Function was used to get the inputs(Table Name,Column Name and its Data Type) from the user and send the input to the addColumnsToDb function in userModel class to Create the New Table and Column to the According Database.
    public function addColumnsToDb($data){
        $this->userModel->addColumnsToDb($data['tableName'],$data['columnName'],$data['dataType'],$data['dbnameForColumn']);
    }

    // This Function was used to get DB Name from the user and fetch the Values to add Values in the According Database, Table and Column.
    public function AddValues($dbName){
        $dbNameValue = $dbName['addValuesDb'];
        $tables = $this->userModel->getTables($dbNameValue);
        $columnName = $this->userModel->getTablesColumn($dbNameValue);
        require 'view/addValueView.php';
    }

    // This Function was used to get the inputs(Table Name,Column Name and its Data Type with Values) from the user and send the input to the addColumnsToDb function in userModel class to Create the New Column and Values to the According Database.
    public function addValuesToDb($data){
        $this->userModel->addValuesToDb($data['dbnameForValues'],$data['tableName'],$data['columnName'][0],$data['valueName']);
    }

    // This Function is used to get the Input from the Search Bar and send the input to the searchDb Function in userModel class to fetch the according results for the input and render to the searchDb.php file.
    public function searchDb($data){
        $allDatabases =  $this->userModel->searchDb($data['search']);
        require 'view/searchedDb.php';
    }

}