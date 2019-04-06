<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";






$connection = mysqli_connect('localhost','root','','cms');

if($connection){
  echo "we are connected";
}







?>