@extends('layouts.app')
@section('title', 'Gallery - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>Gallery</h1>
            <p>Photo and video gallery view powered by existing gallery uploads.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Gallery</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Media" title="Photos and Videos">
        <x-ui.gallery-grid :photos="$photos" :videos="$videos" :showControls="true" />

        @if($photos->lastPage() > 1)
            <div style="margin-top: 1rem;">
                <p class="section-desc" style="margin:0 0 0.5rem 0;">Photo pages</p>
                <div class="pagination">
                    @for($i = 1; $i <= $photos->lastPage(); $i++)
                        <a href="{{ $photos->url($i) }}" class="{{ $photos->currentPage() === $i ? 'active' : '' }}">{{ $i }}</a>
                    @endfor
                </div>
            </div>
        @endif

        @if($videos->lastPage() > 1)
            <div style="margin-top: 1rem;">
                <p class="section-desc" style="margin:0 0 0.5rem 0;">Video pages</p>
                <div class="pagination">
                    @for($i = 1; $i <= $videos->lastPage(); $i++)
                        <a href="{{ $videos->url($i) }}" class="{{ $videos->currentPage() === $i ? 'active' : '' }}">{{ $i }}</a>
                    @endfor
                </div>
            </div>
        @endif
    </x-ui.section-wrapper>
</main>
@endsection
