@extends('layout')

@section('content')

<section class="relative bg-gradient-to-br from-primary to-primary-900 text-white py-20 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6">
                <span class="bg-accent text-white px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-graduation-cap mr-2"></i>Media / Articles
                </span>
            </div>
            <h1 class="text-white mb-6 font-headline leading-tight">
                News & Articles
            </h1>
            <p class="text-white/90 text-xl leading-relaxed mb-8">
                Find the latest news, insightful articles, and updates about Peachblossoms School. Stay informed about
                our
                achievements, events, and educational initiatives that shape our vibrant community.
            </p>

        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="card bg-gradient-to-r from-primary to-secondary text-white p-12 md:p-16 text-center">
            <h2 class="text-3xl md:text-4xl font-headline font-bold mb-6">
                Coming Soon
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto text-white/90">
                This feature is currently under development. It will be available in an upcoming update.
            </p>

        </div>
    </div>

</section>


@endsection