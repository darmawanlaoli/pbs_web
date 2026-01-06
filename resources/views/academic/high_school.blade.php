@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/academic/high_school.JPG') }}"
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
                    <i class="fas fa-award mr-2"></i>Academics / High School
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                High School
            </h1>
            <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                Cultivating a community rooted in Truth and Honesty, where academic Growth and personal Resilience
                empower students to
                succeed with Respect
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>


<!-- Philosophy Section -->
<section id="philosophy" class="section bg-white">
    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="order-2 lg:order-1">
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div>
                            <h3 class="text-2xl font-headline font-bold text-primary mb-3">Curriculum Overview</h3>

                            <h4 class="text-2xl font-headline font-bold text-primary mb-3">International Middle Years
                                Curriculum (IMYC)</h4>


                            <p class="text-text-secondary leading-relaxed">
                                The International Middle Years Curriculum (IMYC) is a challenging, engaging,
                                internationally-minded, concept - focused
                                curriculum designed specifically for the unique learning needs of 11-14 year olds in
                                lower secondary. The IMYC helps
                                students with making meaning, connecting learning and developing their minds as 21st
                                Century learners. It is based on
                                clearly defined subject learning goals and standards which outline the knowledge, skills
                                and understanding across all
                                subjects, international mindedness and the personal development of students need during
                                their middle years experience.
                                The IMYC prepares students for the next stage of their learning and for future work
                                opportunities.
                            </p>


                            <h4 class="text-2xl mt-5 font-headline font-bold text-primary mb-3">National Curriculum
                                (Kurikulum Merdeka)</h4>


                            <p class="text-text-secondary leading-relaxed">
                                Peachblossoms School also implements National Curriculum (Kurikulum Merdeka) as the
                                mandatory curriculum in Secondary
                                level. The students in Grade 8 will sit for Computer-Based National Assessment (Asesmen
                                Nasional Berbasis Komputer) as
                                prescribed by The Minister of Education.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="relative">
                    <img src="{{ asset('images/building/peachblossoms_high_school.png') }}"
                        alt="Siswa EduVision Academy sedang berkolaborasi dalam pembelajaran berbasis proyek yang mengembangkan keterampilan berpikir kritis dan kreativitas"
                        class="w-full h-[500px] object-cover rounded-2xl shadow-elevated"
                        onerror="this.src='https://images.pexels.com/photos/8500285/pexels-photo-8500285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <div
                        class="absolute -bottom-6 -left-6 bg-accent text-white p-6 rounded-2xl shadow-elevated max-w-xs">
                        <div class="text-1xl font-bold mb-2">High School Building</div>
                        <p class="text-sm">Jl. Mutiara Gading City 93 Bekasi</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="text-2xl mt-5 font-headline font-bold text-primary mb-3">Schedule</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-bordered bg-white rounded-lg shadow-subtle">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="px-6 py-4 text-left font-headline">Class</th>
                        <th class="px-6 py-4 text-center font-headline">Days</th>
                        <th class="px-6 py-4 text-center font-headline">Hours</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td rowspan="2" class="px-6 py-4 font-semibold text-text-primary">HIGH SCHOOL 7 - HIGH SCHOOL 9
                        </td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday - Thursday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.15 - 14.40</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 text-center text-text-secondary">Friday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.15 - 15.00</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td rowspan="2" class="px-6 py-4 font-semibold text-text-primary">HIGH SCHOOL 10 - HIGH SCHOOL
                            11</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday - Thursday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.15 - 15.30</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 text-center text-text-secondary">Friday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.15 - 14.00</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>


@endsection