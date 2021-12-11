<?php
    require_once(__DIR__.'/../../layouts/admin/header.php');
?>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Notifications</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <span><h4> unRead Notifications <?php echo '('.$countNotifications['COUNT(*)'].')' ?>  </h4> </span>
                  <br><br><br>
                  <?php foreach($notifications as $notification){ ?>
                    <?php
                        $user_id = $notification['user_id'];
                        $user = mysqli_query($connection,'SELECT `fullname` FROM `users` WHERE `id` = "'.$user_id.'" ');
                        $user = mysqli_fetch_assoc($user);
                    ?>
                  <div class="alert alert-info alert-with-icon" data-notify="container">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <a style="float:right" class="btn btn-danger" href="<?php url('admin/readNotification/'.$notification['id']) ?>"> 
                      <i class="material-icons">close</i>
                    </a>
                    <h4><?= $user['fullname'] ?></h4>
                    <span data-notify="message"><?= $notification['body'] ?></span>
                  </div>
                  <?php } ?>
                  <a style="float:right" class="btn btn-success" href="<?php url('admin/unreadNotifications') ?>">Recovery All Notifications</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
    require_once(__DIR__.'/../../layouts/admin/footer.php');
?>