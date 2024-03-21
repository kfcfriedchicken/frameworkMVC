<?php
class Controller{
    public $model;

    public function performAction(){
        return;
    }

    public function renderView($view,$data=[]){
        extract($data);

        include "views/header.php";
        include "views/$view.php";
        include "views/footer.php";
    }
}
?>