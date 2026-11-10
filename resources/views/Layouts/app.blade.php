
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <title>@yield('title') | My Website Saya</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f1f5fb;
            color: #26384f;
            line-height: 1.7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(120deg, #102b4e, #245a94);
            color: yellow;
            padding: 22px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .brand h1 {
            font-size: 26px;
            
        }

        .brand p {
            color: #dae6df;
            font-size: 14px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 9px 16px;
            border-radius: 25px;
            transition: .25s;
        }

        nav a:hover,
        nav a.active {
            background: #2675f8;
        }

        .hero {
            background: linear-gradient(120deg, #102b4e, #2675c9);
            color: blue;
            padding: 65px 8%;
        }

        .hero h2 {
            font-size: clamp(30px, 4vw, 46px);
            line-height: 1.2;
            margin-bottom: 18px;
            
        }

        .hero p {
            max-width: 650px;
            color: #e1edff;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            background: #2675f8;
            color: white;
            text-decoration: none;
            padding: 11px 24px;
            border-radius: 25px;
            font-weight: 600;
        }

        .btn:hover {
            background: #1459cf;
        }

        main {
            width: min(1100px, 92%);
            margin: 32px auto;
            padding: 32px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px #18365a12;
            flex: 1;
        }

        main h2 {
            color: #164477;
            margin-bottom: 16px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 20px;
            margin: 30px auto;
            width: min(1100px, 92%);
        }

        .card {
            background: pink;
            border-radius: 15px;
            padding: 23px;
            box-shadow: 0 5px 20px #18365a10;
            transition: transform .25s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #164477;
            text-align: center;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #526780;
            margin-bottom: 15px;
        }

        .card a {
            color: #1769ee;
            text-decoration: none;
            font-weight: 600;
        }

        footer {
            background: #102b4e;
            color: white;
            text-align: center;
            padding: 23px;
            margin-top: auto;
        }

        footer p {
            color: #d4e6ff;
            font-size: 14px;
        }

        
        /* Hero dengan gambar laptop */
        .hero {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 35px;
            padding: 45px;
            border-radius: 14px;
            background: linear-gradient(120deg, #102b4e, #2675c9);
            color: white;
        }

        .hero h2 {
            color: white;
            font-size: clamp(28px, 3vw, 42px);
            line-height: 1.2;
            margin: 15px 0;
        }

        .hero p {
            color: #e1edff;
            margin-bottom: 22px;
        }

        .eyebrow {
            font-size: 12px;
            letter-spacing: 1.5px;
            font-weight: bold;
            color: #bcd8ff;
        }

        .hero-image img {
            display: block;
            width: 100%;
            height: 270px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 12px 30px #00000035;
        }

        /* Ikon setiap kartu */
        .icon-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 27px;
            margin-bottom: 18px;
            margin-left: auto;       /* Menjamin posisi horizontal otomatis di tengah */
            margin-right: auto;
        }

        .blue {
            background: #2675f8;
        }

        .green {
            background: #22a579;
        }

        .purple {
            background: #8255e9;
        }

        .red {
            background: #db0e75;
        }
        .yellow {
            background: #d0e60a;
        }

        .card a i {
            margin-left: 5px;
        }

        @media (max-width: 850px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 28px;
            }

            .hero-image img {
                height: 240px;
            }
        }

        @media (max-width: 600px) {
            .hero {
                padding: 22px;
            }

            .hero-image img {
                height: 200px;
            }
        }

    </style>
</head>

<body>

    @include('layouts.Header')

    @yield('content')

    @include('layouts.Footer')

</body>
</html>

