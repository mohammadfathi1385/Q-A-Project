<?php

namespace App\Controllers;

require_once(__DIR__.'/../Controller.php');

use App\Controller;

class dashboard extends Controller{

    public function index(){
        $this->view('dashboard/index.php');
    }

}

