@extends('layouts.app')
@section('title', 'Awards & Achievements - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>Awards & Achievements</h1>
            <p>This page remains connected to existing awards data managed through admin CRUD.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Awards</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Recognition" title="Student and School Achievements">
        @if($years->count() > 0)
            <div class="gallery-tabs" style="margin-bottom: 1rem; display:flex; flex-wrap:wrap;">
                <button type="button" class="gallery-tab active" onclick="filterAwardYear('all', this)">All Years</button>
                @foreach($years as $year)
                    <button type="button" class="gallery-tab" onclick="filterAwardYear('{{ $year }}', this)">{{ $year }}</button>
                @endforeach
            </div>
        @endif

        @if($awards->count() > 0)
            <div class="ui-grid-3" id="award-grid">
                @foreach($awards as $award)
                    <article class="ui-card hover" data-award-year="{{ $award->year }}">
                        <h3 class="ui-card-title">{{ $award->title }}</h3>
                        <p class="ui-card-sub">{{ $award->year }}{{ $award->category ? ' - ' . $award->category : '' }}</p>
                        <p class="ui-card-text">{{ \Illuminate\Support\Str::limit($award->description, 180) }}</p>
                        @if($award->recipient_name)
                            <p class="ui-card-text"><strong>Recipient:</strong> {{ $award->recipient_name }}{{ $award->recipient_class ? ' (' . $award->recipient_class . ')' : '' }}</p>
                        @endif
                    </article>
                @endforeach
            </div>

            @if($awards->lastPage() > 1)
                <div class="pagination">
                    @for($i = 1; $i <= $awards->lastPage(); $i++)
                        <a href="{{ $awards->url($i) }}" class="{{ $awards->currentPage() === $i ? 'active' : '' }}">{{ $i }}</a>
                    @endfor
                </div>
            @endif
        @else
            <div class="empty-state">
                <h3>No awards listed yet</h3>
                <p>Awards will appear after admin updates.</p>
            </div>
        @endif
    </x-ui.section-wrapper>
</main>
@endsection

@push('scripts')
<script>
    function filterAwardYear(year, button) {
        document.querySelectorAll('[onclick^="filterAwardYear"]').forEach(function (btn) {
            btn.classList.remove('active');
        });
        button.classList.add('active');

        document.querySelectorAll('[data-award-year]').forEach(function (card) {
            if (year === 'all' || card.getAttribute('data-award-year') === year) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endpush
