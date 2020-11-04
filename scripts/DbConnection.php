<?php 

class DbConnection{

    private $DB_HOST = 'localhost';
    private $DB_NAME = 'portfoliodemo_db';
    private $DB_USERNAME = 'root';
    private $DB_PASSWORD = '';
    public $dbConnection;

    public function __construct(){
        try{
            $dsn = 'mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME; 
            $this->dbConnection = new PDO ($dsn, $this->DB_USERNAME, $this->DB_PASSWORD);
            header('location: https://localhost/projects/portfolio/index.php');
        } catch (PDOException $e){
            echo 'There was a problem connecting to the database. Check with your database administrator for support.';
        }
    }

    public function getConnection(){
        return $this->dbConnection;
    }

}