@extends('components.Layout')

@section('title', 'Contact Us - HTML Roadmap')

@section('content')
<div class="container contact-container">
    <h2>Contact Us</h2>
    <form action="{{ url('/submit-contact') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="input-box" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="input-box" id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Send Message</button>
    </form>
</div>

@endsection