<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title="Blood Bank Management System | Home Page"; ?>
<?php require 'head.php'; ?>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Dosis", sans-serif;
            background: linear-gradient(to right, #f0f0f0, #d8d8d8);
            margin: 0;
            padding: 0;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .carousel-inner img {
            width: 100%;
            height: 500px;
        }
        .aboutimg {
            border-radius: 15px;
            margin-top: 20px;
        }
        #about h2, #contact h2 {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        #contact p {
            background-color: #343a40;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        #contact a {
            text-decoration: none;
            color: #61dafb;
        }
        #contact a:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .aboutimg {
        border: 3px solid #1abc9c;
        border-radius: 8px;
    }

    .btn-primary {
        background-color: #1abc9c;
        border: none;
    }

    .btn-primary:hover {
        background-color: #16a085;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="image/Nawaloka.png" width="30" height="30" class="rounded-circle"> Online Blood Bank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?#about">About</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/slide-1.jpg" alt="Blood Donation" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="image/bb2.jpg" alt="Blood Donation" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="image/RBC6.jpg" alt="Blood Donation" width="1100" height="500">
            </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5" id="about">
    <div class="py-3">
        <h2 class="text-center text-uppercase font-weight-bold"><b>About Us</b></h2>
        <p class="text-center text-muted">Dedicated to saving lives by connecting blood donors with those in need</p>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side - Image -->
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <img src="image/about1.png" class="img-fluid aboutimg rounded shadow-lg" alt="About Us" style="animation: fadeIn 2s ease-in-out;">
            </div>

            <!-- Right Side - Content -->
            <div class="col-lg-6 col-md-6 col-12">
                <h3 class="text-primary font-weight-bold">BLOOD - "I'm here to save you!"</h3>
                <p class="py-3 text-justify text-dark">
                    At <b>Online Blood Donation</b>, we are committed to creating a bridge between life-saving blood donors and hopitals in urgent need. Every drop counts, and we recognize the urgency of time when it comes to saving lives. 
                </p>
                <h5 class="text-secondary">Our Mission</h5>
                <p class="text-muted">To ensure that no life is lost due to the unavailability of blood. We aim to build an efficient, reliable, and user-friendly platform to connect donors and patients swiftly.</p>
                <h5 class="text-secondary">Why Choose Us?</h5>
                <ul class="text-muted">
                    <li><i class="fas fa-check-circle text-success"></i> Fast and reliable blood donation network.</li>
                    <li><i class="fas fa-check-circle text-success"></i> Verified donors and secure connections.</li>
                    <li><i class="fas fa-check-circle text-success"></i> 24/7 availability to save lives at any time.</li>
                    <li><i class="fas fa-check-circle text-success"></i> Dedicated to providing life-saving support in emergencies.</li>
                </ul>
            
            </div>
        </div>
    </div>
</section>

    

 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php require 'footer.php'; ?>
</body>
</html>
