<x-app-layout>
    <x-slot name="header" class="bg-blue-800">
        <h2 class="text-xl font-semibold leading-tight text-white bg-blue-800">
            {{ __('Twitter') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div method="post" class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <textarea class="w-full block rounded textarea textarea-bordered" name="body" placeholder="Post Something"></textarea>
                        <div class="mt-4">
                            <x-primary-button type="submit" class="btn-outline btn-info shadow-lg">POST</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="card max-w-7xl h-28 min-h-fit bg-white shadow-xl mx-auto sm:px-6 lg:px-8 my-4 mb-8 rounded">
        <div class="card-body flex-auto items-center py-2">
            <h2 class="card-title">{{ $post->user->name }} - <span class="text-gray-400">{{ 
                $post->created_at->diffForHumans() }}</span></h2>
            <p class="my-2">{{ $post->body }}</p>
            {{-- <span class="text-gray-400">{{ $post->updated_at}}</span> --}}
            <div>
                
            </div>
            <div>
                <a href="delete/{{ $post->id }}">
                    <x-primary-button type="submit" class="shadow-lg">DELETE</x-primary-button>
                </a>
                <a href="edit/{{ $post->id }}">
                    <x-primary-button type="submit" class="shadow-lg">EDIT</x-primary-button>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
