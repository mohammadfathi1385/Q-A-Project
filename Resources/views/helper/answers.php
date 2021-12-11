<?php
        require_once(__DIR__.'/../../layouts/helper/header.php');
    ?>
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">All Answers</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Full Name
                        </th>
                        <th>
                          Question Title
                        </th>
                        <th class="text-left">
                          Answer
                        </th>
                        <th class="text-center">
                          Show Question
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($answers as $answer){ ?>
                    <?php
                        $question_id  = $answer['question_id'];
                        $question = mysqli_query($connection,'SELECT * FROM `questions` WHERE `id` = '.$question_id);
                        $question = mysqli_fetch_assoc($question);

                        $user_id = $question['user_id'];
                        $user = mysqli_query($connection,'SELECT `fullname` FROM `users` WHERE `id` = '.$user_id);
                        $user = mysqli_fetch_assoc($user);
                    ?>
                      <tr>
                        <td>
                          <?= $user['fullname'] ?>
                        </td>
                        <td>
                          <?= $question['title'] ?>
                        </td>
                        <td>
                          <?= substr($answer['body'],0,20) ?>
                        </td>
                        <td>
                          <a class="btn btn-block btn-danger" href="<?php url('home/question/'.$question_id) ?>">Show</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        require_once(__DIR__.'/../../layouts/helper/footer.php');
      ?>