<?php
class Login extends Controller{
    public function performAction(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $this->renderView('login',[]);
        }else{
            if(isset($_POST['username']) && isset($_POST['passwd'])){
                $username = $_POST['username'];
                $passwd = $_POST['passwd'];

                $userDAO = new UserDAO();
                $result = $userDAO->authenticate($username,$passwd);
                if($result==NULL){
                    header("Location: start.php?action=login");
                    exit;
                }else{
                    $_SESSION['loggedin']=$result;
                    header("Location: start.php?action=home");
                    exit;
                }
            }
        }

    }

    public function renderView($view,$data=[]){
        
        include "./views/$view.php";
    }
}
?>