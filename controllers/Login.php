<?php
class Login extends Controller{
    public function performAction(){
        $this->renderView('login',[]);
    }

    public function renderView($view,$data=[]){
        
        include "./views/$view.php";
    }
}
?>