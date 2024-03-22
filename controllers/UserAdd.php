<?php
include_once "./models/UserDAO.php";

class UserAdd extends Controller{
    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $this->renderView("userAdd",[]);
        }
    }
}
?>