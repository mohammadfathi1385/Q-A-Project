<?php

namespace DataBase;

require_once(__DIR__.'/Model.php');

use DataBase\Model;

class API extends Model{

    public function checkToken($token)
    {
        $user = $this->table('apitokens')->select()->where('token',$token)->get()->fetch();
        return $user;
    }

    public function users(){
        $result = $this->connection->query('SELECT `id`,`fullname`,`username`,`email`,`bio`,`favorite_plang` FROM `users` ')->fetchAll();
        echo json_encode($result);
    }

    public function selectUser($id){
        $result = $this->connection->query('SELECT `fullname`,`username`,`email`,`bio`,`favorite_plang` FROM `users` WHERE `id` = '.$id)->fetchAll();
        echo json_encode($result);
    }

    public function questions(){
        $result = $this->connection->query('SELECT * FROM `questions` ')->fetchAll();
        echo json_encode($result);
    }

    public function selectQuestion($question_id){
        $result = $this->table('questions')->select()->where('id',$question_id)->get()->fetchAll();
        echo json_encode($result);
    }

    public function answers(){
        $result = $this->connection->query('SELECT * FROM `answers` ')->fetchAll();
        echo json_encode($result);
    }

    public function selectAnswers($answer_id){
        $result = $this->table('answers')->select()->where('id',$answer_id)->get()->fetchAll();
        echo json_encode($result);
    }

    public function settings(){
        $result = $this->connection->query('SELECT * FROM `settings` WHERE `id` = 0 ')->fetch();
        echo json_encode($result);
    }

    public function favorite_languages(){
        $result = $this->connection->query('SELECT * FROM `favorite_language` ')->fetchAll();
        echo json_encode($result);
    }

    public function programming_languages(){
        $result = $this->connection->query('SELECT * FROM `programming_languages` ')->fetchAll();
        echo json_encode($result);
    }

    public function menus(){
        $result = $this->connection->query('SELECT * FROM `menus` ')->fetchAll();
        echo json_encode($result);
    }

}

