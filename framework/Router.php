<?php
    include_once "./framework/Controller.php";

    class Router{
        public $controllers;

        public function __construct(){
            $this->showErrors(0);
            $this->controllers=[];
        }

        public function run(){
            $action="default";

            //** Check if action variable was in HTTP Request */
            if(isset($_REQUEST['action'])){
                $action=$_REQUEST['action'];
            }

            //** Instantiate Controller for Action and Call*/
            $controller = $this->controllers[$action];
            $controller->performAction();
        }

        public function addController($action,$controller){
            $this->controllers[$action] = $controller;
        }

        public function showErrors($debug){
            if($debug==1){
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL & ~E_NOTICE);
            }
        }
    }

?>
