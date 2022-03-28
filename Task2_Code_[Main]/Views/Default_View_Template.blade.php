<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/Home_Page_Styles.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('title')
    </head>
    <div id="container">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" style="margin-left: 5vw;">Home</a>
                        </li>
                    </ul>
                    <a class="navbar-brand ms-auto" style="color: #565656;">GibJohn Tutorials</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Login_Page.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Signup_Page.php" style="margin-right: 5vw; margin-left: 1vw;">Signup</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <body>
            @yield('content')
            <br>
        </body>

        <footer class="page-footer font-small bg-light bg-gradient text-dark lighten-3 pt-4">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-4 col-lg-3 ms-auto my-md-6 my-0 mt-4 mb-1">
                        <h6 class="font-weight-bold text-uppercase mb-4">Address</h6>
                        <ul class="list-unstyled">
                        <li>
                            <p>
                            <i class="fa fa-home ms-3"></i> SW1A, London, UK</p>
                        </li>
                        <li>
                            <p>
                            <i class="fa fa-envelope ms-3"></i> info@example.com</p>
                        </li>
                        <li>
                            <p>
                            <i class="fa fa-phone ms-3"></i> 01234567890</p>
                        </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
                        <h6 class="font-weight-bold text-uppercase mb-6">Follow Us</h6>
                        <a type="button" class="btn-floating btn-fb">
                            <a href="#" class="fa fa-facebook"></a>
                        </a>
                        <a type="button" class="btn-floating btn-tw">
                            <a href="#" class="fa fa-twitter"></a>
                        </a>
                        <a type="button" class="btn-floating btn-ig">
                            <a href="#" class="fa fa-instagram"></a>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </container>
</html>