@extends('components.Layout')

@section('title', 'HTML Roadmap - Chapters')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Fur Baby Tips</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="homepage">
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

    <main class="centered-content">
        <h1 class="homepage-title">Welcome to Fur Baby Tips!</h1>
        <p>Your go-to resource for all things fur babies.</p>
        <button type="explore">Explore</button>
       
    </main>

</body>
</html>
