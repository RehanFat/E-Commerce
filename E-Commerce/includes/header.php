<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Navbar</title>
    <style>
        .navbar-top {
            border-bottom: 1px solid #eee;
            background: #fff;
            padding: 0.5rem 1rem;
        }

        .nav-item {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-brand {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 20px;
        }

        .navbar-menu {
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .navbar-menu .nav-link {
            text-decoration: none;
            position: relative;
            padding-bottom: 6px;
            /* jarak garis ke teks */
            margin: 0 15px;
            /* atur jarak kanan-kiri antar menu */
        }

        .navbar-menu .nav-link:hover {
            text-decoration: underline;
            text-decoration-thickness: 3px;
            text-underline-offset: 6px;
        }



        .nav-sale {
            color: red !important;
        }

        i {
            font-size: 20px;
            letter-spacing: 10px;
        }
    </style>
</head>
<body>
    <div class="fixed-top">
        <!-- Top Navbar -->
    <nav class="navbar navbar-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Left dummy element -->
            <div class="d-flex align-items-center" style="width:140px;"></div>

            <!-- Center logo -->
            <img style="width: 200px;" class="navbar-brand" src="assets/logo-han.png" alt="eror">

            <!-- Right icons -->
            <div class="d-flex align-items-center" style="width:140px; justify-content:end;">
                <a href="#" class="text-dark me-3"><i class="fas fa-search"></i></a>
                <a href="#" class="text-dark me-3"><i class="far fa-heart"></i></a>
                <a href="#" class="text-dark"><i class="fas fa-shopping-cart"></i></a>
            </div>

        </div>
    </nav>

    <!-- Bottom Navbar (Menu) -->
    <nav class="navbar navbar-expand-lg navbar-menu ">
        <div class="container-fluid justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
</body>
</html>