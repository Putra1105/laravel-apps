<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Post Detail') }}
        </h2>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="card max-w-7xl h-20 min-h-full bg-white shadow-xl mx-auto sm:px-6 lg:px-8 my-4 rounded">
                    <div class="card-body flex-auto items-center py-2">
                        <h2 class="card-title">{{ $post->user->name }} - <span class="text-gray-400">{{ 
                            $post->created_at->diffForHumans() }}</span></h2>
                        <p class="my-2">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>