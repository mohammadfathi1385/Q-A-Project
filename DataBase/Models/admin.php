<?php

namespace DataBase\Models;

session_start();

require_once(__DIR__.'/../Model.php');

use DataBase\Model;

class admin extends Model
{
    public function checkAdmin()
    {
        if (isset($_SESSION['user'])){
            $id = $_SESSION['user'];
            $user = $this->table('users')->select()->where('id',$id)->get()->fetch();
            if ($user['role'] == 'admin'){
                return true;
            }
            return false;
        }
        return false;
    }

    public function lastQuestion(){
        $questions = $this->connection->query('SELECT * FROM `questions` ORDER BY `id` DESC LIMIT 5')->fetchAll();
        return $questions;
    }

    public function lastAnswer(){
        $answers = $this->connection->query('SELECT * FROM `answers` ORDER BY `id` DESC LIMIT 5')->fetchAll();
        return $answers;
    }

    public function lastReports(){
        $reports = $this->connection->query('SELECT * FROM `reports` ORDER BY `id` DESC LIMIT 5')->fetchAll();
        return $reports;
    }

    public function allQuestions(){
        $questions = $this->table('questions')->select()->get()->fetchAll();
        return $questions;
    }

    public function allAnswers(){
        $answers = $this->table('answers')->select()->get()->fetchAll();
        return $answers;
    }

    public function lastNotifications($user_id){
        $notifications = $this->connection->query('SELECT * FROM `notifications` WHERE `user_id` = "'.$user_id.'" ORDER BY `id` DESC LIMIT 5')->fetchAll();
        return $notifications;
    }

    public function notifications($user_id){
        $notifications = $this->connection->query('SELECT * FROM `notifications` WHERE `user_id` = "'.$user_id.'" AND `status` = "unread" ')->fetchAll();
        return $notifications;
    }

    public function notCompleteRegister(){
        $users = $this->connection->query('SELECT * FROM `users` WHERE `verify_token` IS NOT NULL ')->fetchAll();
        return $users;
    }

    public function users(){
        $users = $this->connection->query('SELECT * FROM `users` WHERE `role` = "user" OR `role` = "helper" ')->fetchAll();
        return $users;
    }

    public function changeRole($user_id){
        $user = $this->table('users')->select()->where('id',$user_id)->get()->fetch();
        if($user['role'] == 'user'){
            $this->connection->query('UPDATE TABLE `users` SET `role` = "helper" WHERE `id` = "'.$user_id.'" ');
            return true;
        }elseif($user['role'] == 'helper'){
            $this->connection->query('UPDATE TABLE `users` SET `role` = "user" WHERE `id` = "'.$user_id.'" ');
            return true;
        }
        return false;
    }

    public function registerUser($user_id){
        $user = $this->table('users')->select()->where('id',$user_id)->get()->fetch();
        if($user['verify_token'] != NULL or $user['verify_token'] != 'NULL'){
            $this->connection->query('UPDATE TABLE `users` SET `verify_token` = NULL WHERE `id` = "'.$user_id.'" ');
        }
    }

    public function reports(){
        $reports = $this->table('reports')->select()->get()->fetchAll();
        return $reports;
    }

    public function profile($user_id){
        $users = $this->table('users')->select()->where('id',$user_id)->get()->fetch();
        return $users;
    }

    public function updateProfile($request){
        $password = password_hash($request['newPassword'],PASSWORD_DEFAULT);
        $request = array_merge($request,['password' => $password]);
        unset($request['lastPassword']);
        unset($request['newPassword']);
        $this->table('users')->update(array_keys($request),array_values($request),$_SESSION['user']);
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

    public function checkPassword($password,$user_id){
        $user = $this->table('users')->select()->where('id',$user_id)->get()->fetch();
        if(password_verify($password,$user['password'])){
            return true;
        }
        return false;
    }

    public function contacts(){
        $contacts = $this->table('contacts')->select()->get()->fetchAll();
        return $contacts;
    }

    public function count($tableName){
        $counts = $this->table($tableName)->counts()->get()->fetch();
        return $counts;
    }

    public function deleteReport($id){
        $this->table('reports')->delete($id);
    }

    public function deleteUser($id){
        $user = $this->table('users')->select()->where('id',$id)->get()->fetch();
        if($user['role'] == 'user' or $user['role'] == 'helper'){
            $this->table('users')->delete($id);
        }
    }

    public function deleteContact($id){
        $this->table('contacts')->delete($id);
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
