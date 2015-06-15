<?php
class DB{
    private $conection;
    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bdname = "users";
        $this->conection=  mysqli_connect($servername, $username, $password, $bdname);
        if(!$this->conection){
            die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
        }
        mysqli_set_charset($this->conection,"utf8");
    }
    //This`s SINGLETON
    public static function getInstance(){
        static $db = null;
        if($db === null){
            $db = new DB();
        }
        return $db;
    }
    //Взима инфо от последната заявка 
    public function queryOne( $query )
    {
        $result = mysqli_query($this->connection, $query);
        if (mysqli_affected_rows($this->connection) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }
    //Взима инфото (ако има такова) от горната функция и го вкарва в масив
    public function select($query){
        $returnList = [];
        $result = mysqli_query($this->connection, $query);
        if (mysqli_affected_rows($this->connection) > 0) {
            while( $row = mysqli_fetch_assoc($result))
            {
                $returnList[] = $row;
            }
        }
        return $returnList;
    }
}