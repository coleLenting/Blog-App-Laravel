<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Dashboard Container -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Greeting Message -->
                    <h3 class="font-semibold text-lg mb-4">{{ __("Welcome to Insight Blog") }}</h3>
                    <p>Explore our latest insights, ideas, and updates. At Insight, we’re dedicated to sharing content that inspires and informs our readers.</p>
                    <br><br>
                    
                    <!-- Create New Post Button -->
                    <a href="{{ route('posts.create') }}" 
                        class="btn-style mb-4 inline-block">
                            Post a New Blog
                    </a>

                    <br><br><hr><br>
                    

                    <style>
                        header{
                            background-color: #333; /* Darker header for contrast */
                            color: #f3f3f3;
                        }

                        .btn-style {
                            display: inline-block;
                            padding: 0.5rem 1rem;
                            color: #ffffff;
                            background-color: #1d4ed8; /* Blue-500 */
                            border-radius: 0.375rem;
                            text-align: center;
                            text-decoration: none;
                            transition: background-color 0.3s ease;
                        }

                        .btn-style:hover {
                            background-color: #2563eb; /* Blue-600 */
                        }

                        .btn-style-inverted {
                            display: inline-block;
                            padding: 0.5rem 1rem;
                            color: #ffffff;
                            background-color: #da9c14; /* Inverted Blue-500 */
                            border-radius: 0.375rem;
                            text-align: center;
                            text-decoration: none;
                            transition: background-color 0.3s ease;
                        }

                        
                        .btn-style-inverted:hover {
                            background-color: #d49e28; /* Inverted Blue-600 */
                        }

                        .btn-style-inverted-2{
                            display: inline-block;
                            padding: 0.5rem 1rem;
                            color: #333;
                            background-color: #fff; /* Inverted Blue-500 */
                            border-radius:  0.375rem;
                            border: solid #da9c14;
                            text-align: center;
                            text-decoration: none;
                            transition: background-color 0.3s ease;
                        }

                        
                        .btn-style-inverted-2:hover{
                            background-color: #d49e28; /* Blue-600 */
                        }
                    </style>
                    
                    <!-- Display Posts -->
                    @if (!empty($posts) && $posts->count() > 0)
                        <ul class="list-disc pl-6 space-y-4">
                            @foreach ($posts as $post)
                                <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                                    <!-- Post Title and Author -->
                                    <h4 class="font-semibold text-md mb-2">
                                        {{ $post->title }} <span class="text-sm text-gray-500 dark:text-gray-400">by {{ $post->user->name }}</span>
                                    </h4>
                                    
                                    <!-- Post Body -->
                                    <p class="mb-4">{{ $post->body }}</p>
                                    
                                    <!-- Action Buttons -->
                                        <div class="space-x-2" style = "display: flex; gap: 2.5%;">
                                            <!-- Edit Button -->
                                            <a href="{{ route('posts.edit', $post) }}" 
                                            class="btn-style-inverted-2">
                                                Edit
                                            </a>
                                            
                                            <!-- Delete Form -->
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn-style-inverted">
                                                    Delete
                                                </button>
                                                
                                            </form>
                            
                                        </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <!-- No Posts Message -->
                        <p class="text-gray-500 dark:text-gray-400">No posts available.</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>