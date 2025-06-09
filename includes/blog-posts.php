<?php
require_once 'db_connect.php';

try {
    // Default blog posts
        $posts = [
            [
                'title' => 'Top 5 Pest Prevention Tips for Your Home',
                'excerpt' => 'Learn how to keep your home pest-free with these simple prevention tips.',
            'image' => 'images/about.jpg',
            'date' => '2024-03-15',
            'slug' => 'pest-prevention-tips'
            ],
            [
                'title' => 'Understanding Termite Behavior',
                'excerpt' => 'Discover the signs of termite infestation and how to protect your property.',
            'image' => 'images/about.jpg',
            'date' => '2024-03-10',
            'slug' => 'termite-behavior'
            ],
            [
                'title' => 'Eco-Friendly Pest Control Solutions',
                'excerpt' => 'Explore sustainable methods for managing pests without harming the environment.',
            'image' => 'images/about.jpg',
            'date' => '2024-03-05',
            'slug' => 'eco-friendly-pest-control'
        ]
    ];

    // Check if blog_posts table exists and has data
    $tableExists = $pdo->query("SHOW TABLES LIKE 'blog_posts'")->rowCount() > 0;
    
    if ($tableExists) {
        $stmt = $pdo->query("SELECT title, content, image, created_at FROM blog_posts ORDER BY created_at DESC LIMIT 3");
        $dbPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($dbPosts)) {
            $posts = [];
            foreach ($dbPosts as $dbPost) {
                $posts[] = [
                    'title' => $dbPost['title'] ?? '',
                    'excerpt' => substr(strip_tags($dbPost['content'] ?? ''), 0, 150) . '...',
                    'image' => $dbPost['image'] ?? 'images/about.jpg',
                    'date' => $dbPost['created_at'] ?? date('Y-m-d'),
                    'slug' => strtolower(str_replace(' ', '-', $dbPost['title'] ?? ''))
                ];
            }
        }
    }
    
    // Display blog posts
    foreach ($posts as $post) {
        echo '<div class="blog-card">';
        echo '<div class="blog-image">';
        echo '<img src="' . htmlspecialchars($post['image']) . '" alt="' . htmlspecialchars($post['title']) . '">';
        echo '</div>';
        echo '<div class="blog-content">';
        echo '<h3>' . htmlspecialchars($post['title']) . '</h3>';
        echo '<p class="blog-date">' . date('F j, Y', strtotime($post['date'])) . '</p>';
        echo '<p class="blog-excerpt">' . htmlspecialchars($post['excerpt']) . '</p>';
        echo '<a href="blog/' . htmlspecialchars($post['slug']) . '.php" class="read-more">Read More</a>';
        echo '</div>';
        echo '</div>';
    }
} catch(PDOException $e) {
    // Log the error for debugging
    error_log("Blog posts error: " . $e->getMessage());
    echo '<div class="error-message">Unable to load blog posts at this time. Please check back later.</div>';
}
?> 