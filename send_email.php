<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize inputs
    $fullname = htmlspecialchars($_POST['fullname']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $interest = htmlspecialchars($_POST['interest']);
    $skills = htmlspecialchars($_POST['skills']);
    $experience = htmlspecialchars($_POST['experience']);
    $dob = htmlspecialchars($_POST['dob']);
    $qualification = htmlspecialchars($_POST['qualification']);

    // Recipient email
    $to = "ankitkumarsharma805@gmail.com"; 
    $subject = "New Registration Form Submission";

    // Construct the email body
    $message = "
    Full Name: $fullname\n
    Mobile Number: $mobile\n
    Email: $email\n
    Interest: $interest\n
    Skills: $skills\n
    Experience: $experience\n
    Date of Birth: $dob\n
    Qualifications: $qualification
    ";

    // Headers
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully.";
    } else {
        echo "Error in form submission.";
    }
}
?>
