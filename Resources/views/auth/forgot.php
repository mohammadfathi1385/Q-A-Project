<?php
    require_once(__DIR__.'/../../layouts/helpers.php');
    if(isset($_GET['success'])){
        if($_GET['success'] == 'true'){
            $message = '<p style="color:green;font-weight:bold;font-size:20px">رمز عبور برای ایمیل شما ارسال شد</p>';
        }else{
            $message = '<p style="color:red;font-weight:bold;font-size:20px">ایمیل وارد شده صحیح نمیباشد</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-149859901-1"></script>
    <link rel="stylesheet" href="<?php url('Resources/css/auth/forgot.css') ?>">
</head>
<body>
    <div class="elelment">
        <h2>Reset Password Form</h2>
        <div class="element-main">
            <h1>Forgot Password</h1>
            <p>Please Enter Your Email Address And Check Your Mail Box !</p>
            <form action="<?php url('auth/forgotAction') ?>" method="POST">
                <input type="email" name="email" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
                <input type="submit" value="Send Password">
            </form><br>
            <p>have account ? <a href="<?php url('auth/login') ?>">login</a></p>
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
        </div>
    </div>
</body>
</html>