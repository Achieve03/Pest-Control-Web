<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibrant PestControl Services Harare - Professional Pest Control & Fumigation</title>
    <meta name="description" content="Vibrant PestControl Services Harare - Professional pest control, fumigation, and pest management services in Harare. Expert solutions for residential, commercial, and industrial properties.">
    <meta name="keywords" content="pest control harare, fumigation services harare, pest management zimbabwe, termite control, rodent removal, bed bug treatment, cockroach control, mosquito control, ant control, bee removal, wasp removal, wildlife control, garden pest control, commercial pest control, residential pest control, industrial pest control, warehouse pest control, restaurant pest control, healthcare pest control, school pest control, hotel pest control, marine pest control">
    <meta name="author" content="Vibrant PestControl Services Harare">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Vibrant PestControl Services Harare - Professional Pest Control & Fumigation">
    <meta property="og:description" content="Expert pest control and fumigation services in Harare. Comprehensive solutions for all your pest management needs.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vibrantpestcontrol.co.zw">
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
                <li><a href="#home">Home</a></li>
                <li><?php include 'includes/services-menu.php'; generateServicesMenu($services); ?></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#blog">Blog</a></li>
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

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Professional Pest Control Services</h1>
            <p>Protecting your home and business from unwanted pests with safe and effective solutions</p>
            <a href="#contact" class="cta-button">Get a Free Quote</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-bug"></i>
                <h3>Termite Control</h3>
                <p>Comprehensive termite inspection and treatment solutions</p>
                <a href="services/termite-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-rat"></i>
                <h3>Rodent Removal</h3>
                <p>Safe and effective rodent control and prevention</p>
                <a href="services/rodent-removal.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-spider"></i>
                <h3>General Pest Control</h3>
                <p>Regular maintenance and treatment for all types of pests</p>
                <a href="services/general-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-cockroach"></i>
                <h3>Cockroach Control</h3>
                <p>Professional cockroach elimination and prevention</p>
                <a href="services/cockroach-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-mosquito"></i>
                <h3>Mosquito Control</h3>
                <p>Effective mosquito treatment and prevention</p>
                <a href="services/mosquito-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-ant"></i>
                <h3>Ant Control</h3>
                <p>Comprehensive ant colony elimination</p>
                <a href="services/ant-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-bee"></i>
                <h3>Bee & Wasp Removal</h3>
                <p>Safe and humane bee and wasp nest removal</p>
                <a href="services/bee-wasp-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-bed"></i>
                <h3>Bed Bug Treatment</h3>
                <p>Thorough bed bug inspection and elimination</p>
                <a href="services/bed-bug-treatment.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-frog"></i>
                <h3>Wildlife Control</h3>
                <p>Humane wildlife removal and prevention</p>
                <a href="services/wildlife-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-seedling"></i>
                <h3>Garden Pest Control</h3>
                <p>Eco-friendly garden pest management</p>
                <a href="services/garden-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-building"></i>
                <h3>Commercial Pest Control</h3>
                <p>Business-focused pest management solutions</p>
                <a href="services/commercial-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-home"></i>
                <h3>Residential Pest Control</h3>
                <p>Home pest control and prevention services</p>
                <a href="services/residential-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-industry"></i>
                <h3>Industrial Pest Control</h3>
                <p>Industrial facility pest management</p>
                <a href="services/industrial-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-warehouse"></i>
                <h3>Warehouse Pest Control</h3>
                <p>Storage facility pest prevention</p>
                <a href="services/warehouse-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-utensils"></i>
                <h3>Restaurant Pest Control</h3>
                <p>Food service pest management</p>
                <a href="services/restaurant-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-hospital"></i>
                <h3>Healthcare Facility Pest Control</h3>
                <p>Medical facility pest management</p>
                <a href="services/healthcare-facility-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-school"></i>
                <h3>School Pest Control</h3>
                <p>Educational facility pest management</p>
                <a href="services/school-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-hotel"></i>
                <h3>Hotel Pest Control</h3>
                <p>Hospitality industry pest management</p>
                <a href="services/hotel-pest-control.php" class="service-btn">Learn More</a>
            </div>
            <div class="service-card">
                <i class="fas fa-ship"></i>
                <h3>Marine Pest Control</h3>
                <p>Ship and dock pest management</p>
                <a href="services/marine-pest-control.php" class="service-btn">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Your Trusted Pest Control Partner</h3>
                    <p>At Vibrant PestControl Services, we are dedicated to providing top-quality pest control solutions to homes and businesses in Harare. With years of experience in the industry, our team of certified professionals is committed to keeping your environment safe and pest-free.</p>
                    <p>We understand that every pest problem is unique, which is why we offer customized solutions tailored to your specific needs. Our eco-friendly approach ensures effective pest control while maintaining the safety of your family, pets, and the environment.</p>
                    <div class="about-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Certified Professionals</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Eco-Friendly Solutions</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 Emergency Service</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Guaranteed Results</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="images/about.jpg" alt="Our Team at Work">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-slider">
            <?php include 'includes/testimonials.php'; ?>
        </div>
        <div class="testimonial-controls">
            <button class="prev-testimonial"><i class="fas fa-chevron-left"></i></button>
            <button class="next-testimonial"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Service Details Page -->
    <div id="serviceDetails" class="service-details-page" style="position: absolute; z-index: 1;">
        <div class="service-details-container">
            <div class="service-details-header">
                <h2 id="serviceDetailsTitle"></h2>
                <button class="close-details" onclick="closeServiceDetails()">&times;</button>
            </div>
            <div class="service-details-content">
                <div class="service-info">
                    <div id="serviceDetailsContent"></div>
                    <div class="service-contact-info">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-phone"></i> Phone: +263 77 544 3252</p>
                        <p><i class="fas fa-envelope"></i> Email: morkdndr@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Address: 336 Herbert Chitepo, CBD, Harare</p>
                        <div class="social-links">
                            <a href="https://wa.me/+263788508617?text=Hello" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="mailto:morkdndr@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61568177470301" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="service-location">
                        <h3>Service Area</h3>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps?q=336+Herbet+Chitepo,+CBD,+Harare" 
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="service-cta">
                    <button class="cta-button" onclick="scheduleService()">Schedule Service</button>
                    <button class="secondary-button" onclick="closeServiceDetails()">Back to Services</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Chatbot Modal -->
    <div id="chatbotModal" class="chatbot-modal">
        <div class="chatbot-content">
            <div class="chatbot-header">
                <h3>Chat with Us</h3>
                <span class="close-chatbot">&times;</span>
            </div>
            <div class="chatbot-messages">
                <!-- Messages will appear here -->
            </div>
            <div class="chatbot-input">
                <input type="text" placeholder="Type your message here..." />
                <button onclick="sendMessage()">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Chatbot Button -->
    <div class="chatbot-button" onclick="openChatbot()">
        <i class="fas fa-comments"></i>
    </div>

    <!-- Blog Section -->
    <section id="blog" class="blog">
        <h2>Latest from Our Blog</h2>
        <div class="blog-grid">
            <?php include 'includes/blog-posts.php'; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact" style="position: relative; z-index: 2;">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="position: relative; z-index: 3;">
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
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