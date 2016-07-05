<?php

/**
 * Created by PhpStorm.
 * User: ESTGold
 * Date: 29.11.2015
 * Time: 5:01
 */
class Pagination
{
    private $smarty;
    private $url;

    /**
     * @param $smarty - объект смарти
     * @param $url - сслыка перехода
     */

    public function __construct($smarty, $url)
    {
        $this->smarty = $smarty;
        $this->url = $url;
    }

    public function create($page, $count, $atpage)
    {
        if ($count <= $atpage) {
            return "";
        } else {
            $result = new stdclass;
            $result->currentPage = $page;
            $countOfPages = ceil($count / $atpage);
            if($countOfPages>3){
                $result->toStart = 0;
                $result->toEnd = $countOfPages;
            }
            if ($countOfPages == 1) {
                return "";
            } else {
                if ($page != 1) {
                    $result->prev = true;
                } else {
                    $result->prev = false;
                }
                if ($page != $countOfPages) {
                    $result->next = true;
                } else {
                    $result->next = false;
                }
                $result->pages = array();
                if ($page > 2) {
                    for ($i = -2; $i < 2 && $i <= $countOfPages - $page; $i++) {
                        $result->pages[$i] = new stdclass;
                        $result->pages[$i]->value = ($page) + $i;
                        if ($i == 0) {
                            $result->pages[$i]->active = true;
                        }
                    }

                } else {
                    for ($i = 1; $i <= 4 && $i <= $countOfPages; $i++) {
                        $result->pages[$i] = new stdclass;
                        $result->pages[$i]->value = $i;
                        if ($i == $page) {
                            $result->pages[$i]->active = true;
                        }
                    }
                }

                $this->smarty->assign("result", $result);
                $this->smarty->assign("METHOD", $this->url);
                return $this->smarty->fetch("modules/pagination.tpl");
            }
        }
    }
}