<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles for Blog -->
    <style>
        /* Universal Styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styling */
        header {
            background-color: #3a3f47;
            color: #ffffff;
            padding: 1.5rem 3rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-weight: 600;
            font-size: 1.75rem;
        }

        /* Main Content Wrapper */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 95%;
            margin: 2rem 0.5rem;
            padding: 0;
            flex: 1;
        }

        /* Main Blog Layout */
        .blog-layout {
            display: grid;
            grid-template-columns: 1.5fr 3.5fr;
            gap: 2.5rem;
            width: 100%;
        }

        /* Blog Content Area */
        .content {
            background-color: #ffffff;
            display: grid;
            grid-template-rows: 2fr 1.5fr;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        .content h2 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .content p {
            margin-top: 1.25rem;
            color: #555;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        .sidebar h3 {
            color: #3a3f47;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }
        .sidebar p {
            color: #666;
            font-size: 0.95rem;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 1.25rem;
        }
        .sidebar ul li {
            margin-bottom: 1rem;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
            font-weight: 500;
        }
        .sidebar ul li a:hover {
            color: #0056b3;
        }

        /* Footer Styling */
        footer {
            background-color: #3a3f47;
            color: #ffffff;
            text-align: center;
            padding: 1.25rem 0;
            font-size: 0.9rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        @include('layouts.navigation')
    </header>
    
    <div class="container">
        <div class="blog-layout">
             <!-- Sidebar -->
            <aside class="sidebar">
                <h3>About This Blog</h3>
                <p>Our blog is a space for sharing knowledge, sparking inspiration, and connecting with our audience. Dive into articles about industry trends, creative insights, and more.</p>
                
                <h3>Recent Posts</h3>
                <ul>
                    <li><a href="#">First Post</a></li>
                    <li><a href="#">Second Post</a></li>
                    <li><a href="#">Third Post</a></li>
                </ul>
            </aside>

            <!-- Main Blog Content -->
            <div class="content">
                <div>
                    {{ $slot }}
                </div>
            </div>
            
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}. Cole Lenting</p>
    </footer>
</body>
</html>