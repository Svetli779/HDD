<?php
require_once 'employee.php';
class Doctor extends Employee{
    private $param4=array();
    protected $dayshifts;
    public function __construct($hours, $sumhours, $salary,$nightshifts,$dayshifts) {
        parent::__construct($hours, $sumhours, $salary);
        $this->dayshifts=$dayshifts;
        $this->nightshifts=$nightshifts;
    }
    public function schedule(){
            echo "<h1>";
            echo "DOCTOR";
            echo "</h1>";
            echo "<div>";
            echo "I work $this->hours hours every day.
            $this->sumhours hours per mount and I earn $this->salary !";
            echo "My night shifts are $this->nightshifts  !";
            echo "My day shifts are $this->dayshifts  !";
            echo "</div>";
            echo "<br/>";
    }
    public function __set($nightshifts, $value) {
        $this->param4[$nightshifts]=$value;
    }
    public function __get($nightshifts) {
        return $this->param4[$nightshifts];
    }
}
