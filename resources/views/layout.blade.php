<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="EduVision Academy - Lembaga pendidikan modern yang memberdayakan potensi setiap siswa melalui pendekatan pembelajaran inovatif dari SD, SMP, hingga SMA.">
    <meta name="keywords"
        content="sekolah, pendidikan, SD, SMP, SMA, EduVision Academy, sekolah terbaik, pendidikan berkualitas">
    <title>Peachblossoms School Harapan Indah Bekasi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script type="module" async
        src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Feduvision7008back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.10">
    </script>
    <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.1"></script>
</head>

<body class="bg-background">
    <!-- Header Navigation -->
    <header class="bg-white shadow-subtle sticky top-0 z-50">
        <nav class="container-custom">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="relative">
                        <img style="width: 48px;" src="{{ asset('images/logo.webp') }}" alt="">
                    </div>
                    <div class="flex flex-col">
                        <span class="font-headline font-bold text-xl text-primary">PEACHBLOSSOMS SCHOOL</span>
                        <span class="font-body text-xs text-text-secondary">Truth, Growth, Honesty and Respect,
                            Resilience</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="font-cta text-primary font-semibold border-b-2 border-primary py-2 transition-smooth">Home</a>

                    <!-- About Us Dropdown -->
                    <div class="relative group">
                        <button
                            class="font-cta text-text-primary hover:text-primary transition-smooth flex items-center space-x-1 py-2">
                            <span>About Us</span>
                            <i
                                class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-elevated opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <div class="py-2">
                                <a href="{{ route('school_profile') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-lightbulb w-5 mr-2"></i>School Profile
                                </a>
                                <a href="{{ route('vision_mission') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-users w-5 mr-2"></i>Vision, Mission & Value
                                </a>
                                <a href="{{ route('curriculum') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-building w-5 mr-2"></i>Curriculum
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Academics Dropdown -->
                    <div class="relative group">
                        <button
                            class="font-cta text-text-primary hover:text-primary transition-smooth flex items-center space-x-1 py-2">
                            <span>Academics</span>
                            <i
                                class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-elevated opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <div class="py-2">
                                <a href="{{ route('academic/kindergarten') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-lightbulb w-5 mr-2"></i>Preschool & Kindergarten
                                </a>
                                <a href="{{ route('academic/primary_school') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-users w-5 mr-2"></i>Primary School
                                </a>
                                <a href="{{ route('academic/high_school') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fas fa-building w-5 mr-2"></i>High School
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Academics Dropdown -->
                    <div class="relative group">
                        <button
                            class="font-cta text-text-primary hover:text-primary transition-smooth flex items-center space-x-1 py-2">
                            <span>Media</span>
                            <i
                                class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-elevated opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <div class="py-2">
                                <a href="{{ route('photo_gallery') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fa-regular fa-image w-5 mr-2"></i>Photo Gallery
                                </a>
                                <a href="https://www.youtube.com/OfficialPeachblossomsSchool"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fa-brands fa-youtube w-5 mr-2"></i>YouTube Channel
                                </a>
                                <a href="https://www.instagram.com/peachblossoms_school/"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fa-brands fa-instagram w-5 mr-2"></i>Instagram
                                </a>
                                <a href="https://www.tiktok.com/@peachblossomsschool"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fa-brands fa-tiktok w-5 mr-2"></i>TikTok
                                </a>
                                <a href="{{ route('articles') }}"
                                    class="block px-4 py-3 text-text-primary hover:bg-primary-50 hover:text-primary transition-smooth">
                                    <i class="fa-regular fa-newspaper w-5 mr-2"></i>News & Articles
                                </a>
                            </div>
                        </div>
                    </div>


                    <a href="{{ route('flagship_program') }}"
                        class="font-cta text-text-primary hover:text-primary transition-smooth">Flagship Programs</a>

                    <!-- Parent Portal Button -->
                    <a href="{{ route('contact_us') }}" class="btn btn-primary">
                        <i class="fas fa-user-circle mr-2"></i>Contact Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-primary p-2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-border">
                <div class="py-4 space-y-2">
                    <a href="{{ route('home') }}"
                        class="block px-4 py-3 text-primary font-semibold bg-primary-50 rounded-lg">Home</a>

                    <!-- Mobile About Dropdown -->
                    <div>
                        <button id="mobile-about-btn"
                            class="w-full flex items-center justify-between px-4 py-3 text-text-primary hover:bg-surface rounded-lg transition-smooth">
                            <span>About Us</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                        <div id="mobile-about-menu" class="hidden pl-4 space-y-1 mt-1">
                            <a href="about_us.html#philosophy"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">School
                                Profile</a>
                            <a href="about_us.html#leadership"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">Vision, Mission &
                                Value</a>
                            <a href="about_us.html#facilities"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">Curriculum</a>
                        </div>
                    </div>

                    <div>
                        <button id="mobile-about-btn"
                            class="w-full flex items-center justify-between px-4 py-3 text-text-primary hover:bg-surface rounded-lg transition-smooth">
                            <span>Academics</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                        <div id="mobile-about-menu" class="hidden pl-4 space-y-1 mt-1">
                            <a href="about_us.html#philosophy"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">Preschool &
                                Kindergarten</a>
                            <a href="about_us.html#leadership"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">Primary
                                School</a>
                            <a href="about_us.html#facilities"
                                class="block px-4 py-2 text-sm text-text-secondary hover:text-primary">High School</a>
                        </div>
                    </div>

                    <a href="admissions.html"
                        class="block px-4 py-3 text-text-primary hover:bg-surface rounded-lg transition-smooth">Penerimaan</a>
                    <a href="parent_testimonials.html"
                        class="block px-4 py-3 text-text-primary hover:bg-surface rounded-lg transition-smooth">Testimoni</a>
                    <a href="contact.html"
                        class="block px-4 py-3 text-text-primary hover:bg-surface rounded-lg transition-smooth">Kontak</a>
                    <a href="javascript:void(0)"
                        class="block px-4 py-3 text-white bg-primary rounded-lg text-center font-semibold">
                        <i class="fas fa-user-circle mr-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')



    <!-- Footer -->
    <footer class="bg-primary-900 text-white pt-16 pb-8">
        <div class="container-custom">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- About Column -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div>
                            <div class="font-headline font-bold text-xl">PEACHBLOSSOMS SCHOOL</div>
                            <div class="text-sm text-white/70">Truth, Growth, Honesty and Respect, Resilience</div>
                        </div>
                    </div>
                    <p class="text-white/80 leading-relaxed mb-6">
                        Education for a changing world, nurturing future leaders with integrity and resilience.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/share/16TWsc1JUH/"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/peachblossoms_school/"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/OfficialPeachblossomsSchool"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.tiktok.com/@peachblossomsschool"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-300">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Preschool and Kindergarten-->
                <div>
                    <h3 class="font-headline font-bold text-lg mb-6">Preschool and Kindergarten</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                            <span class="text-white/80">Kota Harapan Indah FE 1, Bekasi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-accent mr-3"></i>
                            <a href="tel:+628111865770"
                                class="text-white/80 hover:text-accent transition-colors duration-300">021-88865770,
                                0811 1865 770</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-brands fa-instagram text-accent mr-3"></i>
                            <a href="https://www.instagram.com/pbs.preschool/"
                                class="text-white/80 hover:text-accent transition-colors duration-300">@pbs.preschool</a>
                        </li>
                        <a href="https://maps.app.goo.gl/BbGzKmgiwVfFf5tw8" class="btn btn-primary">Google Map</a>

                    </ul>
                </div>

                <!-- Primary School -->
                <div>
                    <h3 class="font-headline font-bold text-lg mb-6">Primary School</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                            <span class="text-white/80">Kota Harapan Indah RV 2-09 Bekasi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-accent mr-3"></i>
                            <a href="tel:+6285100356828"
                                class="text-white/80 hover:text-accent transition-colors duration-300">021-8898 7306,
                                0851 0035 6828</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-brands fa-instagram text-accent mr-3"></i>
                            <a href="https://www.instagram.com/pbs_primary/"
                                class="text-white/80 hover:text-accent transition-colors duration-300">@pbs.primary</a>
                        </li>
                        <a href="https://maps.app.goo.gl/y7XPyQDbYMer9Gtq8" class="btn btn-primary">Google Map</a>
                    </ul>
                </div>

                <!-- High School -->
                <div>
                    <h3 class="font-headline font-bold text-lg mb-6">High School</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                            <span class="text-white/80">Jl. Mutiara Gading City 93 Bekasi</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-accent mr-3"></i>
                            <a href="tel:+6282114775734"
                                class="text-white/80 hover:text-accent transition-colors duration-300">021-8944 1151,
                                0821 1477 5734</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-brands fa-instagram text-accent mr-3"></i>
                            <a href="https://maps.app.goo.gl/C5vQhqPH3TQ7oeoy9"
                                class="text-white/80 hover:text-accent transition-colors duration-300">@pbs.jhs</a>
                        </li>
                        <a href="https://maps.app.goo.gl/BbGzKmgiwVfFf5tw8" class="btn btn-primary">Google Map</a>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-white/60 text-sm">
                        © {{ date('Y') }} Peachblossoms School. All rights reserved.
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="javascript:void(0)"
                            class="text-white/60 hover:text-accent transition-colors duration-300">Kebijakan Privasi</a>
                        <a href="javascript:void(0)"
                            class="text-white/60 hover:text-accent transition-colors duration-300">Syarat &
                            Ketentuan</a>
                        <a href="javascript:void(0)"
                            class="text-white/60 hover:text-accent transition-colors duration-300">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileAboutBtn = document.getElementById('mobile-about-btn');
            const mobileAboutMenu = document.getElementById('mobile-about-menu');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });

            mobileAboutBtn.addEventListener('click', () => {
                mobileAboutMenu.classList.toggle('hidden');
                const icon = mobileAboutBtn.querySelector('i');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });

            // Testimonial Slider
            const testimonialTrack = document.getElementById('testimonial-track');
            const prevBtn = document.getElementById('prev-testimonial');
            const nextBtn = document.getElementById('next-testimonial');
            const indicators = document.querySelectorAll('.testimonial-indicator');
            let currentIndex = 0;
            const totalSlides = 3;

            function updateSlider(index) {
                testimonialTrack.style.transform = `translateX(-${index * 100}%)`;
                indicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.remove('bg-border');
                        indicator.classList.add('bg-primary');
                    } else {
                        indicator.classList.remove('bg-primary');
                        indicator.classList.add('bg-border');
                    }
                });
                currentIndex = index;
            }

            prevBtn.addEventListener('click', () => {
                const newIndex = currentIndex === 0 ? totalSlides - 1 : currentIndex - 1;
                updateSlider(newIndex);
            });

            nextBtn.addEventListener('click', () => {
                const newIndex = currentIndex === totalSlides - 1 ? 0 : currentIndex + 1;
                updateSlider(newIndex);
            });

            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    updateSlider(index);
                });
            });

            // Auto-play testimonials
            setInterval(() => {
                const newIndex = currentIndex === totalSlides - 1 ? 0 : currentIndex + 1;
                updateSlider(newIndex);
            }, 5000);

            // News Ticker Animation
            const tickerContent = document.querySelector('.ticker-content');
            if (tickerContent) {
                const tickerWidth = tickerContent.scrollWidth;
                tickerContent.style.animation = `scroll ${tickerWidth / 50}s linear infinite`;
            }

            // Add scroll animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes scroll {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }
            `;
            document.head.appendChild(style);

            // Duplicate ticker content for seamless loop
            if (tickerContent) {
                tickerContent.innerHTML += tickerContent.innerHTML;
            }
    </script>
    <script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function infoAlert() {
                Swal.fire({
                    icon: 'info',
                    title: 'Info',
                    text: 'This feature is currently under development. It will be available in an upcoming update..',
                    confirmButtonText: 'OK'
                });
            }
    </script>

</body>

</html>