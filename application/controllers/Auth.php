<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {


        $this->smartyci->display("meta.tpl");
        $this->smartyci->display("auth/login.tpl");
        $this->smartyci->display("footer.tpl");
    }

    public function register(){
        $this->smartyci->display("meta.tpl");
        $this->smartyci->display("auth/register.tpl");
        $this->smartyci->display("footer.tpl");
    }

    public function registerpost() {
        $data = $this->service->parsePostExt(array("email", "password",
            "password_repeat", "name"));
        if ($data['password'] == $data['password_repeat']) {
            $this->load->model('User_model');
            $db = new User_model();
            $id = $db->storeUser($data);


            $user = $db->getUserByLogin($data['email']);
            $this->sendConfirmEmail($user);
            echo json_encode(array("result" => true, "id" => $id));
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
           // $_SESSION['role'] = $user['roleid'];
        } else {
            echo json_encode(array("result" => false));
        }
    }

    public function login() {

        $this->smartyci->display("meta.tpl");
        $this->smartyci->display("auth/login.tpl");
        $this->smartyci->display("footer.tpl");
    }

    public function restore()
    {
        $this->service->debug($_GET);
    }


    public function loginpost() {
        $data = $this->service->parsePostExt(array(
            "login",
            "password"

        ));
        $this->load->model('User_model');
        $db = new User_model();

        $user = $db->getUserByLogin($data['login']);
        if ($user != null) {
            if (md5($data['password'] . $user['salt']) == $user['password']) {
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['roleid'];
                if($_SESSION['role'] > 0){
                    echo json_encode(array("result" => true, "userid" => $user['id'], "url" => base_url()."manager"));
                }
                else{
                    echo json_encode(array("result" => true, "userid" => $user['id'], "url" => base_url()."profile/index"));
                }
            } else {
                echo json_encode(array("result" => false, "userfound" => true, "invalidPassword" => true));
            }
        } else {
            echo json_encode(array("result" => false, "userfound" => false));
        }
    }

    public function logout() {

        unset($_SESSION['login'], $_SESSION['role'], $_SESSION['user_id']);
        $this->service->redirectToAction("home");

    }

    public function sendConfirmEmail($data) {
        $this->load->library("Emailsender");
        $emailsender = new Emailsender();

        $this->service->debug($data);
        //$emailsender->sendData()
    }

    public function confirmEmail(){
        $email = $_GET['email'];
        $token = $_GET['token'];
        $this->load->model('User_model');
        $db = new User_model();
        $db->confirmEmail($email, $token);
    }

}