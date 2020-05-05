<?php
  $db_host = "localhost";
  $db_user = "quiz";
  $db_password = "123456";
  $db_name = "quiz";

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if(mysqli_connect_error())
  {
    echo mysqli_connect_error();
    exit;
  }
  echo "connected successfully";
?>
