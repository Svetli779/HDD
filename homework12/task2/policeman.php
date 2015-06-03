<?php
require_once 'employee.php';
class Policeman extends Employee{
    private $param4=array();
    public function __construct($hours, $sumhours, $salary,$rang) {
        parent::__construct($hours, $sumhours, $salary);
        $this->rang=$rang;
    }
    public function myRang(){
            echo "<h1>";
            echo "POLICEMAN";
            echo "</h1>";
            echo "<div>";
            echo "I work $this->hours hours every day.
            $this->sumhours hours per mount and I earn $this->salary !";
            echo "My rang is $this->rang  !";
            echo "</div>";
            echo "<br/>";
    }
    public function __set($rang, $value) {
        $this->param4[$rang]=$value;
    }
    public function __get($rang) {
        return $this->param4[$rang];
    }
}
