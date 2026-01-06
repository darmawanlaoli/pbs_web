@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/academic/preschool_hero.jpg') }}"
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
                    <i class="fas fa-award mr-2"></i>Academic / Preschool & Kindergarten
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                Preschool & Kindergarten
            </h1>
            <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed">
                Nurturing each child’s potential through innovative education that blends traditional academic
                excellence with modern
                learning approaches.
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
                            <p class="text-text-secondary leading-relaxed">
                                We provide children in Preschool and Kindergarten with educational experiences by
                                combining active learning and
                                Montessori method. The Montessori Method of education is a child-centered educational
                                approach based on scientific
                                observations of children from birth to adulthood. Montessori students learn to think
                                critically, work collaboratively.
                                School creates the Learning environment where children feel at home so they will be more
                                willing to explore new concepts
                                and idea.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="relative">
                    <img src="{{ asset('images/building/peachblossoms_kindergarten.png') }}"
                        alt="Siswa EduVision Academy sedang berkolaborasi dalam pembelajaran berbasis proyek yang mengembangkan keterampilan berpikir kritis dan kreativitas"
                        class="w-full h-[500px] object-cover rounded-2xl shadow-elevated"
                        onerror="this.src='https://images.pexels.com/photos/8500285/pexels-photo-8500285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <div
                        class="absolute -bottom-6 -left-6 bg-accent text-white p-6 rounded-2xl shadow-elevated max-w-xs">
                        <div class="text-1xl font-bold mb-2">Preschool & Kindergarten Building</div>
                        <p class="text-sm">Kota Harapan Indah FE 1, Bekasi</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="text-2xl mt-5 font-headline font-bold text-primary mb-3">Schedule</h3>
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow-subtle">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="px-6 py-4 text-left font-headline">Level</th>
                        <th class="px-6 py-4 text-center font-headline">Ages</th>
                        <th class="px-6 py-4 text-center font-headline">Days</th>
                        <th class="px-6 py-4 text-center font-headline">Hours</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 font-semibold text-text-primary">Todler</td>
                        <td class="px-6 py-4 text-center text-text-secondary">1 Year</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday & Wednesday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">10.00 - 11.00</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 font-semibold text-text-primary">Nursery</td>
                        <td class="px-6 py-4 text-center text-text-secondary">2 Years</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Tuesday, Thursday, Friday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">10.30 - 12.30</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 font-semibold text-text-primary">Pre-Kindergarten Morning</td>
                        <td class="px-6 py-4 text-center text-text-secondary">3 Years</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday, Wednesday, Friday or Tuesday,
                            Thursday, Saturday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.45 - 10.15</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 font-semibold text-text-primary">Pre-Kindergarten Afternoon</td>
                        <td class="px-6 py-4 text-center text-text-secondary">3 Years</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday, Wednesday, Friday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">10.30 - 13.00</td>
                    </tr>

                    <tr class="hover:bg-primary-50 transition-colors duration-300">
                        <td class="px-6 py-4 font-semibold text-text-primary">K1 and K2</td>
                        <td class="px-6 py-4 text-center text-text-secondary">4 - 5 Years</td>
                        <td class="px-6 py-4 text-center text-text-secondary">Monday to Friday</td>
                        <td class="px-6 py-4 text-center text-text-secondary">07.45 - 11.15 or until 11.45 for
                            additional lesson</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>


@endsection