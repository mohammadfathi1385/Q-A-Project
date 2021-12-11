<?php
        require_once(__DIR__.'/../../layouts/admin/header.php');
    ?>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-12 bg-c-lite-green user-profile">
                            <br>
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img style="width: 300px;border-radius:30px" src="<?php url('public/profiles/'.$user['image']) ?>" class="img-radius" alt="User-Profile-Image"> </div>
                            </div><br>
                            <h6 class="f-w-600 text-center" style="color: black;"><?= $user['fullname'] ?></h6>
                            <p class="text-center" style="color: black;"><?= strtoupper($user['role']) ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-12" style="padding: 40px;">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <form class="container" action="<?php url('admin/updateProfile') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="col-lg-12">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="m-b-10 f-w-600">Bio</p>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Bio
                                            </label>
                                            <textarea class="col-lg-12 form-control" id="defaultCheck1" type="text" name="bio" required><?= $user['bio'] ?></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="m-b-10 f-w-600">Your Password</p>
                                            <input type="text" class="form-control" name="lastPassword" value="" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="m-b-10 f-w-600">New Password</p>
                                            <input type="text" class="form-control" name="newPassword" value="" required>
                                        </div><br><br>
                                        
                                        <div class="col-lg-12" id="uploadNewAvatar">
                                            <input class="checkbox" onclick="uploadNewAvatar()" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Upload New Avatar ? Click
                                            </label><br>
                                        </div>
                                        <br><br>
                                        <button class="btn btn-block btn-success">Update</button>
                                        <br><br>
                                    </form>
                                    <a class="btn btn-block btn-danger" href="<?php url('admin/profile') ?>">Back To Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var instance = 0;
        function uploadNewAvatar(){
            var div = document.getElementById('uploadNewAvatar');
            var element;
            element = document.createElement('input');
            if(instance == 0){
                div.appendChild(element);
                element.name = 'avatar';
                element.type = 'file';
                element.id = 'avatarInput';
                instance = 1;
            }else{
                element = document.getElementById('avatarInput');
                div.removeChild(element);
                instance = 0;
            }
        }
    </script>
<?php
    require_once(__DIR__.'/../../layouts/admin/footer.php');
?>