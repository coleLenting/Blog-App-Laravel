<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Insight Blog') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f3f3;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: #f3f3f3;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #f3f3f3;
            text-decoration: none;
            margin-left: 15px;
        }
        header a:hover {
            color: #ccc;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
        }
        .content h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .content p {
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            max-width: 800px;
            text-align: justify;
        }
        .button-group {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
        }
        .button-group a {
            text-decoration: none;
            color: #f3f3f3;
            background-color: #333;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-weight: 500;
        }
        .button-group a:hover {
            background-color: #444;
        }
        footer {
            background-color: #333;
            color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Insight Blog</h1>
        </div>
        <nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <div class="content">
        <h1>Welcome to Insight</h1>
        <p>Welcome to Insight, the official blog of <b>Cole Lenting</b>, where creativity meets insight. Here, we delve into the latest trends in web design, development, and digital innovation, offering a glimpse behind the scenes of our creative process and providing actionable advice for businesses and individuals alike. Insight isn’t just about showcasing work; it’s about exploring the "why" behind effective design and development choices that make a difference.</p>
        <p>From in-depth articles on minimalist design principles to practical tips on building seamless user experiences, Insight is a resource dedicated to empowering you with knowledge. Whether you’re a budding entrepreneur or a design enthusiast, you’ll find a wealth of content aimed at helping you navigate the digital landscape, optimize your online presence, and stay ahead of the curve.</p>
        <p>Each post reflects our philosophy: that great design is both an art and a science. Follow Insight for the latest updates, ideas, and industry insights, and join us on a journey to elevate your digital vision.</p>
        <div class="button-group">
            <a href="{{ route('login') }}">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Insight Blog. All rights reserved.</p>
    </footer>
</body>
</html>
