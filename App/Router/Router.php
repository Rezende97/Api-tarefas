<?php

    require_once '../vendor/autoload.php';

    use CoffeeCode\Router\Router;
    use App\Config\Config;

    $router = new Router(Config::url());

    /**
     * namespace do controller da classe
     */
    $router->namespace("App\Controllers");

    /**
     * Group: nome da url 
     * Home: controller
     * index: metodo
     */
    $router->group(null); 
    $router->get("/", "Home:index");
    $router->post("/", "Home:show");
    $router->put("/", "Home:update");
    $router->delete("/", "Home:delete");

    $router->group('login');
    $router->post("/", "Login:authentication");

    /**
     * 
     * Tratamento de erro
     * 
     */
    $router->group("error");
    $router->get("/{error}", function($data){
        echo "Erro: {$data['error']}";
    });

    $router->dispatch(); 

    if($router->error()){
        $router->redirect("/error/{$router->error()}");
    }