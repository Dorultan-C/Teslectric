<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone-number"];
    $date_name = $_POST["date-name"];
    $address_name = $_POST["address-name"];
    $d_address_name = $_POST["d-address-name"];

    $to = "c.dorultan@gmail.com";
    $subject = "New booking from Teslectric!";
    $message = "First Name: " . $first_name . "\n" .
               "Last Name: " . $last_name . "\n" .
               "Email: " . $email . "\n" .
               "Phone Number: " . $phone_number . "\n" .
               "Date: " . $date_name . "\n" .
               "Pick-up Address: " . $address_name . "\n" .
               "Drop-off Address: " . $d_address_name;

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    header("Location: /");
}
?>
