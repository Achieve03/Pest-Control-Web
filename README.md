# Pest Control Service Website

A professional website for pest control and fumigation services built with HTML, CSS, JavaScript, and PHP.

## Features

- Responsive design for all devices
- Service overview section
- About Us section
- Contact form with database integration
- Testimonials section
- Blog section
- Modern and clean UI

## Prerequisites

- XAMPP (Apache, MySQL, PHP)
- Web browser
- Text editor

## Installation

1. Clone or download this repository to your local machine
2. Place the project folder in your XAMPP's htdocs directory
3. Start XAMPP and ensure Apache and MySQL services are running
4. Open phpMyAdmin (http://localhost/phpmyadmin)
5. Create a new database named `pestcontrol_db`
6. Import the `database/setup.sql` file to set up the database structure and sample data
7. Access the website through your browser at `http://localhost/pestcontrolweb`

## Configuration

1. Update database credentials in `includes/db_connect.php` if needed
2. Configure your email settings in `includes/process-contact.php` for contact form notifications
3. Add your own images to the `images` directory
4. Customize content in the PHP files to match your business information

## Directory Structure

```
pestcontrolweb/
├── css/
│   └── style.css
├── js/
│   └── main.js
├── images/
│   ├── blog/
│   └── ...
├── includes/
│   ├── db_connect.php
│   ├── process-contact.php
│   ├── testimonials.php
│   └── blog-posts.php
├── database/
│   └── setup.sql
├── index.php
└── README.md
```

## Customization

- Update colors in `css/style.css` by modifying the CSS variables
- Add your own testimonials through the database
- Create new blog posts using the blog_posts table
- Modify the contact form fields in `index.php` and `includes/process-contact.php`

## Support

For any issues or questions, please contact [your-email@example.com]

## License

This project is licensed under the MIT License - see the LICENSE file for details. 