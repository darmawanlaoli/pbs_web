@extends('layout')

@section('content')

<!-- News Ticker -->
<div class="bg-gradient-to-r from-primary to-secondary text-white py-3 overflow-hidden">
    <div class="container-custom">
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-2 flex-shrink-0">
                <i class="fas fa-bullhorn"></i>
                <span class="font-semibold">News & Update:</span>
            </div>
            <div class="ticker-wrapper flex-1 overflow-hidden">
                <div class="ticker-content flex space-x-8 animate-ticker">
                    <span class="whitespace-nowrap"><a href="{{ route('articles') }}">🎉 Peachblossoms School Year End &
                            Charity
                            Highlights</a></span>
                    <span class="whitespace-nowrap"><a href="{{ route('articles') }}">🏆 Shannon Achieves Bronze with
                            Exceptional National & Global
                            Results
                            2025</a></span>
                    <span class="whitespace-nowrap"><a href="{{ route('articles') }}">📚 Showcasing Learning through IPC
                            and IMYC Exit Points</a></span>
                    <span class="whitespace-nowrap"><a href="{{ route('articles') }}">🌟 A Moment of Reflection:
                            Religious Service at Peachblossoms
                            School</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class="relative h-screen min-h-[600px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero/hero-bg-1.webp') }}"
            alt="Siswa-siswa EduVision Academy sedang belajar dengan antusias di ruang kelas modern yang dilengkapi teknologi pembelajaran interaktif"
            class="w-full h-full object-cover"
            onerror="this.src='https://img.rocket.new/generatedImages/rocket_gen_img_1633e6517-1765115190697.png'; this.onerror=null;">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/70 to-transparent"></div>
    </div>

    <!-- Hero Content -->
    <div class="container-custom relative z-10">

        <div class="row">
            <div class="col-7">
                <div class="inline-block mb-6" style="display: flex">
                    <div style="padding-right: 20px">
                        <img width="70px" src="{{ asset('images/logo_ipc.webp') }}" alt="">
                    </div>
                    <div style="padding-right: 20px">
                        <img width="70px" src="{{ asset('images/logo_imyc.webp') }}" alt="">
                    </div>
                    <div>
                        <img width="280px" src="{{ asset('images/ban_sm.webp') }}" alt="">
                    </div>
                    {{-- <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fas fa-star mr-2"></i>Accredited A from BAN-SM
                    </span> --}}
                </div>
                <h1 class="text-white mb-6 font-headline leading-tight">
                    What Makes Us Different?
                </h1>
                <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                    21<sup>st</sup>-century success requires digital literacy, critical thinking, creativity,
                    adaptability,
                    global awareness, and
                    lifelong learning skills.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('what_makes_us_different') }}"
                        class="btn btn-accent text-lg px-8 py-4 shadow-elevated hover:shadow-xl">
                        <span>Find Out More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="https://wa.me/6282114775734"
                        class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary text-lg px-8 py-4">
                        <i class="fab fa-whatsapp mr-2"></i>
                        <span>Chat Now</span>
                    </a>
                </div>


            </div>

            <div class="col-3">
            </div>
        </div>

    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>

<!-- School Levels Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title">Our Educational Stages</h2>
            <p class="section-subtitle mx-auto">
                Our Educational Stages From a strong foundation to lifelong success and readiness for the future, we
                guide your child's
                educational journey every step of the way.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- SD Card -->
            <div class="card group overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/building/peachblossoms_kindergarten.webp') }}"
                        alt="Gedung Sekolah Dasar (SD) EduVision Academy dengan fasilitas modern dan area bermain yang luas untuk siswa kelas 1-6"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop'; this.onerror=null;">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <a href="{{ route('academic/kindergarten') }}"
                            class="btn btn-accent transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <span>More Details</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="items-center justify-between mb-4">
                        <h3 class="text-2xl font-headline font-bold text-primary text-center">Preschool &
                            Kindergarten</h3>
                    </div>
                    <p class="text-center text-text-secondary mb-4 leading-relaxed">
                        We combine Active Learning and the Montessori Method to foster critical thinking and
                        collaborative skills. We prioritize
                        a nurturing environment for exploration.
                    </p>

                </div>
            </div>

            <!-- SMP Card -->
            <div class="card group overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/building/peachblossoms_primary.webp') }}"
                        alt="Gedung Sekolah Menengah Pertama (SMP) EduVision Academy dengan laboratorium sains dan ruang kelas teknologi untuk siswa kelas 7-9"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        onerror="
                            this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop'
                            ; this.onerror=null;">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <a href="{{ route('academic/primary_school') }}"
                            class="btn btn-accent transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <span>More Details</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="items-center justify-between mb-4">
                        <h3 class="text-center text-2xl font-headline font-bold text-primary">Primary School
                        </h3>
                    </div>
                    <p class="text-text-secondary mb-4 leading-relaxed">
                        A comprehensive integration of the International Primary Curriculum (IPC) and Kurikulum
                        Merdeka. The focus is on
                        global-mindedness and developing essential 21st-century personal goals like resilience and
                        respect.
                    </p>

                </div>
            </div>

            <!-- SMA Card -->
            <div class="card group overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/building/peachblossoms_high_school.webp') }}"
                        alt="Gedung Sekolah Menengah Atas (SMA) EduVision Academy dengan fasilitas perpustakaan digital dan ruang diskusi untuk siswa kelas 10-12"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        onerror="this.src='https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=2786&auto=format&fit=crop'; this.onerror=null;">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                        <a href="{{ route('academic/high_school') }}"
                            class="btn btn-accent transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <span>More Details</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class=" items-center justify-between mb-4">
                        <h3 class="text-center text-2xl font-headline font-bold text-primary">High School</h3>
                    </div>
                    <p class="text-text-secondary mb-4 leading-relaxed">
                        We implement the International Middle Years Curriculum (IMYC) alongside Kurikulum Merdeka.
                        This challenging,
                        concept-focused approach helps students connect learning and develop into adaptive thinkers
                        ready for their next
                        educational and professional stages.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section bg-gradient-to-br from-primary to-primary-900 text-white relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">
        <div class="text-center mb-16">
            <h2 class="section-title text-white">Why Choose Peachblossoms School?</h2>
            <p class="section-subtitle mx-auto text-white/90">
                Why should you choose Peachblossoms School for your child? <br> Here is what makes us different:
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="text-center">
                <div
                    class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <i class="fas fa-graduation-cap text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-headline font-bold mb-3">Global Standard Curriculum</h3>
                <p class="text-white/80 leading-relaxed">
                    We don't just use the National Curriculum; we integrate the International Primary Curriculum
                    (IPC) and IMYC. This
                    ensures your child meets global standards and develops an international mindset.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center">
                <div
                    class="w-20 h-20 bg-secondary rounded-2xl flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <i class="fas fa-chalkboard-teacher text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-headline font-bold mb-3">Fun Experiential Learning</h3>
                <p class="text-white/80 leading-relaxed">
                    Learning here is an adventure! students learn by doing, not just sitting in a classroom.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center">
                <div
                    class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <i class="fas fa-laptop-code text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-headline font-bold mb-3">Future Skills Focus</h3>
                <p class="text-white/80 leading-relaxed">
                    The school prioritizes the process over just final scores. We focus on building critical
                    thinking, collaboration, and
                    teamwork—essential soft skills for the 21st-century workplace.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="text-center">
                <div
                    class="w-20 h-20 bg-secondary rounded-2xl flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <i class="fas fa-trophy text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-headline font-bold mb-3">Holistic Student Growth</h3>
                <p class="text-white/80 leading-relaxed">
                    Holistic student growth going beyond academic excellence, we focus on nurturing individual
                    potential, ensuring every
                    student develops and thrives according to their own unique talents.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Parent Testimonials Section -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title">Parent Testimonial</h2>
            <p class="section-subtitle mx-auto">
                Kepercayaan dan kepuasan orang tua adalah prioritas utama kami
            </p>
        </div>

        <!-- Testimonial Slider -->
        <div class="relative max-w-5xl mx-auto">
            <div id="testimonial-slider" class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out" id="testimonial-track">


                    <!-- Testimonial 1 -->
                    @foreach ($testimonies as $testimony)


                    <div class="w-full flex-shrink-0 px-4">
                        <div class="card p-8 md:p-12">
                            <div class="flex flex-col md:flex-row items-center gap-8">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/testimonials/' . $testimony->photo) }}"
                                        alt="Foto Ibu Sarah Wijaya, orang tua siswa kelas 5 SD yang memberikan testimoni positif tentang EduVision Academy"
                                        class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                                </div>
                                <div class="flex-1 text-center md:text-left">
                                    <div class="flex justify-center md:justify-start mb-4">
                                        <i class="fas fa-star text-accent"></i>
                                        <i class="fas fa-star text-accent ml-1"></i>
                                        <i class="fas fa-star text-accent ml-1"></i>
                                        <i class="fas fa-star text-accent ml-1"></i>
                                        <i class="fas fa-star text-accent ml-1"></i>
                                    </div>
                                    <p class="text-lg text-text-secondary mb-6 leading-relaxed italic">
                                        {{ $testimony->testimonies }}
                                    </p>
                                    <div>
                                        <h4 class="font-headline font-bold text-xl text-primary mb-1">
                                            {{$testimony->parent_name}}</h4>
                                        <p class="text-text-secondary">Parent of {{$testimony->student_name . ' - '
                                            . $testimony->class}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>

            <!-- Slider Controls -->
            <button id="prev-testimonial"
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-12 h-12 bg-white rounded-full shadow-elevated flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="next-testimonial"
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-12 h-12 bg-white rounded-full shadow-elevated flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slider Indicators -->
            <div class="flex justify-center mt-8 space-x-2">
                <button class="testimonial-indicator w-3 h-3 rounded-full bg-primary transition-all duration-300"
                    data-index="0"></button>
                <button class="testimonial-indicator w-3 h-3 rounded-full bg-border transition-all duration-300"
                    data-index="1"></button>
                <button class="testimonial-indicator w-3 h-3 rounded-full bg-border transition-all duration-300"
                    data-index="2"></button>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('testimonials') }}" class="btn btn-primary">
                <span>View All Testimonies</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="card bg-gradient-to-r from-primary to-secondary text-white p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-headline font-bold mb-6">
                Ready to Join with Peachblossoms School?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white/90">
                Enroll your child now and give them the opportunity to grow with high-quality education.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6282114775734" class="btn btn-accent text-lg px-8 py-4">
                    <i class="fas fa-clipboard-list mr-2"></i>
                    <span>Enroll Now</span>
                </a>
                <a href="{{ route('contact_us') }}"
                    class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary text-lg px-8 py-4">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span>Schedule a Visit</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection