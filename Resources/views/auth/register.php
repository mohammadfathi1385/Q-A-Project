<?php
    require_once(__DIR__.'/../../layouts/helpers.php');
?>
<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'emptyFields'){
            $errorMessage = 'Request Fields Empty Sended ! ( Please Fill Out All Fields ! ) ';
        }elseif($_GET['error'] == 'emailNotValid'){
            $errorMessage = 'Email Is Invalid ( Please Enter A Valid Email ! ) ';
        }elseif($_GET['error'] == 'password'){
            $errorMessage = 'Password between greater than 8 and less than 15 !';
        }else{}
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php url('Resources/css/auth/register.css') ?>">
</head>
<body>
    <div class="registration-form">

        <form action="<?= url('auth/registerAction') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <input type="text" class="form-control item" name="fullname" placeholder="Fullname">
            <input type="text" class="form-control item" name="username" placeholder="Username">
            <input type="email" class="form-control item" name="email" placeholder="Email">
            <input type="password" class="form-control item" name="password" placeholder="Password">
            <textarea class="form-control item" name="bio" placeholder="Your Biography"></textarea>
            Select Your Avatar : 
            <input type="file" name="avatarImage" class="form-control-file"><br>
            <p>Select Your Favorite Programming Language : </p>
            <select name="favorite_plang" class="form-control" id="">
                <?php foreach($languages as $language){ ?>
                    <option value="<?= $language['id'] ?>"><?= $language['name'] ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-block create-account">Create Account</button>
        </form>

        <div class="social-media">
            <?php if(isset($errorMessage)){ ?>
                <p style="color: red;font-weight:bold;font-size:18px">
                    <?= $errorMessage ?>
                </p>
            <?php } ?>
            <p>have account ? <a href="<?php url('auth/login') ?>">Login</a></p>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>