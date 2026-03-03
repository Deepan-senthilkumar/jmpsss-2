@php
    $safeRoute = function (string $name, string $fallback) {
        return \Illuminate\Support\Facades\Route::has($name) ? route($name) : $fallback;
    };
@endphp

<footer class="footer" id="main-footer">
    <div class="site-container">
        <div class="footer-grid">
            <section class="footer-brand">
                <div class="footer-logo-box">
                    <img src="{{ asset('assets/footer-logo.png') }}" alt="Jeeva Memorial Senior Secondary School Logo"
                        class="brand-logo">
                </div>
                <p class="footer-text">At JEEVA MEMORIAL SENIOR SECONDARY SCHOOL, we give students a wide range of
                    options in their education and career. As a not-for-profit organization, we devote our resources to
                    delivering high-quality educational programmes.</p>
            </section>

            <section>
                <h4 class="footer-title">Explore</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ $safeRoute('about', route('home') . '#about') }}">About Institution</a></li>
                    <li><a href="{{ $safeRoute('academics', route('home') . '#academics') }}">Academics</a></li>
                    <li><a href="{{ $safeRoute('gallery', '/gallery') }}">Gallery</a></li>
                    <li><a href="{{ $safeRoute('contact', route('home') . '#contact') }}">Contact Us</a></li>
                </ul>
            </section>

            <section>
                <h4 class="footer-title">Governance</h4>
                <ul class="footer-links">
                    <li><a href="{{ $safeRoute('mandatory-disclosure', route('home') . '#mandatory-disclosure') }}">Mandatory
                            Disclosure</a></li>
                    <li><a href="{{ $safeRoute('admissions', route('home') . '#admissions') }}">Admissions</a></li>
                    <li><a href="{{ route('events') }}">Events & News</a></li>
                    <li><a href="{{ route('admin.login') }}">Admin Portal</a></li>
                </ul>
            </section>

            <section>
                <h4 class="footer-title">Reach Us</h4>
                <ul class="footer-links" style="line-height: 1.5;">
                    <li><strong>Campus:</strong> No.210, Palla Egai Village, Puliur Post, Thirukazhukundram T.K,
                        Kancheepuram Dist, Pin-603 109.</li>
                    <li><strong>Phone:</strong> +91-89392 22122, +91-73734 18852</li>
                    <li><strong>Email:</strong> <a
                            href="mailto:jeevamemorialschool@gmail.com">jeevamemorialschool@gmail.com</a></li>
                </ul>
            </section>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Jeeva Memorial Senior Secondary School. All Rights Reserved.</span>
            <span>Affiliation No: 1930806 | CBSE, New Delhi</span>
        </div>
    </div>
</footer>
