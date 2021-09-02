<?php

class Index {
    public $name;
    public $surname;
    public $email;
    public $age;
    public $sconti;

    function __construct($_name, $_surname, $_email, $_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->age = $_age;

    }

    public function getFullName(){
        return $this->name . '' . $this->surname;
    }

}