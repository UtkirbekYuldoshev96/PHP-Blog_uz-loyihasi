<?php
$title = 'Bosh sahifa';
require('./includes/header.php');
?>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
            <div class="carousel-item active">
                  <img class="bd-placeholder-img" src="./assets/img/coursel-4.png" alt="">
                  <div class="container">
                        <div class="carousel-caption text-start">

                              <h1 class="text-uppercase">Web Acedimeya.</h1>
                              <p>Sun'iy intellekt yordamida boshqariladigan ta'lim tizimi va
                                    zamonaviy atmosfera sizning muvaffaqiyatingiz garovidir.</p>

                              <p><a class="btn btn-lg btn-primary" href="#">Batafsil</a></p>
                        </div>
                  </div>
            </div>
            <div class="carousel-item">
                  <img class="bd-placeholder-img" src="./assets/img/coursel-2.png" alt="">

                  <div class="container ">
                        <div class="carousel-caption">
                              <div class="text-dark">
                                    <h1 class="text-uppercase">Web Acedimeya.</h1>
                                    <p>IT sohasini Astrum IT Akademiyasida o'rganing va o'z hayotingizni yaxshi tomonga
                                          o'zgartiring.</p>
                              </div>
                              <p><a class="btn btn-lg btn-primary" href="#">Batafsil</a></p>
                        </div>
                  </div>
            </div>
            <div class="carousel-item">
                  <img class="bd-placeholder-img" src="./assets/img/coursel-6.png" alt="">
                  <div class="container">
                        <div class="carousel-caption text-end">
                              <h1 class="text-uppercase">Web Acedimeya.</h1>
                              <p class="text-xl-end">Astrum IT Akademiyasida siz sifatli ta'lim olishingiz va sohani
                                    puxta egallashingiz
                                    uchun eng kuchli va katta tajribaga ega mentorlar yordam berishadi.</p>
                              <p><a class="btn btn-lg btn-primary" href="#">Batafsil</a></p>
                        </div>
                  </div>
            </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
      </button>
</div>

<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
            <div class="col-lg-4">
                  <img src="./assets/img/user/user-1.png" alt="user">
                  <title>Bektur Andarov</title>
                  <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                  </svg>
                  <h2 class="fw-normal">Mentor</h2>
                  <p>Some representative placeholder content for the three columns of text below the
                        carousel. This is the first column.</p>
                  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                  <img src="./assets/img/user/user-1.png" alt="user">
                  <title>Bektur Andarov</title>
                  <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                  </svg>
                  <h2 class="fw-normal">Mentor</h2>
                  <p>Another exciting bit of representative placeholder content. This time, we've moved on
                        to the second column.</p>
                  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                  <img src="./assets/img/user/user-1.png" alt="user">
                  <title>Bektur Andarov</title>
                  <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                  </svg>
                  <h2 class="fw-normal">Mentor</h2>
                  <p>And lastly this, the third column of representative placeholder content.</p>
                  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
            <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">“Google” va “Yandeks”ga raqobatchi:
                        <span class="text-body-secondary">o‘zbekistonlik
                              dasturchilar o‘zbekcha tarjimon yaratishadi</span>
                  </h2>
                  <p class="lead">Endilikda yosh dasturchi yangi loyihalar ustida ish olib bormoqda. Sifatli “o‘zbekcha
                        tarjimon” va “plagiat tekshiruvi”ni yaratish shular jumlasidan.
                        Mamasaidov 23 yoshda. Inha universiteti bitiruvchisi. U o‘tgan yili jamoasi bilan President Tech
                        Award tanlovida qatnashib, sun’iy intellekt yo‘nalishida birinchi o‘rinni qo‘lga kiritdi.</p>
            </div>
            <div class="col-md-5">
                  <img src="./assets/img/post-imgs/img-1.png" width="500" height="500" alt="">
            </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
            <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading fw-normal lh-1">💸Ўзбекистонда барча мактабларга 51 млн сўмдан <span
                              class="text-body-secondary">пул ажратилади, ўқувчилар эса уларни қаерга сарфлашни
                              танлайдилар</span></h2>
                  <p class="lead">Ижтимоий тармоқларда тарқалган ҳабарга кўра ушбу тартиб 2024/2025 ўқув йилидан бошлаб
                        тажриба сифатида жорий этилиши режалаштирилган. Ажратилган маблағлардан фойдаланиш 5-11-синф
                        ўқувчиларининг танлови асосида амалга оширилади.
                  </p>
            </div>
            <div class="col-md-5 order-md-1">
                  <img src="./assets/img/post-imgs/img-2.png" width="450" height="400" alt="">

            </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
            <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">❗️🦮<span class="text-body-secondary">Кўчада итни
                              боғичсиз олиб юрганлар жаримага тортилади.
                        </span></h2>
                  <p class="lead">Итни сайр қилдирганда боғичи 2 метргача, жамоат жойларида эса 1 метргача узунликда
                        бўлиши керак. Соат 22:00 дан 8:00 гача тинчликни сақлаш учун эгалари итининг вовиллашини олдини
                        олиши керак. Ит ва мушук боқиш қоидаларини бузиш 680 минг сўмгача жаримага сабаб бўлади.</p>
            </div>
            <div class="col-md-5">
                  <img src="./assets/img/post-imgs/img-3.png" width="500" height="500" alt="">

            </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<?php require('./includes/footer.php'); ?>