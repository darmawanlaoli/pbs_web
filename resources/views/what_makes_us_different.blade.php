@extends('layout')

@section('content')
    <style>
        /* Base Reset */
        :root {
            --primary: #6c5ce7;
            --primary-light: #a29bfe;
            --dark: #2d3436;
            --grey: #636e72;
            --light-bg: #f8f9fa;
            --purple-bg: #f3f0ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--dark);
            line-height: 1.8;
            overflow-x: hidden;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 100px 0;
            color: white;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Section Layouts */
        section {
            padding: 80px 0;
        }

        .flex-row {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }

        .col {
            flex: 1;
            min-width: 300px;
        }

        /* Visual Components */
        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .section-title span {
            color: var(--primary);
        }

        .highlight-text {
            border-left: 5px solid var(--primary);
            padding-left: 20px;
            margin: 30px 0;
            font-style: italic;
            font-weight: 500;
            color: var(--grey);
        }

        .img-rounded {
            width: 100%;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Cards Grid */
        .bg-purple {
            background-color: var(--purple-bg);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: var(--primary);
            color: white;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            font-weight: bold;
        }

        /* Sidebar Navigation Style Section */
        .sticky-wrapper {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
        }

        .sticky-content {
            position: sticky;
            top: 40px;
            height: fit-content;
        }

        .detail-item {
            margin-bottom: 40px;
        }

        .detail-item h4 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Footer Callout */
        .cta-box {
            background: var(--dark);
            color: white;
            padding: 80px 40px;
            border-radius: 40px;
            text-align: center;
            margin-top: 50px;
        }

        .tombol {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            margin-top: 30px;
            transition: 0.3s;
        }

        .tombol:hover {
            background: white;
            color: var(--primary);
        }

        /* Mobile Adjustments */
        @media (max-width: 850px) {
            .sticky-wrapper {
                grid-template-columns: 1fr;
            }

            .sticky-content {
                position: static;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/articles/peachblossoms_school_lab.webp') }}" alt="Lab Biologi Peachblososms School"
                class="w-full h-full object-cover"
                onerror="this.src='https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/80 to-primary/60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container-custom relative z-10">
            <div class="max-w-3xl">
                <div class="inline-block mb-6">
                    <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fas fa-award mr-2"></i>Home / What Makes Us Different</span>
                </div>
                <h1 class="text-white mb-6 font-headline leading-tight">
                    What Makes Us Different
                </h1>
                <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                    Intellectual capital is the driving force of the 21st century. We don't just teach; we prepare future
                    generations for a
                    world that's constantly evolving.
                </p>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </section>


    <section>

        <section>
            <div class="container">
                <div class="flex-row">
                    <div class="col">
                        <h2 class="section-title">The Urgency of <span>Intellectual Potential</span></h2>
                        <p>Political, social and economic progress in this millennium will depend on the intellectual
                            potential
                            of future generations. The necessity to refresh skills should come as no surprise.</p>
                        <div class="highlight-text">
                            "The ability of students to implement their skills in the digital age will determine whether
                            they
                            are ready to live, study, work and serve society."
                        </div>
                        <p>We serve as a bridge between the public, business and educational sector, helping students
                            properly
                            prepare themselves.</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/articles/high_school_student.webp') }}" alt="Education"
                            class="img-rounded">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-purple">
            <div class="container">
                <div style="text-align: center; max-width: 700px; margin: 0 auto;">
                    <h2 class="section-title">A New Kind of Literacy</h2>
                    <p>Being literate in the 21st century means having excellent academic skills, thinking critically, and
                        mastering technology.</p>
                </div>

                <div class="cards-grid">
                    <div class="card">
                        <div class="icon-box mx-auto"><i class="bi bi-book"></i></div>
                        <h4>Holistic Approach</h4>
                        <p>Combining learning objectives with innovative systems for multidimensional skills.</p>
                    </div>
                    <div class="card">
                        <div class="icon-box mx-auto"><i class="bi bi-cpu"></i></div>
                        <h4>Digital Era</h4>
                        <p>Students must acquire skills of the digital age to progress in a digital economy.</p>
                    </div>
                    <div class="card">
                        <div class="icon-box mx-auto"><i class="bi bi-people"></i></div>
                        <h4>Global Standards</h4>
                        <p>Implementing 21st-century skills into academic standards and school programmes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="sticky-wrapper">
                    <div class="sticky-content">
                        <h2 class="section-title">Literacy in the <br><span>Digital Age</span></h2>
                        <p>As society changes, the skills needed to perform complex functions also change. We expect
                            students to
                            read critically and write convincingly.</p>
                    </div>
                    <div>
                        <div class="detail-item">
                            <h4>Visual & Information</h4>
                            <p>Students need good visualisation skills to interpret images and spot patterns. Information
                                literacy refers to efficient access and critical evaluation of information.</p>
                        </div>
                        <div class="detail-item">
                            <h4>Cultural Awareness</h4>
                            <p>In a global economy, there is a greater need for knowledge, understanding, and respect among
                                cultures, including tech-world norms.</p>
                        </div>
                        <div class="detail-item">
                            <h4>Creative Thinking</h4>
                            <p>Individuals are required to independently identify change and react to it. Self-actualised
                                students learn how to analyse and identify new conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="cta-box">
                <h2>Curiosity, Creativity and Risk</h2>
                <p style="margin-top: 20px; opacity: 0.8;">Curiosity enables lifelong learning. It is also important to take
                    risks – without this, there would be fewer discoveries and inventions.</p>
                <a href="{{ route('flagship_program') }}" class="tombol">Explore Our Programs</a>
            </div>
        </section>

    </section>
@endsection
