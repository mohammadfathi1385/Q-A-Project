<?php
    require_once(__DIR__.'/../../layouts/helpers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - How To Use !</title>
    <style>
        body{
            overflow-x: hidden;
        }
        .content{
            width: 80%;
            height: auto;
            padding: 20px;
            margin: 0 auto;
        }
        .apis{
            border: 2px solid black;
            padding: 20px;
            background-color: #e1e1e1;
            margin:0 auto;
        }
        .apis ul li{
            list-style: none;
        }
        .apis ul li h3{
            color: red;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="text-align: center;">How To Use API</h1>
        <br><br>
        <h4>Your Token Code : <?= $_GET['token'] ?></h4>
        <div class="apis">
            <h2>All APIs</h2>
            <ul>
                <li><h3>API Users</h3></li>
                <li>Select All Users &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/users/?token={tokenCode}') ?></strong></span></li>
                <li>Select User By ID &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/selectUser/{user_id}/?token={tokenCode}') ?></strong></span></li>
                <li><h3>API Questions</h3></li>
                <li>Select All Questions &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/questions/?token={tokenCode}') ?></strong></span></li>
                <li>Select Question By ID &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/selectQuestion/{question_id}/?token={tokenCode}') ?></strong></span></li>
                <li><h3>API Answers</h3></li>
                <li>Select All Answers &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/answers/?token={tokenCode}') ?></strong></span></li>
                <li>Select Answers By ID &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/selectAnswers/{question_id}/?token={tokenCode}') ?></strong></span></li>
                <li><h3>API Programming Languages (All) </h3></li>
                <li>Select All Programming Languages &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/programming_languages/?token={tokenCode}') ?></strong></span></li>
                <li><h3>API Favorite Languages (All) </h3></li>
                <li>Select All Favorite Languages &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/favorite_languages/?token={tokenCode}') ?></strong></span></li>
                <li><h3>API Website Settings</h3></li>
                <li>Select All Settings &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/settings/?token={tokenCode}') ?></strong></span></li>
                <li>Select All Menus &nbsp;&nbsp;<span><strong style="color:green"><?= url('api/menus/?token={tokenCode}') ?></strong></span></li>
            </ul>
        </div>
    </div>
</body>
    <script>
        alert('Your Token Code is : <?= $_GET["token"] ?>');
    </script>
</html>
