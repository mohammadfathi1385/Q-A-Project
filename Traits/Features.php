<?php

namespace Traits;

trait Features{

    public function view($dir,$variables = null){
        if($variables != null and is_array($variables)){
            extract($variables);
        }
        require_once(__DIR__.'/../Resources/Views/'.$dir);
    }

    public function redirect($url){
        $subFolder = 'Q&A/';
        $host = $_SERVER['HTTP_HOST'];
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') ? 'https://' : 'http://';
        header('location:'.$protocol.$host.'/'.$subFolder.'/'.$url);
    }

    public function redirectBack(){
        if(!empty($_SERVER['HTTP_REFERER'])){
            header('location:'.$_SERVER['HTTP_REFERER']);
        }
    }

    public function setSession($name,$value)
    {
        $_SESSION[$name] = $value;
    }

    public function unsetSession($name){
        unset($_SESSION[$name]);
    }

    public function startSession(){
        if(session_status() == PHP_SESSION_NONE){
            return true;
        }
        return false;
    }

    public function upload($file,array $types,int $size,string $targetDIR){
        $validType = in_array($file['type'],$types);
        if($validType){
            if($file['size'] <= $size){
                if(is_uploaded_file($file['tmp_name'])){
                    $name = bin2hex(random_bytes(30));
                    move_uploaded_file($file['tmp_name'],'Public/'.$targetDIR.'/'.$name.'_'.$file['name']);
                    return $name.'_'.$file['name'];
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public function removeFile($path) {
        unlink('Public/'.$path);
    }

}

