<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
        exit;
    }

    try {
        // Insert into database
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone, message, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $email, $phone, $message]);

        // Send email notification (you'll need to configure your mail server)
        $to = "your-email@example.com";
        $subject = "New Contact Form Submission";
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Phone: $phone\n";
        $email_message .= "Message: $message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        mail($to, $subject, $email_message, $headers);

        echo json_encode(['success' => true, 'message' => 'Thank you for your message. We will get back to you soon!']);
    } catch(PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again later.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?> 