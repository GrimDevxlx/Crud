<?php
  require 'dbcon.php';

  if(isset($_POST['save_patient']))
  {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $query = "INSERT INTO patients (name,email,phone,address) VALUES ()";
  }
?>