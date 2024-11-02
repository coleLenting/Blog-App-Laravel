<section>
    <header>
        <h2 style = "color: #fff">{{ __('Profile Information') }}</h2>
        <p style = "color: #fff"> {{ __("Update your account's profile information and email address.") }}</p>
    </header>

    <style>
        /* General Section Styling */
section {
    padding: 1.5rem;
    background-color: #ffffff;
    border-radius: 0.5rem;
    max-width: 48rem;
    margin: 0 auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}

/* Header Styling */
header h2 {
    font-size: 1.75rem;
    font-weight: bold;
    color: #f3f3f3;
}

header p {
    font-size: 1rem;
    color: #fff;
    margin-top: 0.25rem;
}

/* Input Field Containers */
.input-container {
    background-color: #f3f3f3;
    padding: 1rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.input-container:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

/* Input Labels */
label {
    color: #555555;
    font-weight: 500;
}

/* Input Fields */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 0.5rem 1rem;
    border: 1px solid #cccccc;
    border-radius: 0.375rem;
    font-size: 1rem;
    color: #333333;
    background-color: #ffffff;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #555555;
    box-shadow: 0 0 0 2px rgba(85, 85, 85, 0.2);
}

/* Button Styling */
button {
    background-color: #1f9ecf;
    color: #ffffff;
    padding: 0.5rem 1.5rem;
    font-size: 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

button:hover {
    background-color: #187a9b;
}

button:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(31, 158, 207, 0.4);
}

/* Status Message */
.status-message {
    font-size: 0.875rem;
    color: #28a745;
    font-weight: 500;
    transition: opacity 0.5s ease;
}

    </style>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div class="input-container">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="input-container">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline">{{ __('Click here to re-send the verification email.') }}</button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="status-message">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="input-container flex items-center gap-4">
            <button>{{ __('Save') }}</button>
            @if (session('status') === 'profile-updated')
                <p class="status-message">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
