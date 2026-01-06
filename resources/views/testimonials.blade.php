@extends('layout')

@section('content')


<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary to-primary-900 text-white py-20 md:py-28 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-heart mr-2"></i>Home / Testimonials
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                Parents’ Testimonials
            </h1>
            <p class="text-white/90 text-xl md:text-2xl mb-8 leading-relaxed max-w-3xl mx-auto">
                What parents say about Peachblossoms School and their children's experiences
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section style="display: none" class="section bg-white py-8 sticky top-20 z-40 shadow-subtle">
    <div class="container-custom">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Search Bar -->
            <div class="w-full md:w-96">
                <div class="relative">
                    <input type="text" id="search-input" placeholder="Cari testimoni berdasarkan kata kunci..."
                        class="form-input pl-12 pr-4">
                    <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-text-secondary"></i>
                </div>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-sm font-semibold text-text-secondary">Filter:</span>
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th mr-2"></i>Semua
                </button>
                <button class="filter-btn" data-filter="sd">
                    <i class="fas fa-child mr-2"></i>SD
                </button>
                <button class="filter-btn" data-filter="smp">
                    <i class="fas fa-user-graduate mr-2"></i>SMP
                </button>
                <button class="filter-btn" data-filter="sma">
                    <i class="fas fa-graduation-cap mr-2"></i>SMA
                </button>
                <button id="reset-filter" class="text-sm text-primary hover:text-primary-700 font-semibold">
                    <i class="fas fa-redo mr-1"></i>Reset
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Video Testimonials Section -->
<section class="section bg-surface">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title">Testimonial Video</h2>
            <p class="section-subtitle mx-auto">
                Listen to the meaningful experiences shared by parents.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Video Testimonial 1 -->
            <div class="card overflow-hidden group testimonial-item" data-level="sd"
                data-keywords="prestasi akademik pembelajaran menyenangkan">
                <div class="relative h-64 bg-primary-900 overflow-hidden">
                    <img src="{{ asset('images/testimonials/mom_amanda.jpg') }}"
                        alt="Video testimoni Ibu Sarah Wijaya, orang tua siswa kelas 5 SD, berbagi pengalaman tentang peningkatan prestasi akademik dan antusiasme belajar anak"
                        class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                    <button
                        class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                        onclick="openVideoModal('https://www.youtube.com/embed/L-piKMsJMN4?si=M2Qb1N_0-BPhKEkLhttps://www.youtube.com/embed/L-piKMsJMN4?si=U0AyTHgVuHYU5ill')">
                        <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                            <i class="fas fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </button>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold"></span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="font-headline font-bold text-xl mb-1">Mrs. Amelia Anggraeni</h3>
                        <p class="text-sm text-white/90">Parent of Amanda Nathania - Y9 Courage</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-text-secondary leading-relaxed line-clamp-2">
                        "Saya memilih Peachblossoms School karena kualitas pendidikannya yang unggul, terutama dalam
                        materi pembelajaran
                        berkualitas yang didukung oleh kurikulum IMYC"
                    </p>
                    <button
                        class="mt-4 text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                        data-title="Testimoni Ibu Sarah Wijaya">
                        <i class="fas fa-share-alt mr-2"></i>Share Testimonial
                    </button>
                </div>
            </div>

            <!-- Video Testimonial 2 -->
            <div class="card overflow-hidden group testimonial-item" data-level="sd"
                data-keywords="prestasi akademik pembelajaran menyenangkan">
                <div class="relative h-64 bg-primary-900 overflow-hidden">
                    <img src="{{ asset('images/testimonials/mom_joy.jpg') }}"
                        alt="Video testimoni Ibu Sarah Wijaya, orang tua siswa kelas 5 SD, berbagi pengalaman tentang peningkatan prestasi akademik dan antusiasme belajar anak"
                        class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                    <button
                        class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                        onclick="openVideoModal('https://www.youtube.com/embed/q3G9i1O9yQg?si=FbyxgVpsSmY4UupX')">
                        <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                            <i class="fas fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </button>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold"></span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="font-headline font-bold text-xl mb-1">Mrs. Harnida Rouly</h3>
                        <p class="text-sm text-white/90">Parent of Jocelyn - Y9 Courage</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-text-secondary leading-relaxed line-clamp-2">
                        "Anak saya sangat cocok dengan kurikulum sekolah yang menggabungkan kurikulum wajib nasional
                        dengan
                        kurikulum
                        internasional IMYC, yang membuat pembelajaran menjadi menyenangkan dan tidak monoton melalui
                        proyek, praktikum, dan
                        presentasi."
                    </p>
                    <button
                        class="mt-4 text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                        data-title="Testimoni Ibu Sarah Wijaya">
                        <i class="fas fa-share-alt mr-2"></i>Share Testimonial
                    </button>
                </div>
            </div>

            <!-- Video Testimonial 3 -->
            <div class="card overflow-hidden group testimonial-item" data-level="sd"
                data-keywords="prestasi akademik pembelajaran menyenangkan">
                <div class="relative h-64 bg-primary-900 overflow-hidden">
                    <img src="{{ asset('images/testimonials/mom_amanda.jpg') }}"
                        alt="Video testimoni Ibu Sarah Wijaya, orang tua siswa kelas 5 SD, berbagi pengalaman tentang peningkatan prestasi akademik dan antusiasme belajar anak"
                        class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                    <button
                        class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                        onclick="openVideoModal('https://www.youtube.com/embed/L-piKMsJMN4?si=M2Qb1N_0-BPhKEkLhttps://www.youtube.com/embed/L-piKMsJMN4?si=U0AyTHgVuHYU5ill')">
                        <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                            <i class="fas fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </button>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold"></span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="font-headline font-bold text-xl mb-1">Mrs. Amelia Anggraeni</h3>
                        <p class="text-sm text-white/90">Parent of Amanda Nathania - Y9 Courage</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-text-secondary leading-relaxed line-clamp-2">
                        "Metode pembelajaran yang menyenangkan membuat anak saya sangat antusias belajar. Prestasi
                        akademiknya meningkat pesat!"
                    </p>
                    <button
                        class="mt-4 text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                        data-title="Testimoni Ibu Sarah Wijaya">
                        <i class="fas fa-share-alt mr-2"></i>Share Testimonial
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Written Testimonials Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="text-center">
            <h2 class="section-title">Written Testimonials</h2>
            <p class="section-subtitle mx-auto">
                Read detailed experiences from parents who have entrusted their children's education to us.
            </p>
        </div>

        <div class="space-y-8" id="testimonials-container">


            @foreach ($testimonies as $testimony)


            <div class="card p-8 testimonial-item" data-level="sma"
                data-keywords="kepemimpinan organisasi siswa pengembangan diri">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/testimonials/' . $testimony->photo) }}"
                            alt="Foto Ibu Maya Anggraini, orang tua siswa kelas 10 SMA, menceritakan pengembangan kepemimpinan anak melalui organisasi siswa"
                            class="w-24 h-24 rounded-full object-cover border-4 border-primary-100"
                            onerror="this.src='https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=200&h=200'; this.onerror=null;">
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-headline font-bold text-xl text-primary mb-1">{{ $testimony->parent_name
                                    }}
                                </h3>
                                <p class="text-text-secondary">Parent of {{ $testimony->student_name }} - {{
                                    $testimony->class }}
                                </p>
                            </div>
                            <div class="flex flex-col items-end">
                                <div class="flex text-accent mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star ml-1"></i>
                                    <i class="fas fa-star ml-1"></i>
                                    <i class="fas fa-star ml-1"></i>
                                    <i class="fas fa-star ml-1"></i>
                                </div>
                                <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-semibold">{{
                                    $testimony->unit }}</span>
                            </div>
                        </div>
                        <p class="text-text-secondary leading-relaxed mb-4">
                            {{
                            $testimony->testimonies }}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-text-secondary">
                                <i class="far fa-calendar mr-2"></i>{{
                                $testimony->academic_year }}
                            </span>
                            <button
                                class="text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                                data-title="Testimoni Ibu Maya Anggraini">
                                <i class="fas fa-share-alt mr-2"></i>Share Testimonial
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button onclick="loadMoreTestimonials()" class="btn btn-outline">
                <span>Load more testimonials</span>
                <i class="fas fa-chevron-down ml-2"></i>
            </button>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="card bg-gradient-to-r from-secondary to-secondary-700 text-white p-12 md:p-16 text-center">
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

<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
    <div class="relative w-full max-w-4xl">
        <button id="close-video"
            class="absolute -top-12 right-0 text-white text-4xl hover:text-accent transition-colors duration-300">
            <i class="fas fa-times"></i>
        </button>
        <div class="relative pt-[56.25%]">
            <iframe id="video-iframe" class="absolute inset-0 w-full h-full" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Share Modal -->
<div id="share-modal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-lg p-8 max-w-md w-full">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-2xl font-headline font-bold text-primary">Bagikan Testimoni</h3>
            <button id="close-share" class="text-text-secondary hover:text-primary text-2xl">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <p class="text-text-secondary mb-6">Bagikan testimoni ini melalui:</p>
        <div class="grid grid-cols-2 gap-4">
            <button class="btn btn-outline flex items-center justify-center" onclick="shareToFacebook()">
                <i class="fab fa-facebook-f mr-2"></i>Facebook
            </button>
            <button class="btn btn-outline flex items-center justify-center" onclick="shareToTwitter()">
                <i class="fab fa-twitter mr-2"></i>Twitter
            </button>
            <button class="btn btn-outline flex items-center justify-center" onclick="shareToWhatsApp()">
                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
            </button>
            <button class="btn btn-outline flex items-center justify-center" onclick="copyLink()">
                <i class="fas fa-link mr-2"></i>Salin Link
            </button>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div id="success-toast"
    class="fixed bottom-8 right-8 bg-success text-white px-6 py-4 rounded-lg shadow-elevated hidden items-center space-x-3 z-50">
    <i class="fas fa-check-circle text-2xl"></i>
    <span class="font-semibold">Testimoni berhasil dikirim!</span>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function loadMoreTestimonials() {

            Swal.fire({
                icon: 'success',
                title: 'Info',
                text: 'All testimonials have been loaded.',
                confirmButtonText: 'OK'
            });
}
</script>


@endsection