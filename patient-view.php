<?php 
    require 'dbcon.php';
?>
      <?php include('includes/header.php'); ?>
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

    <?php include('includes/footer.php'); ?>