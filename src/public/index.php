<?php
require_once __DIR__."./../app/Core/Router.php";
require_once __DIR__."./../app/routes/wep.php";
require_once __DIR__ . "./../app/models/Admin.php";
require_once __DIR__ . "./../app/models/Lecteur.php";
require_once __DIR__ . "./../app/models/Book.php";

session_start(); 
$router = new Router();
wep($router);
$router->generePath();


















// abstract class Animal{
//     public  $name ;
//     public  $age  ;

//     public function __construct($name , $a){
//         $this->name = $name;
//         $this->age = $a;
//     }

//     public function eat(){
//         return $this->age ;
//     }
// }

// class Achibe extends Animal{
//         public $vitase;

//     public function __construct($name , $a , $sora){
//         $this->vitase = $sora;
//     }
    
// }


// class Lahime extends Animal{
//     public $snane;

//     public function __construct($name , $a , $snane){
//         // parent::__construct($name , $a );
//         $this->snane = $snane;
//     }

    

    
// }


// $sba3e = new Lahime("sba3e" , 22 , 10);

// echo $sba3e->eat();







