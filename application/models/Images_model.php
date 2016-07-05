<?php

class Images_model extends CI_Model{

    public function getById($id){
        return R::getRow("SELECT * FROM images WHERE id = ?", array($id));
    }

    public function getList(){
        return R::getAll("SELECT id,comment,thumb FROM images ORDER by id DESC");
    }

    public function getListAtPage($count,$page){
        return R::getAll("SELECT id,comment,thumb FROM images ORDER BY id DESC LIMIT ?,?", array(($page-1)*$count,$count));
    }
    public function getUsersListAtPage($count,$page, $userid){
        return R::getAll("SELECT id,comment,thumb FROM images WHERE user_id = ? ORDER BY id DESC LIMIT ?,?", array($userid,($page-1)*$count,$count));
    }

    public function update($data){

    }
    
    public function delete($id){

    }

    public function getCountOf(){
        $row = R::getRow("SELECT count(id) FROM images");
        return $row['count(id)'];
    }

    public function getUsersCountOf($id){
        $row = R::getRow("SELECT count(id) from images WHERE user_id = ?", array($id));
        return $row['count(id)'];
    }
    public function create($data){
        $image = R::dispense("images");
        $image->import($data);
        R::store($image);
    }
}