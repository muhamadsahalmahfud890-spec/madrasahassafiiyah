<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MDTU Assafiiyah')</title>
    @yield('meta')

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a5c38',
                        accent: '#c9a84c',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- Custom Pattern Background & Styles -->
    <style>
        body {
            /* Subtle Islamic Geometric Pattern using SVG */
            background-color: #f9fafb;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231a5c38' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            font-family: 'Plus Jakarta Sans', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Playfair Display', serif;
        }
    </style>

    @yield('styles')
</head>
<body class="antialiased text-gray-800">

    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Flash Messages -->
    <div class="fixed top-24 right-4 z-50 w-full max-w-sm space-y-2">
        @if (session('success'))
            <div id="alert-success" class="bg-green-100 border-l-4 border-primary text-primary p-4 rounded shadow-lg flex items-start justify-between" role="alert" data-aos="fade-left">
                <div>
                    <p class="font-bold font-heading">Berhasil</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
                <button type="button" onclick="document.getElementById('alert-success').remove()" class="text-primary hover:text-green-800">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div id="alert-error" class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-lg flex items-start justify-between" role="alert" data-aos="fade-left">
                <div>
                    <p class="font-bold font-heading">Error</p>
                    <p class="text-sm">{{ session('error') }}</p>
                </div>
                <button type="button" onclick="document.getElementById('alert-error').remove()" class="text-red-700 hover:text-red-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif
        
        @if ($errors->any())
            <div id="alert-validation" class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-lg flex items-start justify-between" role="alert" data-aos="fade-left">
                <div>
                    <p class="font-bold font-heading">Perhatian</p>
                    <ul class="text-sm list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" onclick="document.getElementById('alert-validation').remove()" class="text-red-700 hover:text-red-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif
    </div>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <!-- Global Init Scripts -->
    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            duration: 800,
            offset: 50,
        });

        // Initialize GLightbox
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
        });
        
        // Auto dismiss flash messages after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('[role="alert"]');
            alerts.forEach(alert => {
                alert.style.transition = "opacity 0.5s ease-out";
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    </script>

    @yield('scripts')
</body>
</html>
