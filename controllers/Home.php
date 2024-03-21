<?php
class Home extends Controller{
    public function performAction(){
        $data=['lname'=>'Smith','fname'=>'Joe'];
        $this->renderView('home',$data);
    }
}
?>