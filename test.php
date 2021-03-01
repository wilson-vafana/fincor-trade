<?php
   require('inc/config.php');
   include('core.php');
   
   $amount = 10;
   $ecocash = "";
   $paypal ="";
   $email  = "wilsonvafana@gmail.com";
?>
<?php 
  echo EcocashToPaypal($amount , $paypal , $ecocash , $email);
   ?> 