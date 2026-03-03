@php
    $safeRoute = function (string $name, string $fallback) {
        return \Illuminate\Support\Facades\Route::has($name) ? route($name) : $fallback;
    };

    $links = [
        ['label' => 'Home', 'url' => $safeRoute('home', '/'), 'active' => request()->routeIs('home')],
        [
            'label' => 'About',
            'url' => $safeRoute('about', route('home') . '#about'),
            'active' => request()->routeIs('about'),
        ],
        [
            'label' => 'Academics',
            'url' => $safeRoute('academics', route('home') . '#academics'),
            'active' => request()->routeIs('academics'),
        ],
        [
            'label' => 'Facilities',
            'url' => $safeRoute('facilities', route('home') . '#facilities'),
            'active' => request()->routeIs('facilities'),
        ],
        [
            'label' => 'Admissions',
            'url' => $safeRoute('admissions', route('home') . '#admissions'),
            'active' => request()->routeIs('admissions'),
        ],
        ['label' => 'Gallery', 'url' => $safeRoute('gallery', '/gallery'), 'active' => request()->routeIs('gallery')],
        [
            'label' => 'Contact',
            'url' => $safeRoute('contact', route('home') . '#contact'),
            'active' => request()->routeIs('contact'),
        ],
    ];
@endphp

<header class="ribbon-header" id="main-nav">
    <div class="ribbon-container">
        <!-- Left Side: Navy Ribbon with Logo -->
        <div class="ribbon-left">
            <a href="{{ route('home') }}" class="ribbon-logo">
                <img src="{{ asset('assets/logo.png') }}" alt="School Logo">
            </a>
            <div class="ribbon-diagonal"></div>
        </div>

        <!-- Right Side: White Area with Navigation -->
        <div class="ribbon-right">
            <nav class="ribbon-nav">
                <ul class="nav-menu">
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="{{ $link['active'] ? 'active' : '' }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="nav-action">
                    <x-ui.button href="{{ $safeRoute('admissions', route('home') . '#admissions') }}" variant="navy"
                        size="md" class="apply-btn">
                        Apply Now
                    </x-ui.button>
                </div>

                <button type="button" class="mobile-toggle" id="mobile-nav-toggle" aria-label="Toggle menu">
                    <div class="hamburger">
                        <span></span><span></span><span></span>
                    </div>
                </button>
            </nav>
        </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-overlay" id="mobile-nav">
        <div class="mobile-menu-container">
            @foreach ($links as $link)
                <a href="{{ $link['url'] }}" class="{{ $link['active'] ? 'active' : '' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <x-ui.button href="{{ $safeRoute('admissions', route('home') . '#admissions') }}" variant="navy"
                size="md">
                Apply Now
            </x-ui.button>
        </div>
    </div>
</header>
