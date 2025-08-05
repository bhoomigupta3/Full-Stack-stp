<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
         .contact-container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }
        .contact,
        .contact-form {
            margin-bottom: 30px;
        }
        
        .contact-info p {
            font-size: 16px;
            line-height: 1.6;
        } 
        form {
            display: grid;
            gap: 15px;
        }
         input,
        textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            padding: 12px;
            border-radius: 10px;
            background-color:#e91e63;
        }
         iframe {
            width: 100%;
            height: 400px;
            border: 2;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
   include("header.php");
   ?>
    <div class="contact-container">
        <h1 class="text-center" style="font-weight: bold; color: #e91e63;">Contact Us :</h1>

        <div class="contact">
            <p style="color: black;">📍 <strong>Address:</strong> 143 Lotus Pride, Delhi, India</p>
            <p style="color: black;">📞 <strong>Phone:</strong> +91 9876543200</p>
            <p style="color:black;">📧 <strong>Email:</strong> contact@bgflorify.com</p>
        </div>

        <div class="contact-form">
            <form>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.52633258584!2d76.76357436215976!3d28.643684626335453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1751989595622!5m2!1sen!2sin"
                allowfullscreen="">
            </iframe>
        </div>
    </div>
<?php
include("footer.php");
?>
</body>
</html>
