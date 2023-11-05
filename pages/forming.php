<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
$to = "yourmail@mailer.com";
$name = $_POST['name'];
$subject = "This is a message sent from your Website";
$msg = $_POST['message'];
$msg = wordwrap($msg,70);
$from = $_POST['email'];
  
if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  header('Location: contact.php?s="Email Error"');
  exit();
}
$headers = "From:". $from . "\r\n" . $name;
mail($to,$subject,$msg,$headers);
 header('Location: contact.php?s="Success"');
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>