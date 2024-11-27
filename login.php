<?php 
session_start();
if (isset($_SESSION['hid'])) {
    header("location:hospitalpage.php");
} elseif (isset($_SESSION['rid'])) {
    header("location:userpage.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodbank | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('image/bb3.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .login-form {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .tab-content {
            margin-top: 20px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            border-radius: 5px;
            background: #007bff;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header img {
            width: 70px;
            margin-bottom: 10px;
        }
        .login-header h2 {
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
        .text-muted {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="login-form col-lg-5 col-md-7 col-sm-9">
            <!-- Header -->
            <div class="login-header">
                <img src="image/Nawaloka.png" alt="Logo">
                <h2>Log in to Online Blood Bank</h2>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#hospitals" role="tab">
                        <i class="fas fa-hospital"></i> Hospital
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
                <!-- Hospital Login -->
                <div class="tab-pane fade show active" id="hospitals" role="tabpanel">
                    <form action="file/hospitalLogin.php" method="post">
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Email</label>
                            <input type="email" name="hemail" placeholder="Enter your email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Password</label>
                            <input type="password" name="hpassword" placeholder="Enter your password" class="form-control">
                        </div>
                        <button type="submit" name="hlogin" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>

                <!-- Donor Login -->
                <div class="tab-pane fade" id="receivers" role="tabpanel">
                    <form action="file/receiverLogin.php" method="post">
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Email</label>
                            <input type="email" name="remail" placeholder="Enter your email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="text-muted font-weight-bold">Password</label>
                            <input type="password" name="rpassword" placeholder="Enter your password" class="form-control">
                        </div>
                        <button type="submit" name="rlogin" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>
            </div>

            <!-- Register Link -->
            <div class="text-center mt-3">
                <a href="register.php" class="text-muted">
                    <i class="fas fa-user-plus"></i> Don't have an account? Register here
                </a>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>
