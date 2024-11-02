<x-guest-layout>
    <div class="container bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 custom-form-container">
        <h2 class="form-title">{{ __('Register') }}</h2>

        <style>
            .container {
    max-width: 400px;
    margin: auto;
    padding: 2rem;
}

.custom-form-container {
    /* Additional form-specific styling */
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
    border-bottom-color: #2563eb; /* or preferred color */
    outline: none;
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
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <x-input-label for="name" :value="__('Name')" class="form-label"/>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-input"/>
                <x-input-error :messages="$errors->get('name')" class="error-message"/>
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" class="form-label"/>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input"/>
                <x-input-error :messages="$errors->get('email')" class="error-message"/>
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" class="form-label"/>
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="form-input"/>
                <x-input-error :messages="$errors->get('password')" class="error-message"/>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label"/>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="error-message"/>
            </div>

            <!-- Submit Button and Login Link -->
            <div class="form-footer">
                <button type="submit" class="btn-primary">
                    {{ __('Register') }}
                </button>

                <a class="forgot-password-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
