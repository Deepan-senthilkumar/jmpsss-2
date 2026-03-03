@extends('layouts.app')
@section('title', 'Contact - Jeeva Memorial Senior Secondary School')

@section('content')
@php
    $mapEmbed = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4630.230998769819!2d80.06529276648273!3d12.612233857675403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1509246223320';
@endphp

<main class="page-shell">
    <div class="site-container">
        <section class="page-hero">
            <h1>Contact</h1>
            <p>Reach the school office for admissions, academics and general enquiries.</p>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Contact</span>
            </div>
        </section>
    </div>

    <x-ui.section-wrapper eyebrow="Reach Us" title="School Contact Details">
        <div class="ui-grid-2">
            <div class="contact-block">
                <ul class="contact-lines">
                    <li><strong>Address</strong><br>No.210, Palla Egai Village, Puliur Post,<br>Thirukazhukundram T.K., Kancheepuram District,<br>Pin - 603 109</li>
                    <li><strong>Phone</strong><br>+91-89392 22122<br>+91-73734 18852<br>+91-91503 17496<br>+91-44-2954 0474</li>
                    <li><strong>Email</strong><br><a href="mailto:jeevamemorialschool@gmail.com">jeevamemorialschool@gmail.com</a></li>
                </ul>
            </div>

            <div class="contact-block">
                <iframe class="map-frame" loading="lazy" src="{{ $mapEmbed }}" allowfullscreen title="Jeeva Memorial School map"></iframe>
            </div>
        </div>
    </x-ui.section-wrapper>

    <x-ui.section-wrapper id="enquiry" eyebrow="Enquiry" title="Admission / General Enquiry" tone="soft">
        <div class="contact-block">
            <p class="section-desc" style="margin:0 0 1rem 0;">Use this enquiry form to draft an email quickly to the school office.</p>
            <form action="mailto:jeevamemorialschool@gmail.com" method="post" enctype="text/plain" class="ui-grid-2">
                <label>
                    Name
                    <input type="text" name="name" required style="width:100%; margin-top:0.3rem; padding:0.65rem; border-radius:10px; border:1px solid var(--surface-300); background:var(--surface-0);">
                </label>
                <label>
                    Email
                    <input type="email" name="email" required style="width:100%; margin-top:0.3rem; padding:0.65rem; border-radius:10px; border:1px solid var(--surface-300); background:var(--surface-0);">
                </label>
                <label>
                    Phone
                    <input type="text" name="phone" style="width:100%; margin-top:0.3rem; padding:0.65rem; border-radius:10px; border:1px solid var(--surface-300); background:var(--surface-0);">
                </label>
                <label>
                    Subject
                    <input type="text" name="subject" style="width:100%; margin-top:0.3rem; padding:0.65rem; border-radius:10px; border:1px solid var(--surface-300); background:var(--surface-0);">
                </label>
                <label style="grid-column:1 / -1;">
                    Message
                    <textarea name="message" rows="5" required style="width:100%; margin-top:0.3rem; padding:0.65rem; border-radius:10px; border:1px solid var(--surface-300); background:var(--surface-0);"></textarea>
                </label>

                <div style="grid-column:1 / -1;">
                    <x-ui.button type="submit" variant="secondary">Send Enquiry</x-ui.button>
                </div>
            </form>
        </div>
    </x-ui.section-wrapper>
</main>
@endsection
