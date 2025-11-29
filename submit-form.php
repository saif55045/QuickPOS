<?php
/**
 * QuickPOS Contact Form Handler - POS-501
 * Validates form inputs and redirects to thank-you page
 */

// Initialize error array
$errors = [];

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize and validate Name
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    if (empty($name)) {
        $errors[] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Name must be at least 2 characters long';
    }
    
    // Sanitize and validate Email
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address';
    }
    
    // Sanitize and validate Message
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    // If no errors, process the form (simulate success)
    if (empty($errors)) {
        // In a real application, you would:
        // - Save to database
        // - Send email notification
        // - Log the submission
        
        // For now, we'll just redirect to thank-you page
        header('Location: thank-you.html');
        exit();
    } else {
        // If there are errors, redirect back with error message
        $error_msg = implode(', ', $errors);
        header('Location: index.php#contact?error=' . urlencode($error_msg));
        exit();
    }
    
} else {
    // If not POST request, redirect to home
    header('Location: index.php');
    exit();
}
?>
