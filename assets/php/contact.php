<?php
    $folderPath = "../../";
    require_once "../../Components/DBConfig.php";

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name    = trim($_POST["name"] ?? '');
        $email   = trim($_POST["email"] ?? '');
        $phone   = trim($_POST["phone"] ?? '');
        $subject = trim($_POST["subject"] ?? '');
        $message = trim($_POST["message"] ?? '');
        $token   = $_POST["csrf_token"] ?? '';

        // CSRF check
        if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
            $_SESSION['form_status'] = "Security check failed. Please try again.";
            header("Location: {$folderPath}Contact-Us/");
            exit;
        }

        // Validation
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $_SESSION['form_status'] = "Please fill in all required fields.";
            header("Location: {$folderPath}Contact-Us/");
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['form_status'] = "Invalid email format.";
            header("Location: {$folderPath}Contact-Us/");
            exit;
        }
        if (!empty($phone) && !preg_match("/^\+?[0-9]{7,15}$/", $phone)) {
            $_SESSION['form_status'] = "Invalid phone number format.";
            header("Location: {$folderPath}Contact-Us/");
            exit;
        }

        // Save to DB
        $stmt = $con->prepare("
            INSERT INTO contact_details_rmm
            (Name, Email, Mobile_Number, Subject, Description, Created_By)
            VALUES (?, ?, ?, ?, ?, 'system')
        ");
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
        $stmt->execute();

        /** ------------------------
         * EMAIL NOTIFICATIONS
         * ------------------------
         */

        /** ------------------------
         * HTML EMAIL NOTIFICATIONS
         * ------------------------
         */

        // Admin Email Template
        $adminEmail;
        $adminSubject = "📩 New Contact Form Submission - {$subject}";

        $adminBody = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Contact Form Submission</title>
<style>
    body { font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0; }
    .email-container { max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .header { background-color: #004aad; padding: 20px; text-align: center; color: #ffffff; font-size: 20px; font-weight: bold; }
    .content { padding: 20px; color: #333333; }
    .label { font-weight: bold; color: #004aad; }
    .footer { background-color: #f1f1f1; text-align: center; padding: 12px; font-size: 12px; color: #777; }
</style>
</head>
<body>
<div class="email-container">
    <div class="header">New Contact Form Submission</div>
    <div class="content">
        <p><span class="label">Name:</span> ' . htmlspecialchars($name) . '</p>
        <p><span class="label">Email:</span> ' . htmlspecialchars($email) . '</p>
        <p><span class="label">Phone:</span> ' . htmlspecialchars($phone) . '</p>
        <p><span class="label">Subject:</span> ' . htmlspecialchars($subject) . '</p>
        <p><span class="label">Message:</span><br>' . nl2br(htmlspecialchars($message)) . '</p>
    </div>
    <div class="footer">This is an automated email from your website.</div>
</div>
</body>
</html>
';

        $adminHeaders = "MIME-Version: 1.0\r\n";
        $adminHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
        $adminHeaders .= "From: no-reply@resurgent-es.com\r\n";
        $adminHeaders .= "Reply-To: {$email}\r\n";

        // Customer Email Template
        $customerSubject = "✅ Thank you for contacting us!";
        $customerBody = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank You</title>
<style>
    body { font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0; }
    .email-container { max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .header { background-color: #28a745; padding: 20px; text-align: center; color: #ffffff; font-size: 20px; font-weight: bold; }
    .content { padding: 20px; color: #333333; }
    .highlight { color: #28a745; font-weight: bold; }
    .footer { background-color: #f1f1f1; text-align: center; padding: 12px; font-size: 12px; color: #777; }
</style>
</head>
<body>
<div class="email-container">
    <div class="header">Thank You, ' . htmlspecialchars($name) . '!</div>
    <div class="content">
        <p>We appreciate you reaching out to us. Our team will get back to you soon.</p>
        <p>Here’s a copy of your submission:</p>
        <p><span class="highlight">Subject:</span> ' . htmlspecialchars($subject) . '</p>
        <p><span class="highlight">Message:</span><br>' . nl2br(htmlspecialchars($message)) . '</p>
    </div>
    <div class="footer">Best regards,<br>Your Company Team</div>
</div>
</body>
</html>
';

        $customerHeaders = "MIME-Version: 1.0\r\n";
        $customerHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
        $customerHeaders .= "From: no-reply@resurgent-es.com\r\n";
        $customerHeaders .= "Reply-To: {$adminEmail}\r\n";

        // Send HTML emails
        @mail($adminEmail, $adminSubject, $adminBody, $adminHeaders);
        @mail($email, $customerSubject, $customerBody, $customerHeaders);


        $_SESSION['form_status'] = "Thank you! Your message has been sent successfully.";
    }
} catch (mysqli_sql_exception $e) {
    error_log("Contact form error: " . $e->getMessage());
    $_SESSION['form_status'] = "An unexpected error occurred. Please try again later.";
} finally {
    $con->close();
    header("Location: {$folderPath}Contact-Us/");
    exit;
}
