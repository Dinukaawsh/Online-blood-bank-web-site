<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
        <!-- Logo and Brand -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="image/Nawaloka.png" alt="Nawaloka Logo" class="rounded-circle" width="40" height="40">
            <span class="ml-2 font-weight-bold text-primary">Online Blood Bank</span>
        </a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Conditional Links -->
                <?php if (isset($_SESSION['hid'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="hospitalpage.php">Dashboard</a>
                    </li>
                <?php } elseif (isset($_SESSION['rid'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="userpage.php">Dashboard</a>
                    </li>
                <?php } else { ?>
                    <!-- Guest Links -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary mx-1" href="login.php">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary mx-1" href="register.php">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
