<?php
 
    include('../model/usermodel.php');

    $obj1 = new user();
    $obj1->register();
    $obj1->login();
 

  
?>