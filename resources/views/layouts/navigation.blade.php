<nav x-data="{ open: false }" class="flex items-center justify-between py-4 px-6 shadow-lg bg-white rounded-lg max-w-7xl mx-auto">
    <style>
        nav {
            background-color: #333;
            padding: 1rem 2rem;
            border-radius: 10px;
            color: #f3f3f3;
        }
        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .logo {
            font-weight: bold;
            font-size: 1.25rem;
            color: #fff;
            
        }

        .logo a{
            text-decoration: none;
            color: #fff;
        }

        .nav-buttons {
            display: flex;
            gap: 0.5rem;
        }
        .nav-buttons button {
            background-color: #f3f3f3;
            color: #333;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav-buttons button:hover {
            background-color: #555;
        }
        .nav-buttons form button {
            background-color: #dc3545;
        }
        .nav-buttons form button:hover {
            background-color: #c82333;
        }
        .user-info {
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            margin-right: 1rem;
        }
    </style>

    <div class="nav-container">
        <!-- Logo Section -->
        <div class="logo">
            <a href="{{ route('dashboard') }}" class="text-gray-800">
                Insight Blog
            </a>
        </div>

        <!-- User and Navigation Buttons -->
        <div class="flex items-center space-x-4">
            <div class="user-info">
                {{ Auth::user()->name }}
            </div>
            <div class="nav-buttons">
                <button onclick="window.location.href='{{ route('dashboard') }}'">
                    {{ __('Dashboard') }}
                </button>
                <button onclick="window.location.href='{{ route('profile.edit') }}'">
                    {{ __('Profile') }}
                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
