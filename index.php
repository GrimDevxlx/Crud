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

    <title>Home</title>
  </head>
  <body>
   
      <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Patient Details
                <a href="patient-create.php" class="btn btn-primary float-end">Add Patients</a>
                </h4>
              </div>
                <div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Phone</th>
                        <th>Patient Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query = "SELECT * FROM patients";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                          foreach($query_run as $patient)
                          {
                            ?>
                            <tr>
                                <td><?=$patient['id']; ?></td>
                                <td><?=$patient['name']; ?></td>
                                <td><?=$patient['email']; ?></td>
                                <td><?=$patient['phone']; ?></td>
                                <td><?=$patient['address']; ?></td>
                                <td>
                                  <a href="patient-view.php" class="btn btn-info btn-sm">Read</a>
                                  <a href="patient-edit.php?id=<?= $patient['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                  <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php
                            
                          }
                        }
                        else
                        {
                          echo "<h5>No Patient Record Found!</h5>";
                        }
                      ?>
                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>