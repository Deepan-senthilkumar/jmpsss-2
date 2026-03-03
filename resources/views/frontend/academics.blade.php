@extends('layouts.app')
@section('title', 'Academics - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>Academic Programme</h1>
            <p>CBSE curriculum structure with activity-based, learner-centered classroom practice.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Academics</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Curriculum" title="CBSE Curriculum Approach" description="Old-site curriculum text organized into clear sections.">
        <div class="ui-grid-2">
            <x-ui.card title="Curriculum" subtitle="Core approach" icon="AC" :hover="false">
                <p>The School follows the curriculum evolved by the Central Board of Secondary Education followed in India and many countries in Asia.</p>
                <p>The syllabus is constantly evolving and is regarded as one of the best among school programmes. The school also conducts literary competitions and activities to improve listening, speaking, reading and writing skills.</p>
                <p>Learning by doing forms a core principle in the academic approach so that learning is useful and meaningful beyond the classroom.</p>
            </x-ui.card>

            <x-ui.card title="Our Curriculum" subtitle="Primary foundation" icon="PF" :hover="false">
                <p>Sets clear learning objectives in English, Mathematics and Science for each year of primary education, with focus on core knowledge and skills.</p>
                <ul class="simple-list">
                    <li>Natural progression throughout primary years.</li>
                    <li>Compatible with other curriculum and sensitive to diverse needs.</li>
                    <li>Optional routes to match learner needs and international benchmarks.</li>
                </ul>
            </x-ui.card>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper eyebrow="Stages" title="Programme Stages" tone="soft">
        <div class="ui-grid-3">
            <x-ui.card title="KIDS" subtitle="Early years" icon="K1">
                <ul class="simple-list">
                    <li>Unparalleled quality education.</li>
                    <li>World class curriculum and infrastructure.</li>
                    <li>Technology based learning and comprehensive evaluation.</li>
                    <li>CCTV monitoring and trained staff.</li>
                </ul>
            </x-ui.card>

            <x-ui.card title="CHAMPS" subtitle="Middle stage" icon="C1">
                <ul class="simple-list">
                    <li>Curriculum on par with international standards.</li>
                    <li>Student-friendly activity-oriented approach.</li>
                    <li>Problem-solving and analytical activities.</li>
                    <li>Abacus and interactive sessions for confidence building.</li>
                </ul>
            </x-ui.card>

            <x-ui.card title="IIT & NEET" subtitle="Senior focus" icon="SN">
                <ul class="simple-list">
                    <li>Focused teacher-student ratio for core subjects.</li>
                    <li>Common schedule, teaching, exams and result analysis.</li>
                    <li>Concept strengthening and error rectification sessions.</li>
                    <li>Soft skill and project-based presentation development.</li>
                </ul>
            </x-ui.card>
        </div>
    </x-ui.section-wrapper>
</main>
@endsection
