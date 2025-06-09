-- Create the database
CREATE DATABASE IF NOT EXISTS pestcontrol_db;
USE pestcontrol_db;

-- Create contacts table
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create testimonials table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create blog_posts table
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample testimonials
INSERT INTO testimonials (name, content, rating) VALUES
('John Smith', 'Excellent service! The team was professional and thorough. Our home is now pest-free.', 5),
('Sarah Johnson', 'Very impressed with their eco-friendly approach to pest control. Highly recommend!', 5),
('Michael Brown', 'Quick response and effective treatment. The staff was knowledgeable and friendly.', 4);

-- Insert sample blog posts
INSERT INTO blog_posts (title, content, excerpt, image, created_at) VALUES
('Top 5 Pest Prevention Tips for Your Home', 
'Full article content here...',
'Learn how to keep your home pest-free with these simple prevention tips.',
'images/blog/prevention-tips.jpg'),

('Understanding Termite Behavior',
'Full article content here...',
'Discover the signs of termite infestation and how to protect your property.',
'images/blog/termite-behavior.jpg'),

('Eco-Friendly Pest Control Solutions',
'Full article content here...',
'Explore sustainable methods for managing pests without harming the environment.',
'images/blog/eco-friendly.jpg'); 