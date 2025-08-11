<?php
session_start();
$folderPath = "../../";
include "../../Components/DBConfig.php"; // contains $con

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name       = trim($_POST["name"] ?? '');
    $email      = trim($_POST["email"] ?? '');
    $phone      = trim($_POST["phone"] ?? '');
    $subject    = trim($_POST["subject"] ?? '');
    $message    = trim($_POST["message"] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['form_status'] = "Please fill in all required fields.";
        header("Location: " . $folderPath . "Contact-Us/");
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['form_status'] = "Invalid email format.";
        header("Location: " . $folderPath . "Contact-Us/");
        exit;
    }

    // Insert
    $stmt = $con->prepare("
        INSERT INTO contact_details_rmm
        (Name, Email, Mobile_Number, Subject, Description, Created_By)
        VALUES (?, ?, ?, ?, ?, 'system')
    ");

    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
        if ($stmt->execute()) {
            $_SESSION['form_status'] = "Thank you! Your message has been sent successfully.";
        } else {
            $_SESSION['form_status'] = "Error: Could not save your message. Please try again later.";
        }
        $stmt->close();
    } else {
        $_SESSION['form_status'] = "Error: Could not prepare the SQL statement.";
    }
}

$con->close();

// Redirect to contact-Us page
header("Location: " . $folderPath . "Contact-Us/");
exit;
