<?php

if(isset($_POST['first'],$_POST['second'],$_POST['action'])){

   $first =  $_POST['first'];
   $second = $_POST['second'];
   $action = $_POST['action'];

   switch ($action){
      case '*':
         echo $first * $second;
           break;
      case '/':
         echo $first / $second;
         break;
      case '+':
         echo $first + $second;
         break;
      case '-':
         echo $first - $second;
         break;
   }

};