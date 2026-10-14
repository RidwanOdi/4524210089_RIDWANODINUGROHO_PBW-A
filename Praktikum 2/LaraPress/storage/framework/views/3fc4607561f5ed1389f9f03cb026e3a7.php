<!DOCTYPE html>
<html>
<head>
    <title>LaraPress - Modern Blog</title>

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='22' fill='%237c3aed'/%3E%3Cpath d='M25 25v50h12V55h18l12 20h14L67 51c7-4 11-10 11-19 0-12-9-19-24-19H25zm12 10h16c8 0 13 3 13 9s-5 9-13 9H37V35z' fill='white'/%3E%3C/svg%3E">
</head>
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>LaraPress - Modern Blog</title>

    <!-- LOGO LARAVEL DI TAB BROWSER -->
    <link rel="icon"
          type="image/png"
          href="<?php echo e(asset('images/laravel-favicon.png')); ?>">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #080b16;
            color: #f8fafc;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 20px 8%;

            background: rgba(8, 11, 22, 0.75);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            color: white;
        }

        .logo span {
            color: #8b5cf6;
        }

        nav ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        nav a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 15px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #a78bfa;
        }

        .nav-btn {
            background: #7c3aed;
            color: white !important;
            padding: 10px 18px;
            border-radius: 8px;
        }

        .hero {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 120px 20px 80px;

            background:
                radial-gradient(
                    circle at 50% 30%,
                    rgba(124,58,237,0.25),
                    transparent 45%
                );
        }

        .hero-content {
            max-width: 850px;
        }

        .badge {
            display: inline-block;

            padding: 8px 16px;
            margin-bottom: 25px;

            border: 1px solid rgba(167,139,250,0.3);
            border-radius: 50px;

            color: #c4b5fd;
            background: rgba(124,58,237,0.1);

            font-size: 14px;
        }

        .hero h1 {
            font-size: clamp(45px, 7vw, 80px);
            line-height: 1.05;
            margin-bottom: 25px;
        }

        .gradient {
            background: linear-gradient(
                90deg,
                #a78bfa,
                #c084fc,
                #818cf8
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            max-width: 650px;
            margin: auto;

            color: #94a3b8;
            font-size: 18px;
            line-height: 1.8;
        }

        .hero-buttons {
            margin-top: 35px;

            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn {
            padding: 14px 25px;
            border-radius: 10px;

            text-decoration: none;
            font-weight: bold;

            transition: 0.3s;
        }

        .btn-primary {
            background: #7c3aed;
            color: white;
        }

        .btn-primary:hover {
            background: #6d28d9;
            transform: translateY(-2px);
        }

        .btn-secondary {
            border: 1px solid #334155;
            color: #cbd5e1;
        }

        .btn-secondary:hover {
            background: #111827;
        }

        .stats {
            max-width: 1000px;
            margin: -20px auto 80px;

            display: grid;
            grid-template-columns: repeat(3, 1fr);

            padding: 30px;

            background: rgba(15,23,42,0.8);
            border: 1px solid #1e293b;
            border-radius: 20px;
        }

        .stat {
            text-align: center;
        }

        .stat h2 {
            font-size: 30px;
            color: #a78bfa;
            margin-bottom: 8px;
        }

        .stat p {
            color: #64748b;
        }

        .section {
            max-width: 1100px;
            margin: auto;
            padding: 80px 20px;
        }

        .section-header {
            margin-bottom: 45px;
        }

        .section-header span {
            color: #8b5cf6;
            font-size: 14px;
            font-weight: bold;
        }

        .section-header h2 {
            font-size: 40px;
            margin-top: 10px;
        }

        .section-header p {
            color: #64748b;
            margin-top: 12px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            padding: 30px;

            background: #0f172a;

            border: 1px solid #1e293b;
            border-radius: 18px;

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #7c3aed;
        }

        .card-icon {
            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: rgba(124,58,237,0.15);

            font-size: 22px;

            margin-bottom: 25px;
        }

        .card h3 {
            margin-bottom: 12px;
        }

        .card p {
            color: #64748b;
            line-height: 1.7;
        }

        .read-more {
            display: inline-block;
            margin-top: 20px;

            color: #a78bfa;
            text-decoration: none;
            font-size: 14px;
        }

        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;

            align-items: center;
        }

        .about h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .about p {
            color: #94a3b8;
            line-height: 1.8;
        }

        .about-box {
            padding: 35px;

            background:
                linear-gradient(
                    145deg,
                    #17112e,
                    #0f172a
                );

            border: 1px solid #312e81;
            border-radius: 20px;
        }

        .about-box h3 {
            color: #c4b5fd;
            margin-bottom: 20px;
        }

        .about-box ul {
            list-style: none;
        }

        .about-box li {
            padding: 12px 0;
            color: #cbd5e1;
            border-bottom: 1px solid #1e293b;
        }

        .about-box li:last-child {
            border-bottom: none;
        }

        footer {
            margin-top: 80px;

            padding: 40px 20px;

            text-align: center;

            border-top: 1px solid #1e293b;

            color: #64748b;
        }

        footer strong {
            color: #a78bfa;
        }

        @media (max-width: 800px) {

            nav {
                padding: 18px 5%;
            }

            nav ul {
                gap: 12px;
            }

            nav .nav-btn {
                display: none;
            }

            .stats {
                grid-template-columns: 1fr;
                gap: 25px;
                margin: 0 20px 50px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .about {
                grid-template-columns: 1fr;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

    </style>

</head>

<body>

<nav>

    <div class="logo">
        Lara<span>Press</span>
    </div>

    <ul>

        <li>
            <a href="/">Home</a>
        </li>

        <li>
            <a href="/tentang-kami">Tentang</a>
        </li>

        <li>
            <a href="/contact-kami">Contact</a>
        </li>

        <li>
            <a class="nav-btn" href="/contact-kami">
                Get Started
            </a>
        </li>

    </ul>

</nav>

<section class="hero">

    <div class="hero-content">

        <div class="badge">
            ✦ Laravel 12 Blog Platform
        </div>

        <h1>
            Ideas That <span class="gradient">Inspire.</span>
        </h1>

        <p>
            Selamat datang di LaraPress, tempat untuk berbagi
            ide, pengetahuan, teknologi, dan cerita dalam satu
            platform yang sederhana dan modern.
        </p>

        <div class="hero-buttons">

            <a href="/tentang-kami" class="btn btn-primary">
                Explore LaraPress →
            </a>

            <a href="/contact-kami" class="btn btn-secondary">
                Hubungi Kami
            </a>

        </div>

    </div>

</section>

<section class="stats">

    <div class="stat">
        <h2>100+</h2>
        <p>Artikel</p>
    </div>

    <div class="stat">
        <h2>10K+</h2>
        <p>Pembaca</p>
    </div>

    <div class="stat">
        <h2>24/7</h2>
        <p>Online</p>
    </div>

</section>

<section class="section">

    <div class="section-header">

        <span>EXPLORE</span>

        <h2>Yang Ada di LaraPress</h2>

        <p>
            Platform sederhana untuk belajar dan berbagi.
        </p>

    </div>

    <div class="cards">

        <div class="card">

            <div class="card-icon">🚀</div>

            <h3>Teknologi</h3>

            <p>
                Temukan berbagai informasi mengenai teknologi,
                pemrograman, dan perkembangan dunia digital.
            </p>

            <a href="#" class="read-more">
                Baca selengkapnya →
            </a>

        </div>

        <div class="card">

            <div class="card-icon">💡</div>

            <h3>Inspirasi</h3>

            <p>
                Ide dan cerita yang dapat membantu meningkatkan
                kreativitas serta memberikan perspektif baru.
            </p>

            <a href="#" class="read-more">
                Baca selengkapnya →
            </a>

        </div>

        <div class="card">

            <div class="card-icon">📚</div>

            <h3>Edukasi</h3>

            <p>
                Materi pembelajaran sederhana untuk membantu
                memahami berbagai konsep teknologi.
            </p>

            <a href="#" class="read-more">
                Baca selengkapnya →
            </a>

        </div>

    </div>

</section>

<section class="section">

    <div class="about">

        <div>

            <span style="color:#8b5cf6;font-weight:bold;">
                ABOUT LARAPRESS
            </span>

            <h2>
                Dibuat untuk belajar.
                Dibangun untuk berkembang.
            </h2>

            <p>
                LaraPress merupakan proyek blog sederhana yang
                dikembangkan menggunakan Laravel 12.
            </p>

            <br>

            <p>
                Website ini menjadi tempat untuk mempelajari
                routing, Blade Template, struktur Laravel,
                dan pengembangan antarmuka web modern.
            </p>

        </div>

        <div class="about-box">

            <h3>✨ Teknologi yang digunakan</h3>

            <ul>
                <li>✓ Laravel 12</li>
                <li>✓ PHP</li>
                <li>✓ Blade Template</li>
                <li>✓ HTML & CSS</li>
                <li>✓ Responsive Design</li>
            </ul>

        </div>

    </div>

</section>

<footer>

    <p>
        © 2026 <strong>LaraPress</strong>.
        Built with Laravel 12.
    </p>

</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/welcome.blade.php ENDPATH**/ ?>