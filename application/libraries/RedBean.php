<?php
/**
 * Created by PhpStorm.
 * User: ESTGold_USER
 * Date: 26.05.2016
 * Time: 2:38
 */
class RedBean{

    function __construct() {
        // Include database configuration
        include(APPPATH.'/config/database.php');

        // Get Redbean
        include(APPPATH.'/third_party/rb/rb.php');

        // Database data
        $host = $db[$active_group]['hostname'];
        $user = $db[$active_group]['username'];
        $pass = $db[$active_group]['password'];
        $db = $db[$active_group]['database'];

        // Setup DB connection
        R::setup("mysql:host=$host;dbname=$db", $user, $pass);

        //Защита от подкидывания
        R::freeze(false);
    }
}
