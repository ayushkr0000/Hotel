<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hotel Management</title>
    <style>
        /* CSS for logo text */
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 24px;
            color: #333;
            margin-right: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header {
            /* Add your header styles here */
            /* ... */
        }

        /* Add other styles for the rest of your page here */
        /* ... */

    </style>
    <!-- Add Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-font-awesome-key.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <span class="logo-text">Hotel Management</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <?php
                    //Check if user is logging in or not
                    if (!isset($_SESSION["user_id"])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                                <i class="fas fa-user"></i>Signup
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                                <i class="fas fa-sign-in-alt"></i>Login
                            </a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <div class='nav-name'>
                            Hi, <?php echo $_SESSION["full_name"] ?>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="fas fa-user"></i>Dashboard
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading"></div>

    <!-- Add your other HTML content here -->

</body>

</html>
