<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Jeeva Memorial Senior Secondary School - CBSE curriculum, holistic learning and student development.">
    <title>@yield('title', 'Jeeva Memorial Senior Secondary School')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/tab.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend.css') }}">

    @stack('styles')
</head>
@php
    $hideChrome = trim($__env->yieldContent('hide_chrome')) === '1';
@endphp

<body class="@yield('body_class')">
    @unless ($hideChrome)
        <x-ui.navbar />
    @endunless

    @if (!$hideChrome && (session('success') || session('error')))
        <div class="flash-wrap" id="flash-wrap">
            @if (session('success'))
                <div class="flash success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="flash error">{{ session('error') }}</div>
            @endif
        </div>
    @endif

    @yield('content')

    @unless ($hideChrome)
        <x-ui.footer />
    @endunless

    <script>
        (function() {
            const toggleBtn = document.getElementById('mobile-nav-toggle');
            const mobileNav = document.getElementById('mobile-nav');
            const mainNav = document.getElementById('main-nav');

            if (toggleBtn && mobileNav) {
                toggleBtn.addEventListener('click', function() {
                    mobileNav.classList.toggle('open');
                    toggleBtn.classList.toggle('active');
                    document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
                });
            }

            window.addEventListener('scroll', function() {
                if (window.scrollY > 20) {
                    mainNav.classList.add('scrolled');
                } else {
                    mainNav.classList.remove('scrolled');
                }
            });

            document.querySelectorAll('.js-gallery-tabs').forEach(function(gallery) {
                const tabs = gallery.querySelectorAll('[data-gallery-tab]');
                const panels = gallery.querySelectorAll('[data-gallery-panel]');

                tabs.forEach(function(tab) {
                    tab.addEventListener('click', function() {
                        const target = tab.getAttribute('data-gallery-tab');
                        tabs.forEach(function(item) {
                            item.classList.remove('active');
                        });
                        panels.forEach(function(panel) {
                            panel.classList.remove('active');
                        });

                        tab.classList.add('active');
                        const panel = gallery.querySelector('[data-gallery-panel="' + target +
                            '"]');
                        if (panel) panel.classList.add('active');
                    });
                });
            });

            setTimeout(function() {
                const flashWrap = document.getElementById('flash-wrap');
                if (!flashWrap) return;
                flashWrap.style.transition = 'opacity 0.3s ease';
                flashWrap.style.opacity = '0';
                setTimeout(function() {
                    flashWrap.remove();
                }, 320);
            }, 3500);
        })();
    </script>

    @stack('scripts')
</body>

</html>
