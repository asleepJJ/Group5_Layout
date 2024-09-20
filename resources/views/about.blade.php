<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Fur Baby Tips</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
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
    <main style="text-align: left;">
    <img class="image" src="{{ asset('Images/cuties.jpg') }}" alt="Description of Image" style="float: right; max-width: 100%; height: 250px; margin-left: 20px;"/>
        <h2>How to Raise Fur Babies</h2>
        <div align="left">
            <p>
                <span style="font-weight: bold;">Welcome to Fur Baby Tips!</span> 
                <br>
                We believe that every pet deserves a loving, happy, and healthy life. 
                Whether you’re a seasoned pet parent or a first-time fur baby owner, 
                we’re here to guide you through the joys and responsibilities of raising your beloved companion. <br><br>

                <span style="font-weight: bold;">Why Raising Fur Babies Matters</span> 
                <br>
                Raising fur babies is a deeply rewarding experience that brings immense joy, love, and companionship into your life.
                From the moment you bring them home, they become a cherished part of your family, relying on you for their well-being,
                happiness, and safety. The foundation of their care involves creating a comfortable and safe environment where they can thrive.
                Establishing consistent routines and providing balanced nutrition are crucial steps in ensuring their overall health and happiness.
                <br><br>

                In addition to meeting their basic needs, it's important to focus on their physical activity, mental stimulation, and grooming.
                Regular exercise and interactive play keep your fur baby fit and engaged, reducing the likelihood of behavioral issues.
                Grooming is another vital aspect of care, helping to maintain their hygiene and appearance while also providing an 
                opportunity to bond through gentle touch. Training with positive reinforcement fosters good behavior and strengthens the
                connection between you and your pet.
                <br><br>

                Lastly, raising fur babies requires attention to their emotional well-being. Pets are sensitive to their owner's moods
                and environments, so creating a loving and positive atmosphere is essential for their happiness. By taking the time to
                cuddle, play, and simply be present with your pet, you ensure they feel loved and valued. 
                This journey of raising a fur baby is filled with mutual respect and learning, ultimately enriching your life in countless ways.
            </p>
        </div>
        
        <br>

        <img src="{{ asset('Images/hug.jpg') }}" alt="Owner hugging pet" style="float: right; max-width: 100%; height: 450px; margin-left: 20px;"/>
        <h2>Our Focus</h2>
        <div align="left">
            <p>
                <span style="font-weight: bold;">Holistic Care:</span> 
                <br>
                    We offer comprehensive advice on nutrition, health, and wellness to ensure your pet’s well-being from nose to tail. 
                <br><br>

                <span style="font-weight: bold;">Engaging Activities:</span> 
                <br>
                    Discover innovative ways to keep your pets active and mentally stimulated, fostering their happiness and fitness.
                <br><br>

                <span style="font-weight: bold;">Grooming Essentials:</span>
                <br> 
                    Learn effective grooming techniques to keep your pet looking and feeling their best.
                    connection between you and your pet.
                <br><br>

                <span style="font-weight: bold;">Training and Development:</span>
                <br> 
                    Gain insights into training and socializing your pet to help them become a well-rounded and obedient member of your family.
                <br><br>

                <span style="font-weight: bold;">Safe and Cozy Homes:</span>
                <br> 
                    Find tips on creating a safe, comfortable, and loving home environment for your pets.
                <br><br>
            </p>
        </div>
    </main> 

    <footer>
    <div class="footer-container">
            <p>&copy; 2024 Fur Baby Tips. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>