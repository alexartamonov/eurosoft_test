<?php

class Admin extends CI_Controller{

    public function index(){

    }
    public function debug(){
        if(isset($_SESSION['debug'])){
            unset($_SESSION['debug']);

        }
        else{
            $_SESSION['debug'] = true;

        }
        $this->service->redirectToAction("images");
    }
}