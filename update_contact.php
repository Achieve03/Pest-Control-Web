<?php
$services_dir = 'services/';
$files = glob($services_dir . '*.php');

$contact_info = [
    'phone' => '+263 77 544 3252',
    'email' => 'morkdndr@gmail.com',
    'address' => '336 Herbert Chitepo, CBD, Harare',
    'whatsapp' => 'https://wa.me/+263788508617?text=Hello',
    'facebook' => 'https://www.facebook.com/profile.php?id=61568177470301',
    'map_url' => 'https://www.google.com/maps?q=336+Herbet+Chitepo,+CBD,+Harare',
    'company_name' => 'Vibrant PestControl Services Harare'
];

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Update title and company name
    $content = preg_replace('/<title>.*?<\/title>/', '<title>' . basename($file, '.php') . ' | ' . $contact_info['company_name'] . '</title>', $content);
    $content = preg_replace('/<h1>PestControl Pro<\/h1>/', '<h1>' . $contact_info['company_name'] . '</h1>', $content);
    
    // Update contact information in service-contact section
    $service_contact = '<div class="service-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-phone"></i> ' . $contact_info['phone'] . '</p>
                    <p><i class="fas fa-envelope"></i> ' . $contact_info['email'] . '</p>
                    <p><i class="fas fa-clock"></i> Available 24/7</p>
                    <div class="social-links">
                        <a href="' . $contact_info['whatsapp'] . '" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:' . $contact_info['email'] . '" target="_blank"><i class="fas fa-envelope"></i></a>
                        <a href="' . $contact_info['facebook'] . '" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                    <button class="cta-button" onclick="window.location.href=\'../index.php#contact\'">Schedule Service</button>
                </div>';
    $content = preg_replace('/<div class="service-contact">.*?<\/div>\s*<\/div>/s', $service_contact . '</div>', $content);
    
    // Update map
    $map_iframe = '<iframe src="' . $contact_info['map_url'] . '" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
    $content = preg_replace('/<iframe.*?<\/iframe>/', $map_iframe, $content);
    
    // Update footer contact section
    $footer_contact = '<div class="footer-section">
                <h3>Contact Info</h3>
                <p><i class="fas fa-phone"></i> ' . $contact_info['phone'] . '</p>
                <p><i class="fas fa-envelope"></i> ' . $contact_info['email'] . '</p>
                <p><i class="fas fa-map-marker-alt"></i> ' . $contact_info['address'] . '</p>
                <div class="social-links">
                    <a href="' . $contact_info['whatsapp'] . '" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:' . $contact_info['email'] . '" target="_blank"><i class="fas fa-envelope"></i></a>
                    <a href="' . $contact_info['facebook'] . '" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>';
    $content = preg_replace('/<div class="footer-section">\s*<h3>Contact Info<\/h3>.*?<\/div>\s*<div class="footer-section">/s', $footer_contact . '<div class="footer-section">', $content);
    
    // Update copyright
    $content = preg_replace('/&copy; \d{4} .*? All rights reserved/', '&copy; 2024 ' . $contact_info['company_name'] . '. All rights reserved', $content);
    
    file_put_contents($file, $content);
}

// Update index.php as well
$index_content = file_get_contents('index.php');
$index_content = preg_replace('/<div class="social-links">.*?<\/div>/s', '<div class="social-links">
                    <a href="' . $contact_info['whatsapp'] . '" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:' . $contact_info['email'] . '" target="_blank"><i class="fas fa-envelope"></i></a>
                    <a href="' . $contact_info['facebook'] . '" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>', $index_content);
file_put_contents('index.php', $index_content);

echo "Contact information and email links updated successfully in all pages.\n";
?> 