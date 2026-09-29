<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

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

        body {
            font-family: Arial, sans-serif;
            background: #080b16;
            color: #f8fafc;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 100;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 20px 8%;

            background: rgba(8,11,22,0.9);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid #1e293b;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
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
        }

        nav a:hover {
            color: #a78bfa;
        }

        .container {
            max-width: 1000px;
            margin: 80px auto;
            padding: 20px;
        }

        .badge {
            color: #a78bfa;
            font-weight: bold;
        }

        h1 {
            font-size: 55px;
            margin: 15px 0 25px;
        }

        .intro {
            color: #94a3b8;
            font-size: 18px;
            line-height: 1.8;
            max-width: 750px;
        }

        .content {
            margin-top: 60px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .box {
            padding: 35px;

            background: #0f172a;

            border: 1px solid #1e293b;
            border-radius: 18px;
        }

        .box h2 {
            margin-bottom: 15px;
        }

        .box p {
            color: #64748b;
            line-height: 1.8;
        }

        .tech {
            margin-top: 50px;
        }

        .tech h2 {
            margin-bottom: 25px;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
        }

        .tech-card {
            padding: 25px;

            background: #111827;
            border: 1px solid #1e293b;
            border-radius: 15px;
        }

        .tech-card h3 {
            color: #a78bfa;
            margin-bottom: 10px;
        }

        .tech-card p {
            color: #64748b;
            line-height: 1.6;
        }

        footer {
            margin-top: 100px;
            padding: 40px;
            text-align: center;
            border-top: 1px solid #1e293b;
            color: #64748b;
        }

        @media(max-width:700px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            .content,
            .tech-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 40px;
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

    </ul>

</nav>

<div class="container">

    <span class="badge">
        ABOUT LARAPRESS
    </span>

    <h1>
        Mengenal <span style="color:#8b5cf6;">LaraPress.</span>
    </h1>

    <p class="intro">
        LaraPress adalah proyek blog sederhana berbasis Laravel 12
        yang dibuat untuk mempelajari bagaimana sebuah aplikasi web
        modern dibangun dari dasar.
    </p>

    <div class="content">

        <div class="box">

            <h2>🎯 Tujuan</h2>

            <p>
                LaraPress dibuat sebagai media pembelajaran untuk
                memahami konsep Laravel, routing, Blade Template,
                struktur project, dan pembuatan UI menggunakan HTML
                dan CSS.
            </p>

        </div>

        <div class="box">

            <h2>🚀 Visi</h2>

            <p>
                Mengembangkan project sederhana menjadi sebuah
                platform blog yang lebih lengkap, interaktif,
                dan mudah digunakan.
            </p>

        </div>

    </div>

    <div class="tech">

        <h2>Teknologi</h2>

        <div class="tech-grid">

            <div class="tech-card">
                <h3>Laravel 12</h3>
                <p>
                    Framework PHP yang digunakan sebagai dasar
                    aplikasi.
                </p>
            </div>

            <div class="tech-card">
                <h3>Blade</h3>
                <p>
                    Template engine Laravel untuk membuat
                    halaman website.
                </p>
            </div>

            <div class="tech-card">
                <h3>HTML & CSS</h3>
                <p>
                    Digunakan untuk membangun tampilan dan
                    responsive UI.
                </p>
            </div>

        </div>

    </div>

</div>

<footer>
    © 2026 LaraPress. Built with Laravel 12.
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/about.blade.php ENDPATH**/ ?>