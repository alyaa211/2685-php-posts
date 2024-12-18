<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = '2685_php_posts';


function dd($item, $die = false)
{
  echo "<pre>";
  var_dump($item);
  echo "</pre>";
  if ($die) die();
}


$db = new mysqli(hostname: $host, username: $user, password: $password, database: $database);
