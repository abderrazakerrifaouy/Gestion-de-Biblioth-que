<?php
require_once __DIR__ . "/User.php";
class Admin extends A_users {

    public function __construct($id, $firstName, $lastName, $email, $password) {
        parent::__construct($id, $firstName, $lastName, $email, $password);
    }
}