<?php

function url($path){
    $subFolder = 'Q&A/';
    $host = $_SERVER['HTTP_HOST'];
    echo 'http://'.$host.'/'.$subFolder.$path;
}

function checkURL($url){
    return stripos($_SERVER['REQUEST_URI'],$url) == true ? true : false;
}

$connection = mysqli_connect('localhost','root','','trueanswer');

