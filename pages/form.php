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
<div class="container col-md-6 col-lg-2">
   <h2>Vedd fel velünk a kapcsolatot</h2>
</div>
</div class="container">
<div class="col-md-6">
   <form action="/pages/action.php" class="main_form" method="post" name="myemailform">
      <div class="row">
         <div class="col-md-12 ">
            <input class="contactUs" placeholder="Teljes Név" type="text" name="name" required>
         </div>
         <div class="col-md-12">
            <input class="contactUs" placeholder="Email" type="text" name="email" required>
         </div>
        <!-- <div class="col-md-12">
            <input class="contactUs" placeholder="Tárgy" type="text" name="subject" required>
         </div>-->
         <div class="col-md-12">
            <input class="contactUs" placeholder="Telefonszám" name="phone" type="text" required>
         </div>
         <div class="col-md-12">
            <textarea class="textarea" placeholder="Üzenet" type="text" name="message" required></textarea>
         </div>
         <div class="col-sm-12">
            <input class="submit" value="Küldés" type="submit" name="submit">
         </div>
      </div>
   </form>
</div>

<?php
require_once("footer.php"); ?>
</body>

</html>