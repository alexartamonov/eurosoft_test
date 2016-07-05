<?php

/**
 * Created by PhpStorm.
 * User: ESTGold_USER
 * Date: 26.05.2016
 * Time: 23:09
 */
class FileUploader
{

    public function uploadImage($ci, $path, $type)
    {
        $config['upload_path'] = "." . $path;
        $config['allowed_types'] = $type;
        $config['max_size'] = 10000;
        $config['max_width'] = 20480;
        $config['max_height'] = 15360;
        $ci->load->library('upload', $config);
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        $fileList = array();
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['userfile']['name'] = "image_" . "_" . preg_replace('/[\x{0410}-\x{042F}]+.*[\x{0410}-\x{042F}]+/iu', '', $_FILES['userfile']['name'][$i]);
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
            $ci->upload->do_upload();
            $data = $ci->upload->data();
           // echo print_r($data);
            if (!is_dir("." . $path . $data["file_name"])) {
                array_push($fileList, array("path" => $path . $data["file_name"], "file_name" => $data['file_name'], "raw_name" => $data['raw_name'], "file_ext" => $data['file_ext']));
            }
        }
        return $fileList;
    }

    function isRussian($text)
    {
        return preg_match('/[А-Яа-яЁё]/u', $text);
    }
}