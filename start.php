<?php
    include_once "./framework/Controller.php";
    include_once "./framework/Router.php";
    include_once "./controllers/Home.php";
    include_once "./controllers/About.php";
    include_once "./controllers/UserList.php";
    include_once "./controllers/UserAdd.php";
    include_once "./controllers/UserUpdate.php";
    include_once "./controllers/UserDelete.php";

    $router = new Router();
    $router->showErrors(0);

    $router->addController('home',new Home());
    $router->addController('about',new About());
    $router->addController('userList',new UserList());
    $router->addController('userAdd',new UserAdd());
    $router->addController('userUpdate',new UserUpdate());
    $router->addController('userDelete',new UserDelete());

    $router->run();

?>