<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Footer Design</title>
  <style>
    .footer {
      background-color: #2C3E50;
      color: #ecf0f1;
      padding: 40px 20px;
    }

    .footer a {
      color: #ecf0f1;
      text-decoration: none;
    }

    .footer a:hover {
      color: #1abc9c;
      text-decoration: underline;
    }

    .social-icons a {
      font-size: 18px;
      color: #ecf0f1;
      margin: 0 10px;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #1abc9c;
    }

    .footer .newsletter input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 4px;
    }

    .footer .newsletter button {
      background-color: #1abc9c;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .footer .newsletter button:hover {
      background-color: #16a085;
    }

    .footer .brand {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .footer .copyright {
      font-size: 14px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="footer">
  <div class="container">
    <div class="row">
      <!-- Brand and About Section -->
      <div class="col-md-4">
        <div class="brand">Online Blood Donation</div>
        <p>Connecting donors with those in need. Saving lives, one donation at a time.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#about"><i class="fas fa-info-circle"></i> About Us</a></li>
          <li><a href="#services"><i class="fas fa-concierge-bell"></i> Our Services</a></li>
          <li><a href="#contact"><i class="fas fa-phone-alt"></i> Contact</a></li>
          <li><a href="#privacy"><i class="fas fa-shield-alt"></i> Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Social Media and Newsletter -->
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <div class="social-icons">
          <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <div class="newsletter mt-4">
          <h5>Subscribe to Our Newsletter</h5>
          <form>
            <input type="email" class="form-control" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row">
      <div class="col-12 text-center mt-4">
        <p class="copyright">
          © <span id="year"></span> Online Blood Donation. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Update the year dynamically
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>
</html>
