<?php

namespace App\Controllers;

require_once(__DIR__.'/../Controller.php');
require_once(__DIR__.'/../../DataBase/Models/auth.php');

use App\Controller;
use DataBase\Models\auth as authModel;

class auth extends Controller{

    public function register(){
        if(isset($_SESSION['user'])){
            die('شما قبلا وارد حساب کاربری خود شده اید !');
        }
        $authModel = new authModel();
        $languages = $authModel->programming_languages();
        $this->view('auth/register.php',compact('languages'));
    }

    public function login(){
        if(isset($_SESSION['user'])){
            die('شما قبلا وارد حساب کاربری خود شده اید !');
        }
        $this->view('auth/login.php');
    }

    public function forgot(){
        $this->view('auth/forgot.php');
    }

    public function forgotAction(){
        if(isset($_SESSION['user'])){
            die('شما قبلا وارد حساب کاربری خود شده اید !');
        }
        $authModel = new authModel();
        $password = $authModel->forgot($_POST['email']);
        if($password == true){
            $this->setEmail($_POST['email'],'Q&A','m_fathi65@yahoo.com','بازیابی رمز عبور','
            <style>
                .content{
                    text-align:center;
                    margin: 0 auto;
                }
                <div class="content">
                    <h1>رمز عبور</h1>
                    <br><br>
                    <p>رمز عبور شما</p><br>
                    <h3>'.$password.'</h3>
                </div>
            </style>
            ')->sendEmail();
            $this->redirect('auth/forgot/?success=true');
        }else{
            $this->redirect('auth/forgot/?success=false');
        }
    }

    public function registerAction(){
        if(isset($_SESSION['user'])){
            die('شما قبلا وارد حساب کاربری خود شده اید !');
        }
        $authModel = new authModel();
        if(empty($_POST['email']) or empty($_POST['password']) or empty($_POST['fullname']) or empty($_POST['bio']) or empty($_POST['favorite_plang'])){
            $this->redirect('auth/register/?error=emptyFields');
        }else{
            if(strlen($_POST['password']) < 8 or strlen($_POST['password']) > 15){
                $this->redirect('auth/register/?error=password');
            }elseif(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false){
                $this->redirect('auth/register/?error=emailNotValid');
            }else{
                $authModel = new authModel();
                $image = $this->upload($_FILES['avatarImage'],['image/jpeg','image/png','image/jpg','image/svg'],50000000,'Profiles');
                $code = $authModel->register($_POST,$image);
                $this->setEmail($_POST['email'],'Q&A','m_fathi65@yahoo.com','فعال سازی حساب کاربری','
                    <style>
                        .content{
                            text-align:center;
                            margin: 0 auto;
                        }
                        <div class="content">
                            <h1>فعال سازی حساب کاربری</h1>
                            <br>
                            <p>عزیز '.$_POST['fullname'].' سلام</p>
                            <p>برای فعال سازی حساب کاربری خود لطفا روی دکمه زیر کلیک کنید</p>
                            <a href=http://localhost/auth/verify/'.$code.'>جهت فعال سازی حساب کاربری اینجا کلیک نماید</a>
                        </div>
                    </style>
                ')->sendEmail();
                $this->redirect('auth/login');
            }
        }
    }

    public function loginAction(){
        if(isset($_SESSION['user'])){
            die('شما قبلا وارد حساب کاربری خود شده اید !');
        }
        // die(var_dump($_POST));
        $authModel = new authModel();
        if(empty($_POST['email']) or empty($_POST['password'])){
            $this->redirect('auth/login/2');
        }
        $login = $authModel->login($_POST);
        // die(gettype($login));
        if($login == 'admin'){
            $this->redirect('admin/index');
        }elseif($login == 'helper'){
            $this->redirect('helper/index');
        }else{
            $this->redirect('auth/login');
        }
    }

    public function verify($token = null){
        if($token == null){
            die('لطفا کد فعال سازی رو وارد نمایید !');
        }else{
            $authModel = new authModel();
            $authModel->verify($token);
            $this->redirect('auth/login');
        }
    }

    public function logout(){
        $authModel = new authModel();
        $authModel->logout();
        $this->redirect('auth/login');
    }

}

