@extends('layouts.app')
@section('title', 'About - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>About Jeeva Memorial Senior Secondary School</h1>
            <p>Learn about our school vision, values and student-first learning environment.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>About</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="School" title="Who We Are" description="From the old About page.">
        <div class="ui-grid-2">
            <div class="contact-block">
                <img src="{{ asset('assets/home/about-campus.jpg') }}" alt="About Jeeva Memorial School" style="width:100%; border-radius:14px; border:1px solid var(--surface-300);">
            </div>

            <x-ui.card title="About the School" subtitle="CBSE Pattern" icon="AB" :hover="false">
                <p>The School offers education under CBSE pattern. The School offers co-education from Pre. K.G. to X Std. Love, sharing and caring are keynotes of the relationships in the School.</p>
                <p>The School is a home where each one lives for the other and all of them live for God. These integral values are inter-linked with the school curriculum.</p>
                <p>Comfortable staff rooms, a language lab, a computer lab, dance room, art room and an audio visual room contribute to the learning experience during vital years of growth.</p>
            </x-ui.card>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper eyebrow="Care" title="Student Safety and Growth" tone="soft">
        <div class="ui-grid-2">
            <x-ui.card title="Child-Centered Environment" subtitle="Learning and wellbeing" icon="CH">
                <p>The kindergarten classrooms are equipped with a wide array of materials that facilitate play-way learning and daily engagement in school.</p>
            </x-ui.card>

            <x-ui.card title="Safety Focus" subtitle="Supervised campus" icon="SF">
                <p>JMPS provides a safe environment during school hours, with trained support staff and teachers. Lawns, play areas and campus construction are designed for child comfort and safety.</p>
            </x-ui.card>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper eyebrow="Foundation" title="Jeeva Memorial Trust" description="Source text from old site footer.">
        <div class="contact-block">
            <p class="section-desc" style="margin:0;">JEEVA MEMORIAL TRUST, founded by Mr. G.K. Babu, in the memory of his beloved son Jeevakumar, is the source of inspiration for a model school in Thirukazhukundram. It is the outcome of inspiration.</p>
        </div>
    </x-ui.section-wrapper>
</main>
@endsection
