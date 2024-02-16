<?php 
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Patient Read Area</title>
  </head>
  <body>

    <div class="container mt-5">


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Patient Details
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
                     
                    
                  <div class="mb-3">
                  <label>Patient Name:</label>
                  <p class="form-control">
                   <?=$patient['name']; ?>
                  </p>
                  </div>

                  <div class="mb-3">
                  <label>Patient Email:</label>
                  <p class="form-control">
                      <?=$patient['email']; ?>
                  </p>
                  </div>

                  <div class="mb-3">
                  <label>Patient Phone:</label>
                  <p class="form-control">
                    <?=$patient['phone']; ?>
                  </p>
                  </div>

                  <div class="mb-3">
                  <label>Patient Address:</label>
                  <p class="form-control">
                    <?=$patient['address']; ?>
                  </p>
                  </div>
                    
                      <?php
                       }
                       else
                       {
                          echo "";
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