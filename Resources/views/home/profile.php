<?php
    require_once(__DIR__.'/../../layouts/helpers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?= $settings['title'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
            overflow-x: hidden;
        }
        /* The Modal (background) */
        .modal , .modal2 {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content , .modal-content2 {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close , .close2{
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus,
        .close2:hover,
        .close2:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <div class="row">
        <div class="col-lg-12 mx-auto">

            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 bg-dark">
                    <div class="media align-items-end profile-header">
                        <div class="profile mr-5"><img src="<?php url('public/profiles/'.$user['image']) ?>" alt="avatar" width="250" class="rounded mb-2 img-thumbnail"></div>
                        <div class="media-body mb-5 text-white"><br>
                            <h4 class="mt-0 mb-0"><?= $user['fullname'] ?></h4>
                            <h4 class="text-danger">Permission : <?= $user['role'] ?></h4>
                            <h5>ID : <?= $user['id'] ?></h5>
                            <a href="<?php url('home/profile/'.$user['username']) ?>"><i class="fa fa-map-marker mr-2"></i>@<?= $user['username'] ?></a>
                        </div>
                    </div>
                </div>

                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <button id="myBtn" style="font-size: 20px;font-weight:bold" type="button" class="btn">
                                <?= number_format($followers['COUNT(*)']) ?><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Followers</small>
                            </button>
                            <!-- Trigger/Open The Modal -->
                            <!-- The Modal -->
                             <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span><br>
                                    <h1>Followers</h1><hr>
                                    <ul>
                                        <div style="overflow: auto;height:50vh">
                                            <?php foreach($listFollowers as $follower){ ?>
                                                <?php
                                                    $followuser = mysqli_query($connection,'SELECT * FROM `users` WHERE `id` = '.$follower['following_id']);
                                                    $followuser = mysqli_fetch_assoc($followuser);
                                                ?>
                                                <li><img width="100px" src="<?php url('public/profiles/'.$followuser['image']) ?>" alt="">&nbsp;&nbsp;<a class="btn btn-success" href="<?php url('home/profile/'.$followuser['username']) ?>"><?= $followuser['username'] ?></a></li><hr><br>
                                            <?php } ?>
                                        </div>            
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <button id="myBtn2" style="font-size: 20px;font-weight:bold" type="button" class="btn">
                                <?= number_format($followings['COUNT(*)']) ?> <small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Following</small>
                            </button>
                            <!-- Trigger/Open The Modal -->
                            <!-- The Modal -->
                            <div id="myModal2" class="modal2">
                                <!-- Modal content -->
                                <div class="modal-content2">
                                    <span class="close2">&times;</span>
                                    <h1>Followings</h1><hr>
                                    <ul>
                                        <div style="overflow: auto;height:50vh">
                                            <?php foreach($listFollowings as $following){ ?>
                                                <?php
                                                    $followuser = mysqli_query($connection,'SELECT * FROM `users` WHERE `id` = '.$following['user_id']);
                                                    $followuser = mysqli_fetch_assoc($followuser);
                                                ?>
                                                <li><img width="100px" src="<?php url('public/profiles/'.$followuser['image']) ?>" alt="">&nbsp;&nbsp;<a class="btn btn-success" href="<?php url('home/profile/'.$followuser['username']) ?>"><?= $followuser['username'] ?></a></li><hr><br>
                                            <?php } ?>
                                        </div>                 
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <?php if($checkFollow == false){ ?>
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-outline-primary" href="">Follow</a>
                        <?php } else{ ?>
                            &nbsp;&nbsp;&nbsp;<a class="btn btn-primary disabled" href="">Follow</a>
                        <?php } ?>
                    <?php } ?>
                </div>

                <div class="py-4 px-4">
                    <h5 class="text-center mb-0">Recent Questions</h5><br><br>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <?php foreach($questions as $question){ ?>
                        <div style="border: 1px solid #e3e3e3;padding:10px" class="col-lg-11">
                            <h2><?= htmlentities($question['title']) ?></h2><hr>
                            <div>
                                <?= substr(htmlentities($question['body'] ),0,30).'...' ?>
                            </div><br>
                            <a class="btn btn-success" href="<?php url('home/question/'.$question['id']) ?>">
                                Show Question
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="py-4">
                        <h5 class="mb-3">Biography</h5>
                        <div class="p-4 bg-light rounded shadow-sm">
                            <p class="font-italic mb-0"><?= $user['bio'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Modal 2

        // Get the modal
        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
            modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal2.style.display = "none";
            }
        }

    </script>
</html>