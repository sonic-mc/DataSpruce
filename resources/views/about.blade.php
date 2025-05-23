@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container about-section mt-4">
    <h1 class="text-center mb-4">About DataSpruce Pvt Ltd</h1>
    <p class="lead text-center">Your trusted partner for data analytics, data cleaning, and tech consultancy solutions.</p>

    <!-- Mission and Vision Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>To empower businesses with clean, accurate, and actionable data insights that drive growth and efficiency.</p>
            <img src="https://images.openai.com/thumbnails/8e81be260110cff9ddb518d089fb4566.jpeg" alt="Data Analytics Team" class="img-fluid mb-4">
            
            <h3>Our Vision</h3>
            <p>To become a leading data consultancy recognized for innovation, precision, and trust in the data industry.</p>
            <img src="https://imageio.forbes.com/specials-images/imageserve/6308eb544f417368cd7d1ff3/Multi-racial-diverse-group-of-people-working-with-Paperwork-on-a-board-room-table-at/960x0.jpg?fit=bounds&height=474&width=711" alt="Company Growth Chart" class="img-fluid mb-4">

            <h3>Our Story</h3>
            <p>Founded in 2025, DataSpruce Pvt Ltd was established to help businesses turn raw data into meaningful insights. Our team offers top-notch data analytics, data cleaning, and tech consultancy services.</p>
        </div>

        <!-- Core Values and Team Section -->
        <div class="col-md-6">
            <h3>Core Values</h3>
            <ul>
                <li>Integrity - We prioritize transparency and honesty.</li>
                <li>Excellence - We deliver high-quality solutions tailored to your needs.</li>
                <li>Innovation - We embrace the latest technologies to solve data challenges.</li>
                <li>Client-Centric - Your satisfaction is our priority.</li>
            </ul>
            <img src="https://www.c5i.ai/wp-content/uploads/Analytics-Team1.png" alt="Core Values Infographic" class="img-fluid mb-4">

            <h3>Our Team</h3>
            <p>Our team consists of experienced data analysts, data scientists, and tech consultants dedicated to delivering results.</p>
            <img src="https://www.c5i.ai/wp-content/uploads/Analytics-Team1.png" alt="Our Team" class="img-fluid mb-4">
        </div>
    </div>

    <!-- Client Testimonials and Certifications Section -->
    <div class="text-center mt-5">
        <h3>Client Testimonials</h3>
        <p>"DataSpruce transformed our data management process!" - Happy Client</p>
        <img src="https://th.bing.com/th/id/OIP.r4qTw4mHm3VtAqOhv5XEygHaEJ?w=324&h=181&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Client Testimonials" class="img-fluid mb-4">

        <h3>Our Certifications</h3>
        <p>Certified Data Professionals | Trusted by Industry Leaders</p>
        <img src="https://dv-website.s3.amazonaws.com/uploads/2022/10/sf_buildinganalyticsteam_oct-22.jpg" alt="Certifications" class="img-fluid mb-4">
        
        <h3>Contact Us</h3>
        <p>For any inquiries, feel free to reach out via our contact page.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contact Us</a>
    </div>
</div>
@endsection
