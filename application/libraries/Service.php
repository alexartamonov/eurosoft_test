<?php

/**
 * Created by PhpStorm.
 * User: ESTGold_USER
 * Date: 15.07.2015
 * Time: 20:30
 */


if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );


class service
{

    public function __construct(){

    }


    /**
     * -----------------------
     * isAuthorized()
     * -----------------------
     * проверяет сессию на наличие переменной "login".
     * Если существует и равна "true", то пользователь
     * авторизован.
     *
     * @return bool;
     */

    static function isAuthorized()
    {
        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $params
     * @param null $optionalParams
     * @param null $defaultValue
     * @return array
     * @throws Exception если не все обязательные параметры заданны
     */
    function parsePostExt($params, $optionalParams = null, $defaultValue = null){
        $data = array();
        if($params != null){
            foreach($params as $param) {
                if (isset($_POST[$param])) {
                    $data[$param] = htmlspecialchars(trim($_POST[$param]));
                }
                else{
                    throw new Exception("required ($param) is missing!");
                }
            }
        }
        else{
            throw new Exception("required fields is missing!"); //for stupid developers, like me.
        }
        if($optionalParams != null){
            foreach($optionalParams as $param){
                if (isset($_POST[$param])) {
                    $data[$param] = htmlspecialchars(trim($_POST[$param]));
                }
                else{
                    $data[$param] = $defaultValue;
                }
            }
        }
        return $data;
    }

    /**
     * Жесткая функция, парсит POST запрос в массив
     * @param $params - массив, который содержит в себе список параметров для извлечения array('username','password');
     * @param bool $all - переменная определяет нужно ли делять проверку для всех полей на заполнение
     * @param null $required - масси обязательный параметрова array('username','password');
     * @return array возвращает массив
     * @throws Exception выбрасывает исключение если какой то обязательный параметр не задан
     * @deprecated
     */

    function parsePost($params, $all = true, $required = null)
    {
        $data = array();
        if ($all == true) {
            foreach ($params as $param) {
                if (isset($_POST[$param])) {
                    $data[$param] = htmlspecialchars(trim($_POST[$param]));
                    if (empty($data[$param])) {
                        throw new Exception("required($param) field is missing!");
                    }
                } else {
                    throw new Exception("required($param) field is missing!");
                }
            }
            return $data;
        } else {
            if ($required == null) {
                foreach ($params as $param) {
                    if (isset($_POST[$param])) {
                        $data[$param] = htmlspecialchars(trim($_POST[$param]));
                    }
                    else{
                        $data[$param] = "";
                    }
                }
                return $data;
            } else {
                foreach ($params as $param) {
                    if (isset($_POST[$param])) {
                        $data[$param] = htmlspecialchars(trim($_POST[$param]));
                    }
                    else{
                        $data[$param] = "";
                    }
                }
                foreach ($required as $field) {
                    if (empty($data[$field])) {
                        throw new Exception("required($param) field is missing!3");
                    }
                }
                return $data;
            }
        }
    }


    static function debug($array)
    {
        echo("<pre>");
        print_r($array);
        echo("</pre>");
    }

    function  getUserId()
    {
        if (isset($_SESSION['userid'], $_SESSION['login'])) {
            return $_SESSION['userid'];
        } else {
            return -1;
        }
    }

    /**
     * @param $url перенаправление по ссылке, полный путь
     */

    function redirectToUrl($url)
    {
        header("Location: " . $url);
    }

    /**
     * @param $action - метод контроллера
     * @param $controller - имя контроллера
     * @param null $parameters - параметры
     * @example GET: home/index/1 | home/index
     */
    function  redirectToAction($controller, $action = null, $parameters = null)
    {
        if ($action == null) {
            header("Location: " . base_url() .  $controller);
        }
        if ($parameters != null) {
            header("Location: " . base_url() .  $controller . "/" . $action . "/" . $parameters);
        } else {
            header("Location: " . base_url() . $controller . "/" . $action);
        }
    }

    function fetchURL($controller, $action = null, $parameters = null)
    {
        if ($action == null) {
            return site_url() . $controller;
        }
        if ($parameters != null) {
            return site_url() . $controller . "/" . $action . "/" . $parameters;
        } else {
            return site_url() . $controller . "/" . $action;
        }
    }

    /**
     * @param $roleName - имя роли
     * @return bool
     * вовзращает true если профиль относиться к этой группе
     * !функция не дописана (заглушка) всегда возвращает true
     */


    function userInRole($roleName)
    {
        //TODO заглушка
        return false;
    }

    function initCart(){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
    }

    function getUserInfo(){
        $userdata = array();
        $userdata['ip'] = $_SERVER['REMOTE_ADDR'];
        if(isset($_SERVER['HTTP_REFERER'])) {
            $userdata['refer'] = $_SERVER['HTTP_REFERER'];
        }
        else{
            $userdata['refer'] = "NAN";
        }
            $userdata['count'] = 1;
        return $userdata;
    }

} 