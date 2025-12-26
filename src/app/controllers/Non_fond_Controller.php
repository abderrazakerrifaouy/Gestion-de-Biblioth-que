<?php
require_once __DIR__."./../Core/Controller.php";
require_once __DIR__."./../Core/Helper.php";
class Non_fond_Controller  {
    public function notFound() {
        Helper::view("errors/index" );
    }
    
}