<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <h3>Page Blog di Latihan Laravel 11</h3>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="post/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                    {{ $post['title'] }}
                </h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="/post/{{ $post['author'] }}">| {{ $post['publish'] }} </a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 50) }}
                <a href="post/{{ $post['slug'] }}" class="font-medim text-blue-500 hover:underline">Read more</a>
            </p>
        </article>
    @endforeach
</x-layout>
