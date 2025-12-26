<?php
require_once __DIR__."./../Core/Controller.php";
require_once __DIR__."./../Core/Helper.php";
require_once __DIR__."./../Core/Database.php";
class AdminController implements controllers {
    private $database;
    private $connection ;
    public function __construct() {
        $this->database = new Database();
        $this->connection = $this->database->connection();
    }
    public function index() {
        Helper::view("admin/index" );
    }
    public function logoutextes() {
        session_destroy();
        header("Location: /");
    }

    public function get_by_id($id){
        $query = $this->connection->prepare("SELECT * FROM users WHERE id = :id");
        $query->execute(array(':id' => $id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function get_all(){

    }

    public function create($data){

    }

    public function update($id, $data){

    }

    public function delete($id){

    }

    
    
}