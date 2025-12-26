<?php


class Database {
    private $db;

    public function __construct() {
        $donne = require_once __DIR__ . "/../../config/database.php";

        try {
            $dsn = "mysql:host={$donne['host']};dbname={$donne['dbname']};charset=utf8";

            $this->db = new PDO(
                $dsn,
                $donne["user"],
                $donne["pass"],
                
            );

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connection() {
        return $this->db;
    }
}
