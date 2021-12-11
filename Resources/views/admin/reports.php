<?php
        require_once(__DIR__.'/../../layouts/admin/header.php');
    ?>
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Reports</h4>
                <p class="card-category">All Reports
                </p>
              </div>
              <div class="row">
              <?php foreach($reports as $report){ ?>
              <?php
                  $question_id = $report['question_id'];
                  $question = mysqli_query($connection,'SELECT * FROM `questions` WHERE `id` = "'.$question_id.'" ');
                  $question = mysqli_fetch_assoc($question);  
              ?>
                <div class="card" style="margin:10px;width: 18rem;">
                  <div class="card-body">
                    <h3><?= $question['title'] ?></h3>
                    <hr>
                    <h4>User ID : <?= $report['user_id'] ?></h4>
                    <hr>
                    <p class="card-text"><?= htmlentities($report['body']) ?></p>
                    <a href="<?php url('home/question/'.$question_id) ?>" class="btn btn-block btn-primary">Show Question</a><br>
                    <a href="<?php url('admin/deleteReport/'.$question_id) ?>" class="btn btn-danger btn-block">Delete Report</a>
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