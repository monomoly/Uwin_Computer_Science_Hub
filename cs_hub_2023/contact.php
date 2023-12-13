<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
</head>

<nav>
    <a href="home.html">Home</a>
    <a href="courses.html">Courses</a>
    <a href="resources.html">Resources</a>
    <a href="tutorials.html">Tutorials</a>
    <a href="contact.html">Contact</a>
</nav>

<body>

    <header>
        <h1>Contact Us</h1>
    </header>
<p>
    Thank you so much for visiting our website, 
    if you have any questions or comments, please feel free to use the contact form below!
</p>
    <form id="contactForm" action="contact.php" method="post" onsubmit="return validateForm()"> <!--creating the contact form-->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value; 
        
            if (name === '' || email === '' || message === '') { //making sure all fields have proper input before proceeding
                alert('All fields must be filled out'); 
                return false;
            }
        
            return true;
        }
        
    </script>
</body>
<footer>
    Mona Moussa - 110103687
 </footer>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $to = "hichammm@uwindsor.ca"; //sending it to my own email to test functionality
    //would be using csinfo@uwindsor.ca if actually wanted to email department

    // Subject of the email
    $subject = "New Inquiry from $name";

    // Message body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $body, $headers);
}
?>
