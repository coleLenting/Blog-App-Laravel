<x-guest-layout>
    <div class="container bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 custom-form-container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="form-title">{{ __('Login') }}</h2>

        <style>
            .container {
    max-width: 400px;
    margin: auto;
    padding: 2rem;
}

.custom-form-container {
    /* Any additional styles specific to this form */
}

.form-title {
    font-size: 1.875rem;
    font-weight: 600;
    text-align: center;
    color: #333;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1.25rem;
}

.form-label {
    display: block;
    font-size: 0.875rem;
    font-weight: 500;
    color: #333;
    margin-bottom: 0.5rem;
}

.form-input {
    width: 100%;
    padding: 0.75rem;
    border: 0;
    border-bottom: 2px solid #ddd;
    background: #f3f3f3;
    color: #333;
    transition: border-color 0.2s;
}

.form-input:focus {
    border-bottom-color: #2563eb;
    outline: none;
}

.checkbox-label {
    display: flex;
    align-items: center;
}

.checkbox-input {
    accent-color: #2563eb;
}

.form-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1.5rem;
}

.btn-primary {
    background-color: #2563eb;
    color: #fff;
    font-weight: 600;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    transition: background-color 0.2s;
}

.btn-primary:hover {
    background-color: #357ABD;
}

.forgot-password-link {
    font-size: 0.875rem;
    color: #2563eb;
    text-decoration: none;
}

.forgot-password-link:hover {
    text-decoration: underline;
}

.error-message {
    color: #e53e3e;
    font-size: 0.875rem;
    margin-top: 0.5rem;
}

        </style>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Remember Me -->
            <div class="form-group">
                <label for="remember_me" class="checkbox-label">
                    <input id="remember_me" type="checkbox" class="checkbox-input" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Submit Button and Forgot Password Link -->
            <div class="form-footer">
                <button type="submit" class="btn-primary">
                    {{ __('Log in') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
