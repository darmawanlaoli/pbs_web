@extends('layout')

@section('content')


<body class="bg-background">
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

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
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
                            onclick="openVideoModal('https://www.youtube.com/embed/dcZyRnziH4o?si=l6VFFWqDmGPKU--u')">
                            <div
                                class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                                <i class="fas fa-play text-white text-2xl ml-1"></i>
                            </div>
                        </button>
                        <div class="absolute top-4 right-4">
                            <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">IPC</span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="font-headline font-bold text-xl mb-1">International Primary Curriculum (IPC)</h3>
                            <p class="text-sm text-white/90">The IPC is the International Primary Curriculum for
                                children aged 5 to 11 years old</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-text-secondary leading-relaxed line-clamp-3">
                            The IPC encompasses Academic and Personal Learning, which supports students to flourish both
                            inside and outside of the
                            classroom, while its interconnected, global learning focus helps students build an
                            understanding of people from other
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
                <div class="card overflow-hidden group testimonial-item" data-level="smp"
                    data-keywords="fasilitas modern program stem teknologi">
                    <div class="relative h-64 bg-primary-900 overflow-hidden">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e7e64caf-1765185679496.png"
                            alt="Video testimoni Bapak Ahmad Hidayat, orang tua siswa kelas 8 SMP, menjelaskan dampak positif program STEM dan fasilitas modern terhadap minat sains anak"
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300"
                            onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=800'; this.onerror=null;">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-900/90 to-transparent"></div>
                        <button
                            class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300"
                            onclick="openVideoModal('https://www.youtube.com/embed/cvLEfj1ZNSU?si=Vx63FWXBO75i8fSb')">
                            <div
                                class="w-20 h-20 bg-accent rounded-full flex items-center justify-center shadow-elevated">
                                <i class="fas fa-play text-white text-2xl ml-1"></i>
                            </div>
                        </button>
                        <div class="absolute top-4 right-4">
                            <span
                                class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-semibold">IMYC</span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="font-headline font-bold text-xl mb-1">International Middle Years Curriculum</h3>
                            <p class="text-sm text-white/90">The International Middle Years Curriculum (IMYC) engages
                                learners aged 11-14-year-olds</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-text-secondary leading-relaxed line-clamp-3">
                            As the final stage of the International Curriculum, the IMYC incorporates the latest
                            educational
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

    <!-- Share Modal -->
    <div id="share-modal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-headline font-bold text-primary">Share Video</h3>
                <button id="close-share" class="text-text-secondary hover:text-primary text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
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

        // Filter Functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const testimonialItems = document.querySelectorAll('.testimonial-item');
        const searchInput = document.getElementById('search-input');
        const resetFilter = document.getElementById('reset-filter');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                testimonialItems.forEach(item => {
                    if (filter === 'all' || item.dataset.level === filter) {
                        item.style.display = '';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Search Functionality
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();

            testimonialItems.forEach(item => {
                const keywords = item.dataset.keywords.toLowerCase();
                const text = item.textContent.toLowerCase();

                if (keywords.includes(searchTerm) || text.includes(searchTerm)) {
                    item.style.display = '';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });

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

        // Rating System
        const ratingStars = document.querySelectorAll('.rating-stars i');
        const ratingValue = document.getElementById('rating-value');
        const ratingText = document.getElementById('rating-text');

        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = star.dataset.rating;
                ratingValue.value = rating;

                ratingStars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('far');
                        s.classList.add('fas');
                        s.classList.add('text-accent');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                        s.classList.remove('text-accent');
                    }
                });

                const ratingTexts = ['Sangat Buruk', 'Buruk', 'Cukup', 'Baik', 'Sangat Baik'];
                ratingText.textContent = ratingTexts[rating - 1];
            });

            star.addEventListener('mouseenter', () => {
                const rating = star.dataset.rating;
                ratingStars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('text-accent');
                    }
                });
            });

            star.addEventListener('mouseleave', () => {
                const currentRating = ratingValue.value;
                ratingStars.forEach((s, index) => {
                    if (index >= currentRating) {
                        s.classList.remove('text-accent');
                    }
                });
            });
        });

        // Form Submission
        const testimonialForm = document.getElementById('testimonial-form');

        testimonialForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Simulate form submission
            setTimeout(() => {
                showToast();
                testimonialForm.reset();
                ratingStars.forEach(s => {
                    s.classList.remove('fas', 'text-accent');
                    s.classList.add('far');
                });
                ratingText.textContent = 'Pilih rating';
                ratingValue.value = '';
            }, 1000);
        });

        // Success Toast
        function showToast() {
            const toast = document.getElementById('success-toast');
            toast.classList.remove('hidden');
            toast.classList.add('flex');

            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 3000);
        }

        // Load More Functionality
        const loadMoreBtn = document.getElementById('load-more-btn');
        let isLoading = false;

        loadMoreBtn.addEventListener('click', () => {
            if (isLoading) return;

            isLoading = true;
            loadMoreBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memuat...';

            setTimeout(() => {
                // Simulate loading more testimonials
                loadMoreBtn.innerHTML = '<span>Muat Lebih Banyak Testimoni</span><i class="fas fa-chevron-down ml-2"></i>';
                isLoading = false;

                // In a real application, you would load more testimonials here
                alert('Semua testimoni telah dimuat!');
            }, 1500);
        });

        // Add CSS for filter buttons
        const style = document.createElement('style');
        style.textContent = `
            .filter-btn {
                padding: 0.5rem 1rem;
                border-radius: 0.5rem;
                border: 1px solid var(--color-border);
                background: white;
                color: var(--color-text-primary);
                font-weight: 600;
                font-size: 0.875rem;
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .filter-btn:hover {
                border-color: var(--color-primary);
                color: var(--color-primary);
            }

            .filter-btn.active {
                background: var(--color-primary);
                color: white;
                border-color: var(--color-primary);
            }

            .testimonial-item {
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

            .line-clamp-3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);
    </script>
    <script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>

</html>


@endsection