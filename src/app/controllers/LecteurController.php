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
    public function profile()
    {

        Helper::view("Lecteur/profile" , [
            "user"=> $_SESSION['user']
        ]);
    }

    public function modify_profile()
{
    $id_user   = $_SESSION['user']->id;
    $first_name = $_POST['firstName'];
    $last_name  = $_POST['lastName'];
    $email      = $_POST['email'];

    $sql = "UPDATE users 
            SET firstName = :first_name, 
                lastName = :last_name, 
                email = :email 
            WHERE id = :id";

    $query = $this->connection->prepare($sql);
    $query->bindParam(':first_name', $first_name);
    $query->bindParam(':last_name', $last_name);
    $query->bindParam(':email', $email);
    $query->bindParam(':id', $id_user);
    $query->execute();

    
    $_SESSION['user']->firstName = $first_name;
    $_SESSION['user']->lastName  = $last_name;
    $_SESSION['user']->email     = $email;

    header("Location: /profile");
    exit;
}

    private function fetchBorrowsByUser(string $sql, bool $single = false)
    {
        $id_user = $_SESSION['user']->id;

        $query = $this->connection->prepare($sql);
        $query->execute(['id' => $id_user]);

        return $single
            ? $query->fetch(PDO::FETCH_ASSOC)
            : $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContBooks()
    {
        $sql = "SELECT COUNT(*) AS total FROM borrows WHERE readerId = :id";
        $result = $this->fetchBorrowsByUser($sql, true);
        return $result['total'];
    }

    public function getDaysBooks()
    {
        $sql =
            " SELECT 
                e.id ,
                e.image_path,
                e.title,
                e.author,
                b.borrowDate ,
                DATE_ADD(b.borrowDate, INTERVAL 4 DAY) AS return_date,
                DATEDIFF(DATE_ADD(b.borrowDate, INTERVAL 4 DAY), CURDATE()) AS days_left
            FROM borrows b
            JOIN books e ON b.bookId = e.id
            WHERE b.readerId = :id
            AND b.returnDate IS NULL
        ";

        return $this->fetchBorrowsByUser($sql);
    }

    public function getHistories()
    {
        $sql = "
            SELECT 
                e.title,
                e.author,
                b.borrowDate,
                b.returnDate
            FROM borrows b
            JOIN books e ON e.id = b.bookId
            WHERE b.readerId = :id
        ";

        return $this->fetchBorrowsByUser($sql);
    }

    public function getLastBorrowNotReturned()
    {
        $sql = "
        SELECT 
            e.title,
            e.author,
            b.borrowDate
        FROM borrows b
        JOIN books e ON e.id = b.bookId
        WHERE b.readerId = :id
        AND b.returnDate IS NULL
        ORDER BY b.borrowDate DESC
        LIMIT 1
    ";


        return $this->fetchBorrowsByUser($sql, true);
    }


  
    public function getAllBooks()
    {
        $query = $this->connection->prepare("SELECT * FROM books");
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $books = [];

        foreach ($result as $row) {
            $books[] = new Book(
                $row['id'],
                $row['title'],
                $row['author'],
                $row['year'],
                $row['status'],
                $row['image_path']
            );
        }

        return $books;
    }

    public function index()
    {

        Helper::view("/Lecteur/index", [
            "books" => $this->getDaysBooks(),
            "history" => $this->getHistories(),
            "totalBooks" => $this->getContBooks(),
            "lastBorrow" => $this->getLastBorrowNotReturned()
        ]);
    }

    public function my_borrows()
    {
        Helper::view("Lecteur/my_borrows", [
            "books" => $this->getDaysBooks(),
            "allBooks" => $this->getAllBooks(),
            "history" => $this->getHistories()
        ]);
    }

    public function create_borrows()
    {
        $id_user = $_SESSION['user']->id;
        $bookId = $_POST['bookId'];
        $sql = "INSERT INTO borrows (readerId, bookId, borrowDate) VALUES (:readerId, :bookId, NOW()) ;
        UPDATE books SET status = 'borrowed' WHERE id = :bookId ";
        $query = $this->connection->prepare($sql);
        $query->bindParam(':readerId', $id_user);
        $query->bindParam(':bookId', $bookId);
        $query->execute();
        header("Location: /my-borrows");
    }


    public function explore()
    {
        Helper::view("Lecteur/explore", [
            "books" => $this->getAllBooks()
        ]);
    }

    public function logoutextes()
    {
        session_destroy();
        header("Location: /");
        exit;
    }


    function umBorrows()
    {
        $id_book = $_POST['bookId'];
        $id_user = $_SESSION['user']->id;
        $sql = " UPDATE borrows SET returnDate = NOW() WHERE bookId = :bookId AND readerId = :readerId AND returnDate IS NULL ; 
        UPDATE books SET status = 'available' WHERE id = :bookId ";
        $query = $this->connection->prepare($sql);
        $query->bindParam(':bookId', $id_book);
        $query->bindParam(':readerId', $id_user);
        $query->execute();
        header("Location: /");

    }
}
