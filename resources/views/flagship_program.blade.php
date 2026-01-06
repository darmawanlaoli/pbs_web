@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1633e6517-1765115190697.png"
            alt="Gedung utama EduVision Academy dengan arsitektur modern yang mencerminkan inovasi pendidikan dan lingkungan belajar yang inspiratif"
            class="w-full h-full object-cover"
            onerror="this.src='https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/80 to-primary/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="container-custom relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-award mr-2"></i>Home / Flagship Programs</span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                Our Flagship Programs
            </h1>
            <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                Memberdayakan potensi setiap siswa melalui pendidikan inovatif yang memadukan keunggulan akademik
                tradisional dengan metodologi pembelajaran modern.
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>


<!-- Why Choose Us Section -->
<section class="section bg-gradient-to-br from-primary to-primary-900 text-white relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">

        <!-- Flagship 1 -->
        <div class="w-full flex-shrink-0 px-4">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Student Led Conference</h4>
                            <p class="text-text-secondary">Primary 1 - Primary 5</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Empowering students to take full ownership of their learning journey. In this program,
                            students present their own
                            portfolios and progress to parents, fostering deep self-reflection, accountability, and
                            leadership skills from an early
                            age."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">P6 IPC Exhibition</h4>
                            <p class="text-text-secondary">Primary 6</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "The crowning achievement of the Primary years. Our P6 students showcase their critical
                            thinking and independent research
                            skills by tackling real-world issues. This exhibition demonstrates their readiness to step
                            up to the challenges of
                            Secondary School."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 3 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Y7 Art Exhibition</h4>
                            <p class="text-text-secondary">Year 7</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Art as a pathway to character. Through the creative process, students learn the Resilience
                            needed to perfect their craft
                            and the Honesty required for self-expression. This showcase celebrates their artistic Growth
                            and the Truth behind their
                            stories, fostering a community of mutual Respect and appreciation."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Y8 Music Exhibition</h4>
                            <p class="text-text-secondary">Year 8</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Finding one's voice through melody. This exhibition celebrates the Growth of our young
                            musicians as they master complex
                            pieces. It takes Resilience to perform on stage and Honesty to express artistic Truth,
                            earning the deep Respect of the
                            entire school community."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Y9 IMYC Exhibition</h4>
                            <p class="text-text-secondary">Year 9</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Connecting learning to life. Guided by the pursuit of Truth, students showcase their
                            personal Growth and Resilience
                            through in-depth inquiry. They present their findings with Honesty, engaging the community
                            with Respect and maturity."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/flagship_program/3d_printer.jpg') }}"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">3D Printing & 3D Design</h4>
                            <p class="text-text-secondary">Year 9 - Year 11</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Innovating for the future. Through the rigorous process of design and fabrication, students
                            develop the Resilience to
                            solve complex problems. This program fosters intellectual Honesty, technical Growth, and a
                            deep Respect for technology,
                            empowering them to construct their own artistic and functional Truth."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Y10 Science Exhibition</h4>
                            <p class="text-text-secondary">Year 10</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "In the pursuit of scientific Truth, students engage in rigorous inquiry and
                            experimentation. This exhibition highlights
                            their Resilience in refining methodologies and Honesty in analyzing data—even when results
                            differ from predictions. It
                            is a showcase of profound academic Growth and a deep Respect for the ethics of science."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">Y11 Performing Arts</h4>
                            <p class="text-text-secondary">Year 11</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Stepping into the spotlight with integrity. Driven by artistic Truth, our students display
                            remarkable Growth and
                            Resilience. They deliver performances marked by emotional Honesty, earning the Respect of
                            the community through their
                            dedication and high-level craftsmanship."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Flagship 2 -->
        <div class="w-full flex-shrink-0 px-4 mt-5">
            <div class="card p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1983baef3-1765185677980.png"
                            alt="Foto Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP yang memberikan testimoni positif tentang program STEM di EduVision Academy"
                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200&h=200&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary">IELTS Preperation</h4>
                            <p class="text-text-secondary">Year 10 - Year 13</p>
                        </div>
                        <p class="mt-2 text-lg text-text-secondary mb-6 leading-relaxed italic">
                            "Achieving excellence through discipline. Students face the Truth of rigorous international
                            standards. The journey
                            requires the Resilience to practice tirelessly and the Honesty to self-assess accurately.
                            Ultimately, this preparation
                            builds the confidence and Growth needed to command Respect in universities worldwide."
                        </p>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


@endsection