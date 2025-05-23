@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">

        <!-- Service 1 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://cdn.technologyadvice.com/wp-content/uploads/2022/06/Data-Cleaning-scaled.jpeg" class="card-img-top" alt="Data Cleaning">
                <div class="card-body">
                    <h4 class="card-title">Data Cleaning and Formatting</h4>
                    <p class="card-text">We transform raw, messy data into clean, well-organized datasets...</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://th.bing.com/th/id/OIP.1exgo9JMKRvYtXDpy97xXQHaFL?w=230&h=180&c=7&r=0&o=7&cb=iwp2&dpr=1.5&pid=1.7&rm=3" class="card-img-top" alt="Dashboard Creation">
                <div class="card-body">
                    <h4 class="card-title">Dashboard Creation</h4>
                    <p class="card-text">We create custom dashboards using Power BI, Tableau, and Google Data Studio...</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://th.bing.com/th/id/OIP.VahjK7T92ijeDOI-qJ8fbQHaE8?w=257&h=180&c=7&r=0&o=7&cb=iwp2&dpr=1.5&pid=1.7&rm=3" class="card-img-top" alt="Data Analysis Reports">
                <div class="card-body">
                    <h4 class="card-title">Data Analysis and Insights Reports</h4>
                    <p class="card-text">We provide in-depth analysis and insights, uncovering trends, patterns...</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://th.bing.com/th/id/OIP.eMggsB8uel8_5A9VeXDZSAHaEK?w=308&h=180&c=7&r=0&o=7&cb=iwp2&dpr=1.5&pid=1.7&rm=3" class="card-img-top" alt="Small Business Analytics">
                <div class="card-body">
                    <h4 class="card-title">Small Business Analytics Setup</h4>
                    <p class="card-text">We set up analytics systems tailored for small businesses...</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://blog.pixentia.com/hubfs/MicrosoftTeams-image%20(60).png" class="card-img-top" alt="Data Integration">
                <div class="card-body">
                    <h4 class="card-title">Data Integration and Automation</h4>
                    <p class="card-text">We automate data integration and processes...</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://penncomp.com/wp-content/uploads/2022/08/35251012_businessman-and-abstract-infographics-in-augmented-reality.jpg" class="card-img-top" alt="Tech Consultancy">
                <div class="card-body">
                    <h4 class="card-title">Tech Consultancy</h4>
                    <p class="card-text">Advising our clients on the best technologies to adopt for their goals.</p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
