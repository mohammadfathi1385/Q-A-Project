<?php

namespace Traits;

require_once(__DIR__.'/../Vendors/jDate/jdf.php');

trait jdate{

    public function date($format,$timestamp = null){
        if($timestamp == null){ 
            return jdate($format);
        }
        return jdate($format,$timestamp);
    }

}

