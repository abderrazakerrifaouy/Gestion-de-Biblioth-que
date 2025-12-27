<?php

function wep($router){
    $router->get("/", "AdminController@index" , "admin");
    $router->get("/", "LecteurController@index","lecteur");
    $router->get("/books","LecteurController@explore","lecteur");
    $router->get("/my-borrows","LecteurController@my_borrows","lecteur");
    $router->get("/","VisiteurController@index","visiteur");
    $router->get("/login","VisiteurController@login","visiteur");
    $router->get("/how-it-works","VisiteurController@how_it_works","visiteur");
    $router->get("/books","VisiteurController@explore_catalog","visiteur");
    $router->get("/logout","LecteurController@logoutextes","lecteur");
    $router->get("/logout","AdminController@logoutextes","admin");
    $router->get("/create_account","VisiteurController@register","visiteur");
    $router->get("/profile","LecteurController@profile","lecteur");
    $router->post("/create_account","VisiteurController@create_account","visiteur");
    $router->post("/login","VisiteurController@save_login","visiteur");
    $router->post("/create_borrows","LecteurController@create_borrows","lecteur");
    $router->post("/return_borrows","LecteurController@umBorrows","lecteur");
    $router->post("/modify_profile","LecteurController@modify_profile","lecteur");


}