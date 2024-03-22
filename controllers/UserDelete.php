<?php
include_once "./models/UserDAO.php";

class UserDelete extends Controller{
    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $userID = $_GET['userID'];
            $userDAO = new UserDAO();
            $user = $userDAO->getUser($userID);
            $this->renderView("userDelete",$user);
        }else{
            //** Get HTTP Input */
            $userID=$_POST['userID'];
            //** Update Model */
            $userDAO = new UserDAO();
            $userDAO->deleteUser($userID);
            //** Next View */
            header( "Location: start.php?action=userList");
            exit;
        }
    }
}
?>