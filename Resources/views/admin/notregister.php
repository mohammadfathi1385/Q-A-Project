<?php
        require_once(__DIR__.'/../../layouts/admin/header.php');
    ?>
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Users</h4>
                <p class="card-category">Not Complete Registers
                </p>
              </div>
              <div class="row">
              <?php foreach($users as $user){ ?>
                <div class="card" style="margin:10px;width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">User Name : <?= $user['username'] ?></h3>
                    <h5 class="card-title">Full Name : <?= $user['fullname'] ?></h5>
                    <h5 class="card-title">Email : <?= $user['email'] ?></h5>
                    <hr>
                    <p class="card-text">Bio : <?= substr(htmlentities($user['bio']),0,20) ?></p>
                    <a href="<?php url('admin/registerUser/'.$user['id']) ?>" class="btn btn-block btn-primary">Complete Register</a><br>
                    <a href="<?php url('admin/deleteUser/'.$user['id']) ?>" class="btn btn-danger btn-block">Delete Account</a>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
        require_once(__DIR__.'/../../layouts/admin/footer.php');
    ?>