<?php

namespace DataBase\Models;

session_start();

require_once(__DIR__.'/../Model.php');

use DataBase\Model;

class Home extends Model{

    public function settings(){
        $settings = $this->table('settings')->select()->where('id','0')->get();
        return $settings->fetch();
    }

    public function language($id){
        $language = $this->table('programming_languages')->select()->where("id",$id)->get();
        return $language->fetch();
    }

    public function allLanguages(){
        $languages = $this->table('programming_languages')->select()->get();
        return $languages;
    }

    public function sendContact($request){
        $this->table('contacts')->insert(array_keys($request),array_values($request));
    }

    public function sendSubscriber($request){    
        $this->table('subscribers')->insert(['email','repeatEmail'],[$request['email'],$request['email']]);
    }

    public function questions($languageID){
        $questions = $this->table('questions')->select()->where('plang_id',$languageID)->get();
        return $questions;
    }

    public function question($id){
        $question = $this->table('questions')->select()->where('id',$id)->get()->fetch();
        return $question != null ? $question : null;
    }

    public function allAnswers($id){
        $answers = $this->table('answers')->select()->where('question_id',$id)->get();
        $countAnswers = $this->table('answers')->counts()->where('question_id',$id)->get();
        return [
            'answers' => $answers,
            'countAnswers' => $countAnswers
        ];
    }

    public function profile($username){
        $user = $this->table('users')->select()->where('username',$username)->get()->fetch();
        return $user;
    }

    public function checkFollow($user_id,$following_id){
        $user = $this->connection->query('SELECT * FROM `followers` WHERE `user_id` = "'.$user_id.'" AND `following_id` = "'.$following_id.'" ')->fetch();
        // die(var_dump($user));
        if($user == null or $user == false){
            return false;
        }
        return true;
    }

    public function followers($user_id){
        $followers = $this->table('followers')->counts()->where('following_id',$user_id)->get()->fetch();
        return $followers;
    }

    public function followings($user_id){
        $followings = $this->table('followers')->counts()->where('user_id',$user_id)->get()->fetch();
        return $followings;
    }

    public function recentQuestions($user_id){
        $questions = $this->table('questions')->select()->where('user_id',$user_id)->get()->fetchAll();
        return $questions;
    }

    public function listFollowers($following_id){
        $followings = $this->table('followers')->select()->where('following_id',$following_id)->get()->fetchAll();
        return $followings;
    }

    public function listFollowings($follower_id){
        $followers = $this->table('followers')->select()->where('user_id',$follower_id)->get()->fetchAll();
        return $followers;
    }
}
