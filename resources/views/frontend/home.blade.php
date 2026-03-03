<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jeeva Memorial Public School</title>
  <link rel="icon" type="image/png" href="{{ asset('images/tab.png') }}" />
  <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #007c40;
      --primary-deep: #004800;
      --accent: #e10000;
      --ink: #102414;
      --muted: #6c7a92;
      --bg: #f4faf6;
      --white: #ffffff;
      --line: #dde6f5;
      --radius: 14px;
      --shadow: 0 10px 24px rgba(10, 35, 88, 0.08);
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      color: var(--ink);
      background: var(--bg);
      line-height: 1.45;
    }

    img { max-width: 100%; display: block; }

    .container {
      width: min(1460px, calc(100% - 24px));
      margin-inline: auto;
    }

    .btn {
      border: 0;
      border-radius: 8px;
      padding: 12px 18px;
      font-weight: 700;
      font-family: 'Jost', sans-serif;
      font-size: 14px;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 0.3px;
      position: relative;
      overflow: hidden;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .btn::before {
      content: "";
      position: absolute;
      top: -1px;
      bottom: -1px;
      left: -42%;
      width: 38%;
      background: linear-gradient(120deg, rgba(255,255,255,0), rgba(255,255,255,0.45), rgba(255,255,255,0));
      transform: skewX(-18deg);
      transition: left 0.45s ease;
      pointer-events: none;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 16px rgba(0, 0, 0, 0.14);
    }

    .btn:hover::before {
      left: 118%;
    }

    .btn-primary { background: var(--primary); color: #fff; }
    .btn-accent { background: var(--accent); color: #fff; }
    .btn-outline { border: 1px solid #c9d8f3; background: #fff; color: var(--ink); }

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
      font-family: 'Jost', sans-serif;
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
      font-family: 'Jost', sans-serif;
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

    nav a::before {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 8px;
      background: linear-gradient(120deg, rgba(0,124,64,0.16), rgba(0,124,64,0.04));
      transform: translateX(-110%) skewX(-14deg);
      transition: transform 0.35s ease;
      z-index: -1;
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

    .header-action {
      display: flex;
      align-items: center;
      gap: 10px;
      justify-self: end;
      flex-shrink: 0;
    }

    .cbse-badge {
      font-family: 'Jost', sans-serif;
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
      0% { background-position: 0% 50%; }
      100% { background-position: 200% 50%; }
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

    .hero::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      width: 220px;
      height: 220px;
      right: -110px;
      bottom: 42px;
      background: transparent;
      border: 4px dotted rgba(255,255,255,0.75);
      box-shadow: 0 14px 26px rgba(0, 0, 0, 0.16);
      z-index: 2;
      animation: softSpin 16s linear infinite;
      pointer-events: none;
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

    .hero-copy-item.active h1 { animation-delay: 0.08s; }
    .hero-copy-item.active .promo-pill { animation-delay: 0.16s; }

    .hero-kicker {
      font-family: 'Jost', sans-serif;
      font-size: 24px;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .hero h1 {
      margin: 0;
      font-family: 'Jost', sans-serif;
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
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.35);
      padding: 10px 16px;
      border-radius: 999px;
      font-weight: 700;
    }

    .promo-pill b { color: #ffd166; }

    .hero-actions {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    @keyframes softSpin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    @keyframes heroDrift {
      from { transform: scale(1.11) translateX(2%); }
      to { transform: scale(1.05) translateX(-1%); }
    }

    @keyframes textRise {
      from { opacity: 0; transform: translateY(18px); }
      to { opacity: 1; transform: translateY(0); }
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
      background: radial-gradient(circle, rgba(0,124,64,0.14), rgba(0,124,64,0));
      pointer-events: none;
    }

    .features-strip::before { top: -120px; left: -80px; }
    .features-strip::after { bottom: -140px; right: -90px; }

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
      font-family: 'Jost', sans-serif;
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

    .overlay-section > .container {
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
        radial-gradient(circle at 12% 18%, rgba(0,124,64,0.11), rgba(0,124,64,0) 36%),
        radial-gradient(circle at 86% 20%, rgba(225,0,0,0.08), rgba(225,0,0,0) 32%),
        radial-gradient(circle at 35% 86%, rgba(0,124,64,0.09), rgba(0,124,64,0) 34%);
    }

    .overlay-soft-grid::after {
      width: 340px;
      height: 340px;
      top: -150px;
      right: -120px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0,124,64,0.2), rgba(0,124,64,0));
    }

    .overlay-diagonal {
      background: #fff;
    }

    .overlay-diagonal::before {
      inset: 0;
      opacity: 0.85;
      background:
        radial-gradient(110% 58% at 50% -8%, rgba(0,124,64,0.11), rgba(0,124,64,0) 64%),
        radial-gradient(90% 42% at 50% 108%, rgba(225,0,0,0.08), rgba(225,0,0,0) 70%);
    }

    .overlay-diagonal::after {
      width: 220px;
      height: 220px;
      left: -90px;
      bottom: -130px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,46,53,0.16), rgba(255,46,53,0));
    }

    .overlay-rings {
      background: linear-gradient(180deg, #f4f8ff 0%, #edf3ff 100%);
    }

    .overlay-rings::before {
      width: 260px;
      height: 260px;
      border: 2px dashed rgba(0, 124, 64, 0.25);
      border-radius: 50%;
      top: 40px;
      left: -120px;
    }

    .overlay-rings::after {
      width: 180px;
      height: 180px;
      border: 2px dashed rgba(255, 46, 53, 0.22);
      border-radius: 50%;
      right: -70px;
      bottom: 70px;
    }

    .overlay-dark {
      background:
        linear-gradient(115deg, rgba(0, 45, 20, 0.94), rgba(0, 86, 40, 0.88)),
        url('{{ asset('images/img01.jpg') }}') center/cover;
      color: #fff;
    }

    .overlay-dark::before {
      inset: 0;
      opacity: 0.2;
      background:
        radial-gradient(circle at 25% 20%, rgba(255,255,255,0.3), transparent 40%),
        radial-gradient(circle at 82% 75%, rgba(255,255,255,0.24), transparent 42%);
    }

    .overlay-dark::after {
      width: 330px;
      height: 330px;
      right: -140px;
      top: -130px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.34);
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
        radial-gradient(circle at 18% 0, rgba(0,124,64,0.15) 0 40px, transparent 41px),
        radial-gradient(circle at 42% 0, rgba(255,46,53,0.12) 0 36px, transparent 37px),
        radial-gradient(circle at 74% 0, rgba(0,124,64,0.12) 0 44px, transparent 45px);
    }

    .section-title {
      text-align: center;
      margin-bottom: 36px;
    }

    .section-title small {
      display: inline-block;
      font-family: 'Jost', sans-serif;
      color: var(--primary);
      text-transform: uppercase;
      letter-spacing: 0.9px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .section-title h2 {
      margin: 0;
      font-family: 'Jost', sans-serif;
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

    .service-card::before,
    .course-card::before,
    .price-card::before,
    .mini-card::before,
    .review-card::before {
      content: "";
      position: absolute;
      width: 86px;
      height: 86px;
      border-radius: 50%;
      right: -30px;
      top: -30px;
      background: radial-gradient(circle, rgba(0,124,64,0.2), rgba(0,124,64,0));
      pointer-events: none;
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
    .review-content { padding: 20px; position: relative; z-index: 2; }

    .service-card h3,
    .course-card h3,
    .price-card h3,
    .mini-card h3 {
      margin: 8px 0;
      font-size: 22px;
      font-family: 'Jost', sans-serif;
    }

    .service-card p,
    .course-card p,
    .price-card p,
    .mini-card p,
    .review-card p { margin: 0; color: var(--muted); }

    .about-wrap {
      display: grid;
      grid-template-columns: 420px 1fr;
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
      font-family: 'Jost', sans-serif;
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
      font-family: 'Jost', sans-serif;
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
      font-family: 'Jost', sans-serif;
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
        url('images/img02.jpg') center/cover;
      color: #fff;
      text-align: center;
      border-radius: 22px;
      padding: 60px 24px;
    }

    .cta-banner h3 {
      margin: 0;
      font-family: 'Jost', sans-serif;
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
      font-family: 'Jost', sans-serif;
      text-transform: uppercase;
      box-shadow: 0 8px 14px rgba(225, 0, 0, 0.28);
      z-index: 3;
    }

    .course-head { position: relative; }

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
        url('images/img03.jpg') center/cover;
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
      background: radial-gradient(circle, rgba(255,255,255,0.18), rgba(255,255,255,0));
    }

    .stats::after {
      width: 220px;
      height: 220px;
      right: -80px;
      bottom: -100px;
      background: radial-gradient(circle, rgba(225,0,0,0.25), rgba(225,0,0,0));
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
      font-family: 'Jost', sans-serif;
      border-radius: 16px;
      border: 1px solid rgba(255,255,255,0.24);
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(4px);
      box-shadow: 0 10px 22px rgba(0, 0, 0, 0.18);
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .stat:hover {
      transform: translateY(-6px);
      background: rgba(255,255,255,0.14);
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
      font-family: 'Jost', sans-serif;
      font-weight: 800;
      font-size: 13px;
      color: #fff;
      background: linear-gradient(130deg, #e10000, #9d0000);
      box-shadow: 0 8px 14px rgba(225, 0, 0, 0.32);
    }

    .step h3 {
      font-family: 'Jost', sans-serif;
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
      font-family: 'Jost', sans-serif;
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
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 26px;
    }

    .footer-grid > div:first-child {
      padding-right: 18px;
    }

    .footer-grid h4 {
      margin: 0 0 10px;
      color: #fff;
      font-family: 'Jost', sans-serif;
      font-size: 22px;
    }

    .footer-grid a {
      color: #dbe9e1;
      text-decoration: none;
      display: block;
      margin: 6px 0;
      transition: color 0.2s ease;
    }

    .footer-grid a:hover {
      color: #ffffff;
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
      .brand img { width: 172px; }
      nav ul { font-size: 13px; }
      nav a { padding: 9px 8px; }
      .cbse-badge { display: none; }
      .header-action .btn { min-width: 138px; }
      .features-list { grid-template-columns: repeat(3, 1fr); }
      .card-grid-3,
      .category-grid,
      .price-grid,
      .news-grid,
      .footer-grid,
      .process-grid,
      .stats-grid,
      .reviews-grid,
      .courses-grid { grid-template-columns: repeat(2, 1fr); }
      .benefits { grid-template-columns: 1fr; }
      .about-wrap { grid-template-columns: 1fr; }
      .about-facts { grid-template-columns: repeat(3, 1fr); }
      .academics-section .news-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (max-width: 760px) {
      .topbar { top: 0; }
      .header-shell {
        grid-template-columns: 1fr auto;
        min-height: 66px;
        padding: 8px 0;
      }
      .header-brand-block {
        padding-left: 0;
      }
      .main-nav { display: none; }
      .header-action { display: flex; gap: 8px; }
      .cbse-badge { display: none; }
      .hero { min-height: 500px; }
      section { padding: 42px 0; }
      .academics-section { padding: 46px 0; }
      .academics-section .course-thumb { aspect-ratio: 16 / 9; }
      .academics-section .course-card h3 { font-size: 18px; }
      .academics-section .news-grid { grid-template-columns: 1fr; }
      .benefits-content { padding: 18px; }
      .benefits-media { min-height: 240px; }
      .footer-grid h4 { font-size: 22px; }
      .footer-bottom { justify-content: center; text-align: center; }
      .footer-grid > div:first-child { padding-right: 0; }
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
      .features-list { grid-template-columns: 1fr; }
      .brand img { width: 152px; }
      .btn { padding: 10px 14px; font-size: 12px; }
      .header-action .btn { min-width: auto; min-height: 40px; font-size: 12px; padding-inline: 12px; }
    }
  </style>
</head>
<body>
  <header class="topbar">
    <div class="container header-shell">
      <div class="header-brand-block">
        <a class="brand" href="#">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </a>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#services">Academics</a></li>
          <li><a href="#about">About School</a></li>
          <li><a href="#categories">Facilities</a></li>
          <li><a href="#news">Circulars</a></li>
          <li><a href="#footer">Contact</a></li>
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
      <div class="hero-slide active" style="background-image:url('images/img04.jpg');"></div>
      <div class="hero-slide" style="background-image:url('images/img05.jpg');"></div>
      <div class="hero-slide" style="background-image:url('images/img06.jpg');"></div>
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

  <div class="features-strip">
    <div class="container features-list">
      <div class="strip-card"><div class="strip-icon">✎</div>Qualified Faculty<span>Experienced mentors</span></div>
      <div class="strip-card"><div class="strip-icon">✦</div>Smart Classrooms<span>Digital learning aids</span></div>
      <div class="strip-card"><div class="strip-icon">☰</div>Library & Labs<span>Hands-on exploration</span></div>
      <div class="strip-card"><div class="strip-icon">⌂</div>Safe Campus<span>Student-first environment</span></div>
      <div class="strip-card"><div class="strip-icon">♫</div>Co-Curriculars<span>Arts, sports, clubs</span></div>
      <div class="strip-card"><div class="strip-icon">✓</div>Value Education<span>Character and discipline</span></div>
    </div>
  </div>

  <section id="services" class="overlay-section overlay-soft-grid">
    <div class="container">
      <div class="section-title">
        <small>School Highlights</small>
        <h2>What We Provide For Every Student</h2>
      </div>
      <div class="card-grid-3">
        <article class="service-card">
          <div class="service-content">
            <div class="icon">🎓</div>
            <h3>Academic Excellence</h3>
            <p>Structured CBSE learning from foundational concepts to board readiness.</p>
          </div>
          <img src="images/img07.jpg" alt="Students">
        </article>
        <article class="service-card">
          <div class="service-content">
            <div class="icon">👨‍🏫</div>
            <h3>Qualified Educators</h3>
            <p>Dedicated teachers focused on concept clarity and holistic growth.</p>
          </div>
          <img src="images/img08.jpg" alt="Classroom">
        </article>
        <article class="service-card">
          <div class="service-content">
            <div class="icon">💡</div>
            <h3>Student Guidance</h3>
            <p>Regular mentoring, counseling, and progress tracking for each learner.</p>
          </div>
          <img src="images/img09.jpg" alt="Advisor">
        </article>
      </div>
    </div>
  </section>

  <section id="about" class="overlay-section overlay-diagonal">
    <div class="container">
      <div class="about-wrap">
        <div class="about-image">
          <img src="images/img10.jpg" onerror="this.onerror=null;this.src='images/img11.jpg';" alt="School Campus">
        </div>
        <div>
          <small style="color:var(--primary);font-family:'Jost';font-weight:700;text-transform:uppercase;">About Us</small>
          <h2 style="margin:8px 0 12px;font-family:'Jost';font-size:40px;line-height:1.08;">Building Character And Academic Excellence Since 2013</h2>
          <p style="color:var(--muted);margin:0;">Jeeva Memorial Public Senior Secondary School (JMPSSS) is a CBSE-affiliated institution in Kancheepuram focused on conceptual learning, discipline, and student confidence.</p>
          <div class="about-list">
            <div class="about-item"><b>CBSE Affiliation</b><span>No. 1930806</span></div>
            <div class="about-item"><b>Grade Range</b><span>Pre-KG to XII</span></div>
            <div class="about-item"><b>Learning Model</b><span>Activity-based and concept-focused</span></div>
            <div class="about-item"><b>Student Support</b><span>Mentoring, guidance, and parent connect</span></div>
          </div>
          <div class="about-facts">
            <div class="about-fact"><b>2013</b><span>Established</span></div>
            <div class="about-fact"><b>100%</b><span>Value-Based Schooling</span></div>
            <div class="about-fact"><b>CBSE</b><span>Senior Secondary</span></div>
          </div>
          <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap;">
            <button class="btn btn-primary">Our Vision</button>
            <button class="btn btn-accent">Admission Enquiry</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="categories" class="overlay-section overlay-rings">
    <div class="container">
      <div class="section-title" style="display:flex;justify-content:space-between;align-items:end;flex-wrap:wrap;text-align:left;gap:12px;">
        <div>
          <small>Campus Facilities</small>
          <h2>Modern Facilities For Holistic Student Growth</h2>
        </div>
        <button class="btn btn-outline">Explore Campus</button>
      </div>
      <div class="category-grid">
        <div class="category"><span class="icon">▣</span><div class="category-text"><b>Smart Classrooms</b><small>Digital boards and AV-enabled teaching</small></div></div>
        <div class="category"><span class="icon">⌘</span><div class="category-text"><b>Science Laboratories</b><small>Practical sessions for Physics, Chemistry & Biology</small></div></div>
        <div class="category"><span class="icon">◉</span><div class="category-text"><b>Computer Lab</b><small>Technology-enabled learning environment</small></div></div>
        <div class="category"><span class="icon">▤</span><div class="category-text"><b>School Library</b><small>Curated reading and reference resources</small></div></div>
        <div class="category"><span class="icon">⚙</span><div class="category-text"><b>Sports Arena</b><small>Outdoor and indoor physical training spaces</small></div></div>
        <div class="category"><span class="icon">⌬</span><div class="category-text"><b>Safe Transport</b><small>Reliable bus routes with supervision</small></div></div>
        <div class="category"><span class="icon">✉</span><div class="category-text"><b>Activity Hall</b><small>Arts, music, events and celebrations</small></div></div>
        <div class="category"><span class="icon">⌁</span><div class="category-text"><b>Counselling Cell</b><small>Academic and personal guidance support</small></div></div>
      </div>
    </div>
  </section>

  <section class="overlay-section overlay-diagonal">
    <div class="container">
      <div class="cta-banner">
        <h3>Admissions Open For <span style="color:#ff8b8b;">Pre-KG To XII</span><br>Enroll For The Upcoming Academic Year</h3>
        <div style="margin-top:18px;display:flex;justify-content:center;gap:10px;flex-wrap:wrap;">
          <button class="btn btn-primary">Apply Now</button>
          <button class="btn btn-outline">Prospectus</button>
        </div>
      </div>
    </div>
  </section>

  <section class="overlay-section overlay-soft-grid academics-section">
    <div class="container">
      <div class="section-title" style="display:flex;justify-content:space-between;align-items:end;flex-wrap:wrap;text-align:left;gap:12px;">
        <div>
          <small>Academics</small>
          <h2>Academic Pathway From Foundational To Senior Secondary</h2>
        </div>
        <button class="btn btn-outline">Academic Overview</button>
      </div>
      <div class="news-grid">
        <article class="course-card">
          <div class="course-head">
            <img class="course-thumb" src="images/img12.jpg" alt="Pre-Primary">
          </div>
          <div class="course-content">
            <h3>Pre-Primary (Pre-KG to UKG)</h3>
            <p>Play-way learning focused on phonics, early numeracy, motor skills, and joyful participation.</p>
          </div>
        </article>
        <article class="course-card">
          <div class="course-head">
            <img class="course-thumb" src="images/img13.jpg" alt="Primary">
          </div>
          <div class="course-content">
            <h3>Primary School (Classes I-V)</h3>
            <p>Strong fundamentals in language, mathematics, EVS, creativity, and value-based habits.</p>
          </div>
        </article>
        <article class="course-card">
          <div class="course-head">
            <img class="course-thumb" src="images/img14.jpg" alt="Middle and Secondary">
          </div>
          <div class="course-content">
            <h3>Classes VI-X</h3>
            <p>Concept-oriented CBSE curriculum with lab work, projects, assessments, and board readiness.</p>
          </div>
        </article>
        <article class="course-card">
          <div class="course-head">
            <img class="course-thumb" src="images/img15.jpg" alt="Senior Secondary">
          </div>
          <div class="course-content">
            <h3>Classes XI-XII</h3>
            <p>Focused stream-based preparation with exam strategy, mentoring, and higher-education guidance.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="overlay-section overlay-rings">
    <div class="container">
      <div class="benefits">
        <div class="benefits-content">
          <div class="section-title benefits-title">
            <small>Why Choose Us</small>
            <h2>A School Experience That Builds Knowledge And Character</h2>
          </div>
          <div class="benefit-grid">
            <div class="mini-card"><div class="mini-content"><h3>Concept-Based Teaching</h3><p>Clear fundamentals through active classroom engagement.</p></div></div>
            <div class="mini-card"><div class="mini-content"><h3>Individual Attention</h3><p>Continuous assessment and tailored mentoring support.</p></div></div>
            <div class="mini-card"><div class="mini-content"><h3>Discipline & Values</h3><p>Life skills and ethics integrated into school routines.</p></div></div>
            <div class="mini-card"><div class="mini-content"><h3>Future Readiness</h3><p>Exposure to technology, communication, and leadership.</p></div></div>
          </div>
        </div>
        <div class="benefits-media">
          <img src="images/img16.jpg" alt="Students">
        </div>
      </div>
    </div>
  </section>

  <section class="stats">
    <div class="container stats-grid">
      <div class="stat">
        <b class="counter" data-target="12" data-suffix="+">0</b>
        <span>Years of Excellence</span>
        <small>Trusted schooling journey since inception.</small>
      </div>
      <div class="stat">
        <b class="counter" data-target="1930806">0</b>
        <span>CBSE Affiliation Code</span>
        <small>Recognized senior secondary curriculum.</small>
      </div>
      <div class="stat">
        <b class="counter" data-target="100" data-suffix="%">0</b>
        <span>Value-Based Learning</span>
        <small>Balanced focus on academics and character.</small>
      </div>
      <div class="stat">
        <b class="counter" data-target="14" data-suffix="+">0</b>
        <span>Core Campus Facilities</span>
        <small>Labs, library, transport, sports and more.</small>
      </div>
    </div>
  </section>

  <section class="process overlay-section">
    <div class="container">
      <div class="section-title">
        <small>Admission Process</small>
        <h2>Simple Steps To Join JMPSSS</h2>
      </div>
      <div class="process-grid">
        <article class="step">
          <span class="step-no">01</span>
          <img src="images/img17.jpg" alt="Step">
          <h3>Enquiry & Campus Visit</h3>
          <p>Connect with the admission office and understand class-wise seat availability.</p>
          <ul>
            <li>Collect admission brochure and form</li>
            <li>Attend parent counselling session</li>
          </ul>
        </article>
        <article class="step">
          <span class="step-no">02</span>
          <img src="images/img18.jpg" alt="Step">
          <h3>Form Submission</h3>
          <p>Submit completed application with mandatory records for verification.</p>
          <ul>
            <li>Birth certificate and transfer certificate</li>
            <li>Previous academic records and ID proof</li>
          </ul>
        </article>
        <article class="step">
          <span class="step-no">03</span>
          <img src="images/img19.jpg" alt="Step">
          <h3>Admission Confirmation</h3>
          <p>After approval, complete fee payment and secure class allotment.</p>
          <ul>
            <li>Receive admission acknowledgement</li>
            <li>Orientation and class commencement details</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <section class="reviews overlay-section overlay-wave">
    <div class="container">
      <div class="section-title" style="display:flex;justify-content:space-between;align-items:end;flex-wrap:wrap;text-align:left;gap:12px;">
        <div>
          <small>Parent Voices</small>
          <h2>What Families Say About JMPSSS</h2>
        </div>
      </div>
      <div class="reviews-grid">
        <article class="review-card"><div class="review-content"><p>"Our child has improved in academics and confidence. The teachers are approachable and very supportive."</p><h3 style="font-family:'Jost';margin:12px 0 0;">Parent Feedback</h3></div></article>
        <article class="review-card"><div class="review-content"><p>"Good discipline, neat campus, and continuous communication with parents. We are happy with the school."</p><h3 style="font-family:'Jost';margin:12px 0 0;">Parent Community</h3></div></article>
      </div>
    </div>
  </section>

  <section class="overlay-section overlay-soft-grid">
    <div class="container">
      <div class="section-title">
        <small>Admission Enquiry</small>
        <h2>Programs Open For Application</h2>
      </div>
      <div class="price-grid">
        <article class="price-card">
          <div class="price-content" style="text-align:center;">
            <h3>Kindergarten</h3>
            <div class="price-tag">Pre-KG<span> to UKG</span></div>
            <p>Foundational literacy, numeracy, and joyful learning programs.</p>
            <div style="margin-top:14px;"><button class="btn btn-primary">Enquire Now</button></div>
          </div>
        </article>
        <article class="price-card" style="border:2px solid var(--accent);">
          <div class="price-content" style="text-align:center;">
            <h3>School Wing</h3>
            <div class="price-tag">I<span> to X</span></div>
            <p>CBSE-aligned academics with labs, activities, and language development.</p>
            <div style="margin-top:14px;"><button class="btn btn-accent">Enquire Now</button></div>
          </div>
        </article>
        <article class="price-card">
          <div class="price-content" style="text-align:center;">
            <h3>Senior Secondary</h3>
            <div class="price-tag">XI<span> to XII</span></div>
            <p>Focused board preparation with stream-specific guidance support.</p>
            <div style="margin-top:14px;"><button class="btn btn-primary">Enquire Now</button></div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="news" class="overlay-section overlay-diagonal">
    <div class="container">
      <div class="section-title" style="display:flex;justify-content:space-between;align-items:end;flex-wrap:wrap;text-align:left;gap:12px;">
        <div>
          <small>School Updates</small>
          <h2>Latest Circulars & Announcements</h2>
        </div>
        <button class="btn btn-outline">View All Updates</button>
      </div>
      <div class="news-grid">
        <article class="course-card"><img class="course-thumb" src="images/img20.jpg" alt="News"><div class="course-content"><h3>Admissions Open For 2026-27</h3><p>Applications are open for eligible classes from Pre-KG to XII.</p></div></article>
        <article class="course-card"><img class="course-thumb" src="images/img21.jpg" alt="News"><div class="course-content"><h3>Parent Orientation Schedule</h3><p>Orientation sessions for newly admitted parents will be announced.</p></div></article>
        <article class="course-card"><img class="course-thumb" src="images/img22.jpg" alt="News"><div class="course-content"><h3>Academic Calendar Notice</h3><p>Term timetable and school circulars are published periodically.</p></div></article>
      </div>
      <div class="newsletter">
        <div>
          <h3 style="margin:0;font-family:'Jost';font-size:30px;">Get Admission Updates</h3>
          <p style="margin:3px 0 0;color:#cfe8d8;">Receive circulars, schedules, and school announcements.</p>
        </div>
        <form>
          <select aria-label="Category">
            <option>Select Class</option>
            <option>Pre-KG to UKG</option>
            <option>I to XII</option>
          </select>
          <input type="email" placeholder="Enter your email" aria-label="Email" />
          <button class="btn btn-accent" type="button">Get Updates</button>
        </form>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width:350px;">
          <p class="footer-brand-text">Jeeva Memorial Public Senior Secondary School, Kancheepuram - committed to nurturing responsible and confident learners with value-based education.</p>
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
          <a class="footer-contact-link" href="#"><span class="ci ci-pin" aria-hidden="true"></span><span>No.210, Palla Egai Village, Puliyur Post, Thirukazhukundram, Kancheepuram - 603109</span></a>
          <a class="footer-contact-link" href="#"><span class="ci">☎</span><span>+91 84899 91553 / +91 97884 25747 / +91 44 27447407</span></a>
          <a class="footer-contact-link" href="#"><span class="ci">✉</span><span>jeevamemorialschool@gmail.com</span></a>
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
    (function () {
      const slides = document.querySelectorAll('.hero-slide');
      const copies = document.querySelectorAll('.hero-copy-item');
      if (!slides.length || !copies.length || slides.length !== copies.length) return;

      let current = 0;
      const total = slides.length;

      function setActive(index) {
        slides[current].classList.remove('active');
        copies[current].classList.remove('active');
        current = index;
        slides[current].classList.add('active');
        copies[current].classList.add('active');
      }

      setInterval(function () {
        setActive((current + 1) % total);
      }, 3000);

      const counters = document.querySelectorAll('.counter');
      if (!counters.length) return;

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

      const observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        });
      }, { threshold: 0.35 });

      counters.forEach(function (counter) {
        observer.observe(counter);
      });
    })();
  </script>
</body>
</html>






