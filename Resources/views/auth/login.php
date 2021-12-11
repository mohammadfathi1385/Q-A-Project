<?php
    require_once(__DIR__.'/../../layouts/helpers.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php url('Resources/css/auth/register.css') ?>">
</head>
<body>
    <div class="registration-form">
        <form action="<?php url('auth/loginAction') ?>" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Login</button>
            </div>
        </form>
        <div class="social-media">
            <p>dont have account ? <a href="<?php url('auth/register') ?>">register</a></p>
            <p>forgot your password ? <a href="<?php url('auth/forgot') ?>">Click Here</a></p>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>
