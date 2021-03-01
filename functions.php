<?php
 require('core.php');   
    
   # Get User Information via Cookies
   function cookieInfo()
   { 
    if (isset($_COOKIE['username'])) {
    echo "You are " . $_COOKIE['username'];
    } else {
    echo "You are not authenticated.";
    }
     }
 
   # Addition
   function add(int $a , int $b) 
   { 
       $val= $a + $b;
       echo $val;
       return 0;
   }
   # Subtraction
   function subtract(int $a , int $b) 
   {
       $val= $a - $b; 
       echo $val;
       return 0;
   }
   # Mutliplication
   function multiply(int $a , int $b) 
   {
       $val= $a * $b;
       echo $val;
       return 0;
   }
   # Division
   function divide(int $a , int $b) 
   {
       $val = $a / $b;
       echo $val;
       return 0;
   }

   # 
