<?php
require_once 'db_connect.php';

try {
    $stmt = $pdo->query("SELECT * FROM testimonials ORDER BY created_at DESC LIMIT 5");
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($testimonials)) {
        // Default testimonials if database is empty
        $testimonials = [
            [
                'name' => 'John Smith',
                'content' => 'Excellent service! The team was professional and thorough. Our home is now pest-free.',
                'rating' => 5
            ],
            [
                'name' => 'Sarah Johnson',
                'content' => 'Very impressed with their eco-friendly approach to pest control. Highly recommend!',
                'rating' => 5
            ],
            [
                'name' => 'Michael Brown',
                'content' => 'Quick response and effective treatment. The staff was knowledgeable and friendly.',
                'rating' => 4
            ]
        ];
    }
    
    foreach ($testimonials as $testimonial) {
        echo '<div class="testimonial">';
        echo '<div class="testimonial-content">';
        echo '<p class="testimonial-text">' . htmlspecialchars($testimonial['content']) . '</p>';
        echo '<div class="testimonial-author">';
        echo '<h4>' . htmlspecialchars($testimonial['name']) . '</h4>';
        echo '<div class="rating">';
        for ($i = 0; $i < 5; $i++) {
            if ($i < $testimonial['rating']) {
                echo '<i class="fas fa-star"></i>';
            } else {
                echo '<i class="far fa-star"></i>';
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} catch(PDOException $e) {
    echo '<p>Unable to load testimonials at this time.</p>';
}
?> 