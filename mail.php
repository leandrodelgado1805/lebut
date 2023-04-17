<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@fclebut.be";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $from = $_POST["email"];
    $fullname = $_POST["fullname"];

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $htmlMessage = "<html><body>";
    $htmlMessage .= "<p>Nom complet: " . $fullname . "</p>";
    $htmlMessage .= "<p>Email: " . $from . "</p>";
    $htmlMessage .= "<p>Message: " . nl2br($message) . "</p>";
    $htmlMessage .= "</body></html>";

    if (mail($to, $subject, $htmlMessage, $headers)) {
        header("Location: index.html");
    } else {
        header("Location: index.html");
    }
} else {
    header("Location: index.html");
}
?>
