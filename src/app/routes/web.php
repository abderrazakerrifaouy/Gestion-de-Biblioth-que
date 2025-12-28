<?php

function web($router)
{
    /*
     Admin Routes
    */
    $router->get("/", "AdminController@index", "admin");
    $router->get("/books", "AdminController@Livres", "admin");
    $router->get("/create_livre", "AdminController@ajouter_Livre", "admin");
    $router->get("/modify_book", "AdminController@ModifairBook", "admin");
    $router->get("/logout", "AdminController@logoutextes", "admin");
    $router->get("/users", "AdminController@Utilisateurs", "admin");
    $router->get("/emprunts", "AdminController@emprunts", "admin");
    $router->get("/profile", "AdminController@profile", "admin");

    $router->post("/create_livre", "AdminController@create_Livre", "admin");
    $router->post("/update_book", "AdminController@update_Book", "admin");
    $router->post("/delete_book", "AdminController@seprimmer_Livre", "admin");
    $router->post("/modify_profile", "AdminController@modify_profile", "admin");


    /*
     Lecteur Routes
    */
    $router->get("/", "LecteurController@index", "lecteur");
    $router->get("/books", "LecteurController@explore", "lecteur");
    $router->get("/my-borrows", "LecteurController@my_borrows", "lecteur");
    $router->get("/profile", "LecteurController@profile", "lecteur");
    $router->get("/logout", "LecteurController@logoutextes", "lecteur");

    $router->post("/create_borrows", "LecteurController@create_borrows", "lecteur");
    $router->post("/return_borrows", "LecteurController@umBorrows", "lecteur");
    $router->post("/modify_profile", "LecteurController@modify_profile", "lecteur");


    /*
    Visiteur Routes
    */
    $router->get("/", "VisiteurController@index", "visiteur");
    $router->get("/login", "VisiteurController@login", "visiteur");
    $router->get("/create_account", "VisiteurController@register", "visiteur");
    $router->get("/how-it-works", "VisiteurController@how_it_works", "visiteur");
    $router->get("/books", "VisiteurController@explore_catalog", "visiteur");

    $router->post("/login", "VisiteurController@save_login", "visiteur");
    $router->post("/create_account", "VisiteurController@create_account", "visiteur");
}
