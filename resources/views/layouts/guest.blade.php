<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }} - Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f3f3; /* Updated background color */
            color: #333; /* Updated text color */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333; /* Darker header for contrast */
            color: #f3f3f3;
            padding: 1rem 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #f3f3f3;
            text-decoration: none;
            padding: 0 15px;
            font-weight: 700;
        }
        header a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .footer {
            background-color: #333;
            color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 90%;
            max-width: 600px;
            margin: 2rem;
        }
        .input-wrapper {
            position: relative;
            margin-top: 1rem;
            width: 100%;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            transition: border-color 0.3s;
            background-color: #f3f3f3; /* Input background color */
        }
        .input-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 5px;
            border: 2px solid transparent;
            transition: border-color 0.3s;
        }
        .form-input:focus {
            outline: none;
            border-color: transparent;
        }
        .form-input:focus + .input-wrapper::after {
            border-color: #333; /* Outline color on focus */
        }
        .button-group {
            margin-top: 1.5rem;
            display: flex;
            justify-content: space-between;
        }
        .custom-button {
            text-decoration: none;
            color: #f3f3f3;
            background-color: #333;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
            text-align: center;
        }
        .custom-button:hover {
            background-color: #555; /* Hover color */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                        <a href="{{ route('login') }}"  class="custom-button" >Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"  class="custom-button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <div class="content">
        <div class="form-container">
            <div class="flex justify-center mb-4">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            {{ $slot }}

        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}. Cole Lenting</p>
    </footer>
</body>
</html>
