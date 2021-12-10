<?php

namespace App\Controllers;

require_once(__DIR__.'/../Controller.php');
require_once(__DIR__.'/../../DataBase/Models/home.php');

use App\Controller;
use DataBase\Models\Home as homeModel;

class Home extends Controller{

    public function index(){
        $homeModel = new homeModel();
        $settings = $homeModel->settings();
        $this->view('home/index.php',compact('settings'));
    }

    public function language($id = null){
        $homeModel = new homeModel();
        $settings = $homeModel->settings();
        if($id == null){
            $allLanguages = $homeModel->allLanguages();
            $compact = [
                'allLanguages' => $allLanguages,
                'settings' => $settings
            ];
            $path = 'AllLanguages.php';
        }else{
            $language = $homeModel->language($id);
            $compact = [
                'language' => $language,
                'settings' => $settings
            ];
            $path = 'language.php';
        }
        $this->view('home/'.$path,$compact);
    }

    public function AllQuestions($languageID = null){
        if($languageID != null){
            $homeModel = new homeModel();
            $settings = $homeModel->settings();
            $language = $homeModel->language($languageID);
            $questions = $homeModel->questions($languageID);
            $this->view('home/AllQuestions.php',compact('questions','settings','language'));
        }else{
            die('404 - Not Found ! ');
        }
    }

    public function question($id = null){
        if($id != null){
            $homeModel = new homeModel();
            $question = $homeModel->question($id);
            $settings = $homeModel->settings();
            if($question != null){
                $javabs = $homeModel->allAnswers($id);
                extract($javabs);
                $this->view('home/question.php',compact('question','settings','answers','countAnswers'));    
            }else{
                die('404 - Question Not Founded ! ');
            }
        } else{
            die('404 - Not Found ! ');
        }
    }

    public function sendContact(){
        $homeModel = new homeModel();
        $homeModel->sendContact($_POST);
        $this->redirectBack() or $this->redirect('trueanswer');
    }

    public function sendSubscriber(){
        $homeModel = new homeModel();
        $homeModel->sendSubscriber($_POST);
        $this->redirectBack() or $this->redirect('trueanswer');
    }

    public function profile($username = null){
        if(!isset($_SESSION['user'])){
            die('لطفا وارد حساب کاربری خود بشوید ');
        }
        if($username == null){
            die('لطفا نام کاربری را وارد نمایید');
        }else{
            $homeModel = new homeModel();
            $user = $homeModel->profile($username);
            if($user == null or $user == false){
                die('لطفا نام کاربری درست وارد نمایید');
            }else{
                $questions = $homeModel->recentQuestions($user['id']); 
                $settings = $homeModel->settings();
                $checkFollow = $homeModel->checkFollow($_SESSION['user'],$user['id']);
                $followers = $homeModel->followers($_SESSION['user']);
                $followings = $homeModel->followings($_SESSION['user']);
                $listFollowers = $homeModel->listFollowers($_SESSION['user']);
                $listFollowings = $homeModel->listFollowings($_SESSION['user']);
                $this->view('home/profile.php',compact('listFollowings','listFollowers','followings','user','settings','checkFollow','followers','questions'));
            }
        }
    }

}

