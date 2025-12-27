<?php
require_once __DIR__ . "./../Core/Controller.php";
require_once __DIR__ . "./../Core/Helper.php";
require_once __DIR__ . "./../Core/Database.php";

class LecteurController implements controllers
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
        $id_user = $_SESSION['user']->id ?? -1;
        $query = $this->connection->prepare(
         "   SELECT e.image_path , e.title , e.author , b.borrowDate , DATEDIFF(b.returnDate, CURDATE()) AS days_left FROM borrows b 
                    join users u on  b.readerId = u.id 
                    join books e on b.bookId = e.id 
                    WHERE u.id = $id_user 
                    and DATEDIFF(b.returnDate, CURDATE()) > 0 
        "
        );
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        
        Helper::view("/Lecteur/index" , ["books"=> compact($result)]);
    }
    public function logoutextes()
    {
        session_destroy();
        header("Location: /");
    }
    public function explore()
    {
        Helper::view("Lecteur/explore");
    }

    public function my_borrows()
    {
        Helper::view("Lecteur/my_borrows");
    }

}




// SELECT 
//   borrowDate,
//   returnDate,
//   DATEDIFF(returnDate, borrowDate) AS days_diff
// FROM borrows;
