<?php

namespace App;

require_once(__DIR__.'/../Traits/Mail.php');
require_once(__DIR__.'/../Traits/Features.php');
require_once(__DIR__.'/../Traits/jdate.php');

use Traits\Features;
use Traits\Mail;
use Traits\jdate;

class Controller{
    use Mail,Features,jdate;
}

