<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Fur Baby Tips</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="contact-page">
    <header>
        <div class="header-container">
            <h1>Fur Baby Tips</h1>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>
        </div>
    </header>
    
    <main>
        <h1>Contact Us!</h1>
        <p>I would love to hear from you! Feel free to reach out  through any of the following platforms:</p>
        
        <div class="social-media">
            <a href="https://www.facebook.com/je.lla.714?mibextid=ZbWKwL" target="_blank" class="social-link">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="social-icon">
                Facebook
            </a>
            <a href="https://www.instagram.com/jllmrie_?igsh=dGN6b2V2emd1d3d4" target="_blank" class="social-link">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="social-icon">
                Instagram
            </a>
        </div>

        <section class="message-form">
            <h2><i class="fas fa-envelope icon"></i> Send us a message</h2>
            <form action="#" method="post">
                <textarea name="message" placeholder="Write your message here..." rows="5"></textarea>
                <button type="button" onclick="window.location.href='{{ url('/contact') }}'">Submit</button>
            </form>
        </section>

    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Fur Baby Tips. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>