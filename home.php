<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homify</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="homify-logo.png" alt="Homify Logo" class="img-fluid" style="max-width: 80px;">
                </div>
                <div class="location-selector">
                    <input type="button" value="Get Location" id="get-location-btn" class="btn btn-primary">
                    <p id="current-location"></p>
                </div>
                <div class="company-name">
                    <h1>Homify</h1>
                </div>
                <div class="login-signup">
                    <div id="profile">
                        <p>Welcome, <span id="username">
                            <?php
                            echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Guest';
                            ?>
                        </span>!</p>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <h6 class="dropdown-header">Real Estate</h6>
                            <a class="dropdown-item" href="#">Real Estate Buying</a>
                            <a class="dropdown-item" href="#">Real Estate Selling</a>
                            <a class="dropdown-item" href="#">Property Rentals</a>
                            <a class="dropdown-item" href="#">Property Management</a>
                            <h6 class="dropdown-header">Home Maintenance and Repairs</h6>
                            <a class="dropdown-item" href="#">Home Inspection</a>
                            <a class="dropdown-item" href="#">Maintenance and Repair Services</a>
                            <a class="dropdown-item" href="#">Plumbing Services</a>
                            <a class="dropdown-item" href="#">Electrical Services</a>
                            <a class="dropdown-item" href="#">HVAC Services</a>
                            <a class="dropdown-item" href="#">Roofing Services</a>
                            <a class="dropdown-item" href="#">Carpentry Services</a>
                            <a class="dropdown-item" href="#">Painting Services</a>
                            <a class="dropdown-item" href="#">Handyman Services</a>
                            <h6 class="dropdown-header">Cleaning Services</h6>
                            <a class="dropdown-item" href="#">Residential Cleaning</a>
                            <a class="dropdown-item" href="#">Commercial Cleaning</a>
                            <a class="dropdown-item" href="#">Carpet Cleaning</a>
                            <a class="dropdown-item" href="#">Window Cleaning</a>
                            <a class="dropdown-item" href="#">Move-In/Move-Out Cleaning</a>
                            <h6 class="dropdown-header">Home Improvement</h6>
                            <a class="dropdown-item" href="#">Renovation and Remodeling</a>
                            <h6 class="dropdown-header">Landscaping and Gardening</h6>
                            <a class="dropdown-item" href="#">Landscaping and Gardening</a>
                            <h6 class="dropdown-header">Pest Control</h6>
                            <a class="dropdown-item" href="#">Pest Control</a>
                            <h6 class="dropdown-header">Security and Smart Home</h6>
                            <a class="dropdown-item" href="#">Smart Home Installation</a>
                            <a class="dropdown-item" href="#">Security System Installation</a>
                            <h6 class="dropdown-header">Artistic and Creative</h6>
                            <a class="dropdown-item" href="#">Custom Paintings and Artworks</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-home"></i>
                        <span>Property Rentals</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-wrench"></i>
                        <span>Home Maintenance and Repairs</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-paint-brush"></i>
                        <span>Painting Services</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-leaf"></i>
                        <span>Landscaping and Gardening</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-broom"></i>
                        <span>Residential Cleaning</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-hammer"></i>
                        <span>Renovation and Remodeling</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-shield"></i>
                        <span>Security System Installation</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-palette"></i>
                        <span>Custom Paintings and Artworks</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-plug"></i>
                        <span>Electrical Services</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-trowel"></i>
                        <span>Plumbing Services</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="service-btn">
                        <i class="fas fa-roof"></i>
                        <span>Roofing Services</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contact Us</h5>
                    <p>Phone: 123-456-7890</p>
                    <p>Email: <a href="mailto:info@homify.com">info@homify.com</a></p>
                    <h5>About Us</h5>
                    <p>Homify is your one-stop solution for all your home service needs.</p>
                </div>
                <div class="col-md-6">
                    <h5>Follow Us</h5>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
