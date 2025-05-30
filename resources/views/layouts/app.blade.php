<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DataSpruce-@yield('title')</title>
  <link rel="icon" href="{{ asset('faviconn.ico') }}" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <!-- Add in <head> if not already -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    body {
      background-image: url('https://img.freepik.com/free-vector/line-background-wave-gradient-template-design_483537-5082.jpg?semt=ais_hybrid&w=740');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      image-rendering: crisp-edges;
      filter: brightness(0.9) contrast(1.1) saturate(1.2);
      font-family: 'Poppins', 'Times New Roman', Times, serif;
      color: #121212;
    }

    .operating-hours {
      background-color: hsl(210, 25%, 97%);
      color: #0f0e0e;
      padding: 8px 0;
      font-size: 0.85rem;
      text-align: center;
    }

    .operating-hours i {
      margin-right: 6px;
      color: #00c6ff;
    }

    .hero {
      background: linear-gradient(90deg, #658eb7, #f6f6f7);
      background-image: url('https://img.freepik.com/premium-vector/abstract-financial-chart-with-uptrend-line-graph-stock-market-grey-background-vector-design_546559-442.jpg?ga=GA1.1.341280457.1747978859&w=740');
      text-align: center;
      padding: 4rem 1rem; /* smaller padding for mobile */
      color: rgb(7, 7, 7);
    }

    .hero h1 {
      font-size: 2.0rem;
      font-weight: bold;
    }

    
@media (max-width: 768px) {
  .hero h1 {
    font-size: 1.8rem; /* scale heading for smaller screens */
        }

        .hero {
            padding: 3rem 1rem;
        }
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
      font-size: 0.7rem;
      border-right: 3px solid rgba(28, 28, 28, 0.75);
      white-space: nowrap;
      overflow: hidden;
      display: inline-block;
      animation: typing 4s steps(30, end) 1s 1 normal both,
                 blinking 600ms steps(30, end) infinite;
    }

    @media (max-width: 768px) {
      .lead {
        font-size: 3vw; /* Larger font size adjustment for smaller screens */
      }
    }

    @media (max-width: 480px) {
      .lead {
        font-size: 2vw
      }

    }

    @keyframes typing {
      from { width: 0; }
      to { width: 100%; }
    }

    @keyframes blinking {
      0% { border-right-color: rgba(0, 255, 0, 0.75); }
      100% { border-right-color: transparent; }
    }

    footer {
      background-color: #1e3a8a;
      color: #fff;
      font-size: 0.9rem;
    }

    footer i {
      color: #00c6ff;
      margin-right: 6px;
    }

    .contact-buttons {
  display: flex;
  flex-direction: column;
  max-width: 300px;
  margin-top: 20px;
}

.contact-btn {
  text-decoration: none;
  padding: 12px 20px;
  margin-bottom: 12px;
  border-radius: 6px;
  color: white;
  font-weight: bold;
  text-align: center;
  transition: background-color 0.3s ease;
}

.contact-btn.email {
  background-color: #1e3a8a;
}

.contact-btn.email:hover {
  background-color: #0056b3;
}

.contact-btn.whatsapp {
  background-color: #1e3a8a;
}

.contact-btn.whatsapp:hover {
  background-color: #1ebe57;
}

.animated-card {
    padding: 1rem;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    background-color: #f8f9fa; /* light gray card background */
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease-in-out;
  }

  .shake:hover {
    animation: shake 0.6s;
  }

  .bounce:hover {
    animation: bounce 1s;
  }

  @keyframes shake {
    0% { transform: translateX(0); }
    20% { transform: translateX(-5px); }
    40% { transform: translateX(5px); }
    60% { transform: translateX(-5px); }
    80% { transform: translateX(5px); }
    100% { transform: translateX(0); }
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  </style>
</head>

<body>

  <!-- Operating Hours Banner -->
  <div class="operating-hours">
    <i class="fas fa-clock"></i> Mon–Fri: 8am–5pm | Sat: 9am–1pm
  </div>

 <!-- Responsive Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark px-4" style="background-color: #1e3a8a;">
  <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="{{ asset('images/Dataspruce.png') }}" alt="DataSpruce Logo" height="40" class="me-2">
    <span>DataSpruce Pvt Ltd</span>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Empowering Businesses Through Data</h1>
      <p class="lead">Data Analytics • Web Development • Tech Consulting</p>
      <a href="{{ route('services') }}" class="btn btn-light mt-4">Explore Services</a>
    </div>
  </section>

  <!-- Page Content -->
  <div class="container my-5">
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
