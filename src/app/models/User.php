<?php

abstract class A_users  {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct($id, $firstName, $lastName, $email, $password) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }
    public function __get($name) {
        return $this->$name;
    }
}