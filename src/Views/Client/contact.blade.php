<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .nav-link {
            margin-right: 15px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #cce5ff !important;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            margin: 0 10px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .welcome-text {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .contact-section {
            margin: 40px 0;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .contact-info p {
            margin-bottom: 10px;
            font-size: 1.25rem;
            color: #333;
        }

        .contact-info strong {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
    </style>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DYNAMITENESS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url() }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('products/') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about/') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact/') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        @if (!isset($_SESSION['user']))
                            <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                        @endif
                        @if (isset($_SESSION['user']))
                            <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->

    <div class="container">
        <div class="row">
            <h1 class="welcome-text mt-5">Welcome {{ $name }} to my contact section!</h1>
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="contact-info">
                        <h2>Contact Us</h2>
                        <p><strong>Address:</strong> 91 Cầu Diễn- Hà nội</p>
                        <p><strong>Email:</strong> contact@dynamiteness.com</p>
                        <p><strong>Phone:</strong> (+84) 79534-1515</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Contact Section -->
    </div>
</body>

</html>
