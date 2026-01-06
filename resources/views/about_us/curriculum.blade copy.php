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
                    <i class="fas fa-award mr-2"></i>About Us / Curriculum
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                Curriculum
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


<!-- Video Testimonials Section -->
<section class="section bg-surface">
    <div class="container-custom">

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 mx-auto">
            <!-- Video Testimonial 1 -->
            <div class="card overflow-hidden group testimonial-item" data-level="sd"
                data-keywords="prestasi akademik pembelajaran menyenangkan">
                <div class="relative h-64 bg-primary-900 overflow-hidden">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e099ea7c-1765185682567.png"
                        alt="Video testimoni Ibu Sarah Wijaya, orang tua siswa kelas 5 SD, berbagi pengalaman tentang peningkatan prestasi akademik dan antusiasme belajar anak"
                        class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                    <button
                        class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                        onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                            <i class="fas fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </button>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">IPC</span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="font-headline font-bold text-xl mb-1">Ibu Sarah Wijaya</h3>
                        <p class="text-sm text-white/90">Orang Tua Siswa Kelas 5 SD</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-text-secondary leading-relaxed line-clamp-4">
                        The IPC encompasses Academic and Personal Learning, which supports students to flourish both
                        inside and outside of the
                        classroom, while its interconnected, global learning focus helps students build an understanding
                        of people from other
                        parts of the world.
                    </p>
                    <button
                        class="mt-4 text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                        data-title="Testimoni Ibu Sarah Wijaya">
                        <i class="fas fa-share-alt mr-2"></i>Share Video
                    </button>
                </div>
            </div>

            <!-- Video Testimonial 2 -->
            <div class="card overflow-hidden group" data-level="smp"
                data-keywords="fasilitas modern program stem teknologi">
                <div class="relative h-64 bg-primary-900 overflow-hidden">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e7e64caf-1765185679496.png"
                        alt="Video testimoni Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP, menjelaskan dampak positif program STEM dan fasilitas modern terhadap minat sains anak"
                        class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                        onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                    <button
                        class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                        onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                            <i class="fas fa-play text-white text-2xl ml-1"></i>
                        </div>
                    </button>
                    <div class="absolute top-4 right-4">
                        <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-semibold">IMYC</span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="font-headline font-bold text-xl mb-1">International Middle Years Curriculum</h3>
                        <p class="text-sm text-white/90">The International Middle Years Curriculum (IMYC) engages
                            learners aged 11-14-year-olds</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-text-secondary leading-relaxed line-clamp-3">
                        As the final stage of the International Curriculum, the IMYC incorporates the latest educational
                        research and evidence
                        to ensure it remains at the forefront of learning design for international education.
                    </p>
                    <button
                        class="mt-4 text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                        data-title="Testimoni Bapak Ahmad Hidayat">
                        <i class="fas fa-share-alt mr-2"></i>Share Video
                    </button>
                </div>
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



<script>
    // Reset Filter
    resetFilter.addEventListener('click', () => {
    searchInput.value = '';
    filterBtns.forEach(b => b.classList.remove('active'));
    filterBtns[0].classList.add('active');

    testimonialItems.forEach(item => {
    item.style.display = '';
    item.style.opacity = '1';
    item.style.transform = 'translateY(0)';
    });
    });

    // Video Modal
    const videoModal = document.getElementById('video-modal');
    const videoIframe = document.getElementById('video-iframe');
    const closeVideo = document.getElementById('close-video');

    function openVideoModal(videoUrl) {
    videoIframe.src = videoUrl;
    videoModal.classList.remove('hidden');
    videoModal.classList.add('flex');
    document.body.style.overflow = 'hidden';
    }

    closeVideo.addEventListener('click', () => {
    videoModal.classList.add('hidden');
    videoModal.classList.remove('flex');
    videoIframe.src = '';
    document.body.style.overflow = '';
    });

    videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
    closeVideo.click();
    }
    });

    // Share Modal
    const shareModal = document.getElementById('share-modal');
    const closeShare = document.getElementById('close-share');
    const shareBtns = document.querySelectorAll('.share-btn');
    let currentShareTitle = '';

    shareBtns.forEach(btn => {
    btn.addEventListener('click', () => {
    currentShareTitle = btn.dataset.title;
    shareModal.classList.remove('hidden');
    shareModal.classList.add('flex');
    document.body.style.overflow = 'hidden';
    });
    });

    closeShare.addEventListener('click', () => {
    shareModal.classList.add('hidden');
    shareModal.classList.remove('flex');
    document.body.style.overflow = '';
    });

    shareModal.addEventListener('click', (e) => {
    if (e.target === shareModal) {
    closeShare.click();
    }
    });

    // Share Functions
    function shareToFacebook() {
    const url = encodeURIComponent(window.location.href);
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
    }

    function shareToTwitter() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent(currentShareTitle);
    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank');
    }

    function shareToWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent(currentShareTitle);
    window.open(`https://wa.me/?text=${text}%20${url}`, '_blank');
    }

    function copyLink() {
    navigator.clipboard.writeText(window.location.href).then(() => {
    showToast();
    closeShare.click();
    });
    }
</script>


@endsection
