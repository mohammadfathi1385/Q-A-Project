<?php

namespace App\Controllers;

require_once(__DIR__.'/../../DataBase/API.php');
require_once(__DIR__.'/../Controller.php');

use DataBase\API as Methods;
use App\Controller;

class api extends Controller{

    public function __construct()
    {
        $Methods = new Methods();
        if(isset($_GET['token'])){
            $checkToken = $Methods->checkToken($_GET['token']);
            if($checkToken == null or $checkToken['expireTime'] == null or $checkToken['token'] == null){
                die('Token Code Not Found Or Expire Time Was Ended ( Buy A New Token Code ) ');
            }
        }else{
            die('Please Enter Your Token Code ( Contact To Website And Ask How To Use Token Code Or Direct To Instagram Page ! ) ');
        }
    }

    private function JSON(){
        header('Content-Type:application/json');
    }

    public function howToUse(){
        $this->view('api/howToUse.php');
    }

    public function users(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->users();
    }

    public function selectUser($id){
        $this->JSON();
        $Methods = new Methods();
        $Methods->selectUser($id);
    }

    public function questions(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->questions();
    }

    public function selectQuestion($id){
        $this->JSON();
        $Methods = new Methods();
        $Methods->selectQuestion($id);
    }

    public function answers(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->answers();
    }

    public function selectAnswer($id){
        $this->JSON();
        $Methods = new Methods();
        $Methods->selectAnswers($id);
    }

    public function favorite_languages(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->favorite_languages();
    }

    public function programming_languages(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->programming_languages();
    }

    public function settings(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->settings();
    }

    public function menus(){
        $this->JSON();
        $Methods = new Methods();
        $Methods->menus();
    }

}

