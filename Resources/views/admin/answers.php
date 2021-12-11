    <?php
        require_once(__DIR__.'/../../layouts/admin/header.php');
    ?>
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Answers</h4>
                <p class="card-category">All Answers
                </p>
              </div>
              <div class="row">
              <?php foreach($answers as $answer){ ?>
                <?php
                    $question_id = $answer['question_id'];
                    $question = mysqli_query($connection,'SELECT * FROM `questions` WHERE `id` = "'.$question_id.'" ');
                    $question = mysqli_fetch_assoc($question);

                    $langauge_id = $question['plang_id'];
                    $langauge = mysqli_query($connection,'SELECT * FROM `programming_languages` WHERE `id` = "'.$langauge_id.'" ');
                    $langauge = mysqli_fetch_assoc($langauge);
                ?>
                <div class="card" style="margin:10px;width: 18rem;">
                <div class="card-img-top" style="height:150px;background-color: <?= $langauge['color'] ?>;"></div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $langauge['name'] ?></h5>
                    <p class="card-text"><?= substr(htmlentities($answer['body']),0,30) ?></p>
                    <a href="<?php url('home/question/'.$question_id) ?>" class="btn btn-block btn-primary">Go somewhere</a><br>
                    <a href="<?php url('admin/deleteAnswer/'.$answer['id']) ?>" class="btn btn-danger btn-block">Delete </a>
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