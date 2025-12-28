<?php

require_once __DIR__ . "/../Core/Controller.php";
require_once __DIR__ . "/../Core/Helper.php";
require_once __DIR__ . "/../Core/Database.php";

class AdminController implements controllers
{
    private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connection();
    }


    public function profile(): void
    {
        Helper::view("Lecteur/profile", [
            "user" => $_SESSION['user']
        ]);
    }

    public function modify_profile(): void
    {
        $sql = "
            UPDATE users 
            SET firstName = :firstName,
                lastName  = :lastName,
                email     = :email
            WHERE id = :id
        ";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            ':firstName' => $_POST['firstName'],
            ':lastName'  => $_POST['lastName'],
            ':email'     => $_POST['email'],
            ':id'        => $_SESSION['user']->id
        ]);

        $_SESSION['user']->firstName = $_POST['firstName'];
        $_SESSION['user']->lastName  = $_POST['lastName'];
        $_SESSION['user']->email     = $_POST['email'];

        header("Location: /profile");
        exit;
    }

    public function index(): void
    {
        Helper::view("admin/index", [
            "lastBorrows"    => $this->getLastBorrows(),
            "users"          => $this->getAllUsers(),
            "books"          => $this->getAllBooks(),
            "borrowsActives" => $this->getActiveBorrows(),
            "rotareBorrows"  => $this->getLateBorrows()
        ]);
    }

    public function Utilisateurs(): void
    {
        $users = $this->getAllUsers();

        Helper::view("admin/utilisateurs", [
            "users"       => $users,
            "totalUsers"  => count($users),
            "activeUsers" => $this->getActiveUsersCount(),
            "adminUsers"  => $this->getAdminUsersCount()
        ]);
    }

    private function getAllUsers(): array
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE role='lecteur'");
        $stmt->execute();

        $users = [];
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $users[] = new Lecteur(
                $row['id'],
                $row['firstName'],
                $row['lastName'],
                $row['email'],
                $row['password']
            );
        }
        return $users;
    }

    private function getAdminUsersCount(): int
    {
        return (int) $this->connection
            ->query("SELECT COUNT(*) FROM users WHERE role='admin'")
            ->fetchColumn();
    }

    private function getActiveUsersCount(): int
    {
        $sql = "
            SELECT COUNT(DISTINCT readerId)
            FROM borrows
            WHERE borrowDate >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
        ";
        return (int) $this->connection->query($sql)->fetchColumn();
    }

    public function Livres(): void
    {
        Helper::view("admin/livres", [
            "books" => $this->getAllBooks()
        ]);
    }

    private function getAllBooks(): array
    {
        $stmt = $this->connection->query("SELECT * FROM books");
        $books = [];

        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
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

    public function ajouter_Livre(): void
    {
        Helper::view("admin/ajouter_livere");
    }

    public function create_Livre(): void
    {
        $sql = "
            INSERT INTO books (title, author, year, image_path, status)
            VALUES (:title, :author, :year, :image, 'available')
        ";

        $this->connection->prepare($sql)->execute([
            ':title'  => $_POST['title'],
            ':author' => $_POST['author'],
            ':year'   => $_POST['year'],
            ':image'  => $_POST['image']
        ]);

        header("Location: /books");
        exit;
    }

    public function ModifairBook(): void
    {
        $stmt = $this->connection->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->execute([':id' => $_GET['book_id']]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $book = new Book(
            $row['id'],
            $row['title'],
            $row['author'],
            $row['year'],
            $row['status'],
            $row['image_path']
        );

        Helper::view("admin/modifeiLiver", ["book" => $book]);
    }

    public function update_Book(): void
    {
        $sql = "
            UPDATE books
            SET title=:title, author=:author, year=:year, image_path=:image
            WHERE id=:id
        ";

        $this->connection->prepare($sql)->execute([
            ':title' => $_POST['title'],
            ':author'=> $_POST['author'],
            ':year'  => $_POST['year'],
            ':image' => $_POST['image_url'],
            ':id'    => $_GET['book_id']
        ]);

        header("Location: /books");
        exit;
    }

    public function seprimmer_Livre(): void
    {
        $this->connection->prepare("DELETE FROM borrows WHERE bookId = :id")
            ->execute([':id' => $_POST['book_id']]);

        $this->connection->prepare("DELETE FROM books WHERE id = :id")
            ->execute([':id' => $_POST['book_id']]);

        header("Location: /books");
        exit;
    }

    public function emprunts(): void
    {
        Helper::view("admin/emprunts", [
            "borrows" => $this->getAllBorrows(),
            "countRotareBorrows" => $this->getLateBorrowsCount()
        ]);
    }

    private function getAllBorrows(): array
    {
        $sql = "
            SELECT 
                b.id,
                bo.title,
                u.firstName,
                u.lastName,
                b.borrowDate,
                b.returnDate,
                DATE_ADD(b.borrowDate, INTERVAL 4 DAY) AS returnDateAcc,
                DATEDIFF(DATE_ADD(b.borrowDate, INTERVAL 4 DAY), CURDATE()) AS days_left
            FROM borrows b
            JOIN books bo ON bo.id=b.bookId
            JOIN users u ON u.id=b.readerId
            ORDER BY b.borrowDate DESC
        ";

        return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    private function getLateBorrows(): array
    {
        $sql = "
            SELECT * FROM borrows
            WHERE 
                (returnDate IS NULL AND DATE_ADD(borrowDate, INTERVAL 4 DAY) < CURDATE())
                OR
                (returnDate IS NOT NULL AND DATE_ADD(borrowDate, INTERVAL 4 DAY) < returnDate)
        ";
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    private function getLateBorrowsCount(): int
    {
        return count($this->getLateBorrows());
    }

    private function getActiveBorrows(): array
    {
        return $this->connection
            ->query("SELECT * FROM borrows WHERE returnDate IS NULL")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    private function getLastBorrows(int $limit = 5): array
    {
        $sql = "
            SELECT 
                b.borrowDate,
                bo.title AS book_title,
                CONCAT(u.firstName,' ',u.lastName) AS reader_name
            FROM borrows b
            JOIN books bo ON bo.id = b.bookId
            JOIN users u ON u.id = b.readerId
            ORDER BY b.borrowDate DESC
            LIMIT :limit
        ";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function logoutextes(): void
    {
        session_destroy();
        header("Location: /");
        exit;
    }
}
