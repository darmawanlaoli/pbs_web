@extends('layout')

@section('content')


<body class="bg-background">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary to-primary-900 text-white py-20 md:py-28 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block mb-6">
                    <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fas fa-image mr-2"></i>Media / Image Gallery
                    </span>
                </div>
                <h1 class="text-white mb-6 font-headline leading-tight">
                    Image Gallery
                </h1>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="section bg-white py-8 sticky top-20 z-40 shadow-subtle">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <!-- Search Bar -->
                <div class="w-full md:w-96">
                    <div class="relative">
                        <input type="text" id="search-input" placeholder="Search..." class="form-input pl-12 pr-4">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-text-secondary"></i>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-sm font-semibold text-text-secondary">Filter:</span>
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-th mr-2"></i>All
                    </button>
                    <button class="filter-btn" data-filter="sd">
                        <i class="fas fa-child mr-2"></i>Preschool & Kindergarten
                    </button>
                    <button class="filter-btn" data-filter="smp">
                        <i class="fas fa-user-graduate mr-2"></i>Primary School
                    </button>
                    <button class="filter-btn" data-filter="sma">
                        <i class="fas fa-graduation-cap mr-2"></i>High School
                    </button>
                    <button id="reset-filter" class="text-sm text-primary hover:text-primary-700 font-semibold">
                        <i class="fas fa-redo mr-1"></i>Reset
                    </button>
                </div>
            </div>
        </div>
    </section>



    <!-- Written Testimonials Section -->
    <section class="section bg-white">
        <div class="container-custom">

            <div class="space-y-8" id="testimonials-container">

                @foreach ($galleries as $gallery)


                <!-- Testimonial Card 1 -->
                <div class="card p-8 testimonial-item" data-level="sd"
                    data-keywords="karakter kepedulian guru metode pembelajaran">
                    <div class="flex flex-col md:flex-row gap-6">

                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="font-headline font-bold text-xl text-primary mb-1">{{ $gallery->album }}
                                    </h3>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                                        @if ($gallery->unit == 'Kinder')
                                        Preschool & Kindergarten

                                        @elseif ($gallery->unit == 'High School')
                                        High School
                                        @elseif ($gallery->unit == 'Primary')
                                        Primary School
                                        @endif

                                    </span>
                                </div>
                            </div>
                            <p class="text-text-secondary leading-relaxed mb-4">
                                {{ $gallery->description }}
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-text-secondary">
                                    <a href="{{ $gallery->link }}" class="btn btn-secondary">Explore</a>
                                </span>
                                <button
                                    class="text-primary font-semibold text-sm hover:text-primary-700 transition-colors duration-300 share-btn"
                                    data-title="Testimoni Ibu Ratna Sari">
                                    <i class="fas fa-share-alt mr-2"></i>Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section>

    @endsection