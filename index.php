<?php

class Utenti {
    public $name;
    public $surname;
    public $email;
    public $age;
    public $sconti;

    function __construct($_name, $surname, $email, $age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email =$_email;
        $this->age = $_age;

    }

}