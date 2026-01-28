@extends('layout')

@section('title', $article->title)

@section('og_title', $article->title)
@section('og_description', Str::limit(strip_tags($article->content), 150))
@section('og_image', asset('images/' . $article->image))

@section('content')

<div class="article-container">
    <nav class="breadcrumb">
        <a href="/">Home</a> / <a href="/articles">Berita</a> / <span>Detail</span>
    </nav>

    <div class="main-wrapper">
        <main class="content-area">
            <article class="article-card">
                <h1 class="article-title">{{ $article->title }}</h1>

                <div class="article-meta">
                    <div class="author-avatar">
                        <img src="{{ asset('images/logo.webp') }}" alt="">
                    </div>
                    <div class="meta-info">
                        <span class="author-name">Written by Darmawan Laoli</span>
                        <span class="publish-date">{{ $article->created_at->format('d M Y') }}</span>
                    </div>
                </div>

                @if($article->image)
                <div class="featured-image">
                    <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}">
                </div>
                @endif

                <div class="article-body mb-5">
                    {!! $article->content !!}
                </div>

                <div class="share-section">
                    <p>Bagikan artikel ini:</p>
                    <div class="share-buttons">
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}"
                            target="_blank" class="btn-wa">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="#" class="btn-fb"><i class="bi bi-facebook"></i> Facebook</a>
                    </div>
                </div>
            </article>

            <section class="comment-section mt-5">
                <h4>Comment</h4>
                <textarea class="form-input mt-3" placeholder="Tulis komentar..."></textarea>
                <button class="btn btn-primary">Submit</button>
            </section>
        </main>

        <aside class="sidebar">
            <h3 class="sidebar-title">Berita Terbaru</h3>
            <div class="recommendation-list">
                @foreach($recommendations as $rec)
                <a href="{{ route('articles.show', $rec->slug) }}" class="rec-item">
                    <img src="{{ asset('images/' . $rec->image) }}" alt="">
                    <div class="rec-text">
                        <h4>{{ Str::limit($rec->title, 50) }}</h4>
                        <span>{{ $rec->created_at->diffForHumans() }}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </aside>
    </div>
</div>

<style>
    /* Layout Dasar */
    .article-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
    }

    .breadcrumb {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }

    .breadcrumb a {
        text-decoration: none;
        color: #007bff;
    }

    /* Grid System */
    .main-wrapper {
        display: grid;
        grid-template-columns: 1fr;
        /* Default Mobile */
        gap: 30px;
    }

    @media (min-width: 992px) {
        .main-wrapper {
            grid-template-columns: 8fr 3fr;
            /* 2 Kolom di Desktop */
        }
    }

    /* Card Artikel */
    .article-card {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .article-title {
        font-size: 2.5rem;
        color: #1a1a1a;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    /* Meta Data Penulis */
    .article-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .author-avatar {
        width: 45px;
        height: 45px;
        background: #007bff;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .meta-info span {
        display: block;
    }

    .author-name {
        font-weight: 600;
    }

    .publish-date {
        font-size: 13px;
        color: #888;
    }

    /* Media */
    .featured-image img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        margin-bottom: 25px;
    }

    /* Body Teks */
    .article-body {
        line-height: 1.8;
        color: #444;
        font-size: 1.1rem;
    }

    /* Sidebar Sticky */
    .sidebar {
        position: sticky;
        top: 20px;
        height: fit-content;
    }

    .sidebar-title {
        border-left: 4px solid #007bff;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    .rec-item {
        display: flex;
        gap: 12px;
        text-decoration: none;
        color: inherit;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .rec-item:hover {
        opacity: 0.7;
    }

    .rec-item img {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        object-fit: cover;
    }

    .rec-text h4 {
        margin: 0;
        font-size: 14px;
        line-height: 1.4;
    }

    .rec-text span {
        font-size: 12px;
        color: #999;
    }

    /* Buttons */
    .share-buttons {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .btn-wa {
        background: #25d366;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .btn-fb {
        background: #1877f2;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
    }
</style>


@endsection