<?php

namespace DataBase\Models;

session_start();

require_once(__DIR__.'/../Model.php');

use DataBase\Model;

class auth extends Model{

    public function register($request,$image){
        $code = bin2hex(random_bytes(100));
        $request = array_merge($request,['verify_token' => $code],['image' => $image]);
        $request['password'] = password_hash($request['password'],PASSWORD_DEFAULT);
        $this->table('users')->insert(array_keys($request),array_values($request));
        return $code;
    }

    public function login($request){
        $email  = trim($request['email']);
        $request['password'] = trim($request['password']);
        // die(var_dump($email));
        if(!empty($request['email']) and !empty($request['password'])){
            $user = $this->connection->query('SELECT * FROM `users` WHERE (`email` = "'.$email.'"); ')->fetch();
            // die(var_dump($user));
            if($user != null or $user != false){
                if(password_verify($request['password'],$user['password'])){
                    if($user['verify_token'] == NULL or $user['verify_token'] == 'NULL' or $user['verify_token'] === 'NULL'){
                        $_SESSION['user'] = $user['id'];
                        return $user['role'];
                    }
                    return null;
                }
                return null;
            }
            return null;
        }
        return null;
    }

    public function forgot($email){
        $stmt = $this->connection->prepare('SELECT * FROM `users` WHERE (`email` = :email) ');
        $stmt->bindParam(':email',$email);
        $user = $stmt->execute();
        return $user == true ? $user['password'] : false;
    }

    public function logout(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
        }
    }

    public function programming_languages(){
        $languages = $this->table('programming_languages')->select()->get();
        return $languages;
    }

    public function verify($token){
        $code = $this->table('users')->select()->where('verify_token',$token)->get();
        if($code == null){
            die('این کد فعال سازی صحیح نمیباشد');
        } else{
            $code = $code->fetch();
            $this->table('users')->update(['verify_token'],[NULL],$code['id']);
        }
    }

}

