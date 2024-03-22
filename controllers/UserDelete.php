<?php
include_once "./models/UserDAO.php";

class UserDelete extends Controller{
    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $this->renderView("userDelete",[]);
        }
    }
}
?>