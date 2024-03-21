<?php
    include_once "Controller.php";
    include_once "Router.php";
    include_once "./controllers/Home.php";

    $router = new Router();
    $router->showErrors(0);

    $router->addController('home',new Home());

    $router->run();

?>