<?php 
session_start();
if (isset($_SESSION['hid'])) {
    header("location:bloodrequest.php");
} elseif (isset($_SESSION['rid'])) {
    header("location:sentrequest.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodbank | Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('image/bb2.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .register-form {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            margin: 0 auto;
        }
        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-header img {
            width: 70px;
            margin-bottom: 10px;
        }
        .register-header h2 {
            font-weight: bold;
            color: #333;
        }
        .nav-tabs .nav-link {
            color: #555;
        }
        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }
        .btn-primary {
            border-radius: 5px;
            background: #007bff;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .form-control {
            border-radius: 5px;
        }
        .text-muted {
            font-size: 14px;
        }
        .text-center {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="register-form col-lg-5 col-md-7 col-sm-9">
            <!-- Header -->
            <div class="register-header">
                <img src="image/Nawaloka.png" alt="Logo">
                <h2>Online Blood Bank</h2>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#hospitals" role="tab">
                        <i class="fas fa-hospital"></i> Hospitals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#receivers" role="tab">
                        <i class="fas fa-hand-holding-heart"></i> Donors
                    </a>
                </li>
            </ul>

            <!-- Tab Contents -->
            <div class="tab-content">
                <!-- Hospital Registration -->
                <div class="tab-pane fade show active" id="hospitals" role="tabpanel">
                    <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Name</label>
                            <input type="text" name="hname" placeholder="Enter hospital name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">City</label>
                            <input type="text" name="hcity" placeholder="Enter city" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Phone Number</label>
                            <input type="tel" name="hphone" placeholder="Enter phone number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Email</label>
                            <input type="email" name="hemail" placeholder="Enter email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Password</label>
                            <input type="password" name="hpassword" placeholder="Enter password" class="form-control" required>
                        </div>
                        <button type="submit" name="hregister" class="btn btn-primary btn-block">
                            <i class="fas fa-user-plus"></i> Register
                        </button>
                    </form>
                </div>

                <!-- Donor Registration -->
                <div class="tab-pane fade" id="receivers" role="tabpanel">
                    <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Username</label>
                            <input type="text" name="rname" placeholder="Enter your name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Blood Group</label>
                            <select name="rbg" class="form-control" required>
                                <option disabled selected>Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">City</label>
                            <input type="text" name="rcity" placeholder="Enter city" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Phone Number</label>
                            <input type="tel" name="rphone" placeholder="Enter phone number" class="form-control" required pattern="[0-6-9]{1}[0-9]{9,11}" title="Phone number must start with 0,6,7,8 or 9 and must be 10 to 12 digits long">
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Email</label>
                            <input type="email" name="remail" placeholder="Enter email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Password</label>
                            <input type="password" name="rpassword" placeholder="Enter password" class="form-control" required minlength="6">
                        </div>
                        <button type="submit" name="rregister" class="btn btn-primary btn-block">
                            <i class="fas fa-user-plus"></i> Register
                        </button>
                    </form>
                </div>
            </div>

            <!-- Already Have Account -->
            <div class="text-center mt-3">
                <a href="login.php" class="text-muted">
                    <i class="fas fa-sign-in-alt"></i> Already have an account? Login here
                </a>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>
