@extends('layouts.app')
@section('title', 'Admissions - Jeeva Memorial Senior Secondary School')

@section('content')
<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>Admissions</h1>
            <p>Admission information page prepared for easy updates. No fee values are shown until officially published.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Admissions</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Process" title="How to Apply">
        <div class="ui-grid-3">
            <x-ui.card title="Step 1" subtitle="Enquiry" icon="01">
                <p>Contact the school office by phone or email to confirm class availability and application window details.</p>
            </x-ui.card>
            <x-ui.card title="Step 2" subtitle="Application Form" icon="02">
                <p>Collect or request the admission form and complete all required parent/student information fields.</p>
            </x-ui.card>
            <x-ui.card title="Step 3" subtitle="Submission" icon="03">
                <p>Submit the completed form with supporting documents to the school office for review.</p>
            </x-ui.card>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper eyebrow="Eligibility" title="Eligibility Criteria" tone="soft">
        <div class="contact-block">
            <ul class="simple-list">
                <li>Class-wise eligibility and age guidelines: <strong>To be updated by school administration.</strong></li>
                <li>Transfer admission requirements (if applicable): <strong>To be updated by school administration.</strong></li>
                <li>Admission timeline and seat availability: <strong>To be updated by school administration.</strong></li>
            </ul>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper eyebrow="Documents" title="Documents Required">
        <div class="ui-grid-2">
            <x-ui.card title="Student Documents" subtitle="Generic list" icon="SD" :hover="false">
                <ul class="simple-list">
                    <li>Birth certificate copy</li>
                    <li>Previous class mark sheet / progress record</li>
                    <li>Transfer certificate (where applicable)</li>
                    <li>Passport-size photographs</li>
                </ul>
            </x-ui.card>

            <x-ui.card title="Parent / Guardian" subtitle="Generic list" icon="PD" :hover="false">
                <ul class="simple-list">
                    <li>Address proof</li>
                    <li>Identity proof</li>
                    <li>Contact details for emergency communication</li>
                    <li>Additional declarations (if requested by school)</li>
                </ul>
            </x-ui.card>
        </div>

        <div style="margin-top: 1rem;" id="enquiry">
            <x-ui.button href="{{ route('contact') }}#enquiry" variant="secondary" size="lg">Send Admission Enquiry</x-ui.button>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper tone="warm">
        <div class="notice-chip">Fee structure details will be published only through official school updates.</div>
    </x-ui.section-wrapper>
</main>
@endsection
