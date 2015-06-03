<?php
class Person{
    private $name;
    private $age;
    private $email;
    public function __construct($name,$age,$email){
        if(strlen($name)>3 && $age<200 && strlen($email)>3){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
        }
        else {
            echo "<div>Enter valid data !!!</div>";
        }    
    } 
    public function info(){
        echo "<div>";
        echo "My name is  $this->name I am $this->age years old and my email is $this->email !";
        echo "</div>";
    }
    }     