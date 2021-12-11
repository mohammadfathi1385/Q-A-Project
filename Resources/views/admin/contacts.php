<?php
        require_once(__DIR__.'/../../layouts/admin/header.php');
    ?>
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Contacts</h4>
                <p class="card-category">All Contacts
                </p>
              </div>
              <div class="row">
              <?php foreach($contacts as $contact){ ?>
                <div class="card" style="margin:10px;width: 18rem;">
                  <div class="card-body">
                    <h4>Subject : <?= $contact['subject'] ?></h3>
                    <hr>
                    <h4>Email : <?= $contact['email'] ?></h4>
                    <hr>
                    <p class="card-text"><?= htmlentities($contact['body']) ?></p>
                    <a href="<?php url('admin/deleteContact/'.$contact['id']) ?>" class="btn btn-danger btn-block">Delete Contact</a>
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