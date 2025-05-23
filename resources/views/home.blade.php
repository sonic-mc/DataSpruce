<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataSpruce - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans relative overflow-x-hidden">

    <!-- Abstract Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white to-gray-50">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="200" cy="200" r="40" fill="#FFD700" opacity="0.6"/>
                <circle cx="600" cy="100" r="30" fill="#999999" opacity="0.4"/>
                <circle cx="700" cy="300" r="70" fill="#FFD700" opacity="0.7"/>
                <circle cx="150" cy="350" r="50" fill="#CCCCCC" opacity="0.5"/>
                <path d="M 0 100 Q 400 200 800 100" stroke="#E5E7EB" stroke-width="1" fill="none"/>
                <path d="M 0 200 Q 400 300 800 200" stroke="#FBBF24" stroke-width="1" fill="none"/>
            </svg>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-10 flex justify-between items-center px-6 py-4 bg-blue-900 text-white">
        <div class="text-lg font-bold">DataSpruce Pvt Ltd</div>
        <ul class="flex space-x-6">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section with Background Image -->
    <section class="relative z-10 text-center px-4 py-20 md:py-32 bg-cover bg-center" style="background-image: url('https://img.freepik.com/premium-vector/abstract-financial-chart-with-uptrend-line-graph-stock-market-grey-background-vector-design_546559-442.jpg?ga=GA1.1.341280457.1747978859&w=740');">
        <div class="bg-white bg-opacity-80 py-10 px-4 rounded-lg max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-light mb-4">Transform Your Data, Empower Your Business</h1>
            <p class="text-gray-700 text-lg mb-8">Professional data analytics and cleaning solutions for your business.</p>
            <div class="space-x-4">
                <a href="#services" class="bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-700">Get Started</a>
                <a href="#contact" class="bg-yellow-400 text-gray-800 px-6 py-3 rounded hover:bg-yellow-300">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- About Section with Image -->
    <section id="about" class="relative z-10 py-16 bg-white text-center px-4">
        <div class="md:flex md:items-center md:justify-center max-w-6xl mx-auto">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <h2 class="text-3xl font-semibold mb-4">About DataSpruce Pvt Ltd</h2>
                <p class="text-gray-700 mb-6">At DataSpruce, we specialize in data cleaning, analytics, and automation. Our mission is to help businesses unlock the power of data for better decision-making.</p>
                <a href="{{ route('about') }}" class="text-white bg-blue-600 px-5 py-2 rounded hover:bg-blue-500">Learn More</a>
            </div>
            <img src="https://img.freepik.com/premium-photo/finance-staff-holding-financial-graph-documents-presented-executives-attendees-via-videoconference-meeting-summarize-operations-all-departments-videoconferencing-concept_528263-2223.jpg" alt="About Us" class="md:w-1/2 rounded shadow-lg">
        </div>
    </section>

    <!-- Services Section with Images -->
    <section id="services" class="relative z-10 py-16 bg-gray-50 text-center px-4">
        <h2 class="text-3xl font-semibold mb-10">Our Services</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white p-6 rounded shadow">
                <img src="https://th.bing.com/th/id/OIP.2r3bEXN5mjyUQgcH5ECL8QHaE8?cb=iwp2&pid=ImgDet&w=179&h=119&c=7&dpr=1.5" alt="Data Cleaning" class="mb-4 rounded w-full h-40 object-cover">
                <h4 class="text-xl font-bold mb-2">Data Cleaning & Formatting</h4>
                <p class="text-gray-600">Accurate, clean data ready for analysis.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <img src="https://img.freepik.com/premium-photo/digital-financial-graph-code-modern-white-background-3d-rendering_670147-114427.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" alt="Dashboards" class="mb-4 rounded w-full h-40 object-cover">
                <h4 class="text-xl font-bold mb-2">Dashboard Creation</h4>
                <p class="text-gray-600">Interactive dashboards using Power BI, Tableau, and more.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <img src="https://th.bing.com/th/id/OIP.MtoNxBkwQ7dre5SILY5f7gHaE8?cb=iwp2&w=1200&h=800&rs=1&pid=ImgDetMain" alt="Data Analysis" class="mb-4 rounded w-full h-40 object-cover">
                <h4 class="text-xl font-bold mb-2">Data Analysis</h4>
                <p class="text-gray-600">Get actionable insights and data-driven reports.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
<section class="relative z-10 py-16 bg-white text-center px-4">
    <h2 class="text-3xl font-semibold mb-10">Why Choose Us?</h2>
    <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div class="p-6 shadow rounded bg-gray-50">
            <img src="https://th.bing.com/th/id/OIP.E7MJJi1nzfZ8UU-2hldy9gHaFb?cb=iwp2&pid=ImgDet&w=179&h=131&c=7&dpr=1.5" alt="Accurate" class="mx-auto mb-4 w-20 h-20 object-contain">
            <h5 class="text-lg font-semibold mb-2">Accurate</h5>
            <p>Data you can trust.</p>
        </div>
        <div class="p-6 shadow rounded bg-gray-50">
            <img src="https://th.bing.com/th/id/OIP.NiSTikwq73E9_EzO-lRCHwHaHa?cb=iwp2&pid=ImgDet&w=179&h=179&c=7&dpr=1.5" alt="Professional" class="mx-auto mb-4 w-20 h-20 object-contain">
            <h5 class="text-lg font-semibold mb-2">Professional</h5>
            <p>Experienced data experts.</p>
        </div>
        <div class="p-6 shadow rounded bg-gray-50">
            <img src="https://th.bing.com/th/id/OIP.IKTufQmQKV3CG-0txYPFAQHaE8?cb=iwp2&pid=ImgDet&w=179&h=119&c=7&dpr=1.5" alt="Fast Turnaround" class="mx-auto mb-4 w-20 h-20 object-contain">
            <h5 class="text-lg font-semibold mb-2">Fast Turnaround</h5>
            <p>Quick and reliable delivery.</p>
        </div>
        <div class="p-6 shadow rounded bg-gray-50">
            <img src="https://th.bing.com/th/id/OIP.2M26TYohr2aZgBstejR-iwHaE8?cb=iwp2&pid=ImgDet&w=179&h=119&c=7&dpr=1.5" alt="Custom Solutions" class="mx-auto mb-4 w-20 h-20 object-contain">
            <h5 class="text-lg font-semibold mb-2">Custom Solutions</h5>
            <p>Tailored to your needs.</p>
        </div>
    </div>
</section>

    <!-- Call to Action -->
    <section id="contact" class="relative z-10 py-16 bg-gray-100 text-center px-4">
        <h3 class="text-2xl font-semibold mb-6">Ready to Transform Your Data?</h3>
        <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-500">Contact Us</a>
        <a href="{{ route('services') }}" class="ml-4 bg-yellow-400 text-gray-800 px-6 py-3 rounded hover:bg-yellow-300">Explore Our Services</a>
    </section>

</body>
</html>
