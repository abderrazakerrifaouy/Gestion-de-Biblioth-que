<?php
class Helper
{
    public static function view($path, $data = [])
    {
        extract($data);
        $is_visiteur = !isset($_SESSION['role']);
        require_once __DIR__ . "./../views/layoute.php";
    }

    public static function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    
    public static function timeAgo($datetime)
    {
        $time = strtotime($datetime);
        $diff = time() - $time;

        if ($diff < 60) {
            return "À l’instant";
        } elseif ($diff < 3600) {
            return "Il y a " . floor($diff / 60) . " min";
        } elseif ($diff < 86400) {
            return "Il y a " . floor($diff / 3600) . " h";
        } else {
            return "Il y a " . floor($diff / 86400) . " j";
        }
    }

}
