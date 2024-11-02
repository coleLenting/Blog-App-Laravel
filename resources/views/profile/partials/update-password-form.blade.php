<section class="update-password-section">
    <header>
        <h2  style = "color: #fff">{{ __('Update Password') }}</h2>
        <p  style = "color: #fff">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="form">
        @csrf
        @method('put')

        <div class="input-container">
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div class="input-container">
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>

        <div class="input-container">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="button-container">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

<style>
    /* Section Styling */
    header{
        background-color: #333; /* Darker header for contrast */
        color: #f3f3f3;
    }
    .update-password-section {
        padding: 1.5rem;
        background-color: #ffffff;
        border-radius: 0.5rem;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    /* Header Styling */
    .update-password-section header h2 {
        font-size: 1.75rem;
        font-weight: bold;
        color: #333333;
    }

    .update-password-section header p {
        font-size: 1rem;
        color: #666666;
        margin-top: 0.25rem;
    }

    /* Form and Input Container */
    .form {
        margin-top: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

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

    /* Labels */
    .input-container label {
        color: #555555;
        font-weight: 500;
    }

    /* Input Fields */
    .input-container input[type="password"] {
        width: 100%;
        padding: 0.5rem 1rem;
        border: 1px solid #ccc;
        border-radius: 0.375rem;
        font-size: 1rem;
        color: #333;
        background-color: #fff;
        outline: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .input-container input[type="password"]:focus {
        border-color: #555;
        box-shadow: 0 0 0 2px rgba(85, 85, 85, 0.2);
    }

    /* Button Styling */
    .button-container {
        background-color: #f3f3f3;
        padding: 1rem;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .button-container button {
        background-color: #1f9ecf;
        color: #fff;
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        border: none;
        border-radius: 0.375rem;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .button-container button:hover {
        background-color: #187a9b;
    }

    .button-container button:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(31, 158, 207, 0.4);
    }

    /* Status Message */
    .button-container p {
        font-size: 0.875rem;
        color: #28a745;
        font-weight: 500;
        transition: opacity 0.5s ease;
    }
</style>
