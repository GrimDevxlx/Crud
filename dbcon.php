<?php
  
  $con = mysqli_connect("localhost", "root", "", "DBname");
  if(!$con) {
    die('Connection Failed'. mysqli_connect_error());
  }

?>