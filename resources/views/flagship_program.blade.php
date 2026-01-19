@extends('layout')

@section('content')
    <style>
        /* CSS VARIABLES & RESET */
        :root {
            --primary-blue: #1a45a0;
            --gradient-1: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(26, 69, 160, 0.9) 100%);
            --gradient-2: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(212, 160, 23, 0.9) 100%);
            --gradient-3: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(160, 26, 80, 0.9) 100%);
            --text-light: #ffffff;
            --text-gray: #666;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* .container {
                                                                                                                                                                                                        max-width: 1100px;
                                                                                                                                                                                                        width: 100%;
                                                                                                                                                                                                    } */

        /* header {
                                                                                                                                                                                                    text-align: center;
                                                                                                                                                                                                    margin-bottom: 50px;
                                                                                                                                                                                                    color: white;
                                                                                                                                                                                                } */

        /* header h1 {
                                                                                                                                                                                                font-size: 2.5rem;
                                                                                                                                                                                                letter-spacing: 1px;
                                                                                                                                                                                            } */

        /* GRID LAYOUT */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 70px;
        }

        /* CARD STYLE */
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            /* Untuk animasi awal JS */
            transform: translateY(30px);
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* IMAGE SECTION WITH GRADIENT */
        .card-image-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-image-wrapper img {
            transform: scale(1.1);
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        /* Warna gradasi spesifik */
        .grad-blue {
            background: var(--gradient-1);
        }

        .grad-gold {
            background: var(--gradient-2);
        }

        .grad-pink {
            background: var(--gradient-3);
        }

        .image-tag {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* CONTENT SECTION */
        .card-body {
            padding: 25px;
        }

        .category {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            margin-bottom: 8px;
            display: block;
        }

        .card-body h3 {
            margin-bottom: 12px;
            color: #222;
            font-size: 1.4rem;
        }

        .card-body p {
            color: var(--text-gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
            font-style: italic;
        }

        .btn-more {
            background-color: var(--primary-blue);
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 10px;
            display: inline-block;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        .btn-more:hover {
            background-color: #0d2a6b;
            box-shadow: 0 5px 15px rgba(26, 69, 160, 0.4);
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            .program-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>


    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary to-primary-900 text-white py-20 md:py-28 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block mb-6">
                    <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fa-solid fa-school mr-2"></i>Home / Flagship Programs
                    </span>
                </div>
                <h1 class="text-white mb-6 font-headline leading-tight">
                    Our Flagship Programs
                </h1>
            </div>
        </div>
    </section>

    <section class="section bg-gradient-to-br from-primary to-primary-900 text-white relative overflow-hidden">

        <div class="container-custom relative z-10">

            {{-- grid 1 --}}
            <div class="program-grid">
                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/slc.webp') }}" alt="Student Led Conference">
                        <div class="gradient-overlay grad-blue">
                            <span class="image-tag">Primary 1 - 5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Learning Journey</span>
                        <h3>Student Led Conference</h3>
                        <p>"Empowering students to take full ownership of their learning journey. Students present their own
                            portfolios and progress to parents."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/ipc_exhibition.webp') }}" alt="P6 IPC Exhibition">
                        <div class="gradient-overlay grad-gold">
                            <span class="image-tag">Primary 6</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Critical Thinking</span>
                        <h3>P6 IPC Exhibition</h3>
                        <p>"The crowning achievement of the Primary years. Our P6 students showcase their independent
                            research skills by tackling real-world issues."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/art_exhibition.webp') }}" alt="Y7 Art Exhibition">
                        <div class="gradient-overlay grad-pink">
                            <span class="image-tag">Year 7</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Creativity</span>
                        <h3>Y7 Art Exhibition</h3>
                        <p>"Art as a pathway to character. Through the creative process, students learn the Resilience
                            needed to perfect their craft."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>
            </div>


            {{-- grid 2 --}}

            <div class="program-grid">
                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/music_performance.webp') }}"
                            alt="Y8 Music Exhibition at Peachblossom School">
                        <div class="gradient-overlay grad-blue">
                            <span class="image-tag">Year 8</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Learning Journey</span>
                        <h3>Y8 Music Exhibition</h3>
                        <p>"Finding one's voice through melody. This exhibition celebrates the Growth of our young musicians
                            as they master complex pieces. It takes Resilience to perform on stage and Honesty to express
                            artistic Truth, earning the deep Respect of the entire school community."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/imyc_exhibition.webp') }}" alt="IMYC Exhibition">
                        <div class="gradient-overlay grad-gold">
                            <span class="image-tag">Year 9</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Critical Thinking</span>
                        <h3>Y9 IMYC Exhibition</h3>
                        <p>"Connecting learning to life. Guided by the pursuit of Truth, students showcase their personal
                            Growth and Resilience through in-depth inquiry. They present their findings with Honesty,
                            engaging the community with Respect and maturity."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/3d_printer.webp') }}" alt="Y7 Art Exhibition">
                        <div class="gradient-overlay grad-pink">
                            <span class="image-tag">Year 9 - Year 11</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Creativity & Critical Thinking</span>
                        <h3>3D Printing & 3D Design</h3>
                        <p>"Innovating for the future. Through the rigorous process of design and fabrication, students
                            develop the Resilience to solve complex problems. This program fosters intellectual Honesty,
                            technical Growth, and a deep Respect for technology, empowering them to construct their own
                            artistic and functional Truth."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>
            </div>

            {{-- grid 3 --}}
            <div class="program-grid">
                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/imyc_exhibition.webp') }}"
                            alt="Y10 Science Exhibition at Peachblossoms School Harapan Indah Bekasi">
                        <div class="gradient-overlay grad-blue">
                            <span class="image-tag">Year 10</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Learning Journey</span>
                        <h3>Y10 Science Exhibition</h3>
                        <p>"Empowering students to take full ownership of their learning journey. Students present their own
                            portfolios and progress to parents."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/performing_art.webp') }}"
                            alt="Performing Arts at Peachblossoms School Harapan Indah Bekasi">
                        <div class="gradient-overlay grad-gold">
                            <span class="image-tag">Year 11</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Creativity</span>
                        <h3>Y11 Performing Arts</h3>
                        <p>"Stepping into the spotlight with integrity. Driven by artistic Truth, our students display
                            remarkable Growth and Resilience. They deliver performances marked by emotional Honesty, earning
                            the Respect of the community through their dedication and high-level craftsmanship."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/flagship_program/ielts.webp') }}"
                            alt="IELTS at Peachblossoms School Harapan Indah Bekasi">
                        <div class="gradient-overlay grad-pink">
                            <span class="image-tag">Year 10 - Year 12</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="category">Growth</span>
                        <h3>IELTS Preparation</h3>
                        <p>"Achieving excellence through discipline. Students face the Truth of rigorous international
                            standards. The journey requires the Resilience to practice tirelessly and the Honesty to
                            self-assess accurately. Ultimately, this preparation builds the confidence and Growth needed to
                            command Respect in universities worldwide."</p>
                        <button onclick="infoAlert()" class="btn-more">Read More</button>
                    </div>
                </div>
            </div>


        </div>


        </div>

        <script>
            // Animasi muncul saat halaman dimuat
            document.addEventListener('DOMContentLoaded', () => {
                const cards = document.querySelectorAll('.card');

                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 200 * (index + 1));
                });

                // Efek klik tombol
                const buttons = document.querySelectorAll('.btn-more');
                buttons.forEach(btn => {
                    btn.addEventListener('mousedown', function() {
                        this.style.transform = 'scale(0.95)';
                    });
                    btn.addEventListener('mouseup', function() {
                        this.style.transform = 'scale(1)';
                    });
                });
            });
        </script>
    @endsection
