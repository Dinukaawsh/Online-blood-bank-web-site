<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<?php $title="Bloodbank | Blood Requests"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        background: url(image/p2.png) no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        font-family: 'Arial', sans-serif;
        color: #333;
    }
    .container {
        padding: 20px;
    }
    .table {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
        padding: 12px;
    }
    .title {
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
        background-color: #6c757d;
        color: black;
        padding: 10px;
        border-radius: 10px;
    }
    .btn {
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 5px;
    }
    .btn-success {
        background-color: #28a745;
        border: none;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
    }
    .btn.disabled {
        background-color: #6c757d;
        cursor: not-allowed;
    }
    .alert {
        margin-top: 15px;
        font-size: 14px;
    }
    .card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 20px;
    }
</style>
<body>
	<?php require 'header.php'; ?>
	<div class="container">
		<?php require 'message.php'; ?>

		<div class="card mb-4">
			<div class="card-header title">Blood Requests</div>
			<div class="card-body">
				<?php 
					if ($result) {
						$row = mysqli_num_rows($result);
						if ($row == 0) {
							echo '<div class="alert alert-warning">No one has requested yet.</div>';
						}
					}
				?>
				<table class="table table-striped table-bordered table-responsive">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>City</th>
						<th>Phone</th>
						<th>Blood Group</th>
						<th>Status</th>
						<th colspan="2">Action</th>
					</tr>

					<?php while($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo ++$counter;?></td>
						<td><?php echo $row['rname'];?></td>
						<td><?php echo $row['remail'];?></td>
						<td><?php echo $row['rcity'];?></td>
						<td><?php echo $row['rphone'];?></td>
						<td><?php echo $row['bg'];?></td>
						<td><?php echo 'You have '.$row['status'];?></td>
						<td>
							<?php if($row['status'] == 'Accepted') { ?> 
								<a href="#" class="btn btn-success disabled">Accepted</a>
							<?php } else { ?>
								<a href="file/accept.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-success">Accept</a>
							<?php } ?>
						</td>
						<td>
							<?php if($row['status'] == 'Rejected') { ?> 
								<a href="#" class="btn btn-danger disabled">Rejected</a>
							<?php } else { ?>
								<a href="file/reject.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Reject</a>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

    <?php require 'footer.php'; ?>
</body>
</html>

<?php } ?>
