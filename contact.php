<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Vibrant PestControl Services Harare</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Vibrant PestControl Services Harare</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.php#home">Home</a></li>
                <li><?php include 'includes/services-menu.php'; generateServicesMenu($services); ?></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#testimonials">Testimonials</a></li>
                <li><a href="index.php#blog">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="message-icon">
                    <a href="#" onclick="openChatbot()">
                        <i class="fas fa-comments"></i>
                        <span class="message-badge">1</span>
                    </a>
                </li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Contact Information Section -->
    <section class="contact-info">
        <div class="container">
            <h2>Contact Information</h2>
            <div class="contact-grid">
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>+263 77 544 3252</p>
                            <a href="tel:+263775443252" class="contact-link">Call Now</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>morkdndr@gmail.com</p>
                            <a href="mailto:morkdndr@gmail.com" class="contact-link">Send Email</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h3>WhatsApp</h3>
                            <p>+263 77 544 3252</p>
                            <a href="https://wa.me/263775443252" class="contact-link" target="_blank">Chat on WhatsApp</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-facebook"></i>
                        <div>
                            <h3>Facebook</h3>
                            <p>Follow us on Facebook</p>
                            <a href="https://www.facebook.com/profile.php?id=61568177470301" class="contact-link" target="_blank">Visit Page</a>
                        </div>
                    </div>
                </div>
                <div class="location-map">
                    <h3>Our Location</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.5!2d31.0!3d-17.8!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDQ4JzAwLjAiUyAzMcKwMDAnMDAuMCJF!5e0!3m2!1sen!2szw!4v1234567890!5m2!1sen!2szw" 
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="address">
                        <h4>Address</h4>
                        <p>336 Herbert Chitepo, CBD, Harare</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-phone"></i> +263 77 544 3252</p>
                    <p><i class="fas fa-envelope"></i> morkdndr@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Harare, Zimbabwe</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="index.php#about">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=61568177470301" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/263775443252" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:morkdndr@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Pest Control Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html> 