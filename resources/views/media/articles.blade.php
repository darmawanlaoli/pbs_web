@extends('layout')

@section('content')

<style>
    .font-headline:hover {
        color: darkblue;
    }
</style>

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

<div class="container mx-auto px-4 py-12">

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($articles as $article)
        <a href="{{ route('articles.show', $article->slug) }}"
            class="card group overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-elevated">
            <div class="relative h-48 overflow-hidden">
                <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}"
                    onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop'; this.onerror=null;">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4">
                    <p class="text-white/90 text-sm text"> <i class="bi bi-calendar-week"></i> {{
                        $article->created_at->format('d M, Y') }}</p>
                </div>
            </div>
            <div class="p-6">
                <h3 class="font-headline font-bold text-2xl mb-2">{{ $article->title }}</h3>
                <p class="text-text-secondary mb-4">
                    {{ $article->excerpt }}
                </p>
                <div class="flex items-center text-primary font-semibold">
                    <span>Read More...</span>
                    <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-2"></i>
                </div>
            </div>
        </a>

        @endforeach
    </div>

</div>


@endsection