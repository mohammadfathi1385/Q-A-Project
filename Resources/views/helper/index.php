    <?php
      require_once(__DIR__.'/../../layouts/helper/header.php');
    ?>
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Last Answers</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          FullName
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Language
                        </th>
                        <th>
                          Answer
                        </th>
                        <th>
                          Show
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($answers as $answer){ ?>
                      <?php
                            $userid = $answer['user_id'];
                            $username = mysqli_query($connection,'SELECT `fullname` FROM `users` WHERE `id` = "'.$userid.'" ');
                            $username = mysqli_fetch_assoc($username);

                            $question_id = $answer['question_id'];
                            $questionTitle = mysqli_query($connection,'SELECT * FROM `questions` WHERE `id` = "'.$question_id.'" ');
                            $questionTitle = mysqli_fetch_assoc($questionTitle);

                            $language_id = $questionTitle['plang_id'];
                            $language = mysqli_query($connection,'SELECT * FROM `programming_languages` WHERE `id` = "'.$language_id.'" ');
                            $language = mysqli_fetch_assoc($language);
                      ?>
                      <tr style="background-color:".<?= $language['color'] ?> >
                        <td>
                            <?= $username['fullname'] ?>
                        </td>
                        <td>
                            <?= $questionTitle['title'] ?>
                        </td>
                        <td>
                            <?= $language['name'] ?>
                        </td>
                        <td>
                            <?= substr($answer['body'],0,20) ?>
                        </td>
                        <td>
                            <a class="btn btn-block btn-danger" href="<?php url('home/question/'.$question_id) ?>">Show Question</a>
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