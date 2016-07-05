<?php

if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

require_once( 'application/third_party/smarty-3.1.29/libs/Smarty.class.php' );

class SmartyCI extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->caching = 0; // отключаем кэширование на время разработки

        $this->setTemplateDir( APPPATH . 'views' );
        $this->setCompileDir(APPPATH . 'third_party/smarty-3.1.29/templates_c' );
        $this->setConfigDir( APPPATH . 'third_party/smarty-3.1.29/configs' );
        $this->setCacheDir( APPPATH . 'cache' );

        $this->assign("BASE_URL",base_url());
        $this->assign("ASSETS",base_url()."assets/images"); //Ссылка на файлы изображений (для верстки)
        $this->assign("JS",base_url().'assets/js/'); //Прямая ссылка на папку с JS

    }
}