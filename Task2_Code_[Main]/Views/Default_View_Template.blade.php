<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="Home_Page_Styles.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('title')
    </head>
    <header>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="margin-left: 5vw;">Home</a>
                    </li>
                </ul>
                <a class="navbar-brand ms-auto">GibJohn Tutorials</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Login_Page.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Signup_Page.php" style="margin-right: 5vw;">Signup</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <body>
        @yield('content')
        <br>
        <div class="footer">
            <p>footer</p>
        </div>
    </body>
</html>