<?php 
    session_start();
?>

<?php include('includes/header.php'); ?>
    <div class="container mt-5">

     <?php  include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Patient Add
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
              <div class="card-body">
                <form action="here.php" method="POST">

                  <div class="mb-3">
                  <label>Patient Name:</label>
                  <input type="text" name="name" placeholder="John doe" required class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Email:</label>
                  <input type="email" name="email" placeholder="@yahoo/@gmail" required class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Phone:</label>
                  <input type="text" name="phone"  placeholder="639+" required class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Patient Address:</label>
                  <input type="text" name="address" placeholder="PHL" required class="form-control">
                  </div>
                  <div class="mb-3">
                    <button type="submit" name="save_patient" required class="btn btn-primary">Save Patient</button>
                  </div>

                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('includes/footer.php'); ?>