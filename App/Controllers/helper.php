<?php

namespace App\Controllers;

require_once(__DIR__.'/../Controller.php');
require_once(__DIR__.'/../../DataBase/Models/helper.php');

use App\Controller;
use DataBase\Models\helper as helperModel;

class helper extends Controller{

    public function __construct()
    {
        $helperModel = new helperModel();
        $helperModel->checkHelper();
    }

    public function index(){
        $helperModel = new helperModel();
        $answers = $helperModel->lastAnswers();
        $this->view('helper/index.php',compact('answers'));
    }

    public function submitAnswer($question_id){
        $helperModel = new helperModel();
        $helperModel->submitAnswer($_POST,$question_id);
        $this->redirectBack();
    }

    public function answers(){
        $helperModel = new helperModel();
        $answers = $helperModel->answers();
        $this->view('helper/answers.php',compact('answers'));
    }

    public function profile(){
        $helperModel = new helperModel();
        $user = $helperModel->profile();
        $followers = $helperModel->followers($_SESSION['user']);
        $followings = $helperModel->followings($_SESSION['user']);
        $this->view('helper/profile.php',compact('user','followings','followers'));
    }

    public function editProfile(){
        $helperModel = new helperModel();
        $user = $helperModel->profile();
        $this->view('helper/editProfile.php',compact('user'));
    }
    
    public function updateProfile(){
        $helperModel = new helperModel();
        $checkPassword = $helperModel->checkPassword($_POST['lastPassword'],$_SESSION['user']);
        $user = $helperModel->profile($_SESSION['user']);
        if(isset($_FILES['avatar'])){
            $this->removeFile('profiles/'.$user['image']);
            $image = $this->upload($_FILES['avatar'],['image/png','image/jpg','image/jpeg','image/svg'],5000000,'profiles');
            $_POST = array_merge($_POST,['image' => $image]);
        }
        if($checkPassword == true){
            $helperModel->updateProfile($_POST);
            $this->redirect('helper/profile');
        } else{
            $this->redirect('helper/editProfile');
        }
    }

    public function notifications(){
        $helperModel = new helperModel();
        $notifications = $helperModel->notifications($_SESSION['user']);
        $countNotifications = $helperModel->countNotifications($_SESSION['user']);
        $this->view('helper/notifications.php',compact('notifications','countNotifications'));
    }

    public function readNotification($id){
        $helperModel = new helperModel();
        $helperModel->readNotification($id);
        $this->redirect('helper/notifications');
    }

    public function unreadNotifications(){
        $helperModel = new helperModel();
        $helperModel->unreadNotifications($_SESSION['user']);
        $this->redirect('helper/notifications');
    }

}


