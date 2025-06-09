<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = ''; // Default XAMPP MySQL password is empty
$database = 'pestcontrol_db';

try {
    // Create connection
    $conn = new mysqli($host, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully<br>";
    } else {
        throw new Exception("Error creating database: " . $conn->error);
    }
    
    // Select database
    $conn->select_db($database);
    
    // Create contacts table
    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Contacts table created successfully<br>";
    } else {
        throw new Exception("Error creating contacts table: " . $conn->error);
    }
    
    // Create testimonials table
    $sql = "CREATE TABLE IF NOT EXISTS testimonials (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        content TEXT NOT NULL,
        rating INT(1) NOT NULL,
        image VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Testimonials table created successfully<br>";
    } else {
        throw new Exception("Error creating testimonials table: " . $conn->error);
    }
    
    // Create blog_posts table
    $sql = "CREATE TABLE IF NOT EXISTS blog_posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content TEXT NOT NULL,
        image VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Blog posts table created successfully<br>";
    } else {
        throw new Exception("Error creating blog posts table: " . $conn->error);
    }
    
    // Insert sample testimonials
    $sql = "INSERT INTO testimonials (name, content, rating, image) VALUES
        ('John Smith', 'Excellent service! The team was professional and thorough.', 5, 'images/testimonial1.jpg'),
        ('Sarah Johnson', 'Quick response and effective treatment. Highly recommended!', 5, 'images/testimonial2.jpg'),
        ('Michael Brown', 'Great experience from start to finish. Will use again.', 4, 'images/testimonial3.jpeg')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Sample testimonials inserted successfully<br>";
    } else {
        throw new Exception("Error inserting testimonials: " . $conn->error);
    }
    
    // Insert sample blog posts
    $sql = "INSERT INTO blog_posts (title, content, image, created_at) VALUES
        ('Common Household Pests', 'Learn about the most common pests found in homes and how to prevent them.', 'images/blog1.jpg'),
        ('Eco-Friendly Pest Control', 'Discover our environmentally friendly approach to pest management.', 'images/blog2.jpg'),
        ('Seasonal Pest Prevention', 'Tips for keeping your home pest-free throughout the year.', 'images/blog3.jpg')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Sample blog posts inserted successfully<br>";
    } else {
        throw new Exception("Error inserting blog posts: " . $conn->error);
    }
    
    echo "Database setup completed successfully!";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if (isset($conn)) {
        $conn->close();
    }
}
?> 