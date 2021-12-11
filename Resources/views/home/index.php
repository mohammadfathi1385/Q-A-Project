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
            <a href="<?php url('auth/register') ?>" class="btn-get-started scrollto">Sign Up\In</a>
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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>درباره ما</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12 pt-4 pt-lg-0" style="text-align: center;">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi provident omnis dolores tempora harum ducimus! Ducimus, similique quas. Saepe deserunt neque magni asperiores veniam, iure laborum assumenda eveniet necessitatibus error sapiente voluptates ipsum quis quas architecto, beatae repellat vero hic placeat perspiciatis nesciunt molestiae quaerat ullam temporibus. Officiis debitis dicta possimus, deserunt labore perspiciatis. Voluptate corporis vero quibusdam minima id esse autem eveniet ad amet iure similique veniam, fugit officia labore! Sit corrupti numquam eum voluptas enim reprehenderit a, tenetur reiciendis minus cupiditate facere blanditiis dolor quibusdam dolorem similique natus atque culpa molestias molestiae neque ea quisquam ratione illum. Dolorem.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How it works</h2>
          <p>نحوه کار کردن وبسایت</p>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="text-align: center;font-weight:bold">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">کسانی که ثبت  نام میکنند</a></h4>
              <p style="font-size: 16px;">کسانی که ثبت نام میکنند فقط میتوانند سوال بپرسن و به سوال فرد دیگری نمیتوانند پاسخ بدهند</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" style="text-align: center;font-weight:bold">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">افراد تائید شده</a></h4>
              <p style="font-size: 16px;">فقط افراد تائید شده میتوانند به سوالات پرسیده شده پاسخ بدهند که این افراد توسط وبسایت تائید میشوند</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="text-align: center;font-weight:bold">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">پرسیدن سوال</a></h4>
              <p style="font-size: 16px;">هر سوالی درمورد هر مشکلی باید محترمانه پرسیده بشود در غیر این صورت اون سوال پاک میشود</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start" style="text-align: center;">
            <h3>INSTAGRAM PAGE</h3>
            <p>با دنبال کردن صفحه اینستاگرام ما , مارو حمایت کنید</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">INSTAGRAM</a>
          </div>
        </div>

      </div>
    </section>
  
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>سوالات تکراری</h2>
          <p>در این قسمت سوالاتی که خیلی تکراری میباشند رو بهشون پاسخ داده شده است</p>
        </div>
        <div class="faq-list" style="font-weight: bold;font-size:20px;text-align:right">
        
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><h3>نحوه کار کردن وبسایت به چه شکل است؟ </h3><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  به این صورت میباشد که شما باید اول درون وبسایت ثبت نام کنید سپس میتوانید سوالاتی که دارید رو درون وبسایت بپرسید و منتظر باشید افراد تائید شده پاسخ رو برای شما ارسال کنند و سوال و پاسخی که داده میشود برای دیگر افراد هم قابل مشاهده است
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><h3>افراد تائید شده چه کسانی هستن ؟ </h3><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    افرادی که حداقل به یک زبان برنامه نویسی مسلط باشن و تخصص داشته باشن میتوانند رزومه خود را ارسال کنند و منتظر پاسخ بمانند
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><h3>چگونه میشه حساب کاربری من تائید بشه ؟</h3><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  با ارسال رزومه خود در فرم تائید کاربر در بخش پنل کاربری و سپس منتظر تائید شدن میمانید
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    
  
<?php
  require_once(__DIR__.'/../../Layouts/home/footer.php');
?>
