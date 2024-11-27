<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Donour page</title>
    <style>
      * {
        margin:0;
        padding:0;
      }
      body{
        font-family: "Dosis", sans-serif;
        background-color: black;
      }
      .navbar{
        width:300px;
        height:100%;
        background-color:#93c47d;
        position:fixed;
        top:0;
        right:-300px;
        display:flex;
        justify-content: center;
        align-items: center;
        border-radius:20% 0 0 40%;
        transition: right 0.8s cubic-bezier(1, 0, 0, 1);
      }
      .change{
        right:0;
      }
      h1 {
      font-size: 60px;
      color: #ffffff;
      padding-bottom: 15px;
      margin-bottom: 30px;
      background: linear-gradient(90deg, #ff8a00, #e52e71);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }
      .hamburger-menu {
      width: 40px;
      height: 35px;
      position: fixed;
      top: 40px;
      left: 40px;
      cursor: pointer;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

      .line{
        width:100%;
        height:3px;
        background-color:white;
        transition: all 0.8s;

      }

      .change .line-1 {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .change .line-2 {
      opacity: 0;
    }
    .change .line-3 {
      transform: rotate(-45deg) translate(5px, -5px);
    }

    .nav-list {
      margin-top: 50px;
      text-align: left;
      width: 100%;
    }
    .nav-item {
      list-style: none;
      margin: 20px 0;
    }
      .nav-link {
      text-decoration: none;
      font-size: 18px;
      color: #ffffff;
      padding: 15px 20px;
      display: flex;
      align-items: center;
      border-radius: 12px;
      background: linear-gradient(to right, #ff4e50, #f9d423);
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

      .nav-link::before,
      .nav-link::after{
        content: "";
        width:100%;
        height:2px;
        background-color:red;
        position:absolute;
        right:0;
        transform:scalex(0);
        transition:transform 0.5s;
      }
      .nav-link::after{
        bottom:0;
        transform-origin:right;
      }
      .nav-link::before{
        top:0;
        transform-origin:left;
      }
      .nav-link:hover::before,
      .nav-link:hover::after{
        transform: scalex(1);
      }
      
    </style>

  </head>
  <body>
    <nav>
      <div class="container">
        <h1 style="border:5px solid black; font-size: 35px; background-color:white;text-align: center; border-radius:15px; ">USER DASHBOARD</h1>
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
            <img src="image/isto.jpg" alt="Los Angeles" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="image/isto.jpg" alt="Chicago" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="image/isto.jpg" alt="New York" width="1100" height="500">
          </div>
        </div>
        <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
      </div>
      <div class="container">
      <nav class="navbar">
        <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="rprofile.php" class="nav-link">MY ACCOUNT</a>
          </li>
          <li class="nav-item">
            <a href="blooddinfo.php" class="nav-link">STOCK OF BLOOD</a>
          </li>
           <li class="nav-item">
            <a href="abs.php" class="nav-link">Blood available</a>
          </li>
           <li class="nav-item">
            <a href="sentrequest.php" class="nav-link">Status of request</a>
          </li>
          
           <li class="nav-item">
            <a href="blooddonate.php" class="nav-link">Blood donation request</a>
          </li>
           <li class="nav-item">
            <a href="logout.php" class="nav-link">LogOut</a>
          </li>
        </ul>
     </nav>
    </div>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>