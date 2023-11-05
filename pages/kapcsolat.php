<?php 
  require_once("head.php");
  require_once("nav.php");
  ?>

<!--HEADER SECTION-->
<div class="container-fluid col-lg-12 mb-3 pt-3" id="imp">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown titlePage">Kapcsolat</h1>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER SECTION-->
<!--
     <div class="container-fluid col-lg-12 mb-3 hero-header" id="vargahouse">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Varga Nyaraló</h1>
                </div>
            </div>
        </div>
    </div>
  <div class="footer">
  <div class="col-md-6">
        <form id="request" action="/pages/send-email.php" class="main_form" method="post" >
          <div class="row">
              <div class="col-md-12 ">
                 <label for="name">Teljes Név</label>
                 <input class="contactUs" placeholder="Teljes Név"  id="name" type="text" name="name">
              </div>
              <div class="col-md-12">
                 <label for="email">Email cím</label>
                 <input class="contactUs" placeholder="Email" type="text" id="email" name="email">
              </div>
              <div class="col-md-12">
                 <label for="phone">Telefonszám</label>
                 <input class="contactUs" placeholder="Telefonszám" id="phone" name="phone" type="text">
              </div>
              <div class="col-md-12">
                 <label for="subject"></label>
                 <textarea class="textarea" placeholder="subject" id="subject" type="text" name="subject"></textarea>
              </div>
              <div class="col-md-12">
                 <label for="message"></label>
                 <textarea class="textarea" placeholder="message" type="text" name="message"></textarea>
              </div>
             
              <div class="col-sm-12">
                 <button class="send_btn" value="Küldés" type="submit">Küldés</button>
              </div>
           </div>
        </form>
     </div>
</div>-->
<h3 class="text-center">Ha bármilyen kérdésed merül fel, akkor kérlek keress bizalommal!</h3>
<div class="container col-lg-12 pt-5 py-6">
    <div class="col-lg-12 col-md-12 col-sm-6 wow fadeInUp ">
        <div class="row">
            <div class="infos col-lg-4 ">
                <i class="fa-solid fa-phone"></i>
                <h2><a href="tel:+ 36 30 393 2002">+ 36 30 393 2002</a></h2>
            </div>
            <div class="infos col-lg-4">
                <i class="fa-solid fa-envelope"></i>
                <h2>varga.72@freemail.hu</h2>
            </div>
            <div class="infos col-lg-4">
                <i class="fa-solid fa-location-dot"></i>
                <h2>Békésszentandrás, Hungary</h2>
            </div>
        </div>
    </div>
</div>

<?php

    require_once("footer.php")
    ?>
