<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ESTGold_USER
 * Date: 24.11.2015
 * Time: 1:45
 */

class Emailsender extends  CI_Email{

    public function __construct(){
        parent::__construct();
    }

    /**
     * @param $data
     * @param $to
     * @param $subject
     */
    public function sendData($data,$to,$subject){

        $this->from('confirm@est.ru', 'est.ru');
        $this->to($to);
        $this->subject($subject);
        $this->message(
            $data
        );
        $this->send();
    }
}