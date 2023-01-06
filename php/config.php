<?php
  header('Access-Control-Allow-Origin: *');
  $host = getenv('DB_HOST');
  $un = getenv('DB_USER');
  $pw = getenv('DB_PASS');
  $db_name = getenv('DB_NAME');
  $link = mysqli_connect($host, $un, $pw, $db_name);
?>
