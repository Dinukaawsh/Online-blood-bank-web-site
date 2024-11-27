<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;700&display=swap" rel="stylesheet"/>
    <title>Hospital/Clinic Dashboard</title>
    <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
  font-family: "Dosis", sans-serif;
  width: 100%;
  height: 100vh;
  background: url('image/RBC7.jpg') no-repeat center center; /* Correctly set the background image */
  background-size: cover; /* Ensure the image covers the entire viewport */
  display: flex;
  justify-content: center;
  align-items: center;
  color: #ffffff;
  overflow: hidden;
  padding: 20px;
}

    .content-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      width: 80%;
      max-width: 900px;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
      position: relative;
      text-align: center;
      overflow: hidden;
      animation: fadeIn 1.2s ease-out;
    }
    .content-container::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, #99f2c8, transparent 60%);
      opacity: 0.1;
      animation: rotateBackground 20s linear infinite;
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
        <h1 style="border:5px solid black; font-size: 35px; background-color:white;text-align: center; border-radius:15px; ">Hospital Clinic Dashboard</h1>
      </div>
    </nav>
    <div class="container">
      <div class="hamburger-menu" onclick="toggleNavbar()">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
      <nav class="navbar">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="hprofile.php" class="nav-link">Hospital account</a>
          </li>
          <li class="nav-item">
            <a href="bloodinfo.php" class="nav-link">Stock of Blood</a>
          </li>
          <li class="nav-item">
            <a href="bloodrequest.php" class="nav-link">Blood Requests</a>
          </li>
          <li class="nav-item">
            <a href="deleteit.php" class="nav-link">Need Blood</a>
          </li>
          <li class="nav-item">
            <a href="sentrequestd.php" class="nav-link">Status of Your Request</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">LogOut</a>
          </li>
        </ul>
      </nav>
    </div>
    <script>
      function toggleNavbar() {
        document.querySelector('.navbar').classList.toggle('change');
        document.querySelector('.hamburger-menu').classList.toggle('change');
      }
    </script>
  </body>
</html>
