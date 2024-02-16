<?php
  session_start();
  require 'dbcon.php';

  if(isset($_POST['update_patient']))
  {
    $patient_id = mysqli_real_escape_string($con, $_POST['patient_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE patients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id ='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      $_SESSION['message'] = "Patients Updated Successfully";
      header("Location: index.php");
      exit(0);
    }
    else
    {
      $_SESSION['message'] = "Patients Not Updated";
          header("Location: index.php");
          exit(0);
    }
  }


  if(isset($_POST['save_patient']))
  {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $query = "INSERT INTO patients (name,email,phone,address) VALUES 
        ('$name','$email','$phone','$address')";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
          $_SESSION['message'] = "Patient Added Successfully";
          header("Location: patient-create.php");
          exit(0);
        }
        else
        {
          $_SESSION['message'] = "Patient Not Added";
          header("Location: patient-create.php");
          exit(0);
        }
  }
?>