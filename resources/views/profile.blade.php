<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Twitter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div method="post" class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <textarea class="w-full block rounded textarea textarea-bordered @error('body') textarea-error @enderror" rows="3" name="body" placeholder="Post Something">{{ old('body') }}
                        </textarea>
                        @error('body')
                            <span class="text-error">{{ $massage }}
                        @enderror
                        <div class="mt-4">
                            <x-primary-button type="submit" class="btn-outline btn-info shadow-lg">POST</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
