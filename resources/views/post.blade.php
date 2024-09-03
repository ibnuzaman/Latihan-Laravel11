<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a>
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                {{ $post['title'] }}
            </h2>
        </a>
        <div class="text-base text-gray-500">
            <a>{{ $post['author'] }} | {{ $post->created_at->diffForHumans() }} </a>
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}
            <a href="/posts" class="font-medim text-blue-500 hover:underline">Back &laquo;</a>
        </p>
    </article>
</x-layout>
