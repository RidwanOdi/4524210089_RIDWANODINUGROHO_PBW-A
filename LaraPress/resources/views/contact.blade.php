<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact - LaraPress</title>

    <!-- LOGO LARAVEL DI TAB BROWSER -->
    <link rel="icon"
          type="image/png"
          href="{{ asset('images/laravel-favicon.png') }}">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #080b16;
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 20px 8%;

            border-bottom: 1px solid #1e293b;

            background: #080b16;
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

        .heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .heading span {
            color: #8b5cf6;
            font-weight: bold;
        }

        .heading h1 {
            font-size: 50px;
            margin: 15px 0;
        }

        .heading p {
            color: #64748b;
            line-height: 1.7;
        }

        .contact {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 25px;
        }

        .info,
        .form {
            padding: 35px;

            background: #0f172a;

            border: 1px solid #1e293b;
            border-radius: 18px;
        }

        .info h2,
        .form h2 {
            margin-bottom: 25px;
        }

        .item {
            padding: 18px 0;
            border-bottom: 1px solid #1e293b;
        }

        .item:last-child {
            border-bottom: none;
        }

        .item h3 {
            color: #a78bfa;
            margin-bottom: 8px;
        }

        .item p {
            color: #64748b;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cbd5e1;
        }

        input,
        textarea {
            width: 100%;

            padding: 14px;

            margin-bottom: 20px;

            background: #080b16;
            color: white;

            border: 1px solid #334155;
            border-radius: 8px;

            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #7c3aed;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;

            padding: 14px;

            border: none;
            border-radius: 8px;

            background: #7c3aed;
            color: white;

            font-weight: bold;
            font-size: 15px;

            cursor: pointer;
        }

        button:hover {
            background: #6d28d9;
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

            .contact {
                grid-template-columns: 1fr;
            }

            .heading h1 {
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

    <div class="heading">

        <span>GET IN TOUCH</span>

        <h1>
            Mari
            <span style="color:#8b5cf6;">
                Terhubung.
            </span>
        </h1>

        <p>
            Ada pertanyaan atau saran?
            Kirimkan pesan kepada kami.
        </p>

    </div>

    <div class="contact">

        <div class="info">

            <h2>Informasi Kontak</h2>

            <div class="item">

                <h3>📧 Email</h3>

                <p>
                    larapress@example.com
                </p>

            </div>

            <div class="item">

                <h3>📞 Telepon</h3>

                <p>
                    0812-3456-7890
                </p>

            </div>

            <div class="item">

                <h3>📍 Lokasi</h3>

                <p>
                    Bogor, Jawa Barat, Indonesia
                </p>

            </div>

        </div>

        <div class="form">

            <h2>Kirim Pesan</h2>

            <form action="#" method="POST">

                @csrf

                <label for="nama">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Nama kamu"
                    required
                >

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="email@example.com"
                    required
                >

                <label for="pesan">
                    Pesan
                </label>

                <textarea
                    id="pesan"
                    name="pesan"
                    rows="6"
                    placeholder="Tulis pesan kamu..."
                    required
                ></textarea>

                <button type="submit">
                    Kirim Pesan →
                </button>

            </form>

        </div>

    </div>

</div>

<footer>

    © 2026 LaraPress.
    Built with Laravel 12.

</footer>

</body>
</html>