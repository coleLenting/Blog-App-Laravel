<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <style>
        .btn-style {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            color: #ffffff;
            background-color: #1d4ed8;
            border-radius: 0.375rem;
            text-align: center;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-style:hover {
            background-color: #2563eb;
            transform: translateY(-2px);
        }
        .form-input, .form-textarea {
            border: 1px solid #e5e7eb; /* Light gray */
            background-color: #f9fafb; /* Lighter gray */
            border-radius: 0.375rem;
            padding: 0.5rem 0.75rem;
            transition: border-color 0.3s ease;
            width: 100%;
            margin-bottom: 2.5%;
            
        }
        .form-textarea {
        resize: none;
        padding: 1rem 1.5rem;
        width: 100%;

        }
        .form-input:focus, .form-textarea:focus {
            border-color: #2563eb; /* Blue-600 */
            outline: none;
        }
    </style>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label class="block text-lg font-medium text-gray-700 dark:text-gray-300" for="title">Blog Title</label>
                            <input class="form-input mt-2 block w-full" id="title" name="title" type="text" value="{{ $post->title }}" required>
                        </div>
                        <div class="mb-6">
                            <label class="block text-lg font-medium text-gray-700 dark:text-gray-300" for="body">Blog Body Text</label>
                            <textarea class="form-textarea mt-2 block w-full" id="body" name="body" rows="5" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn-style">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
