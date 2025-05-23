<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGT DataSpruce Pvt Ltd - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://img.freepik.com/free-vector/line-background-wave-gradient-template-design_483537-5082.jpg?semt=ais_hybrid&w=740');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            image-rendering: crisp-edges;
            filter: brightness(0.9) contrast(1.1) saturate(1.2);
            font-family: 'Poppins', sans-serif;
            color: #121212;
        }

        .operating-hours {
            background-color: #00203F;
            color: #ffffff;
            padding: 8px 0;
            font-size: 0.85rem;
            text-align: center;
        }

        .operating-hours i {
            margin-right: 6px;
            color: #00c6ff;
        }

        .nav {
                background-color: #1e3a8a;
                color: white;
                padding: 1rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

            .nav-link {
                color: white;
                text-decoration: none;
                transition: text-decoration 0.3s;
            }

                .nav-link:hover {
                    text-decoration: underline;
                }
       
        

        .hero {
            background: linear-gradient(90deg, #485868, #4d5681);
            padding: 100px 0;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .btn-light {
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            padding: 10px 24px;
            background-color: #fff;
            color: #000;
            animation: flicker 1.5s infinite alternate;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 0, 255, 0.4);
            border: none;
            text-decoration: none;
        }

        @keyframes flicker {
            0%, 100% {
                opacity: 1;
                text-shadow: 0 0 10px #fff, 0 0 20px #ff00ff;
            }
            50% {
                opacity: 0.6;
                text-shadow: none;
            }
        }

        .lead {
            font-family: 'Source Code Pro', monospace;
            font-size: 1.2rem;
            border-right: 3px solid rgba(0,255,0,.75);
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            animation: typing 4s steps(40, end) 1s 1 normal both,
                       blinking 600ms steps(40, end) infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blinking {
            0% { border-right-color: rgba(0,255,0,.75); }
            100% { border-right-color: transparent; }
        }

        footer {
            background-color: #121212;
            color: #fff;
            font-size: 0.9rem;
        }

        footer i {
            color: #00c6ff;
            margin-right: 6px;
        }
    </style>
</head>

<body>

    <nav class="nav">
        <div class="text-lg font-bold">DataSpruce Pvt Ltd</div>
        <ul class="nav-links">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>


    <!-- Page Content -->
    <div class="container">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5">
        <p>&copy; 2025 DataSpruce Pvt Ltd. All rights reserved.</p>
        <p><i class="fas fa-envelope"></i> contact@dataspruce.com | <i class="fas fa-phone"></i> +263 772 131 956</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
