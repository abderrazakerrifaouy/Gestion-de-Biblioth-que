<?php
require_once __DIR__ . "./../Core/Controller.php";
require_once __DIR__ . "./../Core/Helper.php";
require_once __DIR__ . "./../Core/Database.php";



class VisiteurController implements controllers
{
    private $database;
    private $connection;
    public function __construct()
    {
        $this->database = new Database();
        $this->connection = $this->database->connection();
    }
    public function index()
    {
        Helper::view("Visiteur/index");
    }
    public function getAllBooks()
    {
        $query = $this->connection->prepare("SELECT * FROM books");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $books = [];
        foreach($result as $row){
            $book = new Book(
                $row['id'],
                $row['title'],
                $row['author'] ,
                $row['year'] ,
                $row['status'] ,
                $row['image_path']
            );
            $books[] = $book;
        }
        return $books;
    }
    public function explore_catalog(){
        Helper::view("Visiteur/explore_catalog" , ["books"=> $this->getAllBooks()]);
    }
    public function how_it_works(){
        
        Helper::view("Visiteur/how_it_works" );
    }
    
    public function login()
    {
        Helper::view("Visiteur/login");
    }
    
    public function save_login()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $this->connection->query("SELECT * FROM users WHERE email = '$email'")->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            
        } else {
            if (password_verify($password, $user["password"])) {
                 $_SESSION["role"] = $user["role"];
                if ($user['role'] == "Lecteur") {
                    $user = new Lecteur($user['id'], $user['firstName'], $user['lastName'], $user['email'], $user['password']);
                }else{
                    $user = new Admin($user['id'], $user['firstName'], $user['lastName'], $user['email'], $user['password']);
                }
            }

        }
        $_SESSION["user"] = $user;
        header("Location: /");
    }
    public function register()
    {
        Helper::view("Visiteur/create_account");
    }
    public function create_account()
    {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = "lecteur ";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = $this->connection->prepare("INSERT INTO users (firstName, lastName, email, password, role) VALUES (:firstName, :lastName, :email, :password, :role)");
        $query->execute(array(
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':role' => $role
        ));

        if ($query) {
            header("Location: /login");
        } else {
            echo "Error creating account.";
        }
    }

}