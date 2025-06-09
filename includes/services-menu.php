<?php
$services = [
    'General Pest Control' => 'general-pest-control.php',
    'Termite Control' => 'termite-control.php',
    'Rodent Removal' => 'rodent-removal.php',
    'Cockroach Control' => 'cockroach-control.php',
    'Ant Control' => 'ant-control.php',
    'Flea Control' => 'flea-control.php',
    'Commercial Pest Control' => 'commercial-pest-control.php',
    'Bee & Wasp Control' => 'bee-wasp-control.php',
    'Garden Pest Control' => 'garden-pest-control.php',
    'Hotel Pest Control' => 'hotel-pest-control.php',
    'Healthcare Facility Pest Control' => 'healthcare-facility-pest-control.php',
    'Bed Bug Control' => 'bed-bug-control.php',
    'Industrial Pest Control' => 'industrial-pest-control.php',
    'Marine Pest Control' => 'marine-pest-control.php',
    'Residential Pest Control' => 'residential-pest-control.php',
    'Mosquito Control' => 'mosquito-control.php',
    'Restaurant Pest Control' => 'restaurant-pest-control.php',
    'School Pest Control' => 'school-pest-control.php',
    'Spider Control' => 'spider-control.php',
    'Warehouse Pest Control' => 'warehouse-pest-control.php',
    'Wildlife Control' => 'wildlife-control.php'
];

function generateServicesMenu($services) {
    echo '<div class="dropdown">';
    echo '<a href="#services" class="dropdown-toggle">Services <i class="fas fa-chevron-down"></i></a>';
    echo '<div class="dropdown-content">';
    foreach ($services as $name => $link) {
        echo '<a href="services/' . htmlspecialchars($link) . '">' . htmlspecialchars($name) . '</a>';
    }
    echo '</div>';
    echo '</div>';
}
?> 