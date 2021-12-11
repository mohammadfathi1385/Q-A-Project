<?php
  require_once(__DIR__.'/../../Layouts/home/header.php');
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1 style="text-align: center;">سوالات خود را به صورت رایگان بپرسید</h1>
          <h2 style="text-align: right;">وبسایت ما برای این بوجود آمده است که برنامه نویسان سوالات خود را بپرسند و مشکلاتشان برطرف بشود . شما میتوانید با ثبت نام درون وبسایت و پرسیدن سوال خود منتظر جواب باشید و مشکلاتتان برطرف بشود</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <?php
               echo '<a href="#about" class="btn-get-started scrollto">Sign Up\In</a>';
            ?>
            <!-- Aparat Video , Youtube Video -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php url('Resources/images/hero-img.png') ?>" class="-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-1.png') ?>" class="-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-2.png') ?>" class="-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-3.png') ?>" class="-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-4.png') ?>" class="-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-5.png') ?>" class="-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php url('Resources/images/clients/client-6.png') ?>" class="-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Programming Languages Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3 style="text-align: center;">Programming Languages</h3>
            <p class="fst-italic" style="text-align: right;">
              در این قسمت زبان های برنامه نویسی که در سایت ازش سوال پرسیده میشود رو لیست شده و بر اساس تعداد سوالات لیست شده است اگر فکر میکنید زبان برنامه نویسی جا مانده از طریق فرم ثبت زبان جدید در بخش پنل کاربری به ما خبر دهید تا اضافه شود
            </p>

            <div class="skills-content">
              <?php foreach($allLanguages as $Language){ ?>
                <div class="progress">
                  <span class="skill"><a href="<?php url('home/language/'.$Language['id']) ?>"><?php echo $Language['name'] ?> <i class="val"><?php echo $Language['score'] ?></i></span>
                  <div class="progress-bar-wrap">
                    <div style="background-color: <?php echo $Language['color'] ?>;" class="progress-bar" role="progressbar" aria-valuenow="<?php echo $Language['score'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <p><?php echo 'platform : '.$Language['platform'] ?></p>
                  </div></a>
                </div>
              <?php } ?>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Programming Languages Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-1.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-1.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-2.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-2.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-3.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-3.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-4.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-4.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-5.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-5.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-6.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-6.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-7.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-7.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-8.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-8.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php url('Resources/images/portfolio/portfolio-9.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?php url('Resources/images/portfolio/portfolio-9.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section
  
<?php
  require_once(__DIR__.'/../../Layouts/home/footer.php');
?>
