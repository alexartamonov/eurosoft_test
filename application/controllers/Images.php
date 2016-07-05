<?php

/**
 * Created by PhpStorm.
 * User: ESTGold_USER
 * Date: 26.05.2016
 * Time: 2:28
 */
class Images extends CI_Controller
{
    public function index()
    {
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        $this->load->library('Pagination');
        $this->load->model("Images_model");
        $db = new Images_model();
        $atpage = 27; //количество на странице
        $list = $db->getListAtPage($atpage, $page);
        $count = $db->getCountOf();
        $link = "images/index";
        $this->smartyci->assign("images",$list);
        $this->pagination = new Pagination($this->smartyci, $link, $page);
        $navigation = $this->pagination->create($page, $count, $atpage);
        $this->smartyci->display("meta.tpl");
        $this->smartyci->display("images/index.tpl");
        echo $navigation;
        $this->smartyci->display("footer.tpl");
    }

    public function upload()
    {
        $this->smartyci->display("meta.tpl");
        $this->smartyci->display("images/loadform.tpl");
        $this->smartyci->display("footer.tpl");
    }
    public function get(){

        $post = $this->service->parsePostExt(array("id"));
        $this->load->model("images_model");
        $db = new Images_model();
        $data = $db->getById($post['id']);
        $data['url'] = base_url().$data['path'];
        echo json_encode($data);
    }
    public function uploadPost()
    {
        $data = $this->service->parsePostExt(array("comment"));
        $this->load->model("Images_model");
        $imageModel = new Images_model();
        $list = $this->fileuploader->uploadImage($this, "/uploads/", "jpg|png|gif");
        foreach ($list as $image) {
            $image['thumb'] = $this->resize($image);
            $imageModel->create(array("path" => $image['path'],"comment"=> $data['comment'], "user_id" => "NULL", "thumb" => $image['thumb']));
            /*
             * Пока не подключена авторизация
            if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == true) {
                    $imageModel->create(array("path" => $image['path'],"comment"=> $_POST['comment'], "user_id" => $_SESSION['user_id']));
                } else {
                    $imageModel->create(array("path" => $image['path'],"comment"=> $_POST['comment'], "user_id" => "NULL"));
                }
            } else {
                $imageModel->create(array("path" => $image['path'],"comment"=> $_POST['comment'], "user_id" => "NULL"));
            }
            */
        }
        $this->service->redirectToAction("images");
    }

    private function resize($image){
        $thumb_path = '/uploads/thumb/';
        $config['image_library'] = 'gd2';
        $config['source_image'] = '.'.$image['path'];
        $config['new_image'] = '.'.$thumb_path;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 300;
        $config['height']       = 300;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        return $thumb_path.$image['raw_name']."_thumb".$image['file_ext'];
    }
}