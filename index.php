<!--HEADER-->
<?php 

  require_once("pages/head.php");
  require_once("pages/nav.php")
?>

<body>
<header>
  <body class="main-layout">
    <!-- header -->
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-bg">
              <div class="padding_alert">
                <h1 class="display-3 mt-3 animated slideInDown"><span>Üdvözöllek a weboldalon!</span> </h1>
                <!--<p>A Szentandrás-Tourist Kft által üzemeltetett nyaralókban megtalálod a számodra megfelelő szállást.
                  Barátságos, otthonos házainkba várunk szeretettel!</p>-->
                <a href="#about">Olvass tovább</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end banner -->
    <!-- form_lebal -->
    <!-- <section>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <form class="form_book">
                   <div class="row">
                      <div class="col-md-3">
                         <label class="date">ARRIVAL DATE</label>
                         <input class="book_n"  type="date" >
                      </div>
                      <div class="col-md-3">
                         <label class="date">DEPARTURE DATE</label>
                         <input class="book_n"  type="date" >
                      </div>
                      <div class="col-md-3">
                         <label class="date">PERSON</label>
                         <input class="book_n" placeholder="2" type="type" name="2">
                      </div>
                      <div class="col-md-3">
                         <button class="book_btn">Foglalj most</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </section>-->
    <!-- end form_label -->

    <!-- about -->
    <div id="about" class="about">
      <div class="container-fluid">
        <div class="row d_flex">
          <div class="col-md-6">
            <div class="about_text">
              <div class="titlePage">
                <h2><span class="text_normal">Töltsd a szabadságod </span> <br>Körös-parton</h2>
                <p>Gyere el Békésszentandrásra, és töltsd nálunk szabadságod. A Körösök-völgyében minden korosztály
                  megtalálja a számára érdekes látnivalót. Szeretsz horgászni? Akkor nem kérdés, hogy ide látogass! </p>
                <a class="read_more" href="#choose">Tovább olvasok</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_img">
              <a href="https://www.youtube.com/watch?v=-qpQo18uKlQ" target="_blank">
                <figure><img src="/public/img/icons/video.png" alt="youtube video" title="Image film" /></figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end about -->
    <!-- our  section -->
    <div class="our">
      <div class="container">
        <div class="row d_flex">
          <div class="col-md-6">
            <div class="img_box">
              <figure><img src="/public/img/cmf.jpg" alt="https://cervinusfest.hu/"></figure>
            </div>
          </div>
          <div class="col-md-6">
            <div class="our_box">
              <div class="titlePage">
                <h2><span class="text_normal">Program a </span> <br>közeljövőben</h2>
              </div>
              <p>Szarvas és Békésszentandrás is folyamatosan új programokat kínál az ide látogató turisták számára.
                Nézze meg a Viziszínház előadásait, vagy a Körös-Menti Turisztikai Iroda programajánlatát </p>
              <a class="read_more" href="#testimonial">Tovább olvasok</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end our  section -->
    <!-- choose  section -->
    <div class="choose" id="choose">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="choose_box">
              <div class="titlePage">
                <h2 class="">Nyaralóinkról</h2>
              </div>
              <p>Nyaralóink a békésszentandrási Keresztháti-üdülősoron találhatóak, közvetlen
                vízparttal, medencével és jakuzzival felszereltek. A házakat felszerelt konyhával, légkondícionálóval
                TV-vel és ingyenes Internet elérhetőséggel kínáljuk. A nagy és rendezett udvaron játszótér, parti fedett
                kiülők és bográcsozó hely is található. </p>

              <a class="read_more" href="/pages/netti-nyaralo.php">Anett Vendégház</a>
              <a class="read_more" href="/pages/varga-haz.php">Varga ház</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="img_box">
                  <figure><img src="/public/img/img1.jpg" alt="#" /></figure>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img_box">
                  <figure><img src="/public/img/img2.jpg" alt="anett_vendeghaz" title="Anett Vendégház" /></figure>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img_box">
                  <figure><img src="/public/img/img3.jpg" alt="varga_haz" title="Varga ház" /></figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end choose  section -->
    <!-- testimonial -->
    <div class="testimonial" id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlePage">
              <h2>Látnivalók</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="carousel-caption ">
                      <div class="row">
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top " src="/public/img/beer.jpg" alt="szentandrasi_sorfozde"
                            title="Szentandrási Sörfőzde">
                          <div class="test_box card-body">
                            <h4 class="card-title">Szentandrási Sörfőzde</h4>
                            <p class="card-text">
                              Hazánk legnagyobb múltú kisüzemi sörfőzdéje, a békésszentandrási Szent András Sörfőzde
                              idén májusban 30 éves jubileumát ünnepli. </p>
                            <a href="https://szentandrassorfozde.hu" target="_blank" class=" read_more">Érdekel</a>
                          </div>
                        </div>
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top " src="/public/img/duzi.jpg" alt="szentandrasi_duzzasztomu"
                            title="Szentandrási duzzasztómú -és Hajózsilip">
                          <div class="test_box card-body">
                            <h4 class="card-title">Duzzasztó - és Hajózsilip</h4>
                            <p class="card-text">1942-ben épült a korabeli Magyarország legnagyobb duzzasztóműve, mely
                              akár 1200 tonnás uszályok átzsilipelésére is alkalmas.</p>
                            <a href="https://bszta.hu/index.php/telepulesunk/bekesszentandrasi-duzzaszto-es-hajozsilip"
                              target="_blank" class="read_more">Érdekel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="carousel-caption">
                      <div class="row">
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top " src="/public/img/kmnp.jpg" alt="kmnp"
                            title="Körös-Maros Nemzeti Park">
                          <div class="test_box card-body">
                            <h4 class="card-title">Körös-maros Nemzeti Park</h4>
                            <p class="card-text">Évente több tízezren keresik fel a Csáky-kastély egykori kertjében, az
                              évszázados fákkal teli Anna-ligetben elterülő bemutató komplexumot. </p>
                            <a href="https://www.kmnp.hu" target="_blank" class="read_more">Érdekel</a>
                          </div>
                        </div>
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top center" src="/public/img/minimo.jpg" alt="minimagyarorszag"
                            title="miniMagyarország">
                          <div class="test_box card-body">
                            <h4 class="card-title">miniMagyarország</h4>
                            <p class="card-text">A rendkívül részletgazdag, speciális technológiával készült makettből
                              álló park nem csak lélegzetelállító látványt, de interaktív élményt is nyújt</p>
                            <a href="https://minimagyarorszag.hu/" target="_blank" class="read_more">Érdekel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="carousel-caption">
                      <div class="row">
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top " src="/public/img/szvsz.jpg" alt="szarvasi_viziszinhaz"
                            title="Szarvasi Viziszínház">
                          <div class="test_box card-body">
                            <h4 class="card-title">Szarvasi Víziszínház</h4>
                            <p class="card-text">Operett vagy opera, gyermek vagy felnőtt egyaránt megtalálja a számára
                              érdekes előadásokat</p>
                            <a href="https://www.viziszinhaz.hu/" class="read_more">Érdekel</a>
                          </div>
                        </div>
                        <div class="col-md-6 margin_boot">
                          <img class="card-img-top center" src="/public/img/sza.jpg" alt="Szarvasi Arborétum"
                            title="Szarvasi Arborétum">
                          <div class="test_box card-body">
                            <h4 class="card-title">Szarvasi Arborétum</h4>
                            <p class="card-text">Az Arborétum és a “Pepi-kert” története az olasz eredetű Bolza család nevéhez fűződik.</p>
                            <a href="https://pepikert.hu/" class="read_more">Érdekel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end testimonial -->

    <!-- Back to Top -->
    <a href="#" id="back" class="btn btn-lg btn-dark btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!--FOOTER-->

    <!-- end footer -->
    <!--COOKIES-->
    <div class="cookies" id="cookie">
      <div class="content">
        <header>Sütik kezelése</header>
        <p>Ez a weboldal a jobb felhasználói élmény eléréséhez sütiket használ. <a href="/pages/cookie.php" class="item"
            target="_blank">Részletek</a></p>
        <div class="buttons">
          <button class="btn btn-info" class="cook_button">Elfogadom</button>
        </div>
      </div>
    </div>

    <?php require("pages/footer.php");
?>