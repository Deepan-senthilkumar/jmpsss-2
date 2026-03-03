<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jeeva Memorial Public School</title>
    <link rel="icon" type="image/png" href="{{ asset('images/new/tab.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/new/logo.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #007c40;
            --primary-deep: #004800;
            --accent: #e13732;
            --ink: #102414;
            --muted: #6c7a92;
            --bg: #f4faf6;
            --white: #ffffff;
            --line: #dde6f5;
            --radius: 14px;
            --shadow: 0 10px 24px rgba(10, 35, 88, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            color: var(--ink);
            background: var(--bg);
            line-height: 1.45;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1280px, calc(100% - 120px));
            margin-inline: auto;
        }

        .btn {
            border: 0;
            border-radius: 8px;
            padding: 12px 18px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            position: relative;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            text-decoration: none;
        }

        .btn::before {
            content: "";
            position: absolute;
            top: -1px;
            bottom: -1px;
            left: -42%;
            width: 38%;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.45), rgba(255, 255, 255, 0));
            transform: skewX(-18deg);
            transition: left 0.45s ease;
            pointer-events: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 16px rgba(0, 0, 0, 0.14);
            text-decoration: none;
        }

        .btn:hover::before {
            left: 118%;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-accent {
            background: var(--accent);
            color: #fff;
        }

        .btn-outline {
            border: 1px solid #c9d8f3;
            background: #fff;
            color: var(--ink);
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 50;
            background: #ffffff;
            border-bottom: 1px solid #d8e8de;
            box-shadow: 0 8px 18px rgba(0, 55, 24, 0.08);
        }

        .topbar::before {
            content: "";
            display: block;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--accent), var(--primary));
            background-size: 200% 100%;
            animation: ribbonFlow 6s linear infinite;
        }

        .header-shell {
            min-height: 84px;
            display: grid;
            grid-template-columns: 260px 1fr auto;
            align-items: center;
            gap: 16px;
            padding: 8px 0;
            overflow: visible;
        }

        .header-brand-block {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            min-width: 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 24px;
            color: var(--primary-deep);
            text-decoration: none;
        }

        .brand img {
            width: 220px;
            height: auto;
            object-fit: contain;
        }

        .main-nav {
            justify-self: center;
            min-width: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2px;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.4px;
            text-transform: capitalize;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a {
            color: var(--ink);
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 8px;
            transition: color 0.25s ease, transform 0.25s ease;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            display: inline-block;
            z-index: 0;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: 7px;
            height: 2px;
            border-radius: 99px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transform: scaleX(0);
            transform-origin: left center;
            transition: transform 0.3s ease;
        }

        nav a:hover {
            color: var(--primary-deep);
            transform: translateY(-1px);
        }

        nav a:hover::before {
            transform: translateX(0) skewX(-14deg);
        }

        nav a:hover::after {
            transform: scaleX(1);
        }

        nav li {
            position: relative;
        }

        .main-nav .submenu {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            min-width: 220px;
            padding: 8px;
            margin: 0;
            list-style: none;
            display: grid;
            gap: 2px;
            background: #fff;
            border: 1px solid #cfe4d7;
            border-radius: 12px;
            box-shadow: 0 14px 24px rgba(0, 72, 0, 0.14);
            opacity: 0;
            visibility: hidden;
            transform: translateY(6px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 70;
        }

        .main-nav li:hover>.submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .main-nav .submenu a {
            display: block;
            padding: 9px 10px;
            border-radius: 8px;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 0.1px;
        }

        .main-nav .submenu a:hover {
            background: #f1f8f4;
            color: var(--primary-deep);
            transform: none;
        }


        .header-action {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-self: end;
            flex-shrink: 0;
        }

        .cbse-badge {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 12px;
            color: var(--primary-deep);
            background: #f3fbf6;
            border: 1px solid #cae4d2;
            border-radius: 10px;
            padding: 9px 12px;
            white-space: nowrap;
            line-height: 1.2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 44px;
        }

        .cbse-badge b {
            display: block;
            font-size: 11px;
            color: #4b7c5b;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .header-action .btn {
            min-height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding-inline: 16px;
            border-radius: 10px;
            min-width: 154px;
            white-space: nowrap;
            font-size: 13px;
        }

        @keyframes ribbonFlow {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 200% 50%;
            }
        }

        .hero {
            position: relative;
            min-height: 560px;
            overflow: hidden;
            display: grid;
            place-items: center;
            text-align: center;
            color: #fff;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(0, 54, 23, 0.58), rgba(0, 92, 45, 0.48));
            z-index: 1;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hero-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transform: scale(1.02) translateX(2.5%);
            transition: opacity 1s ease, transform 3s ease;
            background-position: center;
            background-size: cover;
        }

        .hero-slide.active {
            opacity: 1;
            transform: scale(1.08) translateX(0);
            animation: heroDrift 3s ease forwards;
        }

        .hero .content {
            position: relative;
            z-index: 3;
            max-width: 980px;
        }

        .hero-copy {
            min-height: 235px;
            display: grid;
            align-content: center;
        }

        .hero-copy-item {
            opacity: 0;
            transform: translateX(34px);
            letter-spacing: 1.8px;
            transition:
                opacity 0.6s ease,
                transform 0.95s cubic-bezier(0.22, 0.61, 0.36, 1),
                letter-spacing 0.95s ease;
            position: absolute;
            inset: 0;
            display: grid;
            align-content: center;
            padding: 0 10px;
        }

        .hero-copy-item.active {
            opacity: 1;
            transform: translateX(0);
            letter-spacing: normal;
            position: relative;
        }

        .hero-copy-item.active .hero-kicker,
        .hero-copy-item.active h1,
        .hero-copy-item.active .promo-pill {
            animation: textRise 0.8s ease both;
        }

        .hero-copy-item.active h1 {
            animation-delay: 0.08s;
        }

        .hero-copy-item.active .promo-pill {
            animation-delay: 0.16s;
        }

        .hero-kicker {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .hero h1 {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(38px, 5vw, 78px);
            line-height: 1.05;
            letter-spacing: 0.2px;
            font-weight: 800;
        }

        .promo-pill {
            margin: 18px auto 22px;
            display: inline-flex;
            gap: 8px;
            align-items: center;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 10px 16px;
            border-radius: 999px;
            font-weight: 700;
        }

        .promo-pill b {
            color: #ffd166;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        @keyframes softSpin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes heroDrift {
            from {
                transform: scale(1.11) translateX(2%);
            }

            to {
                transform: scale(1.05) translateX(-1%);
            }
        }

        @keyframes textRise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .features-strip {
            background:
                linear-gradient(180deg, #f9fcff 0%, #eef8f1 100%);
            margin-top: -1px;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            padding: 22px 0;
            position: relative;
            overflow: hidden;
        }

        .features-strip::before,
        .features-strip::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 124, 64, 0.14), rgba(0, 124, 64, 0));
            pointer-events: none;
        }

        .features-strip::before {
            top: -120px;
            left: -80px;
        }

        .features-strip::after {
            bottom: -140px;
            right: -90px;
        }

        .features-list {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 14px;
            position: relative;
            z-index: 1;
        }

        .strip-card {
            position: relative;
            text-align: center;
            color: var(--ink);
            background: #fff;
            border: 1px solid #cfe4d7;
            border-radius: 18px;
            padding: 16px 10px 14px;
            box-shadow: 0 10px 20px rgba(0, 72, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            font-size: 13px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            overflow: hidden;
        }

        .strip-card:hover {
            transform: translateY(-6px);
            border-color: #8dc5a2;
            box-shadow: 0 16px 24px rgba(0, 72, 0, 0.13);
        }

        .strip-card span {
            display: block;
            color: var(--muted);
            font-size: 12px;
            font-weight: 600;
            margin-top: 2px;
        }

        .strip-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            margin: 0 auto 10px;
            display: grid;
            place-items: center;
            border: 1px solid #c9e5d4;
            color: #fff;
            background: linear-gradient(145deg, var(--primary), var(--primary-deep));
            font-size: 21px;
            box-shadow: 0 8px 14px rgba(0, 124, 64, 0.26);
        }

        .icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            margin: 0 auto 8px;
            display: grid;
            place-items: center;
            border: 1px solid #d4e0f5;
            color: var(--primary);
            background: #f7fcf8;
            font-size: 22px;
        }

        section {
            padding: 56px 0;
            position: relative;
        }

        .overlay-section {
            overflow: hidden;
            isolation: isolate;
        }

        .overlay-section>.container {
            position: relative;
            z-index: 2;
        }

        .overlay-section::before,
        .overlay-section::after {
            content: "";
            position: absolute;
            pointer-events: none;
            z-index: 1;
        }

        .overlay-soft-grid {
            background: linear-gradient(180deg, #f7fcf8 0%, #eef8f1 100%);
        }

        .overlay-soft-grid::before {
            inset: 0;
            opacity: 0.75;
            background:
                radial-gradient(circle at 12% 18%, rgba(0, 124, 64, 0.11), rgba(0, 124, 64, 0) 36%),
                radial-gradient(circle at 86% 20%, rgba(225, 0, 0, 0.08), rgba(225, 0, 0, 0) 32%),
                radial-gradient(circle at 35% 86%, rgba(0, 124, 64, 0.09), rgba(0, 124, 64, 0) 34%);
        }

        .overlay-soft-grid::after {
            width: 340px;
            height: 340px;
            top: -150px;
            right: -120px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 124, 64, 0.2), rgba(0, 124, 64, 0));
        }

        .overlay-diagonal {
            background: #fff;
        }

        .overlay-diagonal::before {
            inset: 0;
            opacity: 0.85;
            background:
                radial-gradient(110% 58% at 50% -8%, rgba(0, 124, 64, 0.11), rgba(0, 124, 64, 0) 64%),
                radial-gradient(90% 42% at 50% 108%, rgba(225, 0, 0, 0.08), rgba(225, 0, 0, 0) 70%);
        }

        .overlay-diagonal::after {
            width: 220px;
            height: 220px;
            left: -90px;
            bottom: -130px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 46, 53, 0.16), rgba(255, 46, 53, 0));
        }

        .overlay-dark {
            background:
                linear-gradient(115deg, rgba(0, 45, 20, 0.94), rgba(0, 86, 40, 0.88)),
                url('{{ asset('images/new/school22.jpg') }}') center/cover;
            color: #fff;
        }

        .overlay-dark::before {
            inset: 0;
            opacity: 0.2;
            background:
                radial-gradient(circle at 25% 20%, rgba(255, 255, 255, 0.3), transparent 40%),
                radial-gradient(circle at 82% 75%, rgba(255, 255, 255, 0.24), transparent 42%);
        }

        .overlay-dark::after {
            width: 330px;
            height: 330px;
            right: -140px;
            top: -130px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.34);
        }

        .overlay-dark .section-title small,
        .overlay-dark .section-title h2 {
            color: #fff;
        }

        .overlay-dark .step p {
            color: rgba(255, 255, 255, 0.86);
        }

        .overlay-dark .step h3 {
            color: #fff;
        }

        .overlay-dark .step img {
            border-color: rgba(255, 255, 255, 0.48);
        }

        .overlay-wave {
            background: #f5f9ff;
        }

        .overlay-wave::before {
            inset: auto -40px 0 -40px;
            height: 120px;
            background:
                radial-gradient(circle at 18% 0, rgba(0, 124, 64, 0.15) 0 40px, transparent 41px),
                radial-gradient(circle at 42% 0, rgba(255, 46, 53, 0.12) 0 36px, transparent 37px),
                radial-gradient(circle at 74% 0, rgba(0, 124, 64, 0.12) 0 44px, transparent 45px);
        }

        .section-title {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-title small {
            display: inline-block;
            font-family: 'Poppins', sans-serif;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 0.9px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .section-title h2 {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(26px, 3.2vw, 44px);
            line-height: 1.1;
        }

        .card-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .service-card,
        .course-card,
        .price-card,
        .mini-card,
        .review-card {
            position: relative;
            background: #fff;
            border-radius: 22px;
            border: 1px solid #cfe4d7;
            box-shadow: 0 12px 24px rgba(0, 72, 0, 0.08);
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }


        .service-card::after,
        .course-card::after,
        .price-card::after,
        .mini-card::after,
        .review-card::after {
            content: "";
            position: absolute;
            inset: 10px;
            border: 1px dashed rgba(0, 124, 64, 0.16);
            border-radius: 16px;
            pointer-events: none;
        }

        .service-card:hover,
        .course-card:hover,
        .price-card:hover,
        .mini-card:hover,
        .review-card:hover {
            transform: translateY(-8px);
            border-color: #8dc5a2;
            box-shadow: 0 18px 30px rgba(0, 72, 0, 0.14);
        }

        .service-content,
        .course-content,
        .price-content,
        .mini-content,
        .review-content {
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .service-card h3,
        .course-card h3,
        .price-card h3,
        .mini-card h3 {
            margin: 8px 0;
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
        }

        .service-card p,
        .course-card p,
        .price-card p,
        .mini-card p,
        .review-card p {
            margin: 0;
            color: var(--muted);
        }

        #services .service-card,
        #academics-overview .service-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        #services .service-content,
        #academics-overview .service-content {
            flex: 1 1 auto;
        }

        #services .service-content h3,
        #academics-overview .service-content h3 {
            margin-top: 0;
        }

        #services .service-card>img,
        #academics-overview .service-card>img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            object-position: center;
            display: block;
            margin-top: auto;
        }

        #services .service-card:nth-child(2)>img,
        #academics-overview .service-card:nth-child(2)>img {
            object-position: center 10%;
        }

        .events-head {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 18px;
        }

        .events-scroll {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% - 32px) / 3);
            gap: 16px;
            overflow-x: auto;
            padding: 4px 2px 10px;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .events-scroll::-webkit-scrollbar {
            display: none;
        }

        .event-scroll-card {
            background: #fff;
            border: 1px solid #cfe4d7;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 72, 0, 0.08);
            scroll-snap-align: start;
        }

        .event-scroll-content .btn {
            margin-top: 12px;
            display: inline-flex;
        }

        .event-scroll-content .event-explore-btn {
            background: linear-gradient(135deg, #0f7e45, #0a5d33);
            color: #fff;
            border: 1px solid #0a5d33;
            box-shadow: 0 8px 14px rgba(15, 126, 69, 0.24);
            display: flex;
            width: fit-content;
            margin: 12px auto 0;
        }

        .event-scroll-content .event-explore-btn:hover {
            color: #fff;
            box-shadow: 0 10px 18px rgba(15, 126, 69, 0.32);
        }

        .event-scroll-card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
            display: block;
        }

        .event-scroll-content {
            padding: 14px;
        }

        .event-scroll-meta {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 8px;
        }

        .event-scroll-meta .event-date-chip {
            margin-left: auto;
        }

        .event-chip {
            background: #eef8f1;
            border: 1px solid #cfe4d7;
            color: #255239;
            border-radius: 999px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .event-date-chip {
            background: #fff8e8;
            border: 1px solid #f0d8a2;
            color: #8a5a00;
            border-radius: 8px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.2px;
        }

        .event-scroll-content h3 {
            margin: 0 0 8px;
            font-size: 19px;
            font-family: 'Poppins', sans-serif;
            line-height: 1.2;
        }

        .event-scroll-content p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .testimonials-scroll {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% - 32px) / 3);
            gap: 16px;
            overflow-x: auto;
            padding: 4px 2px 10px;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .testimonials-scroll::-webkit-scrollbar {
            display: none;
        }

        .testimonials-scroll .review-card {
            scroll-snap-align: start;
            display: flex;
            min-height: 210px;
        }

        .testimonials-scroll .review-content {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            padding: 18px;
        }

        .testimonials-scroll .review-content .testimonial-quote {
            flex: 1 1 auto;
            margin: 0;
            color: #4b6488;
            font-size: 17px;
            line-height: 1.5;
        }

        .testimonial-author {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #255239;
            font-weight: 700;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .testimonial-head {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .testimonial-initial {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 20px;
            color: #fff;
            background: linear-gradient(145deg, #0f7e45, #0a5d33);
            box-shadow: 0 6px 12px rgba(15, 126, 69, 0.28);
        }

        .about-wrap {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            align-items: center;
        }

        .about-image {
            border-radius: 20px;
            overflow: hidden;
            min-height: 320px;
            background: #c6dafc;
            position: relative;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            min-height: 320px;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .about-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            margin-top: 16px;
        }

        .about-item {
            border: 1px solid #d4eadc;
            border-radius: 12px;
            padding: 11px 12px;
            background: #f5fbf7;
            color: var(--primary-deep);
            font-family: 'Poppins', sans-serif;
        }

        .about-item b {
            display: block;
            font-size: 15px;
            margin-bottom: 2px;
        }

        .about-item span {
            display: block;
            font-size: 13px;
            color: var(--muted);
            font-weight: 600;
        }

        .about-facts {
            margin-top: 14px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .about-fact {
            border-radius: 12px;
            border: 1px solid #d4eadc;
            background: #fff;
            padding: 10px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        .about-fact b {
            display: block;
            color: var(--primary-deep);
            font-size: 21px;
            line-height: 1.1;
        }

        .about-fact span {
            display: block;
            font-size: 12px;
            color: var(--muted);
            margin-top: 3px;
            font-weight: 600;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .category {
            position: relative;
            background: #fff;
            border: 1px solid #cfe4d7;
            border-radius: 16px;
            padding: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
            box-shadow: 0 8px 16px rgba(0, 72, 0, 0.06);
            min-height: 112px;
        }

        .category:hover {
            transform: translateY(-5px);
            border-color: #92c8a6;
            box-shadow: 0 14px 22px rgba(0, 72, 0, 0.12);
        }

        .category .icon {
            transition: transform 0.28s ease;
            width: 46px;
            height: 46px;
            min-width: 46px;
            margin: 0;
            border-radius: 10px;
            font-size: 18px;
        }

        .category:hover .icon {
            transform: rotate(-8deg) scale(1.06);
        }

        .category b {
            display: block;
            font-size: 15px;
            line-height: 1.25;
            margin: 1px 0 4px;
        }

        .category small {
            display: block;
            font-size: 12px;
            color: var(--muted);
            font-weight: 600;
            line-height: 1.35;
        }

        .category-text {
            display: block;
            align-self: center;
            flex: 1;
        }

        .cta-banner {
            background:
                linear-gradient(90deg, rgba(0, 50, 22, 0.92), rgba(0, 90, 42, 0.84)),
                url('images/new/school1.jpg') center/cover;
            color: #fff;
            text-align: center;
            border-radius: 22px;
            padding: 60px 24px;
        }

        .cta-banner h3 {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(26px, 3vw, 44px);
            line-height: 1.2;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .course-thumb {
            aspect-ratio: 16 / 10;
            object-fit: cover;
        }

        .ribbon {
            position: absolute;
            top: 14px;
            left: 14px;
            background: var(--accent);
            color: #fff;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            box-shadow: 0 8px 14px rgba(225, 0, 0, 0.28);
            z-index: 3;
        }

        .course-head {
            position: relative;
        }

        .academics-section {
            padding: 46px 0;
        }

        .academics-section .container {
            max-width: 1280px;
        }

        .academics-section .section-title {
            margin-bottom: 16px;
        }

        .academics-section .news-grid {
            gap: 12px;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .academics-section .course-thumb {
            aspect-ratio: 16 / 9;
        }

        .academics-section .course-content {
            padding: 12px 14px;
        }

        .academics-section .course-card h3 {
            font-size: 18px;
            margin: 3px 0 5px;
            line-height: 1.2;
        }

        .academics-section .course-card p {
            font-size: 13px;
            line-height: 1.35;
        }

        .benefits {
            overflow: hidden;
            padding: 0;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 0;
            align-items: stretch;
        }

        .benefits-content {
            padding: 22px;
        }

        .benefits-title {
            text-align: left;
            margin-bottom: 16px;
        }

        .benefits-title h2 {
            margin-top: 6px;
        }

        .benefits-media {
            min-height: 100%;
        }

        .benefits-media img {
            width: 100%;
            height: 95%;
            object-fit: cover;
            display: block;
            border-radius: 10px;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .stats {
            position: relative;
            background:
                linear-gradient(120deg, rgba(0, 62, 30, 0.96), rgba(0, 96, 46, 0.9)),
                url('images/new/school.jpg') center/cover;
            color: #fff;
            overflow: hidden;
        }

        .stats::before,
        .stats::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .stats::before {
            width: 260px;
            height: 260px;
            left: -90px;
            top: -110px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0));
        }

        .stats::after {
            width: 220px;
            height: 220px;
            right: -80px;
            bottom: -100px;
            background: radial-gradient(circle, rgba(225, 0, 0, 0.25), rgba(225, 0, 0, 0));
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .stat {
            padding: 20px 14px 16px;
            font-family: 'Poppins', sans-serif;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.24);
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(4px);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.18);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .stat:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, 0.14);
        }

        .stat b {
            display: block;
            font-size: 46px;
            line-height: 1;
            margin-bottom: 6px;
            letter-spacing: 0.3px;
            color: #fff4cf;
        }

        .stat span {
            display: block;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 4px;
            color: #ffffff;
        }

        .stat small {
            display: block;
            font-size: 12px;
            color: rgba(236, 246, 240, 0.9);
            font-weight: 600;
        }

        .process {
            background: linear-gradient(180deg, #eef7f2 0%, #e7f2ec 100%);
        }

        .process .section-title small {
            color: var(--primary);
        }

        .process .section-title h2 {
            color: var(--ink);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            position: relative;
        }

        .step {
            position: relative;
            text-align: left;
            padding: 18px 16px 16px;
            border-radius: 16px;
            border: 1px solid #cfe4d7;
            background: #ffffff;
            box-shadow: 0 12px 20px rgba(0, 72, 0, 0.1);
            overflow: hidden;
        }

        .step img {
            width: 78px;
            height: 78px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #cfe4d7;
            margin: 0 0 10px;
        }

        .step-no {
            position: absolute;
            right: 12px;
            top: 12px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 13px;
            color: #fff;
            background: linear-gradient(130deg, #e10000, #9d0000);
            box-shadow: 0 8px 14px rgba(225, 0, 0, 0.32);
        }

        .step h3 {
            font-family: 'Poppins', sans-serif;
            margin: 4px 0 6px;
            font-size: 24px;
            line-height: 1.15;
            color: var(--ink);
        }

        .step p {
            margin: 0 0 8px;
            color: var(--muted);
        }

        .step ul {
            margin: 0;
            padding-left: 18px;
            color: #3f5c49;
            font-size: 13px;
            line-height: 1.35;
        }

        .reviews {
            background: transparent;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .price-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .price-tag {
            font-family: 'Poppins', sans-serif;
            font-size: 44px;
            font-weight: 800;
            color: var(--primary);
            margin: 8px 0 10px;
        }

        .price-tag span {
            font-size: 18px;
            color: var(--muted);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .newsletter {
            margin-top: 26px;
            background: linear-gradient(120deg, #007c40, #004800);
            color: #fff;
            border-radius: 16px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .newsletter form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .newsletter input,
        .newsletter select {
            border: 0;
            border-radius: 8px;
            padding: 11px 12px;
            min-width: 220px;
        }

        footer {
            background: #0d2a1a;
            color: #dbe9e1;
            padding: 46px 0 18px;
            margin-top: 0px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
            gap: 26px;
        }

        .footer-grid>div:first-child {
            padding-right: 18px;
        }

        .footer-grid>div:nth-child(2) {
            padding-left: 14px;
        }

        .footer-grid h4 {
            margin: 0 0 10px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 22px;
        }

        .footer-grid a {
            color: #dbe9e1;
            text-decoration: none;
            display: block;
            margin: 6px 0;
            position: relative;
            padding-left: 0;
            transition: color 0.2s ease, transform 0.2s ease, padding-left 0.2s ease;
        }

        .footer-grid a:hover {
            color: #ffffff;
            transform: translateX(2px);
            padding-left: 14px;
        }

        .footer-grid a::before {
            content: ">";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            color: #a9cbb8;
            transition: opacity 0.2s ease;
        }

        .footer-grid a:hover::before {
            opacity: 1;
        }

        .footer-contact-link {
            padding-left: 0 !important;
            transform: none !important;
        }

        .footer-contact-link::before {
            content: none !important;
        }

        .compliance-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 18px;
        }

        .compliance-card {
            background: #fff;
            border: 1px solid #cfe4d7;
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0 10px 18px rgba(0, 72, 0, 0.08);
        }

        .compliance-card h3 {
            margin: 0 0 8px;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            color: var(--primary-deep);
        }

        .compliance-card p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .compliance-cta {
            margin-top: 22px;
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .compliance-grid {
                grid-template-columns: 1fr;
            }
        }

        .footer-contact-link {
            display: flex !important;
            align-items: flex-start;
            gap: 8px;
            margin: 8px 0 !important;
            line-height: 1.35;
        }

        .footer-contact-link .ci {
            width: 18px;
            min-width: 18px;
            display: inline-block;
            text-align: center;
            color: #b8d5c4;
            font-size: 14px;
            margin-top: 1px;
            position: relative;
        }

        .footer-contact-link .ci-pin::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            width: 10px;
            height: 10px;
            border: 2px solid #b8d5c4;
            border-radius: 50% 50% 50% 0;
            transform: translateX(-50%) rotate(-45deg);
            box-sizing: border-box;
        }

        .footer-contact-link .ci-pin::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 4px;
            width: 3px;
            height: 3px;
            background: #b8d5c4;
            border-radius: 50%;
            transform: translateX(-50%);
        }

        .footer-brand-text {
            margin: 12px 0 0;
            color: #cfe0d5;
            line-height: 1.5;
            max-width: 420px;
            text-align: justify;
        }

        .footer-bottom {
            border-top: 1px solid rgba(185, 214, 194, 0.22);
            margin-top: 20px;
            padding-top: 12px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            color: #cfe0d5;
        }

        .footer-bottom-links {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .footer-bottom-links a {
            color: #dbe9e1;
            text-decoration: none;
            font-size: 13px;
        }

        @media (max-width: 1100px) {
            .header-shell {
                grid-template-columns: 200px 1fr auto;
            }

            .brand img {
                width: 172px;
            }

            nav ul {
                font-size: 13px;
            }

            nav a {
                padding: 9px 8px;
            }

            .cbse-badge {
                display: none;
            }

            .header-action .btn {
                min-width: 138px;
            }

            .features-list {
                grid-template-columns: repeat(3, 1fr);
            }

            .card-grid-3,
            .category-grid,
            .price-grid,
            .news-grid,
            .footer-grid,
            .process-grid,
            .stats-grid,
            .reviews-grid,
            .courses-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .benefits {
                grid-template-columns: 1fr;
            }

            .events-scroll {
                grid-auto-columns: calc((100% - 16px) / 2);
            }

            .testimonials-scroll {
                grid-auto-columns: calc((100% - 16px) / 2);
            }

            .about-wrap {
                grid-template-columns: 1fr;
            }

            .about-facts {
                grid-template-columns: repeat(3, 1fr);
            }

            .academics-section .news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 760px) {
            .topbar {
                top: 0;
            }

            .header-shell {
                grid-template-columns: 1fr auto;
                min-height: 66px;
                padding: 8px 0;
            }

            .header-brand-block {
                padding-left: 0;
            }

            .main-nav {
                display: none;
            }

            .header-action {
                display: flex;
                gap: 8px;
            }

            .cbse-badge {
                display: none;
            }

            .hero {
                min-height: 500px;
            }

            section {
                padding: 42px 0;
            }

            .academics-section {
                padding: 46px 0;
            }

            .academics-section .course-thumb {
                aspect-ratio: 16 / 9;
            }

            .academics-section .course-card h3 {
                font-size: 18px;
            }

            #services .service-card>img,
            #academics-overview .service-card>img {
                height: 200px;
            }

            .academics-section .news-grid {
                grid-template-columns: 1fr;
            }

            .benefits-content {
                padding: 18px;
            }

            .benefits-media {
                min-height: 240px;
            }

            .footer-grid h4 {
                font-size: 22px;
            }

            .footer-bottom {
                justify-content: center;
                text-align: center;
            }

            .footer-grid>div:first-child {
                padding-right: 0;
            }

            .card-grid-3,
            .category-grid,
            .price-grid,
            .news-grid,
            .footer-grid,
            .process-grid,
            .stats-grid,
            .reviews-grid,
            .courses-grid,
            .about-list,
            .about-facts,
            .benefit-grid,
            .features-list {
                grid-template-columns: 1fr;
            }

            .brand img {
                width: 152px;
            }

            .btn {
                padding: 10px 14px;
                font-size: 12px;
            }

            .header-action .btn {
                min-width: auto;
                min-height: 40px;
                font-size: 12px;
                padding-inline: 12px;
            }

            .events-scroll {
                grid-auto-columns: 100%;
            }

            .testimonials-scroll {
                grid-auto-columns: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="topbar">
        <div class="container header-shell">
            <div class="header-brand-block">
                <a class="brand" href="#">
                    <img src="{{ asset('images/new/logo.png') }}" alt="Logo" />
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>

                    <li>
                        <a href="{{ route('about') }}">About Us</a>
                        <ul class="submenu">
                            <li><a href="{{ route('about') }}#who-we-are">Who We Are</a></li>
                            <li><a href="{{ route('about') }}#principal-desk">Principal's Desk</a></li>
                            <li><a href="{{ route('about') }}#correspondent-desk">Correspondent's Desk</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('academics') }}">Academics</a>
                        <ul class="submenu">
                            <li><a href="{{ route('academics') }}#curriculum">Curriculum</a></li>
                            <li><a href="{{ route('admissions') }}">Admissions</a></li>
                            <li><a href="{{ route('awards') }}">Awards</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('gallery') }}">Gallery</a>
                        <ul class="submenu">
                            <li><a href="{{ route('gallery') }}#photos">Photos</a></li>
                            <li><a href="{{ route('gallery') }}#videos">Videos</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('home') }}#events-achievements">Campus Life</a>
                        <ul class="submenu">
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                            <li><a href="{{ route('contact') }}#campus-visit">Campus Visit</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                        <ul class="submenu">
                            <li><a href="{{ route('contact') }}">Contact Info</a></li>
                            <li><a href="{{ route('contact') }}#recruitment">Recruitment</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="header-action">
                <span class="cbse-badge">CBSE School<b>Affiliation 1930806</b></span>
                <button class="btn btn-primary">Admission Open</button>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-bg">
            <div class="hero-slide active" style="background-image:url('images/new/slider1.jpg');"></div>
            <div class="hero-slide" style="background-image:url('images/new/slider2.jpg');"></div>
            <div class="hero-slide" style="background-image:url('images/new/slider3.jpg');"></div>
        </div>
        <div class="content container">
            <div class="hero-copy">
                <div class="hero-copy-item active">
                    <div class="hero-kicker">Jeeva Memorial Public Senior Secondary School</div>
                    <h1>Learning Today, Leading Tomorrow</h1>
                    <div class="promo-pill">CBSE Curriculum <b>Affiliation No: 1930806</b></div>
                </div>
                <div class="hero-copy-item">
                    <div class="hero-kicker">Nurturing Young Minds With Care</div>
                    <h1>Strong Values, Strong Foundations</h1>
                    <div class="promo-pill">Admissions Open <b>Pre-KG to XII</b></div>
                </div>
                <div class="hero-copy-item">
                    <div class="hero-kicker">Future-Ready Learning Environment</div>
                    <h1>Inspire Curiosity, Build Confidence</h1>
                    <div class="promo-pill">Holistic Education <b>Academics + Activities</b></div>
                </div>
            </div>
            <div class="hero-actions">
                <button class="btn btn-primary">Apply For Admission</button>
                <button class="btn btn-accent">View Circulars</button>
            </div>
        </div>
    </section>

    <section id="about" class="overlay-section overlay-diagonal">
        <div class="container">
            <div class="about-wrap">
                <div class="about-image">
                    <img src="images/new/slider1.jpg" onerror="this.onerror=null;this.src='images/new/school1.jpg';"
                        alt="School Campus">
                </div>
                <div>
                    <small
                        style="color:var(--primary);font-family:'Poppins';font-weight:700;text-transform:uppercase;">About
                        Us</small>
                    <h2 style="margin:8px 0 12px;font-family:'Poppins';font-size:40px;line-height:1.08;">A Regular,
                        Student-Centered Learning Environment</h2>
                    <p style="color:var(--muted);margin:0;">Jeeva Memorial Public Senior Secondary School (JMPSSS) is a
                        <strong>CBSE-affiliated school</strong> in Kancheepuram, committed to <strong>strong
                            academics</strong>, <strong>discipline</strong>, and <strong>values-based education</strong>
                        from <strong>Pre-KG to XII</strong>.
                    </p>
                    <p style="color:var(--muted);margin:12px 0 0;">Our focus is simple: <strong>clear concepts</strong>,
                        <strong>caring teachers</strong>, and <strong>continuous support</strong> that helps every child
                        grow with <strong>confidence</strong> in both studies and character.
                    </p>
                    <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap;">
                        <button class="btn btn-primary">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="overlay-section overlay-rings">
        <div class="container">
            <div class="section-title">
                <small>Why Choose Us</small>
                <h2>Strong Foundation For Every Child</h2>
            </div>
            <div class="category-grid">
                <div class="category"><span class="icon">▣</span>
                    <div class="category-text"><b>Smart Classrooms</b><small>Digital boards and AV-enabled
                            teaching.</small></div>
                </div>
                <div class="category"><span class="icon">⌘</span>
                    <div class="category-text"><b>Qualified Teachers</b><small>Experienced educators focused on concept
                            clarity.</small></div>
                </div>
                <div class="category"><span class="icon">◉</span>
                    <div class="category-text"><b>Holistic Development</b><small>Equal focus on academics, values, arts
                            and sports.</small></div>
                </div>
                <div class="category"><span class="icon">⌂</span>
                    <div class="category-text"><b>Safe Campus</b><small>Secure environment with student-first
                            systems.</small></div>
                </div>
            </div>
        </div>
    </section>

    <section id="academics-overview" class="overlay-section overlay-soft-grid">
        <div class="container">
            <div class="section-title">
                <small>Academics Overview</small>
                <h2>Learning Pathway From Foundation <br>To Senior Secondary</h2>
            </div>
            <div class="card-grid-3">
                <article class="service-card">
                    <div class="service-content">
                        <h3>Curriculum Focus</h3>
                        <p>CBSE-aligned curriculum with strong fundamentals, projects, and practical understanding.</p>
                    </div>
                    <img src="images/new/slider2.jpg" alt="Curriculum">
                </article>
                <article class="service-card">
                    <div class="service-content">
                        <h3>Academic Support</h3>
                        <p>Continuous assessment, mentoring, and guidance for steady student progress.</p>
                    </div>
                    <img src="images/new/educator.png" alt="Academic Support">
                </article>
                <article class="service-card">
                    <div class="service-content">
                        <h3>Board Readiness</h3>
                        <p>Structured preparation for classes X and XII with performance tracking and revision plans.
                        </p>
                    </div>
                    <img src="images/new/school22.jpg" alt="Board Readiness">
                </article>
            </div>
        </div>
    </section>

    <section id="events-achievements" class="overlay-section overlay-rings">
        <div class="container">
            <div class="section-title">
                <small>Events & Achievements</small>
                <h2>Celebrating Campus Moments <br>And Student Success</h2>
            </div>

            <div class="events-scroll" id="events-scroll">
                @php
                    $eventCards = collect();
                    if (isset($events) && $events->isNotEmpty()) {
                        $eventCards = $events->take(5);
                    }
                @endphp
                @if ($eventCards->isNotEmpty())
                    @foreach ($eventCards as $event)
                        @php
                            $imageUrl = $event->image
                                ? asset('uploads/events/' . $event->image)
                                : asset('images/new/slider' . (($loop->index % 3) + 1) . '.jpg');

                            $fallbackTitle = $event->image
                                ? str_replace(['-', '_'], ' ', pathinfo($event->image, PATHINFO_FILENAME))
                                : 'School Event Update';

                            $cardTitle = $event->title ?: \Illuminate\Support\Str::title($fallbackTitle);
                            $cardDescription =
                                $event->description ?:
                                'Photo highlights from recent school activities and student participation.';
                        @endphp
                        <article class="event-scroll-card">
                            <img src="{{ $imageUrl }}" alt="{{ $cardTitle }}">
                            <div class="event-scroll-content">
                                <div class="event-scroll-meta">
                                    <span class="event-chip">{{ $event->category ?: 'School Update' }}</span>
                                    @if ($event->event_date)
                                        <span
                                            class="event-date-chip">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</span>
                                    @endif
                                </div>
                                <h3>{{ $cardTitle }}</h3>
                                <p>{{ \Illuminate\Support\Str::limit($cardDescription, 95) }}</p>
                                <a href="{{ route('events') }}" class="btn event-explore-btn">Explore</a>
                            </div>
                        </article>
                    @endforeach
                @else
                    @for ($i = 1; $i <= 5; $i++)
                        <article class="event-scroll-card">
                            <img src="{{ asset('images/new/slider2.jpg') }}" alt="No Events">
                            <div class="event-scroll-content">
                                <div class="event-scroll-meta">
                                    <span class="event-chip">School Update</span>
                                </div>
                                <h3>No events right now</h3>
                                <p>New events and circulars will appear here once they are published.</p>
                                <a href="{{ route('events') }}" class="btn event-explore-btn">Explore</a>
                            </div>
                        </article>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <section id="testimonials" class="overlay-section overlay-soft-grid">
        <div class="container">
            <div class="section-title">
                <small>Testimonials</small>
                <h2>What Parents And Students Say</h2>
            </div>
            <div class="testimonials-scroll" id="testimonials-scroll">
                @php
                    $testimonialCards = collect();
                    if (isset($testimonials) && $testimonials->isNotEmpty()) {
                        $testimonialCards = $testimonials->take(5);
                    }
                @endphp
                @if ($testimonialCards->isNotEmpty())
                    @foreach ($testimonialCards as $testimonial)
                        <article class="review-card">
                            <div class="review-content">
                                <p class="testimonial-quote">"{{ \Illuminate\Support\Str::limit($testimonial->content, 160) }}"</p>
                                <div class="testimonial-head">
                                    <span class="testimonial-initial">{{ strtoupper(substr(trim($testimonial->name ?? 'U'), 0, 1)) }}</span>
                                    <div class="testimonial-author">
                                        {{ $testimonial->name }}{{ $testimonial->designation ? ' - ' . $testimonial->designation : '' }}
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @else
                    @for ($i = 1; $i <= 5; $i++)
                        <article class="review-card">
                            <div class="review-content">
                                <p class="testimonial-quote">"Teachers are approachable and the school gives equal importance to studies and
                                    discipline."</p>
                                <div class="testimonial-head">
                                    <span class="testimonial-initial">P</span>
                                    <div class="testimonial-author">Parent Feedback</div>
                                </div>
                            </div>
                        </article>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <section id="admissions-cta" class="overlay-section overlay-diagonal">
        <div class="container">
            <div class="cta-banner">
                <h3>Admissions Open for <span style="color:#ff8b8b;">2026-27</span></h3>
                <div style="margin-top:18px;display:flex;justify-content:center;gap:10px;flex-wrap:wrap;">
                    <a href="{{ route('admissions') }}" class="btn btn-primary">Apply Now</a>
                    <a href="{{ route('admissions') }}" class="btn btn-outline">Download Prospectus</a>
                    <a href="{{ route('contact') }}" class="btn btn-accent">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <img src="{{ asset('images/new/logo.png') }}" alt="Logo"
                        style="max-width: 250px; width: 100%; height: auto; object-fit: contain;">
                    <p class="footer-brand-text">Jeeva Memorial Public Senior Secondary School, Kancheepuram -
                        committed to nurturing responsible and confident learners with value-based education.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <a href="#">About School</a>
                    <a href="#">Academics</a>
                    <a href="#">Facilities</a>
                    <a href="#">Admissions</a>
                </div>
                <div>
                    <h4>Resources</h4>
                    <a href="#">Circulars</a>
                    <a href="#">Gallery</a>
                    <a href="#">Mandatory Disclosure</a>
                    <a href="#">Contact</a>
                </div>
                <div>
                    <h4>Get In Touch</h4>
                    <a class="footer-contact-link" href="#"><span class="ci ci-pin"
                            aria-hidden="true"></span><span>No.210, Palla Egai Village, Puliyur Post,
                            Thirukazhukundram, Kancheepuram - 603109</span></a>
                    <a class="footer-contact-link" href="#"><span class="ci">☎</span><span>+91 84899 91553
                            / +91 97884 25747 / <br>+91 44 27447407</span></a>
                    <a class="footer-contact-link" href="#"><span
                            class="ci">✉</span><span>jeevamemorialschool@gmail.com</span></a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>Copyright © 2026 Jeeva Memorial Public Senior Secondary School. All Rights Reserved.</span>
                <div class="footer-bottom-links">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Support</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        (function() {
            const slides = document.querySelectorAll('.hero-slide');
            const copies = document.querySelectorAll('.hero-copy-item');
            if (slides.length && copies.length && slides.length === copies.length) {

                let current = 0;
                const total = slides.length;

                function setActive(index) {
                    slides[current].classList.remove('active');
                    copies[current].classList.remove('active');
                    current = index;
                    slides[current].classList.add('active');
                    copies[current].classList.add('active');
                }

                setInterval(function() {
                    setActive((current + 1) % total);
                }, 7000);
            }

            const counters = document.querySelectorAll('.counter');
            if (counters.length) {
                function animateCounter(el) {
                    const target = Number(el.dataset.target || 0);
                    const suffix = el.dataset.suffix || '';
                    const duration = 1400;
                    const start = performance.now();

                    function frame(now) {
                        const progress = Math.min((now - start) / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        const value = Math.floor(target * eased);
                        el.textContent = value.toLocaleString() + suffix;
                        if (progress < 1) requestAnimationFrame(frame);
                    }

                    requestAnimationFrame(frame);
                }

                const observer = new IntersectionObserver(function(entries, obs) {
                    entries.forEach(function(entry) {
                        if (!entry.isIntersecting) return;
                        animateCounter(entry.target);
                        obs.unobserve(entry.target);
                    });
                }, {
                    threshold: 0.35
                });

                counters.forEach(function(counter) {
                    observer.observe(counter);
                });
            }

            function initAutoScroll(trackId, cardSelector) {
                const track = document.getElementById(trackId);
                if (!track) return;

                const originalCards = Array.from(track.querySelectorAll(cardSelector));
                if (originalCards.length <= 1) return;

                originalCards.forEach(function(card) {
                    track.appendChild(card.cloneNode(true));
                });

                let stepIndex = 0;
                const baseCount = originalCards.length;

                function getStepWidth() {
                    const first = track.querySelector(cardSelector);
                    if (!first) return 0;
                    const cardWidth = first.getBoundingClientRect().width;
                    const styles = window.getComputedStyle(track);
                    const gap = parseFloat(styles.columnGap || styles.gap || '0');
                    return cardWidth + gap;
                }

                setInterval(function() {
                    const stepWidth = getStepWidth();
                    if (!stepWidth) return;

                    stepIndex += 1;
                    track.scrollTo({
                        left: stepIndex * stepWidth,
                        behavior: 'smooth'
                    });

                    if (stepIndex >= baseCount) {
                        setTimeout(function() {
                            track.scrollTo({
                                left: 0,
                                behavior: 'auto'
                            });
                            stepIndex = 0;
                        }, 650);
                    }
                }, 5000);
            }

            initAutoScroll('events-scroll', '.event-scroll-card');
            initAutoScroll('testimonials-scroll', '.review-card');
        })();
    </script>
</body>

</html>

