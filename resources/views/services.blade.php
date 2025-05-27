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
                <img src="https://img.freepik.com/premium-photo/data-analyst-working-analytics-dashboard-engaged-business-analytics-including-kpis_1233889-1117.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Dashboard Creation">
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
                <img src="https://img.freepik.com/premium-photo/young-african-businesswoman-presenting-data-analysis-dashboard-tv-concord_31965-129100.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Data Analysis Reports">
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
                <img src="https://img.freepik.com/premium-photo/person-analyzing-data-computer-screen-illustrating-knowledgeintensive-tasks-whitecollar-work_73899-69750.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Small Business Analytics">
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
                <img src="https://img.freepik.com/premium-photo/handsome-young-african-man-shirt-looking-camera-smiling-while-working-office_425904-2030.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Tech Consultancy">
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
