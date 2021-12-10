<?php

namespace App\Controllers;

require_once(__DIR__.'/../Controller.php');
require_once(__DIR__.'/../../DataBase/Models/admin.php');

use App\Controller;
use DataBase\Models\admin as adminModel;

class admin extends Controller
{
    public function __construct()
    {
        $adminModel = new adminModel();
        $admin = $adminModel->checkAdmin();
        if ($admin == false){
            $this->redirect('auth/login');
        }
    }

    public function index()
    {
        $adminModel = new adminModel();
        $answers = $adminModel->lastAnswer();
        $questions = $adminModel->lastQuestion();
        $reports = $adminModel->lastReports();
        $countAnswers = $adminModel->count('answers');
        $countQuestions = $adminModel->count('questions');
        $countReports = $adminModel->count('reports');
        $countUsers = $adminModel->count('users');
        $this->view('admin/index.php',compact('reports','answers','questions','countAnswers','countQuestions','countReports','countUsers'));
    }

    public function answers(){
        $adminModel = new adminModel();
        $answers = $adminModel->allAnswers();
        $this->view('admin/answers.php',compact('answers'));
    }

    public function questions(){
        $adminModel = new adminModel();
        $questions = $adminModel->allQuestions();
        $this->view('admin/questions.php',compact('questions'));
    }

    public function reports(){
        $adminModel = new adminModel();
        $reports = $adminModel->reports();
        $this->view('admin/reports.php',compact('reports'));
    }

    public function notregisters(){
        $adminModel = new adminModel();
        $users = $adminModel->notCompleteRegister();
        $this->view('admin/notregister.php',compact('users'));
    }

    public function profile(){
        $adminModel = new adminModel();
        $user = $adminModel->profile($_SESSION['user']);
        $followers = $adminModel->followers($_SESSION['user']);
        $followings = $adminModel->followings($_SESSION['user']);
        $this->view('admin/profile.php',compact('user','followers','followings'));
    }

    public function editProfile(){
        $adminModel = new adminModel();
        $user = $adminModel->profile($_SESSION['user']);
        $this->view('admin/editProfile.php',compact('user'));
    }

    public function updateProfile(){
        $adminModel = new adminModel();
        $checkPassword = $adminModel->checkPassword($_POST['lastPassword'],$_SESSION['user']);
        $user = $adminModel->profile($_SESSION['user']);
        if(isset($_FILES['avatar'])){
            $this->removeFile('profiles/'.$user['image']);
            $image = $this->upload($_FILES['avatar'],['image/png','image/jpg','image/jpeg','image/svg'],5000000,'profiles');
            $_POST = array_merge($_POST,['image' => $image]);
        }
        if($checkPassword == true){
            $adminModel->updateProfile($_POST);
            $this->redirect('admin/profile');
        } else{
            $this->redirect('admin/editProfile');
        }
    }

    public function notifications(){
        $adminModel = new adminModel();
        $notifications = $adminModel->notifications($_SESSION['user']);
        $countNotifications = $adminModel->countNotifications($_SESSION['user']);
        $this->view('admin/notifications.php',compact('notifications','countNotifications'));
    }

    public function readNotification($id){
        $adminModel = new adminModel();
        $adminModel->readNotification($id);
        $this->redirect('admin/notifications');
    }

    public function unreadNotifications(){
        $adminModel = new adminModel();
        $adminModel->unreadNotifications($_SESSION['user']);
        $this->redirect('admin/notifications');
    }

    public function registerUser($id){
        $adminModel = new adminModel();
        $adminModel->registerUser($id);
        $this->redirect('admin/notregisters');
    }

    public function deleteUser($id){
        $adminModel = new adminModel();
        $adminModel->deleteUser($id);
        $this->redirect('admin/notregisters');
    }

    public function changeRole($id){
        $adminModel = new adminModel();
        $check = $adminModel->changeRole($id);
        if($check == true){
            $this->redirect('admin/users');
        }else{
            $this->redirect('admin/index');
        }
    }

    public function contacts(){
        $adminModel = new adminModel();
        $contacts = $adminModel->contacts();
        $this->view('admin/contacts.php',compact('contacts'));
    }

    public function deleteReport($id){
        $adminModel = new adminModel();
        $adminModel->deleteReport($id);
        $this->redirect('admin/index');
    }
    
    public function deleteContact($id){
        $adminModel = new adminModel();
        $adminModel->deleteContact($id);
        $this->redirect('admin/contacts');
    }

}

