<?php 
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

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
    <?php include('includes/footer.php'); ?>