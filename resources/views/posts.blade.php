<x-layout :title="$title">
    <main>
        @foreach ($posts as $post)
            <article class="py-8 max-w-md border-b border-gray-300">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline"></a>
                <h2 class="mb-3 text-3xl tracking-tight font-bold text-white">
                    {{ $posts }}
                </h2>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a> | 11 November 2025
                </div>
                <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More</a>
            </article>
        @endforeach
    </main>
    </div>
</x-layout>
