<?php
        require_once(__DIR__.'/../../layouts/helper/header.php');
    ?>
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Notifications</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-info">
                  <span>unRead Notifications <?php echo '('.$countNotifications['COUNT(*)'].')' ?>  <a style="float:right" class="btn btn-warning" href="<?php url('helper/unreadNotifications') ?>">Recovery All Notifications</a></span>
                  <div style="clear: both;"></div>
                </div>
                <?php foreach($notifications as $notification){ ?>
                <?php
                    $user_id = $notification['user_id'];
                    $user = mysqli_query($connection,'SELECT `fullname` FROM `users` WHERE `id`= "'.$user_id.'" ');
                    $user = mysqli_fetch_assoc($user);
                ?>
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <a style="float:right" class="btn" href="<?php url('helper/readNotification/'.$notification['id']) ?>"> 
                      <i class="tim-icons icon-simple-remove"></i>
                  </a>
                  <span data-notify="icon" class="tim-icons icon-bell-55"></span>
                  <p style="font-weight: bold;font-size:16px"><?= $user['fullname'] ?></p>
                  <span data-notify="message"><?= $notification['body'] ?></span>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        Notifications Places
                        <p class="category">Click to view notifications</p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    <?php
        require_once(__DIR__.'/../../layouts/helper/footer.php');
    ?>