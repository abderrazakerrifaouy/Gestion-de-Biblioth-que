<?php
class Helper {
    public static function view($path, $data = []) {
        extract($data);
        $is_visiteur = !isset($_SESSION['role']);
        require_once __DIR__ . "./../views/layoute.php";
    }

    public static function redirect($url) {
        header("Location: $url");
        exit;
    }

    public static function old($field) {
        return $_POST[$field] ?? '';
    }
}
