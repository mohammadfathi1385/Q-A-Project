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
                            <div class="card-block text-center text-white">
                                <br>
                                <div class="m-b-25">
                                    <img style="width: 300px;border-radius:30px" src="<?php url('public/profiles/'.$user['image']) ?>" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600"><?= $user['fullname'] ?></h6>
                                <p><?= strtoupper($user['role']) ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-12" style="padding: 40px;">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?= $user['email'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Followers</p>
                                        <h6 class="text-muted f-w-400"><?= $followers['COUNT(*)'] ?></h6>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Followings</p>
                                        <h6 class="text-muted f-w-400"><?= $followings['COUNT(*)'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Register At</p>
                                        <h6 class="text-muted f-w-400"><?= $user['created_at'] ?></h6>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Username</p>
                                        <h6 class="text-muted f-w-400"><?= $user['username'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Last Edit</p>
                                        <h6 class="text-muted f-w-400"><?= $user['updated_at'] ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Role</p>
                                        <h6 class="text-muted f-w-400"><?= $user['role'] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bio</p>
                                        <h6 class="text-muted f-w-400"><?= $user['bio'] ?></h6>
                                    </div>
                                    <br><br><br>
                                    <a class="btn btn-block btn-danger" href="<?php url('admin/editProfile') ?>">Edit Profile</a>
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

</script>
<?php
    require_once(__DIR__.'/../../layouts/admin/footer.php');
?>