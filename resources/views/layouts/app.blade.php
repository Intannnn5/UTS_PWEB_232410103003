<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-600 text-gray-800 min-h-screen flex flex-col">

    {{-- Navbar --}}
    <x-navbar :username="$username ?? null" />

    {{-- Main Content --}}
    <main class="mt-15">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')      

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            function toggleMenu() {
                const isOpen = mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden', !isOpen);
                closeIcon.classList.toggle('hidden', isOpen);
                hamburgerBtn.setAttribute('aria-expanded', !isOpen);
            }

            function closeMenu() {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
            }

            if (hamburgerBtn && mobileMenu) {
                // Toggle menu when button is clicked
                hamburgerBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!mobileMenu.contains(e.target) && e.target !== hamburgerBtn && !mobileMenu.classList.contains('hidden')) {
                        closeMenu();
                    }
                });

                // Close menu when resizing to desktop view
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) {
                        closeMenu();
                    }
                });
            }
        });
    </script>
</body>
</html>
