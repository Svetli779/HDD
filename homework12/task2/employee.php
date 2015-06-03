<?php
class Employee{
    const HOURS=8;
    const SUMHOURS=176;
    const SALARY=2500;
    public function __construct($hours=null,$sumhours=null,$salary=null) {
        if($hours!=null || $sumhours!=null || $salary!=null){
            $this->hours=$hours;
            $this->sumhours=$sumhours;
            $this->salary=$salary;
        }
        else {
            $this->hours= self::HOURS;
            $this->sumhours= self::SUMHOURS;
            $this->salary= self::SALARY;
        }
    }
    public function getData(){
            return $this->hours;
            return $this->sumhours;
            return $this->salary;
        }
        public function work(){
            echo "<h1>";
            echo "EMPLOYEE";
            echo "</h1>";
            echo "<div>";
            echo "I work $this->hours hours every day.
             $this->sumhours hours per mount and I earn $this->salary !";
            echo "</div>";
        }
}
