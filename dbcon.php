<?php
  
  $con = mysqli_connect("localhost", "root", "", "nmmc");
  if(!$con) {
    die('Connection Failed'. mysqli_connect_error());
  }

?>