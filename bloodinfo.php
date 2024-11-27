<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid'])) {
    header('location:login.php');
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<?php $title="Bloodbank | Add Blood Samples"; ?>
<?php require 'head.php'; ?>
<style>
  body {
    background: url(image/p1.jpg) no-repeat center;
    background-size: cover;
    min-height: 100vh;
    font-family: 'Arial', sans-serif;
  }
  .login-form {
    width: 100%;
    max-height: 650px;
    max-width: 450px;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    border-radius: 8px;
    padding: 20px;
  }
  .card {
    border: none;
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.8);
  }
  .card-header {
    background-color: #6c757d;
    color: black;
    font-size: 1.25rem;
    padding: 10px 15px;
    text-align: center;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }
  .title {
    font-weight: bold;
    font-size: 1.5rem;
    text-align: center;
  }
  .form-control {
    border-radius: 10px;
    border: 1px solid #ccc;
    padding: 12px;
    margin-bottom: 15px;
    font-size: 1rem;
  }
  .btn {
    background-color: #007bff;
    color: #fff;
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 8px;
    width: 100%;
    cursor: pointer;
  }
  .btn:hover {
    background-color: #0056b3;
  }
  .collapse {
    margin-bottom: 15px;
    font-size: 0.9rem;
    color: #333;
  }
  .collapse a {
    color: #007bff;
    text-decoration: none;
  }
  .collapse a:hover {
    text-decoration: underline;
  }
  .table {
    width: 100%;
    margin-top: 30px;
  }
  .table-striped tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
  }
  .table th {
    background-color: #343a40;
    color: #fff;
  }
  .table td {
    font-size: 1rem;
  }
  .cancel-link {
    display: inline-block;
    margin-top: 10px;
    text-align: center;
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
  }
  .cancel-link:hover {
    text-decoration: underline;
  }
</style>
<body>
  <?php require 'header.php'; ?>

  <div class="container cont">
    <?php require 'message.php'; ?>

    <div class="row justify-content-center">
      <!-- Add Blood Sample Form -->
      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 mb-5">
        <div class="card">
          <div class="card-header">Add Blood Group Available in Your Hospital</div>
          <div class="card-body">
            <form action="file/infoAdd.php" method="post">
              <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Term & Conditions</a><br>
              <div class="collapse" id="collapseExample">
                If you have a blood sample tested by your doctor, nurse, or trained phlebotomist at a pathology collection center, clinic, or hospital, ensure that the sample is transferred to the correct tubes with preservatives before adding your blood group available in your hospital to the blood bank.<br><br>
              </div>
              <input type="checkbox" name="condition" value="agree" required> Agree<br><br>
              <select class="form-control" name="bg" required>
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
              </select><br>
              <input type="submit" name="add" value="Add" class="btn"><br>
              <a href="hospitalpage.php" class="cancel-link">Cancel</a><br>
            </form>
          </div>
        </div>
      </div>

      <!-- Blood Bank Table -->
      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 mb-5">
        <table class="table table-striped table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Blood Samples</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if (isset($_SESSION['hid'])) {
                $hid = $_SESSION['hid'];
                $sql = "SELECT * FROM bloodinfo WHERE hid='$hid'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                  $counter = 0;
                  while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
              <td><?php echo ++$counter; ?></td>
              <td><?php echo $row['bg']; ?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
                  }
                } else {
                  echo '<tr><td colspan="3" class="text-center text-danger">No records found.</td></tr>';
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>
