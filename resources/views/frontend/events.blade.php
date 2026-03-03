@extends('layouts.app')
@section('title', 'News & Circulars - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>News & Circulars</h1>
            <p>News and circular listing built on the existing events data model. No backend data shape changes.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>News & Circulars</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Updates" title="Latest Circulars and Notices">
        @if($events->count() > 0)
            <div class="news-list">
                @foreach($events as $event)
                    <article class="news-item">
                        <div class="news-date">
                            <strong>{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</strong>
                            <span>{{ \Carbon\Carbon::parse($event->event_date)->format('M Y') }}</span>
                        </div>

                        <div class="news-content">
                            <h3>{{ $event->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($event->description, 190) }}</p>
                            <div class="news-meta">
                                @if($event->category)
                                    <span class="pill">{{ $event->category }}</span>
                                @endif
                                @if($event->venue)
                                    <span class="pill">Venue: {{ $event->venue }}</span>
                                @endif
                                @if($event->event_time)
                                    <span class="pill">Time: {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <x-ui.button href="#" variant="outline" size="sm">No Attachment</x-ui.button>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($events->lastPage() > 1)
                <div class="pagination">
                    @for($i = 1; $i <= $events->lastPage(); $i++)
                        <a href="{{ $events->url($i) }}" class="{{ $events->currentPage() === $i ? 'active' : '' }}">{{ $i }}</a>
                    @endfor
                </div>
            @endif
        @else
            <div class="empty-state">
                <h3>No circulars yet</h3>
                <p>No circulars are published currently.</p>
            </div>
        @endif
    </x-ui.section-wrapper>
</main>
@endsection
