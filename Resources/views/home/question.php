<?php
  require_once(__DIR__.'/../../Layouts/home/header.php');
?>
  </textarea>

  
  <main id="main">
    <div style="width: 100%;height:100px;background-color:#606D85"></div>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="margin-top: 100px;">
      <?php
          $id = $question['user_id'];
          $username = mysqli_query($connection,'SELECT `fullname`,`username` FROM `users` WHERE `id` = '.$id);
          $username = mysqli_fetch_assoc($username);
      ?>
      <h1 style="text-align: center;"><?= $question['title'] ?></h1>
      <br>
      <h4 style="text-align: center;"><a href="<?php url('home/profile/'.$username['username']) ?>"><?= $username['fullname'] ?></a></h4>
      <hr>
      <div style="margin:40px;direction:rtl">
        <?= htmlentities($question['body']) ?>
      </div>
    </section><!-- End About Us Section -->
    <hr>

    <h1 style="text-align: center;">پاسخ ها به این سوال</h1>
    <section style="overflow:auto;height:1000px" class='container-fluid'>
        <?php foreach($answers as $answer): ?>
          <?php
              $id = $answer['user_id'];
              $username = mysqli_query($connection,'SELECT `fullname`,`username` FROM `users` WHERE `id` = '.$id);  
              $username = mysqli_fetch_assoc($username);
          ?>
          <div class="col-lg-12" style="border-radius:20px;border : 1px solid black;padding:30px">
              <h2><a href="<?php url('home/profile/'.$username['username']) ?>"><?= $username['fullname'] ?></a></h2><br>
              <hr>
              <p>
                  <?= htmlspecialchars($answer['body']) ?>
              </p>
          </div><br><hr><br>
        <?php endforeach ?>
    </section>
    
    <?php
        if(isset($_SESSION['user'])){
          $id = $_SESSION['user'];
          $role = mysqli_query($connection,"SELECT `role`,`fullname` FROM `users` WHERE `id` = $id ");
          $role = mysqli_fetch_assoc($role);
          if($role['role'] == 'helper'){
    ?>
      <section class="container-fluid" style="margin-top: 100px;margin-bottom:100px;text-align:center">
        <h2 class="text-center"><?= $role['fullname'] ?> سلام </h2>
        <h2 style="text-align: center;">پاسخ خود را ثبت نمایید</h2>
        <form action="<?php url('helper/submitAnswer/'.$question['id']) ?>" method="POST">
            <textarea name="body" id="editor" style="width:100%;height:400px" cols="30" rows="10"></textarea>
            <br><br><button class="btn btn-success">ثبت پاسخ</button>
        </form>
      </section>
    <?php }

    } ?>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        '|',
                        'fontSize',
                        'fontColor',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'undo',
                        'redo',
                        'codeBlock'
                    ]
                },
                language: 'fa',
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
  
<?php
  require_once(__DIR__.'/../../Layouts/home/footer.php');
?>
