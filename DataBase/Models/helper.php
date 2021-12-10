<?php

namespace DataBase\Models;

session_start();

require_once(__DIR__.'/../Model.php');

use DataBase\Model;

class helper extends Model{

    public function checkHelper()
    {
        if (isset($_SESSION['user'])){
            $id = $_SESSION['user'];
            $user = $this->table('users')->select()->where('id',$id)->get()->fetch();
            if ($user['role'] != 'helper'){
                die('حساب کاربری شما تائید شده نیست');
            }
        }else{
            die('لطفا وارد حساب کاربری خود شوید');
        }
    }

    public function submitAnswer($request,$question_id){
        $request = array_merge($request,['user_id' => $_SESSION['user']]);
        $request = array_merge($request,['question_id' => $question_id]);
        $this->table('answers')->insert(array_keys($request),array_values($request));
    }
    
    public function lastAnswers(){
        $id = $_SESSION['user'];
        $answers = $this->connection->query('SELECT * FROM `answers` WHERE `user_id` = "'.$id.'" ORDER BY `id` DESC LIMIT 10')->fetchAll();
        return $answers;
    }

    public function answers(){
        $id = $_SESSION['user'];
        $answers = $this->table('answers')->select()->where('user_id',$id)->get()->fetchAll();
        return $answers;
    }

    public function profile(){
        $id = $_SESSION['user'];
        $user = $this->table('users')->select('id',$id)->get()->fetch();
        return $user;        
    }

    public function checkPassword($password,$user_id){
        $user = $this->table('users')->select()->where('id',$user_id)->get()->fetch();
        if(password_verify($password,$user['password'])){
            return true;
        }
        return false;
    }

    public function updateProfile($request){
        $password = password_hash($request['newPassword'],PASSWORD_DEFAULT);
        $request = array_merge($request,['password' => $password]);
        unset($request['lastPassword']);
        unset($request['newPassword']);
        $this->table('users')->update(array_keys($request),array_values($request),$_SESSION['user']);
    }

    public function notifications($user_id){
        $notifications = $this->connection->query('SELECT * FROM `notifications` WHERE `user_id` = "'.$user_id.'" AND `status` = "unread" ')->fetchAll();
        return $notifications;
    }

    public function countNotifications($user_id){
        $notifications = $this->table('notifications')->counts()->where('user_id',$user_id)->get()->fetch();
        $notifications = $this->connection->query('SELECT COUNT(*) FROM `notifications` WHERE `user_id` = "'.$user_id.'" AND `status` = "unread" ')->fetch();
        return $notifications;
    }

    public function readNotification($id){
        $this->table('notifications')->update(['status'],['read'],$id);
    }

    public function unreadNotifications($user_id){
        $this->connection->query('UPDATE `notifications` SET `status` = "unread" WHERE `user_id` = "'.$user_id.'" ');
    }

    public function followers($user_id){
        $followers = $this->table('followers')->counts()->where('following_id',$user_id)->get()->fetch();
        return $followers;
    }

    public function followings($user_id){
        $followings = $this->table('followers')->counts()->where('user_id',$user_id)->get()->fetch();
        return $followings;
    }

}


