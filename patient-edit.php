<?php 
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Patient Edit Area</title>
  </head>
  <body>

    <div class="container mt-5">

     <?php  include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Patient Edit
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
              <div class="card-body">
                  <?php 
                    if(isset($_GET['id']))
                    {
                       $patient_id = mysqli_real_escape_string($con, $_GET['id']);
                       $query = "SELECT * FROM patients WHERE id ='$patient_id' ";
                       $query_run = mysqli_query($con, $query);

                       if(mysqli_num_rows($query_run) > 0)
                       {
                          $patient = mysqli_fetch_array($query_run);
                          ?>
                     
                      <form action="here.php" method="POST">
                          <input type="hidden" name="patient_id" value="<?= $patient['id']; ?>">


                  <div class="mb-3">
                  <label>Patient Name:</label>
                  <input type="text" name="name" value="<?=$patient['name']; ?>" placeholder="John doe" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Email:</label>
                  <input type="email" name="email"  value="<?=$patient['email']; ?>" placeholder="@yahoo/@gmail" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Phone:</label>
                  <input type="text" name="phone"   value="<?=$patient['phone']; ?>" placeholder="639+" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Address:</label>
                  <input type="text" name="address"  value="<?=$patient['address']; ?>" placeholder="PHL" class="form-control">
                  </div>
                  <div class="mb-3">
                    <button type="submit" name="update_patient" class="btn btn-primary">Update Patient</button>
                  </div>
                      </form>
                      <?php
                       }
                       else
                       {
                          echo "<h4>No Such Patient ID Found!</h4>";
                       }
                    }
                  ?>
              </div>
          </div>
        </div>
      </div>
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>